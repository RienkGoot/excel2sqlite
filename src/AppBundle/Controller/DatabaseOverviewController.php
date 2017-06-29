<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Driver\Connection;

/**
 * Class DatabaseOverviewController
 * Controller that fetches all data from the database.
 * @package AppBundle\Controller
 */
class DatabaseOverviewController extends Controller
{
    /**
     * @Route("/overview", name="overview")
     * Fetches tablename, tablecolumns and tabledata.
     * @param Connection $conn
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Connection $conn)
    {
        /**
         * Get tablenames from database and put them into
         * an array.
         */
        $sqlTable = "SELECT * FROM sqlite_master";
        $stmt = $conn->prepare($sqlTable);
        $stmt->execute();
        $tableArr = array();
        while ($row = $stmt->fetch()) {
            $tableNames = $row['name'];
            $tableArr[] = array($tableNames);
        }

        /**
         * Count amount of tables and implode into tableArray.
         */
        $tableArray = array();
        for ($i = 0; $i < count($tableArr); $i++) {
            $tableArray[] = implode(',', $tableArr[$i]);
        }

        /**
         * Select all data from database table
         */
        $sqlAll = "SELECT * FROM ('" . implode("','", array_values($tableArray)) . "')";
        $stmt = $conn->prepare($sqlAll);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            $results[] = $row;
        }

        /**
         * Get column names from each table.
         */
        foreach ($tableArr as $tableArray){
            $sqlCol = "PRAGMA table_info('" . implode("','", array_values($tableArray)) . "')";
            $stmt = $conn->prepare($sqlCol);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
                $columnNames[] = $row['name'];
            }
        }

        return $this->render('default/overview.html.twig',[
            'queryResults'=> $results,
            'columnNames'=> $columnNames,
            'tableNames'=> $tableArray,
        ]);
    }

    /**
     * @Route("/overview/query/custom", name="query_custom")
     * Function that creates a custom query by user input.
     * @param Request $request
     * @param Connection $conn
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function queryCustomAction(Request $request, Connection $conn)
    {
        if ($request->getMethod() == Request::METHOD_POST) {

            /**
             * Get form data from request and filter out the bad words.
             * If no bad words found execute query.
             */
            $query = $request->request->get('name');
            $badWords = array("/delete/", "/drop/", "/truncate/");
            if ($query == preg_replace($badWords, "", $query)) {
                $sql = "$query";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
            } else {
                return $this->redirect($request->headers->get('referer'));
            }
        }
        return $this->redirect($request->headers->get('referer'));
    }

    /**
     * @Route("/overview/query/view", name="query_view")
     * Function that creates a new sql view.
     * @param Request $request
     * @param Connection $conn
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function queryViewAction(Request $request, Connection $conn)
    {
        if ($request->getMethod() == Request::METHOD_POST){

            /**
             * Get form data from the request and put variables into the
             * prepared query.
             */
            $view = $request->request->get('view');
            $column = $request->request->get('column');
            $worksheet = $request->request->get('worksheet');

            $sql = "CREATE VIEW $view AS SELECT  $column FROM $worksheet";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }
        return $this->redirect($request->headers->get('referer'));
    }
}

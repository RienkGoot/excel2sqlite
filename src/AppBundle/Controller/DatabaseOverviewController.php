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
        $stmt = $conn->prepare("SELECT * FROM sqlite_master");
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
       /* $stmt = $conn->prepare("SELECT * FROM ('" . implode("','", array_values($tableArray)) . "')");
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            $results[] = $row;
        }*/

       foreach($tableArray as $tableNames){

           $tableheader = false;
           $stmt = $conn->prepare("SELECT * FROM ($tableNames)");
           $stmt->execute();


           echo "<table class='table table-bordered'>";
           while ($row = $stmt->fetch()) {
               if($tableheader == false) {
                   echo '<tr>';
                   foreach($row as $key=>$value) {
                       echo "<th>{$key}</th>";
                   }
                   echo '</tr>';
                   $tableheader = true;
               }
               echo "<tr>";

               foreach($row as $value) {
                   echo "<td>{$value}</td>";

               }
               echo "</tr>";

           }
           echo "</table>";
           echo "</div>";

       }

        return $this->render('default/overview.html.twig', ['items'=> $value]);
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
                $stmt = $conn->prepare($query);
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

            $stmt = $conn->prepare("CREATE VIEW $view AS SELECT  $column FROM $worksheet");
            $stmt->execute();
        }
        return $this->redirect($request->headers->get('referer'));
    }
}

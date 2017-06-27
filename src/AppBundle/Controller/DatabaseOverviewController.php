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
     * @param Request $request
     * @param Connection $conn
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, Connection $conn)
    {
        // Show all and get existing tables
        $sqlTable = "PRAGMA table_info(Blad1);";
        $stmt2 = $conn->prepare($sqlTable );
        $stmt2->execute();
        while ($row = $stmt2->fetch()) {
            $tableNames['name'][1] = $row;



            foreach ($tableNames as $tableName) {
                // Select all data from database table
                $sqlAll = "SELECT * FROM $tableName";
                $stmt = $conn->prepare($sqlAll);
                $stmt->execute();
                while ($row = $stmt->fetch()) {
                    $results[] = $row;
                }

                // Describe table to get column names
                $sqlDesc = "DESCRIBE $tableName";
                $stmt1 = $conn->prepare($sqlDesc);
                $stmt1->execute();
                while ($row = $stmt1->fetch()) {
                    $columnNames[] = $row;
                }
            }
        }

        return $this->render('default/overview.html.twig',[
            'queryResults'=> $results,
            'columnNames'=> $columnNames,
            'tableNames'=> $tableNames,

        ]);
    }

   /**
    * @Route("/overview/delete", name="overview_delete")
    * @param Request $request
    * @param Connection $conn
    * @return \Symfony\Component\HttpFoundation\RedirectResponse
    */
    public function overviewDeleteAction(Request $request, Connection $conn)
    {
        // Remove all session data
        $session = $request->getSession();
        if($session->has('size')) {
            $session->clear();
        }

        // Get existing tables and foreach drop table
        $sqlTable = "SHOW TABLES";
        $stmt = $conn->prepare($sqlTable);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            $tableNames[1] = $row;

            foreach ($tableNames[1] as $tableName) {
                $sql = "DROP TABLE $tableName";
                $stmt1 = $conn->prepare($sql);
                $stmt1->execute();
            }
        }
        return $this->redirectToRoute('homepage');
    }

}

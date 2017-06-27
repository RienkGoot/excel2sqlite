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
     * @param Request $request
     * @param Connection $conn
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, Connection $conn)
    {
        // Show all and get existing tables
        $sqlTable = "SELECT * FROM sqlite_master";
        $stmt2 = $conn->prepare($sqlTable );
        $stmt2->execute();
        while ($row = $stmt2->fetch()) {
            $tableNames = $row['name'];

                // Select all data from database table
                $sqlAll = "SELECT * FROM $tableNames";
                $stmt = $conn->prepare($sqlAll);
                $stmt->execute();
                while ($row = $stmt->fetch()) {
                    $results[] = $row;
                }

                // Describe table to get column names
                $sqlDesc = "PRAGMA table_info($tableNames)";
                $stmt1 = $conn->prepare($sqlDesc);
                $stmt1->execute();
                while ($row = $stmt1->fetch()) {
                    $columnNames[] = $row['name'];

                }
            }

        return $this->render('default/overview.html.twig',[
            'queryResults'=> $results,
            'columnNames'=> $columnNames,
            'tableNames'=> $tableNames,

        ]);
    }
}

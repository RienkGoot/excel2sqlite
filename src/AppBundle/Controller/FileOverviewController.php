<?php

namespace AppBundle\Controller;

use DateTime;
use FilesystemIterator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class FileOverviewController
 * Controller that scans, deletes and can download from directory.
 * @package AppBundle\Controller
 */
class FileOverviewController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * Scans specified directory for any files and outputs filename, filesize and date.
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function overviewScanAction()
    {
        /**
         * Check if file exist and get filesize,
         * filename and date.
         */
        $dir = $this->container->getParameter('upload_dir');
        $file = $this->container->getParameter('database_path');

        if (file_exists($file)) {
            $fileSize = filesize($file);
            $iterator = new FilesystemIterator($dir);
            foreach ($iterator as $fileInfo) {
                if ($fileInfo->isFile()) {
                    $cTime = new DateTime();
                    $cTime->setTimestamp($fileInfo->getCTime());
                    $fileInfo = $fileInfo->getFileName();
                    $fileDate = $cTime->format('d-m-Y H:i');
                }
            }
            return $this->render('default/index.html.twig', ['fileinfo'=> $fileInfo, 'filedate'=> $fileDate, 'filesize'=> $fileSize]);
        }
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/delete", name="sqlite_delete")
     * Removes file from the specified path.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function overviewDeleteAction(Request $request)
    {
        /**
         * If file exists, remove it from the directory and
         * clear all sessions.
         */
        $file = $this->container->getParameter('database_path');

        if (file_exists($file)) {
            unlink($file);
            $session = $request->getSession();
            if($session->has('size')) {
                $session->clear();
            }
        }
        return $this->redirect($request->headers->get('referer'));
    }

    /**
     * @Route("/download", name="sqlite_download")
     * Download file via browser from specified path.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function overviewDownloadAction(Request $request)
    {
        /**
         * If file exist, download specified file from the browser.
         */
        $file = $this->container->getParameter('database_path');

        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        }
        return $this->redirect($request->headers->get('referer'));
    }
}

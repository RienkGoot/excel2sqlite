<?php

namespace AppBundle\Controller;

use DateTime;
use FilesystemIterator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FileOverviewController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $dir = $this->container->getParameter('upload_dir');
        $file = $this->container->getParameter('database_path');
        if (file_exists($file)) {
            $iterator = new FilesystemIterator($dir);
            foreach ($iterator as $fileInfo) {
                if ($fileInfo->isFile()) {
                    $cTime = new DateTime();
                    $cTime->setTimestamp($fileInfo->getCTime());
                    $fileInfo = $fileInfo->getFileName();
                    $fileDate = $cTime->format('d-m-Y H:i');
                }
            }

        return $this->render('default/index.html.twig', ['fileinfo'=> $fileInfo, 'filedate'=> $fileDate ]);
        }
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/delete", name="sqlite_delete")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function overviewDeleteAction(Request $request)
    {
        $file = $this->container->getParameter('database_path');
        if (file_exists($file)) {
            unlink($file);
        }
        return $this->redirect($request->headers->get('referer'));
    }
}

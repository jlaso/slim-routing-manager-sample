<?php

/**
 *
 * Demo controller to illustrate SlimRoutingManager
 *
 * @author Patrick JL Laso <wld1373@gmail.com>
 *
 */

use JLaso\SlimRoutingManager\Controller\Controller;

class BackendController extends Controller
{

    /**
     * @Route('/admin')
     * @Name('admin.index')
     */
    public function indexAction()
    {
        /** @var Slim\Slim $slim */
        $slim = $this->getSlim();

        $slim->response()->body(
            file_get_contents(__DIR__ . '/../header.html') .
            file_get_contents(__DIR__ . '/'.$this->getName().'.html') .
            file_get_contents(__DIR__ . '/../footer.html')
        );
    }


}
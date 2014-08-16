<?php

use Slim\Slim;
use JLaso\SlimRoutingManager\Controller\Controller;

class FrontendController extends Controller
{

    /**
     * @Route('/')
     * @Name('home.index')
     */
    public function indexAction()
    {
        /** @var Slim $slim */
        $slim = $this->getSlim();

        $slim->response()->body(
            file_get_contents(__DIR__ . '/../header.html') .
            file_get_contents(__DIR__ . '/'.$this->getName().'.html') .
            file_get_contents(__DIR__ . '/../footer.html')
        );

    }


}
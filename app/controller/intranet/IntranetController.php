<?php


use JLaso\SlimRoutingManager\Controller\Controller;

class IntranetController extends Controller
{


    /**
     * @Route('/intranet')
     * @Name('intranet.index')
     */
    public function intranetAction()
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
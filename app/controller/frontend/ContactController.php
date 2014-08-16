<?php


use JLaso\SlimRoutingManager\Controller\Controller;

class ContactController extends Controller
{


    /**
     * @Route('/contact-us')
     * @Name('home.contact-us')
     */
    public function contactAction()
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
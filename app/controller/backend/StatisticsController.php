<?php


use JLaso\SlimRoutingManager\Controller\Controller;

class StatisticsController extends Controller
{

    /**
     * @Route('/admin/stats')
     * @Name('admin.stats.index')
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
<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{

    public function home()
    {
        $params = [
            'name' => "Tayeb Souini"
        ];
        return $this->render('home', $params);
        // return Application::$app->router->renderView('home', $params);
    }

    public function about()
    {
        $params = [
            'pagetitle' => "About"
        ];
        return $this->render('about', $params);
        // return Application::$app->router->renderView('home', $params);
    }

    public function khalid()
    {
        return $this->render('khalid');
    }

    public function contact()
    {
        return $this->render('contact');
        // return Application::$app->router->renderView('contact');
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        // echo "<pre>";
        // var_dump($body);
        // echo "</pre>";
        // exit;
        return 'Handling submitted data';
    }
}
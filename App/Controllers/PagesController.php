<?php
namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


class PagesController extends BaseController
{

    public function __construct($container){
        parent::__construct($container);
    }
    /**
     * @param  \Psr\Http\Message\ServerRequestInterface $req
     * @param  \Psr\Http\Message\ResponseInterface $res
     * @param  Array $args
     * @return \Slim\Views\Blade
     */
    public function home(Request $req, Response $res, Array $args){

        return self::view('homepage', ['title'=>'Homepage']);
    }

    /**
     * @param  \Psr\Http\Message\ServerRequestInterface $req
     * @param  \Psr\Http\Message\ResponseInterface $res
     * @param  Array $args
     * @return \Slim\Views\Blade
     */
    public function about(Request $req, Response $res, Array $args){

        return self::view('about', ['title'=>'About Page']);
    }


}

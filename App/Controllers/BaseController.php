<?php

namespace App\Controllers;

use \Interop\Container\ContainerInterface;
use \Psr\Http\Message\ResponseInterface as Response;

/**
 *
 */
class BaseController
{
    /**
     * @var Class
     */
    protected $container;
    /**
     * @var Class
     */
    protected $config;
    /**
     * @var Class
     */
    protected $response;
    /**
    * @var array
    */
    private $log_types = ['debug','info','notice','warning','error','critical','alert','emergency'];

    public function __construct(ContainerInterface $container){
        $this->container = $container;
        $this->config = $container->config;
        $this->response = $this->container->response;
    }
    /**
     * The view template system based on laravels Blade veiw template
     * @param  string $view
     * @param  Array $args
     * @return \Slim\Views\Blade
     */
    protected function view($view, $args = []){
        return $this->container->view->render($this->response, $view, $args);
    }

    /**
     * a simple loggin functionality for the controllers
     * @param $log_message string
     * @param $type string
     */
    protected function log($log_message, $type='debug')
    {
        //-- let check we have the type requested and use
        if(in_array($type, $this->log_types)) {
            $this->container->logger->$type($log_message);
        } else {
            //-- else use a default
            $this->container->logger->info($log_message);
        }
    }
}

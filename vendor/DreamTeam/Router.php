<?php

namespace DreamTeam;

class Router
{
    protected $_params = array();

    protected $_route = array();

    public static function init()
    {
        /**
         * @var $obj Router
         */
        $obj = new self();

        $route = trim($_SERVER['REQUEST_URI'], '/');
        $route = explode('/', $route);

        $router = array();
        for ($i = 0; $i < 3; $i++) {
            $router[$i] = array_shift($route);
        }

        $params = array(
            'get'   => array(),
            'post'  => array()
        );

        $paramName = null;
        for ($i = 0; count($route) > 0; $i++) {
            if ($i % 2 == 0) {
                $paramName = array_shift($route);
                continue;
            } else {
                $params['get'][$paramName] = array_shift($route);
            }
        }

        $params['post'] = $_POST;

        $obj->setParams($params);
        $obj->setRoute($router);

        return $obj;
    }

    public function setParams($params)
    {
        $this->_params = $params;

        return $this;
    }

    public function getParams()
    {
        return array_merge($this->_params['get'], $this->_params['post']);
    }

    public function getParam($paramName)
    {
        $params = $this->getParams();

        return $params[$paramName];
    }

    public function getPost($paramName = '')
    {
        if ('' === $paramName) {
            return $this->_params['post'];
        }

        if (isset($this->_params['post'][$paramName])) {
            return $this->_params['post'][$paramName];
        }

        return false;
    }

    public function setRoute($route)
    {
        $this->_route = $route;

        return $this;
    }

    public function getRoute()
    {
        return $this->_route;
    }

    public function isPost()
    {

    }
}
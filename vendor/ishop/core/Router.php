<?php

namespace ishop;

class Router
{
	protected static $routes = [];
	protected static $route = [];
	
	public static function add($regexp, $route = []){
		self::$routes[$regexp] = $route;
	}

	public static function getRoutes(){
		return self::$routes;
	}

	public static function getRoute(){
		return self::$routes;
	}

	public static function dispatch($url){
		if (self::matchRoute($url)){
			echo 'Ok';
		}
		else{
			echo 'No';
		}
	}

	public static function matchRoute($url){
		return false;
	}
}
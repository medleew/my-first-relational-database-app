<?php

class Route {
	public static $validRoutes = array();
	public static function set($route, $function) {
		self::$validRoutes[] = $route;
		if (strtolower($_GET['url']) == $route) {
			$function->__invoke();
		}
		//print_r(self::$validRoutes);
		//$function->__invoke();
	}
}

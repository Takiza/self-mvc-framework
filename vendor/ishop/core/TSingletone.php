<?php

namespace ishop;

trait TSingletone
{
	
	private static $instance;

	public static function instance(){
		if (self::$instance === NULL){
			self::$instance = new self;
		}
		return self::$instance;
	}
}
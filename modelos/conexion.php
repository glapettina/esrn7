<?php

	class Conexion{

		public static function conectar(){

			$link = new PDO("mysql:host=localhost;dbname=dbesrn7","root","");

			$link -> exec("set names utf8");

			return $link;
		}

	}
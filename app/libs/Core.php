<?php

	/*
		* App Core Class
		* Create URL & Loads core controller
		* URL Format - /controller/action/params
	*/

	class Core
	{
		protected $currentController = 'Users';
		protected $currentAction = 'index';
		protected $params = [];

		public function __construct()
		{
			
			$url = $this->getUrl();
			//var_dump($url);
			
			//Look in controllers for first index
			if(file_exists('../app/controllers/' . ucwords($url[1]) . '.php')){
				//if exist set as controller
				$this->currentController = ucwords($url[1]);
				}
				//unset 0 index
				unset($url[0]);
				unset($url[1]);
				//print_r($url);
				//require the controller
				require_once '../app/controllers/' . $this->currentController . '.php';
				//instantiate a controller class
				$this->currentController = new $this->currentController;
				//var_dump( $this->currentController);
				//echo $url[3];
				//check for second part of url
				if(isset($url[2])){
					//check to see if method exist in controller
					if(method_exists($this->currentController, $url[2])){
						$this->currentAction = $url[2];
						//Unset 1 index
						unset($url[2]);
					}
				}

				//Get params
				$this->params = $url ? array_values($url) : [];

				//Call a callback with array of params

				call_user_func_array([$this->currentController, $this->currentAction], $this->params);
		}
		
		public function getUrl()
			{		
				if(isset($_SERVER['REQUEST_URI'])){
				$url = rtrim($_SERVER['REQUEST_URI'], '/');
				$url = filter_var($url, FILTER_SANITIZE_URL);//format for url
				$url = explode('/', $url);
				return $url;
			} 
		}
		
	}


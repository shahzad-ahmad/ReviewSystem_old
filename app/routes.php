<?php 

class Routes {

	var $routes_new ;
	var $request_method;

	public function Routes($routes, $req_met){
		$this->routes_new = array();
		$this->request_method = $req_met;
		foreach($routes as $route)
		{
			if(trim($route) != '')
				array_push($this->routes_new, $route);
			
		}
	}
	
	public function dispatch(){
		switch ($this->routes_new[0]) {
			case 'login':
				require_once('controllers/' . $this->routes_new[0] . '_controller.php');
				$login_controller = new login_controller();
				//loading Login page
				$login_controller->loadLoginPage();
			default:
				echo "<title>Error page</title>";
				echo "Error page loading...!!!";
				die;
		}
	}
}
<?php
require_once('app/access_control.php');
class Middleware {
	var $acl;
	public function Middleware(){
		$this->acl = new ACL();
	}
	public function isAuthentic(){
		//do some authentication
		$is_Auth = $this->acl->isAllowed();
		if($is_Auth)
			return true;
		else return false;
	}
}
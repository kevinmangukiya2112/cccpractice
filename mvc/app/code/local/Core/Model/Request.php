<?php
class Core_Model_Request{
	protected $_actionName;
	protected $_moduleName;
	protected $_controllerName;
    public function __construct(){
		$uri=$this->getRequestUri();
		$uri=array_filter(explode("/",$uri));
		$this->_moduleName=isset($uri[0])?$uri[0]:"page";
		$this->_controllerName=isset($uri[1])?$uri[1]:"index";
		$this->_actionName=isset($uri[2])?$uri[2]:"index";
        
	}

	public function getParams($key = '') {
		return ($key == '')
			? $_REQUEST
			: (isset($_REQUEST[$key])
				? $_REQUEST[$key]
				: ''
			);
	}

	public function getPostData($key = '') {
		return ($key == '')
			? $_POST
			: (isset($_POST[$key])
				? $_POST[$key]
				: ''
			);
	}

	public function getQueryData($key = '') {
		return ($key == '')
			? $_GET
			: (isset($_GET[$key])
				? $_GET[$key]
				: ''
			);
	}

	public function isPost()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		    return true;
		}
		return false;
	}
	public function getRequestUri(){
		$dir = '/phppractice/mvc/';
		$uri = $_SERVER['REQUEST_URI'];
		$request = str_replace($dir,"",$uri);
		return $request;
	}

	public function getActionName(){
		return $this->_actionName;
	}

	public function getmoduleName(){
		return $this->_moduleName;
	}

	public function getControllerName(){
		return $this->_controllerName;
	}

	public function getFullControllerClass(){
		// Page_Controller_index
		$model = $this->_moduleName;
		$controller = $this->_controllerName;
		return ucfirst($model) .'_Controller_' .ucfirst($controller);

	}




}
?>
<?php
class DashboardController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('backend/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
		Authentication::checkLogin();

		$this->_view->getFullName = $this->_model->getFullName($this->_arrParam);
	}
	
	public function indexAction(){
		$this->_view->setTitle('Dashboard');
		$this->_view->countGroup 	= $this->_model->countItem('group');
		$this->_view->countUser 	= $this->_model->countItem('user');
		$this->_view->countCategory = $this->_model->countItem('category');
		$this->_view->countBook 	= $this->_model->countItem('book');
		$this->_view->countCart 	= $this->_model->countItem('cart');
		$this->_view->countSlider 	= $this->_model->countItem('slider');
		$this->_view->countBlog 	= $this->_model->countItem('blog');
		$this->_view->render('dashboard/index', true);
	}

}
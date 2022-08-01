<?php
class HomeController extends Controller
{
	public function __construct($arrParams)
	{
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('default/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();

		$this->_view->categoriesNavbar 	= $this->_model->listItems('categoryNavbar');
		$this->_view->footer 			= $this->_model->listItems('footer');
	}

	public function indexAction()
	{
		$this->_view->setTitle('Trang chủ | BookStore');
		$this->_view->itemsSpecial 	= $this->_model->listItems('bookSpecial');
		$this->_view->listSpecial 	= $this->_model->listItems('listItemsSpecial');
		$this->_view->listSlider	= $this->_model->listItems('slider');
		$this->_view->render('home/index', true);
	}

	public function ajaxLoadInfoAction()
	{
		$result = $this->_model->infoItem($this->_arrParam, 'ajaxModalView');
		echo json_encode($result);
	}

}
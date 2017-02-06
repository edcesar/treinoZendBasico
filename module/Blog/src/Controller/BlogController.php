<?php
namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BlogController extends AbstractActionController
{

	public function indexAction()
	{
		$categorias = $this->getServiceLocator()->get('categories');
		
		return new ViewModel(['categorias' => $categorias]);
	}
}
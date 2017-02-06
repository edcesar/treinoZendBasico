<?php
namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Blog\Categories;

class BlogController extends AbstractActionController
{

	public function indexAction()
	{
		$categorias = $this->getServiceLocator()->get(Categories::class);
		
		return new ViewModel(['categorias' => $categorias]);
	}
}
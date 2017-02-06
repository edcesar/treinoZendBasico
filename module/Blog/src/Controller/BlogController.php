<?php
namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BlogController extends AbstractActionController
{

	public function indexAction()
	{
		$categorias = [
			'politica',
			'esporte',
			'novidades',
			'tecnologia',
		];
		
		return new ViewModel(['categorias' => $categorias]);
	}
}
<?php
namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Blog\Categories;
use Zend\Db\Sql\Sql;


class BlogController extends AbstractActionController
{

	public function indexAction()
	{
		$categorias = $this->getServiceLocator()->get(Categories::class);
	//	$categorias = $categorias->getCategories()[0]->getName();
		$categorias = $categorias->getCategories();;
		
		$adapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');

		$sql = new Sql($adapter);
		$select = $sql->select()->from('categories');
		$stmt = $sql->prepareStatementForSqlObject($select);
		$result = $stmt->execute();

	//	$categorias = new \Blog\CategoriesFactory();
	//	$categorias = $categorias->createService($this->getServiceLocator());
	
		return new ViewModel(['categorias' => $categorias, 'result' => $result]);
	}
}
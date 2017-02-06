<?php
namespace Blog;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Db\TableGateway\TableGateway;						

class CategoriesFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		/*
		$categories = new \Blog\Categories();
		$categories->addCategory(new \Blog\PhpCategory);
		$categories->addCategory(new \Blog\ZendCategory);
	    */
		
		/*
		$adapter = $serviceLocator->get("Zend\\Db\\Adapter\\Adapter");
		$categoriesTable = new TableGateway('categories', $adapter);
		return $categoriesTable;
		*/

		
		return new TableGateway('categories', $serviceLocator->get('Zend\Db\Adapter\Adapter'));
		
	}

}
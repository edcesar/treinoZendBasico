<?php
namespace Blog;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
						

class CategoriesFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		$categories = new \Blog\Categories();
		$categories->addCategory(new \Blog\PhpCategory);
		$categories->addCategory(new \Blog\ZendCategory);

		return $categories;
	}

}
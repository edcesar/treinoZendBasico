<?php
namespace Blog;

class Categories
{

	private $categories;

	public function __construct()
	{
		$this->categories = [];
	}

	public function addCategory($category)
	{
		$this->categories[] = $category;
	}

	public function getCategories()
	{
		return $this->categories;
	}
}
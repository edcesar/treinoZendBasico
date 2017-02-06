<?php
namespace Blog\Entity;

use Zend\Db\Sql\Sql;

class SqlBuilder
{
	public function createService($adapter)
	{
		//$adapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');

		$sql = new Sql($adapter);
		$select = $sql->select()->from('categories');
		$stmt = $sql->prepareStatementForSqlObject($select);
		$result = $stmt->execute();

		return $result;

	}
}
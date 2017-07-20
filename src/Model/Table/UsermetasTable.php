<?php
namespace App\Model\Table;

//require_once(ROOT .DS. 'vendor' . DS . 'classes' . DS . 'GlobalFunctions.php');

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
use GlobalClass\GlobalFunctions;

class UsermetasTable extends Table
{
	public function insert( $data )
	{
		$conn = ConnectionManager::get('default');
		$GlobalClass = new GlobalFunctions;
		foreach($data['meta_data'] as $key => $value)
		{
			$conn->query('INSERT INTO '.$GlobalClass->tbl_usermeta.' 
				SET meta_id = '.$data['meta_id'] . ', meta_key = "'. 
				$key.'", meta_value = "'.$value. 
			'"');
		}
	}

	function update( $set, $data )
	{
		$query = $this->query();
		
		if( $query->update()->set($set)->where($where)->execute() )
		{
			return true;
		}else{
			return false;
		}
	}

	function single_delete( $data )
	{
		if( $this->delete( $data ) )
		{
			return true;
		}else{
			return false;
		}
	}

	function multiple_delete( $data )
	{

		foreach($data as $id)
		{
			$this->deleteAll(['id' => $id]);
		}
		return true;
	}
}

?>
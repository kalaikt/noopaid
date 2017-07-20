<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

class UserTable extends Table
{
	public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

	function insert( $data )
	{
		if( $this->save( $data ) )
		{
			return true;
		}else{
			return false;
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
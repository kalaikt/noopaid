<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

class ApplicantsTable extends Table
{
	
	public function validationDefault(Validator $validator){
        return $validator
            ->notEmpty('username', 'A username is required')
            ->notEmpty('password', 'A password is required')
            ->notEmpty('role', 'A role is required')
            ->add('role', 'inList', [
                'rule' => ['inList', ['teach', 'learn']],
                'message' => 'Please enter a valid role'
            ]);
    }
	
	
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
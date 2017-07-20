<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

class UsersTable extends Table
{
	public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

	public function validationDefault(Validator $validator)
    {
		$validator
			->notEmpty('fname', 'Please enter your firstname')
			->notEmpty('lname', 'Please enter your lastname')
			->notEmpty('employer', 'Please enter your last employer')
			->notEmpty('email', 'Please enter your email address')
			->add('email', 'validFormat', [
		        'rule' => 'email',
		        'message' => 'E-mail must be valid'
		    ])
			->notEmpty('password', 'Please enter your password')
			->notEmpty('conf_password', 'Please enter your password')
			->add('conf_password', 'custom', [
		        'rule' => function ($value, $context) {
		        	if($context['data']['password'] === $value)
		        	{
		        		return true;
		        	}else{
		        		return false;
		        	}
		        },
		        'message' => 'Password mismatch',
		    ]);
			
		return $validator;
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
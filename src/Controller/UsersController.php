<?php
namespace App\Controller;

require_once(ROOT .DS. 'vendor' . DS . 'classes' . DS . 'GlobalFunctions.php');

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;
use GlobalClass\GlobalFunctions;
use Cake\Mailer\Email;

class UsersController extends AppController{
	
	public function teachoption(){
		$UsersTable = TableRegistry::get('Users');
		
        $users = $UsersTable->newEntity();

        //if ($applicantsTable->save($applicants)) {
        //     // The applicants entity contains the id now
        //     $id = $article->id;
             
             
        $users = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $applicant = $this->Users->patchEntity($users, $this->request->data);
            if ($this->Users->save($users)) {
                $this->Flash->success(__('The application has been saved.'));
                $applicantid = $users->id;
                //$next_url = '/confirmregistration/applicantid/'.$applicantid;
                //return $this->redirect(['action' => $next_url]);
            }
            else $this->Flash->error(__('Unable to add the user.'));
        }
	}
    
    public function login(){
    	
    }
}

?>
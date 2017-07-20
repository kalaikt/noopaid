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

class ApplicantsController extends AppController
{
	var $GlobalClass, $session;
	
	public function signup(){
		$applicantsTable = TableRegistry::get('Applicants');
		
        $applicants = $applicantsTable->newEntity();

        //if ($applicantsTable->save($applicants)) {
        //     // The applicants entity contains the id now
        //     $id = $article->id;
             
             
        $applicant = $this->Applicants->newEntity();
        if ($this->request->is('post')) {
            $applicant = $this->Applicants->patchEntity($applicant, $this->request->data);
            if ($this->Applicants->save($applicant)) {
                $this->Flash->success(__('The application has been saved.'));
                $applicantid = $applicant->id;
                $next_url = '/confirmregistration/applicantid/'.$applicantid;
                return $this->redirect(['action' => $next_url]);
            }
            else $this->Flash->error(__('Unable to add the user.'));
        }
        
        $this->set('user', $user);
	}
	
    public function confirmregistration(){
    	
    	$applicant_id = $this->params['pass'][0];
        $email = new Email('default');
        $email->from(['me@example.com' => 'My Site'])
            ->to('you@example.com')
            ->subject('About')
            ->send('My message');
            
        $this->set('applicant_id', $applicant_id);
    }
    
    public function confirmationalternative(){
    	
    }

	public function initialize()
	{
		parent::initialize();
		$this->GlobalClass = new GlobalFunctions;
		$this->session = $this->request->session();
	}

	public function index()
	{
		$users = "";
		
		// table entities
		$users_entity = $this->GlobalClass->users_entity;
		$user_entity = $this->GlobalClass->user_entity;
		$usermeta_entity = $this->GlobalClass->usermeta_entity;
		$applicant_entity = $this->GlobalClass->applicant_entity;

		// table objects
		$users_tbl_obj = $this->GlobalClass->users_tbl_obj;
		$user_tbl_obj = $this->GlobalClass->user_tbl_obj;
		$usermeta_tbl_obj = $this->GlobalClass->usermeta_tbl_obj;
		$applicant_tbl_obj = $this->GlobalClass->applicant_tbl_obj;

		if($_POST)
		{
			$users = $users_tbl_obj->patchEntity($users_entity, $this->request->data());
			$errors = $users->errors();
			if (!empty($errors)) {
				//prd($errors);
			}else{
				$usermeta = array();
				$fname = $this->request->data('fname');
				$lname = $this->request->data('lname');;
				$email = $this->request->data('email');
				$password = $this->GlobalClass->encrypting($this->request->data('password'));
				$your_employer = $this->request->data('employer');


				$next_id = $this->GlobalClass->last_insert_id($this->GlobalClass->tbl_user);
				
				// insert into "users" table
				/*$users_entity->fname = $fname;
				$users_entity->lname = $lname;
				$users_entity->username = $email;
				$users_entity->employer = $your_employer;
				$users_entity->password = $password;
				$users_entity->status = 0;*/

				// insert into "usermeta" table
				/*$usermeta['meta_id'] = $next_id;
				$usermeta['meta_data'] = array('fname' => $fname, 'lname' => $lname, 'email' => $email, 'password' => $password, 'employer' => $your_employer, 'status' => '0');*/

				// inserting into "user" table
				$user_entity->type = "user";
				$user_entity->role = 1; // user role = 1;admin role = 0;

				// inserting into "Applicant" table
				$applicant_entity->fname = $fname;
				$applicant_entity->lname = $lname;
				$applicant_entity->user_id = $next_id;
				$applicant_entity->username = $email;
				$applicant_entity->employer = $your_employer;
				$applicant_entity->password = $password;
				$applicant_entity->status = 0;

				if($user_tbl_obj->insert($user_entity))
				{
					if($applicant_tbl_obj->insert($applicant_entity))
					{
						/*if($usermeta_tbl_obj->insert($usermeta))
						{
							die('success');
						}*/
						$this->Flash->success('Applicant Has Been Saved!', [
						    'key' => 'success-message'
						]);
					}
					// if applicant is approved to save in users table
					/*if($users_tbl_obj->insert($users_entity))
					{
						
					}*/
				}
			}
		}

		$this->set('signup', $users );
	}
}

?>
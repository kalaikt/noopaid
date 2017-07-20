  <?php 
    use Cake\Routing\Router;
  ?>
  <!-- login content -->
 <section class="midbody midbodybg loginpage">
     <div class="container">
         <div class="formbox clearfix">
            
             <div class="formbdy">
                <?= $this->Flash->render('success-message') ?>
              <h2>Apply To Teach</h2>
              <p>Noobaid is for IT professionals only. Your work email is required for registration as proof that you work there.</p>
               <?=   $this->Form->create($signup, ['url' => ['controller' => 'signup'], "novali","id" => "signup-page"]);?>
              <div class="clearfix">
                    <div class="row">
                         <div class="form-group col-sm-6">
                             <?php
                                echo $this->Form->input('fname', 
                                    ['type' => 'text',
                                    'class' => 'form-control', 
                                    'label' => false,
                                    'id'    => 'fname',
                                   // 'error' => 'Please enter your firstname',
                                    'placeholder' => "First Name"
                                ]);
                            ?>
                         </div>
                          <div class="form-group col-sm-6">
                             <?php
                                echo $this->Form->input('lname', 
                                    ['type' => 'text',
                                    'class' => 'form-control', 
                                    'label' => false,
                                    'id'    => 'lname',
                                   // 'error' => 'Please enter your lastname',
                                    'placeholder' => "Last Name"
                                ]);
                            ?>
                         </div>
                    </div>
                </div>  
                  <div class="form-group">
                        <?php
                            echo $this->Form->input('employer', 
                                ['type' => 'text',
                                'class' => 'form-control', 
                                'label' => false,
                                'id'    => 'employer',
                               // 'error' => 'Please enter your employer',
                                'placeholder' => "Your Employer"
                            ]);
                        ?>
                 </div>
                 <div class="form-group">
                    <?php
                        echo $this->Form->input('email', 
                            ['type' => 'text',
                            'class' => 'form-control', 
                            'label' => false,
                            'id'    => 'email',
                           // 'error' => 'Please enter a valid email address',
                            'placeholder' => "Email"
                        ]);
                    ?>
                 </div>
                 <div class="form-group">
                     <?php
                        echo $this->Form->input('password', 
                            ['type' => 'password',
                            'class' => 'form-control', 
                            'label' => false,
                            'id'    => 'password',
                            //'error' => 'Please enter your password',
                            'placeholder' => "Password"
                        ]);
                    ?>
                 </div>
                 <div class="form-group">
                    <?php
                        echo $this->Form->input('conf_password', 
                            ['type' => 'password',
                            'class' => 'form-control', 
                            'label' => false,
                            'id'    => 'conf_password',
                            //'error' => 'Please enter your password',
                            'placeholder' => "Confirm Password"
                        ]);
                    ?>
                </div>
                 <div class="form-group">
                     <?= $this->Form->button('Sign me up!', ['type' => 'submit', 'class' => 'btn']);?>
                 </div>
                </form> 
                 <div class="rememberme">
                 	<input checked="checked" id="user_session_remember_me" name="user_session[remember_me]" type="checkbox" value="1">
                 	<label class="" for="user_session_remember_me">Remember me</label>
                 </div>
                 <div class="text-strikethru">
					<div class="line"></div>
					<div class="text">or</div>
				</div>
				<div class="mb1">
					<a href="#" class="btn linkedinbtn"><i class="fa fa-linkedin"></i> Log in with linkedin</a>
				</div>
				
             </div>
             <div class="formbox-bottom text-center">
					Have An Account ? <a href="<?= Router::url(['controller' => 'Login', 'action' => 'index'])?>">Sign In</a>
				</div>
         </div>
     </div>
 </section>
 <!-- end of login content -->
 <!-- Adding footer for signup page -->
    <?= $this->element('footer/SignUpFooter');?>

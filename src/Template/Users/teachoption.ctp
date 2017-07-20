 <!-- profile content -->
 <section class="midbody midbodybg profilebox">
     <div class="container">
            <div class="formbox">
                <div class="formbody">
                    <h5>What would you like to teach?</h5>
                    <div>Retain your knowledge & get paid when you teach. </div>
                    <?=   $this->Form->create("Teachoptions");?>
                    <div class="teachoption clearfix">
                        <div class="form-group">
                            <select class="form-control">
                                <option selected="selected">Select Category</option>
                                <option>Programming</option>
                                <option>Database</option>
                                <option>Systems Administration</option>
                                <option>Networking</option>
                                <option>Graphics Design</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option selected="selected">Select Subcategory</option>
                                <option>Oracle</option>
                                <option>Mysql</option>
                                <option>Access</option>
                                <option>SQLServer</option>
                            </select>
                        </div>
                        
                         <div class="form-group">
                            <button class="btn">Yes, I want to teach this</button>
                        </div>
                    </div>
                    </form> 
                   
                </div>
                
                <div class="formbody">
                    <?=   $this->Form->create("References");?>
                    <div class="teachoption clearfix">
                        <div>Please provide 2 professional references, past or present, that can verify your familiarity with [oracle] [database] [why] </div>
                    <div class="row">
                         <div>
                             <div class="row">
                                 <div class="form-group col-sm-6">
                                     <input type="text" placeholder="First Name" class="form-control" required>
                                 </div>
                                 <div class="form-group col-sm-6">
                                     <input type="text" placeholder="Last Name" class="form-control" required>
                                 </div>
                             </div>
                         </div>  
                         <div class="form-group">
                               <input type="text" placeholder="Email" class="form-control" required>
                         </div>
                        <div>&nbsp;</div>
                         <div>
                             <div class="row">
                                 <div class="form-group col-sm-6">
                                     <input type="text" placeholder="First Name" class="form-control" required>
                                 </div>
                                 <div class="form-group col-sm-6">
                                     <input type="text" placeholder="Last Name" class="form-control" required>
                                 </div>
                             </div>
                         </div>  
                         <div class="form-group">
                               <input type="text" placeholder="Email" class="form-control" required>
                         </div>
                         <div class="form-group">
                            <button class="btn">Submit</button>
                        </div>
                    </div>
                    </form> 
                   
                </div>
                
                
            </div>
         </div>
     
 </section>
 <!-- end of prfile content -->
 
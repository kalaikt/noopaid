 <!-- profile content -->
 <section class="midbody midbodybg profilebox">
     <div class="container">
            <div class="formbox">
                <div class="profileimage"></div>
                <div class="formbody">
                    <div class="upload clearfix">
                        <div class="col-xs-9">
                            <div class="row form-group"> 
                                <input type="text" placeholder="Upload your profile picture" class="form-control uploadinput" readonly="" />
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="row form-group">
                                <button type="button" class=" uploadbtn">Upload</button>
                            </div>
                        </div>
                        <input type="file" id="fileinput" placeholder="Upload your profile picture" class="form-control" />
                    </div>
                    <div class="text-strikethru">
                    <div class="line"></div>
                    <div class="text">or</div>
                </div>
                    <div class="mb1">
                        <a href="#" class="btn linkedinbtn"><i class="fa fa-linkedin"></i> Log in with linkedin</a>
                    </div>
                </div>
            </div>
         </div>
     </div>
 </section>
 <!-- end of prfile content -->
<script>
    
    $(document).ready(function(){
        $('.uploadinput, .uploadbtn').click(function(){
            $('#fileinput').trigger('click');
            
        });

        $('#fileinput').on('change', function(){
            var filetxt= $(this).val();
            
            $('.uploadinput').val(filetxt);
        });
    });

</script>
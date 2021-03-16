<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?php echo SITE_TITLE;?> | Administrator Login</title>
  
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/css/app.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/css/pages/login-register.css">
    <!-- END Page Level CSS-->
    <!-- END Custom CSS-->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>  
    <script src="<?php echo base_url();?>assets/js/additional-methods.min.js"></script>
    <style type="text/css">
        label.error {
    color: red;
}
    </style>
  </head>
  <body class="vertical-layout vertical-menu 1-column  bg-cyan bg-lighten-2 menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="1-column">

   
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
<section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <a href="<?php echo base_url();?>"><img style="height: 46px;" src="<?php echo base_url();?>assets/dummylogo.jpg" alt="logo"></a>
                        <!--  <center><div style="width: 350px;color:text-align: center;"><?php echo $this->session->flashdata('msg'); ?></div></center> -->
                    </div>
                    <h5 class="card-subtitle line-on-side text-muted text-center pt-2"><span><b> Login</b></span></h5>
                </div>
                <div class="card-content">
                   
                  
                    <div class="card-body pt-0">
                        <form class="form-horizontal" id="login_form" action="<?php echo base_url();?>" method="post">
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="email" class="form-control input-lg"  placeholder="Enter Email Address" name="email" required="">
                                <div class="form-control-position">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" name="password"  class="form-control input-lg" id="user-password" placeholder="Enter Password" required="">
                                <div class="form-control-position">
                                    <i class="fa fa-key"></i>
                                </div>
                            </fieldset>
                            <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
                        </form>
                    </div>
                    <div class="card-body pb-0">
					<p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; <?php echo date('Y');?> <a class="text-bold-800 grey darken-2" href="<?php echo base_url();?>"><?php echo SITE_TITLE;?></a>, All rights reserved. </span></p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        </div>
      </div>
    </div>

    <script>

        var value = $("#pass_login").val();

$.validator.addMethod("checklower", function(value) {
  return /[a-z]/.test(value);
}, "Need atleast 1 lowercase alphabet");
$.validator.addMethod("checkupper", function(value) {
  return /[A-Z]/.test(value);
}, "Need atleast 1 uppercase alphabet");
$.validator.addMethod("checkdigit", function(value) {
  return /[0-9]/.test(value);
}, "Need atleast 1 digit");
$.validator.addMethod("pwcheck", function(value) {
   // return /^[A-Za-z0-9\d\W=!\-@._*]*$/.test(value) && /[a-z]/.test(value) && /\d/.test(value)  && /\W/.test(value) && /[A-Z]/.test(value);
  return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) && /[a-z]/.test(value) && /\d/.test(value) && /[A-Z]/.test(value);
},"Password must be a combination of Numbers,Special Characters, Uppercase & Lowercase Letters.");

   if ($("#login_form").length > 0) {
       
    $("#login_form").validate({
      
    rules: {
    
        email: {
                required: true,
                maxlength: 50,
                email: true,
            },
         password: {
                required: true,
             minlength: 8,
             maxlength: 30,
             pwcheck: true,
             checklower: true,
                checkupper: true,
             checkdigit: true
        },
    },
    messages: {

      email_login: {
          required: "Please enter email",
          email: "Please enter valid email",
          maxlength: "The email name should less than or equal to 50 characters",
        }
    },
   
    
   //  submitHandler: function(form) {
   //    $.ajax({
   //      url: "<?php echo base_url('super-admin/add-news-post') ?>",
   //      type: "POST",
   //      data: $('#add_category').serialize(),
   //      dataType: "json",
   //      success: function( response ) {
   //          console.log(response);
            // if(response.error)
            // {
            //  toastr.error(response.error, 'Faild!', {"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 3000});
                
            // }
            // else if(response.success)
            // {
            //  window.location.replace(response.success);
            // }

   //      }
   //    });
   //  }

  })
}

</script>
   

    <script src="<?php echo base_url();?>assets/backend/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url();?>assets/backend/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="<?php echo base_url();?>assets/backend/js/core/app-menu.js"></script>
    <script src="<?php echo base_url();?>assets/backend/js/core/app.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo base_url();?>assets/backend/js/scripts/forms/form-login-register.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
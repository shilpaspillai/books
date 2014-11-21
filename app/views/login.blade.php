
<!doctype html>
<html>
 <head>
  <link href="<?php echo URL::to('resources/css/bootstrap.min.css'); ?>" rel="stylesheet">
             <link href="<?php echo URL::to('resources/css/bootstrap-theme.min.css'); ?>" rel="stylesheet">
            <link href="<?php echo URL::to('resources/style.css'); ?>" rel="stylesheet">
            <script src="<?php echo URL::to('resources/jquery.min.js');?>"></script> 
            <script src="<?php echo URL::to('resources/js/bootstrap.min.js'); ?>"></script>  
            <script src="<?php echo URL::to('resources/newjavascript.js');?>"></script> 

</head>
<body>
 {{ Form::open(array('name'=>'loginpage','route'=>'login_processLogin','novalidate'=>'')) }}
 <div class="form-group">
        {{Form::label('email','Email')}}
        {{Form::email("email",Input::old('email',''),array('class'=>'form-control','id'=>'email'))}}
        <span id="alert_email_error" class="label label-danger" style="display:none; background-color: red;"> </span>
 </div>
  <div class="form-group">
        {{Form::label('Password','Password')}}
        {{Form::password('password',array('class'=>'form-control','id'=>'password'))}}
        <span id="alert_password_error" class="label label-danger" style="display:none; background-color: red;"></span>
  </div>
 {{Form::button("Log In",array('class'=>'btn btn-success','type'=>'submit'))}}
   {{ Form::Close()}}
  
</body>
</html>



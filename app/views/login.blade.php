<!doctype html>
<head>
</head>
<body>
 {{ Form::open(array('name'=>'loginpage','route'=>'login_processLogin','novalidate'=>'')) }}
        {{Form::label('email','Email')}}
        {{Form::email("email",Input::old('email',''),array('class'=>'form-control','id'=>'email'))}}
        <span id="alert_email_error" class="label label-danger" style="display:none; background-color: red;"> </span>
 
        {{Form::label('Password','Password')}}
        {{Form::password('password',array('class'=>'form-control','id'=>'password'))}}
        <span id="alert_password_error" class="label label-danger" style="display:none; background-color: red;"></span>
        {{Form::button("Log In",array('class'=>'btn btn-success','type'=>'submit'))}}
   {{ Form::Close()}}
  
</body>
</html>



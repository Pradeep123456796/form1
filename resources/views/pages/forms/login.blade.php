<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css"   href="{{ asset('assets/css/dist/css/style.css') }}">    
</head>    
<body>    
    <h2>Login Page</h2><br>    
    <div class="login">    
     <form  method="POST" action="login">
        
                 @csrf   
        <label><b>Enter Email Name     
        </b>    
        </label>    
        <input type="email" name="email" id="Uname" placeholder="Enter email">
        <br><br>    
        <label><b>Enter Password     
        </b>    
        </label>    
        <input type="Password" name="password" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="submit"  class="grabbing"  name="log" id="log" value="Log In Here">       
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>  <span><a href="regration">Regrastier</a></span>  
           
    </form>     
</div>    
</body>    
</html>  
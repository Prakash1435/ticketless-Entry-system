<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Forget page</title>
    <link rel="icon" href="images/my logo.jpg">
    <link rel="stylesheet" href="css/forgetstyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Forget Password</div>
    <div class="content">
      <form action="forgetpass.php" method="post" onsubmit ="return FormValidate()">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter register email" required>
          </div>
          <div class="input-box">
          <span class="details">Phone Number</span>
            <input type="tel" name="phone" id='phone' placeholder="Enter your number" required>
            <span id= "messageforphone" style="color:red"> </span> <br><br>
          </div>
          <div class="input-box">
            <span class="details">New Password</span>
            <input type="password" name="password" id='pswd' placeholder="password" required> 
            <span id = "message" style="color:red"> </span> <br><br>  
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="password" id='pswd1' placeholder="Confirm password" required>  
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Login">
        </div>
        <script>
function FormValidate() {  
  var phone = document.getElementById("phone").value;
  var pw = document.getElementById("pswd").value;  
  var pw1 =document.getElementById("pswd1").value; 
  //check password and confirm password are same or not  
  if(phone.length != 10){
      document.getElementById("messageforphone").innerHTML ="Please enter the valid registered Phone number.";
              return false;
            }
  if(pw1!=pw){
    alert("Password and Confirm Password are not same"); 
     return false;  
  }
  else{
    //check empty password field
  if(pw == "") {  
     document.getElementById("message").innerHTML = "**Fill the password please!";  
     return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
     return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
     return false;  
  } 
}
}
</script>   
      </form>
    </div>
  </div>
</body>
</html>

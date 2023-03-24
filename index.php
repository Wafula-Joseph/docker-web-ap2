<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="stylesheet.css">
    
</head>
<body>
<h1>Azubi Docker Form</h1>
    <form action="admin.php" method="post">
        <div class="imgcontainer">
          <img src="avatar2.png" alt="Avatar" class="avatar">
        </div>
      
        <div class="container">
          <label for="uname"><b>Username</b><b></b></label>
          <input type="text" placeholder="Enter Username" name="uname" required><br></b>
      
          <label for="psw"><b>Password</b><b></b></label>
          <input type="password" placeholder="Enter Password" name="psw" required><br><br><br>
      
          <button type="submit">Login</button>
          <button type="button" class="cancelbtn">Cancel</button><br>
        
       
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          
            
         
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form> 
</body>
</html>

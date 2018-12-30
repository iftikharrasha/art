<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
      <link rel="stylesheet" type="text/css" href="style1.css">

    <style>
       body{ background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.3)),url(pages/subp/exploremore.jpg);
       height: 100vh;
       background-size: cover;
       background-position: center;
       font-family: sans-serif;
       margin: 0;
       padding: 0;
     }

    </style>

  </head>
  <body>
  	<form action="login.php" method="POST">
    <div class="loginbox">
      <img src="pages/subp/avatar.png" class="avatar">
         <h1>Log in!</h1>
           <form>
		   
             <p>Username</p>
             <input type="text" name="" placeholder="Enter Username">
             <p>Password</p>
             <input type="password" name="" placeholder="Enter Password">
             <input type="submit" name="" value="Sign in">
             
             <a href="membership.php">Don't have an account?</a>

           </form>

    </div>

    <header>
      <div>
        
      <a href="index.php"><button style="color:red; border-radius:2px;">Home</button></a>
      </div>
    </header>

  </body>
</html>

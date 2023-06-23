<?php
require_once "data.php";
$all_errors = [];
$flag = 0;
if(isset($_POST['username'])){
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


// foreach ($users as $user) {
//     if ($user['name'] == $username && $user['password'] == $password) {
//         $flag = 1;
//     }
// }



if(! empty($username)) {
        if(strlen($username) > 8) {
            if(preg_match('/senior$/', $username)) {
                $flag++ ;
            } else {
                $all_errors['usernameRegx'] = 'End username with senior';
            }
        } else {
            $all_errors['usernamelen'] = 'Username must be> 8';
        }
    } else {
        $all_errors['usernamef'] = 'Enter username';
    }

    if(! empty($password)) {
        if(strlen($password) > 8) {
            if(preg_match('/senior$/', $password)) {
                $flag++ ;
            } else {
                $all_errors['passwordRegx'] = 'End password with senior';
            }
        } else {
            $all_errors['passwordlen'] = 'Password must be> 8';
        }
    } else {
        $all_errors['passwordf'] = 'Enter password';
    }

    if(! empty($email)) {
        if(strlen($email) > 8) {
            if(preg_match('/com$/', $email)) {
                $flag++ ;
            } else {
                $all_errors['emailRegx'] = 'End email with .com';
            }
        } else {
            $all_errors['emaillen'] = 'email must be> 8';
        }
    } else {
        $all_errors['emailf'] = 'Enter Email';
    }


if ($flag == 3) {
    foreach($users as $user){
    if($username == $user['name'] && $password == $user['password'] && $email == $user['email']){

        
    if($user['name'] == "adminsenior" && $user['password'] == "admin123senior" && $user['email'] == "admin@web.com"){

        header('location:dashboard.php');
    }else{
       header('location:index.php'); 
    }
    }
    else{
                echo "Wrong data";
    }
    

}
}
echo"<pre>";
print_r($_GET);
print_r($_POST);
echo"</pre>";

}























?>


<!doctype html>

<html lang="en"> 

<head> 
<meta charset="UTF-8"> 
<title>Login</title> 
</head> 

<body> <!-- partial:index.partial.html --> 

<section> 
    <div class="signin"> 

    <div class="content"> 

     <h2>Sign In</h2> 

     <form action="" method="post">

     <div class="form"> 

      <div class="inputBox"> 

       <input type="text" name="username" > <i>Username</i> 

      </div> 

      <div class="inputBox"> 

       <input type="text" name="password"> <i>Password</i> 

      </div>
      <div class="inputBox"> 

       <input type="text" name="email"> <i>Email</i> 

      </div> 

      <div class="links"> <a href="#">Forgot Password</a> <a href="#">Signup</a> 

      </div> 

      <div class="inputBox"> 

       <input type="submit" value="Login" name="login_btn"> 

      </div> 


        <?php foreach ($all_errors as $error):?>
        <div style="color:red;"><?= $error?></div>
        <?php endforeach ?>

     </div> 
    </form>
    </div> 

   </div> 

  </section> <!-- partial --> 

</body>

</html>
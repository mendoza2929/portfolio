
<?php 

require("alert.php");
require("db_config.php");

session_start();
if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
   redirect('dash.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/mains.css">
</head>
<body class="bg-light">


<!---<div class="login-form text-center rounded bg-white shadow overflow-hidden">
      <form method="POST" autocomplete="off">
          <h4 class="bg-secondary text-white py-3 ">Mendoza Admin</h4>
          <div class="p-4">
              <div class="mb-3">
                  
                  <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Email" > 
              </div>
              <div class="mb-4">
      
                  <input name="admin_pass" required   type="password" class="form-control shadow-none text-center" placeholder="Password" >
              </div>
            
              <button name="login" type="submit" class="btn btn-success shadow-none me-lg-2 me-3 w-100" data-bs-toggle="modal" data-bs-target="#loginModal">
        Login   
        </button>
          </div>
      </form>
  </div>-->

  <div class="login-box">
  <h2>Login Admin</h2>
  <form method="POST" autocomplete="off">
    <div class="user-box">
      <input name="admin_name" type="text" name="" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input name="admin_pass" type="password" name="" required="">
      <label>Password</label>
    </div>
    <button name="login" type="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Login
    </button>
    
  </form>
</div>

  


  <?php 
    
    // admin login 
    
    if(isset($_POST['login']))
    
    {
        $frm_data=filteration($_POST);
        
        $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=? " ;
        $values = [$frm_data['admin_name'],$frm_data['admin_pass']];
       

       $res = select($query,$values,"ss");
       if($res -> num_rows==1){
            $row = mysqli_fetch_assoc($res);
            $_SESSION['adminLogin'] = true;
            $_SESSION['adminId'] = $row['sr_no'];
            redirect('../admin/dash.php');
       }
       else{
            alert('error', 'Login Failed - Invalid Admin!');
       }
    }
    
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
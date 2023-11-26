
<?php include 'layout/coon.php';
$isActive ="new_account.php";














if (isset($_POST['sing_out'])) { 
  session_destroy();
}

if (isset($_POST['Sign_Up'])) {
  // Retrieve form data
$Name = $_POST['Name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($email) && !empty($password)) {
  
  $stmt = $conn->prepare("INSERT INTO `users`(`Name`, `Email`, `Password`) VALUES ('$Name','$email','$password')");
 
  if ( $stmt->execute()) {
    $color = "success" ;
      $error_Sign_Up = "Your registered successfully. You must wait for your acceptance by the admin";
  }else {
    $color = "danger" ;
      $error_Sign_Up = "error";
  }

}}
?>

<?php 


?>

<!DOCTYPE html>
<html lang="en">

     <?php    include 'layout/head.php'; ?>
     

    <body>
    

   <?php include 'layout/navbar.php' ;
   

   
   
   
   ?>


  
   <?php





      

   
   ?>


<div class="page-index" id="top">

</div>

<div class="page-index" id="top">

<!-- ***** form  ***** -->

<div class="container overflow-hidden ">

    <div class=" col-sm-6 ">
      <div class="p-3">

  <form class="row g-3" method="post" >

                <h4>Create a new account</h4>
          <div class="col-12">
            <label for="inputEmail4" class="form-label">Name</label>
            <input type="text" name="Name" class="form-control" id="inputEmail4">
          </div>
          <div class="col-12">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-12">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4">
          </div>
          <!-- <div class="col-12">
            <label for="inputAddress" class="form-label">confirm password </label>
            <input type="password" class="form-control" id="inputAddress">
          </div> -->

          <div class="col-12 mt-5">
            <button type="submit" name="Sign_Up" class="btn btn-primary">Sign Up</button>
          </div>
          <?php if (isset($error_Sign_Up , $_POST['Sign_Up'])  ) { ?>
                        <div class="alert alert-<?= $color ?> mt-4" role="alert">
                            <?php echo $error_Sign_Up; ?>
                        </div> 
                   

                   
                    </form>
                  </div>
                  
                <?php    } ?> 
</form>
      </div>
    </div>
 
  </div>
</div>
 

    
   <?php include 'layout/footer.php' ; ?>

   <?php include 'layout/js.php' ; ?>



  </body>
</html>
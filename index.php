
<?php include 'layout/coon.php';
$isActive = 'index.php';



?>

<!DOCTYPE html>
<html lang="en">

     <?php    include 'layout/head.php'; ?>
    
    <body>
    

   <?php include 'layout/navbar.php' ;
   
   if (isset($_POST["sign_out"])) {
    // Perform logout actions here, then redirect to index.php
    session_destroy();
    header("Location: index.php");
    exit(); // Ensure script execution stops after the redirection header
}
   
   
   
   ?>


   <div class="main-banner" id="top">

        <!-- ***** form  ***** -->
        <div class="subscribe">
        <div class="container">
   <?php





        if (isset($_POST['submit'])) {
            $name = htmlspecialchars($_POST['name']);
            $password = htmlspecialchars($_POST['Password']); 
          
    
    
            $stmt = $conn->query("SELECT * FROM users WHERE username = '$name' AND Password = '$password'");
         
            $userData = $stmt->fetch();}
            
       
            
    
            if (!empty($userData) ) {
             
                $_SESSION['name']    = $userData['username'] ;
                
                 header("Location: products.php");
                exit();
            } else {
                $error_message = "Invalid username or password";
            }
        
    
        

   
   ?>



         
            <div class="row">
        <?php 
       
        
        if (!isset($_SESSION['name'])) {
   

   ?>
                <div class="col-lg-6  align-items-center justify-content-center">
                    <form method="post"  >
                      <div class="form-group mb-4 ">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input  type="text" name="name" value="<?php   echo $name ?? '';  ?>" class="form-control rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="form-group mb-5 ">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="Password" class="form-control rounded-pill" id="exampleInputPassword1">
                      </div>
                      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                     <!-- Error message -->
                     <?php if (isset($error_message , $_POST['submit']) && empty($userData) ) { ?>
                        <div class="alert alert-danger mt-4" role="alert">
                            <?php echo $error_message; ?>
                        </div>
                    <?php } ?>

                   
                    </form>
                  </div>

                  <?php }else {    ?>
                    
                

          <div class="col-lg-6  align-items-center justify-content-center">
          <h1 class="user-select-all text-center">welcome back <?php echo $_SESSION['name'] ?></h1>
 
          </div>
                  
                 <?php    } ?>


                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-12">
                        <video class="video" autoplay controls loop muted >
                                <source src="assets/video/Uncharted.mp4" type="video/mp4">
                               
                                Your browser does not support the video tag.
                            </video>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
 

    
   <?php include 'layout/footer.php' ; ?>

   <?php include 'layout/js.php' ; ?>
    
  </body>
</html>
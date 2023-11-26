<?php include 'layout/coon.php';







    $email = $_GET['Email'];
    $password = $_GET['password'];
    
    if (isset( $email) && isset( $password)) {
     
    
    
    // Check against admin table
    $admin_query = "SELECT * FROM admin WHERE  Email = '$email' AND Password = '$password'";
    $admin_result = $conn->query($admin_query);
    $AdminData = $admin_result->fetch();

     echo json_encode($AdminData);

    
    
    // Check against user table
    $user_query = "SELECT * FROM users WHERE  Email = '$email' AND Password = '$password'";
    $user_result = $conn->query($user_query);
    $userData = $user_result->fetch();
    
    
    
    
    // if (!empty($AdminData)) {
      
    //     header("Location: dashboard_Categories.php");
    //     $_SESSION["admin"] = $AdminData["Email"];
    //     exit();
    // } else {
    //   // Invalid credentials
    //   $error_message = "Invalid email or password. Please try again.";
    // }
    
    // if (!empty($userData) && $userData["is_Active"] === 1) {
        
    //     header("Location: products.php");
    //     $_SESSION["user"] = $userData["Email"];
    //     exit();
    // }else if (!empty($userData) && $userData["is_Active"] === 0) {
    
    //   $color = "warning" ;
    
    //   $error_message = "Hello " . $userData['name'] . " You must wait for your acceptance by the admin.";
    // }
    
    
    
    
    // else {
    //     // Invalid credentials
    //     $color = "danger" ;
    //     $error_message = "Invalid email or password. Please try again.";
    // }
    // } else{
    //   $color = "danger" ;
    // $error_message = "Email and password are required.";
   }
    
    
 

    ?>


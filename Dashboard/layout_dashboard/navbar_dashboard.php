<nav class="navbar navbar-expand-lg navbar-light fixed-top " style="background-color: #f9f9f9;">
    <div class="container-fluid">
      <a href="index.php" class="navbar-brand ms-5" >
                        <img src="assets\images\logo_1.png">
                    </a>
  
      <button class="navbar-toggler" style="margin-right:5px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                  <span class="navbar-toggler-icon"></span>
                </button>
      <div class="collapse navbar-collapse top_nav" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto ">
   
        </ul>
        <ul class="navbar navbar-nav navbar-right" style="display:flex;">
                                                                        
          <li class="nav-item me-4"><a class="nav-link <?php if ($isActive === "products.php") echo ' activee'; ?>" href="products.php" >Front</a></li>
                                    

          <li class="nav-item me-4"><a class="nav-link <?php if ($isActive === "products.php") echo ' activee'; ?>" href="index.php" >sing out</a></li>
       </ul>
        </ul>
      </div>
    </div>
  </nav>
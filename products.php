
<?php 

include 'layout/coon.php';
if ( !empty($_SESSION["user"]) || !empty($_SESSION["admin"])) {  ?>
<?php



$isActive = "products.php";
  
?>



<!DOCTYPE html>
<html lang="en">

     <?php    include 'layout/head.php'; ?>

    <body>

  
    <!-- ***** Header Area Start ***** -->
    <?php include 'layout/navbar.php' ;
?>


      <!-- ***** Main Banner Area Start ***** -->
      <div class="page-heading" id="top">
     
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Products Area Starts ***** -->
    <section class="section " id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                    </div>
                </div>
            </div>
            <form method="post" action="#">
            <div class="grid-container">

            <div class="item1 d-flex justify-content-end align-items-center">
                <span> Trier par : <span class="invisible">l</span> </span>
                <select onchange="handleSelectionChange()" id="mySelect" name="quantity" class="form-select w-25 " aria-label="Default select example" style="width:17% !important;">
                       
                        <option selected   value="0">All</option>
                        <option    value="1">Quantité, croissant </option>
                        <option    value="2">Quantité, décroissant </option>
                        <option    value="3">Prix, croissant </option>
                        <option    value="4">Prix, décroissant </option>

                        </select>
    
  

    
</div>
  <div class="item2 ">
    
  <div class="col-lg-12">
              
     <h5>Catégories</h5>
    <!-- Checkbox inputs -->
    <ul class="list-group" id="data_Catégories"  style=" width: 250px;  word-wrap: break-word;  white-space: normal;">
 
     


    </ul>
    <br>

    
  
    <br>
    <button id="bu" type="submit" name="submit_checkbox" class="btn btn-info btn-lg invisible">
          <span class="glyphicon glyphicon-filter"><i class="fas fa-filter"></i></span> Filter </button>

</form>
                </div>
                </div>
                <div class="item3 row " id="data" >
               
             
                <!-- card -->


                <!-- end card -->

                    
               
            

               


                   
                  
             
            </div>  

                </div>
                        
                        </div>
    </section>



 
    
   
   
    
    <!-- ***** Footer Start ***** -->
    <?php include 'layout/footer.php' ; ?>
   



<?php include 'layout/js.php' ; ?>

<script src="js/categories.js"></script>
<script src="js/products.js"></script>

















  </body>

</html>

<?php }  ?>
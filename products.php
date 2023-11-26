
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
                <select id="mySelect" name="quantity" class="form-select w-25 " aria-label="Default select example" style="width:17% !important;">
                       
                        <option    value="0">All</option>
                        <option    value="2">Quantité, croissant </option>
                        <option    value="1">Quantité, décroissant </option>
                        <option    value="3">Prix, croissant </option>
                        <option    value="4">Prix, décroissant </option>

                        </select>
    
  

    
</div>
  <div class="item2 ">
    
  <div class="col-lg-12">
              
     <h5>Catégories</h5>
    <!-- Checkbox inputs -->
    <ul class="list-group" id="data_Catégories">
     


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

<script>
  // Function to perform XHR request and update the table
  function fetchDataAndUpdateTable(url, tableId) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);

    xhr.onload = function() {
      if (xhr.status >= 200 && xhr.status < 300) {
        document.getElementById(tableId).innerHTML = xhr.responseText;
    

       
      } else {
        console.error('Request failed with status ' + xhr.status);
      }
    };

    xhr.onerror = function() {
      console.error('Request failed');
    };

    xhr.send();
  }
  

  // Fetch data for admins and update the table
  fetchDataAndUpdateTable("products_select.php", "data");
  fetchDataAndUpdateTable("Catégories_select.php", "data_Catégories");


  
</script>





  </body>

</html>

<?php }  ?>
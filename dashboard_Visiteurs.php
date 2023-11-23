
<?php 
include 'layout/coon.php'; ?>


<?php if ( !empty($_SESSION["admin"])) {  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php    include 'layout/head.php'; ?>
    <title>Ajouter Catégories</title>
    <style>
     
     @import url('https://fonts.googleapis.com/css2?family=Arvo:ital@1&display=swap');
     *{
  margin: 0;
  padding: 0;
  font-family: 'Arvo', serif;
  

}
.chose a{
  text-decoration: none;
  padding: 20px 30px !important;
  color: #f9f9f9;
  border-radius: 25px;

}
.chose a:hover{
 
  background-color: #8e8a8a47;
 
}
.active{
  background-color: #8e8a8a47;

}
/* .width{
  width: 21% !important;
} */

.form {
  background-color: #495057 !important;
  
}
.label_file {
	display: block;
	width: 60vw;
	max-width: 300px;

	background-color: slateblue;
	border-radius: 2px;
	font-size: 1em;
	line-height: 2.5em;
	text-align: center;
}

.label_file:hover {
	background-color: cornflowerblue;
}

.label_file:active {
	background-color: mediumaquamarine;
}

#apply {
	border: 0;
    clip: rect(1px, 1px, 1px, 1px);
    height: 1px; 
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}


</style>
</head>
<body>

<?php include 'Dashboard\layout_dashboard\navbar_dashboard.php' ?>
  <div class="page-dashboard" id="top">


  <div class=" text-center ">
        <div class="row">
          <div class="col-sm-3 bg-black p-5 width" >
          <div class="mb-5 chose">
          <a   href="dashboard_Categories.php">Ajouter Catégories</a>
          </div>
          <div class="mb-5 chose">
          <a  href="dashboard_Products.php">Ajouter Produits</a>
          </div>
          <div class="mb-5 chose">
          <a  href="dashboard_Utilisateurs.php">Liste des Utilisateurs</a>
          </div>
          <div class="mb-5 chose">
          <a class="active" href="dashboard_Visiteurs.php">Liste des Visiteurs</a>  
          </div>
          
          </div>
          <div class="col-sm-9 form">
            <div class="row">
            <div class="col-12 col-sm-12  p-5 text-light text-start">
            <table class="table table-striped table-hover  " >
                <thead >
                    <tr>
                    <th  scope="col">#</th>
                    <th  scope="col">First</th>
                    <th  scope="col">Last</th>
                    <th  scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                    <th  scope="row">1</th>
                    <td >Mark</td>
                    <td >Ottddccxfvfvfvfvfv</td>
                    <td >
                    <button type="button" class="btn btn-success mb-2 ms-2">Success</button>
                    <button type="button" class="btn btn-danger mb-2 ms-2">Danger</button>


                    </td>
                    </tr>
              
                </tbody>
                </table>
            
            </div>
          </div>
        </div>
      </div>
      </div>
    

<?php include 'layout/js.php' ; ?>
</body>
</html>



<?php }  ?>
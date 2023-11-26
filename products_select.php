<?php 

include 'layout/coon.php';

$produit_result = $conn->query("SELECT * FROM `produit` WHERE deleted_at IS NULL");
$produitData = $produit_result->fetchAll(PDO::FETCH_ASSOC);




foreach ($produitData as $value) {
   

    ?>


<div class="col-lg-6">
                    <div class="item ">
                    <div class="row g-0  mb-4 position-relative" style="    border-bottom: 2px #857979 solid;border-top: 2px #857979 solid;border-radius: 20%;">
                        <div class="col-md-6 mb-md-0 p-md-4">
                            <img src="<?= $value["img"] ?>" class="w-100" alt="..." width="150px" height="150px">
                        </div>
                        <div class="col-md-6 p-4 ps-md-0">
                            <h5 class="mb-4"></h5>
                            <h3 class="text-subtle"><?= $value["Etiquette"] ?> </h3>
                            <h6 class="text-primary"><?= $value["PrixFinal"] ?> MAD</h6>
                            <h6 class="text-success">Produit en stock (<?= $value["QuantiteStock"] ?>) </h6>
                               
                           
                            <h6 class="text-danger">Quantite min : <?= $value["QuantiteStock"] ?> </h6>

                        
                               

                            

                        </div>
                        </div>
                    </div>
                </div>


<?php } ?>

<?php 

include 'layout/coon.php';

$categorie_result = $conn->query("SELECT * FROM `categorie` WHERE deleted_at IS NULL");
$categorieData = $categorie_result->fetchAll(PDO::FETCH_ASSOC);




foreach ($categorieData as $value) {
   

    ?>

<li class="list-group-item">
    <input id="firstCheckboxStretched" class="form-check-input me-1 min" type="checkbox" value="2" name="categories[]" >
    <label class="form-check-label stretched-link o1 small-text" for="firstCheckboxStretched"><?= $value["Nom"] ?></label>
    </li> 
   


<?php } ?>

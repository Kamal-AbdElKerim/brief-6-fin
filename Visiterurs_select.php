

<?php 
include 'layout/coon.php';

$Users_result = $conn->query("SELECT * FROM `users` WHERE is_Active = 0");
$UsersData = $Users_result->fetchAll(PDO::FETCH_ASSOC);
$num = count($UsersData);




?>

<div class="alert alert-warning mb-0 " role="alert">
                Liste des Visiterurs (<?= $num ?>)
                </div>
                <table class="table table-striped table-hover  " >
                <thead >
                    <tr>
                    <th  style=" width: 100px;  word-wrap: break-word;  white-space: normal;">Email</th>
                    <th  style=" width: 100px;  word-wrap: break-word;  white-space: normal;">Password</th>
                    <th  style=" width: 100px;  word-wrap: break-word;  white-space: normal;">Opérations</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider" >
                  
           
              
               

<?php
                  if (!empty($UsersData)) {
                   
                
                  foreach ($UsersData as  $value) {
                    # code...
                 ?>
                    <tr>
                    <td style=" width: 100px;  word-wrap: break-word;  white-space: normal;" ><?= $value["Email"] ?></td>
                    <td style=" width: 100px;  word-wrap: break-word;  white-space: normal;"><?= $value["Password"] ?></td>
                    
                    <td style=" width: 100px;  word-wrap: break-word;  white-space: normal;">
                    <button onclick="AcceptRequest(<?= $value['id'] ?>)" type="button" class="btn btn-success mb-2 ms-2">Accept</button>
                    <button onclick="makeRequest(<?= $value['id'] ?>,'Dashboard/delete_Visiteurs.php?id=')" class="btn btn-danger mb-2 ms-2" type="button" >Reject</button>



                    </td>
                    </tr>
                    <?php    }   }?>

                    </tbody>
                </table>
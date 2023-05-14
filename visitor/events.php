<?php

require_once("connection.php");
$db = connexionDB();
$sql = "SELECT * FROM events";
try{
    $res = $db->query($sql);
    
}catch(PDOException $ex){
    die($ex->getMessage());
}


?>


<h1>Events:  <?= $res->rowCount(); ?> </h1>
    <?php
    while($event = $res->fetchObject()){
    ?>
    <div>
         <div>
        <div class="container">
  <div class="row">
    <div class="col-sm">
    <h3>Titre : <?= $event->image ?></h3>
    </div>
    <div class="col-sm-2">
         <h3>Titre : <?= $event->titre ?></h3>
    </div>
    <div class="col-sm-2">
    <h3>Description : <?= $event->titre ?></h3>
    </div>
  </div>
</div>

        <p>
            <a href="#">View Details</a>
           
        </p>
        <?php } ?>
        </div>
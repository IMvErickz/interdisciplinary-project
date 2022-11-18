<?php
 include_once '../BDconection.php';

 $set = conection();

 $sql = "select * from produto;";

 $result = $set->query($sql);

 $line = $result->fetch(PDO::FETCH_ASSOC);

 
<?php
require '../php/functions.php';
$data = fetchall(connect());
// echo "<pre>";
// var_dump($data);
// echo "</pre><hr>";
foreach($data as $i => $i_value) {
    echo $i->$i_value;
}
?>

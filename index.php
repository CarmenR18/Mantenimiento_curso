<?php
if(isset($_GET['url'])){
    $view=$_GET['url'];
    switch ($view) {
        case 'home':
        include './app/view/principal.php';
        break;
        default:
        echo "ERROR 404";
    }
}else{
   echo "<a href='./principal'>home</a>";
}

?>

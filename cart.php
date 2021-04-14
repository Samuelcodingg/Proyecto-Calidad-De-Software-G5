<?php
ob_start();
// include header.php file
include('header.php');
?>


<?php

/*  include cart items if it is not empty */
count($product->getData('carrocompras')) ? include('Template/cart-template.php') : 0;
/*  include cart items if it is not empty */


?>

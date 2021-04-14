<?php
ob_start();
?>

<?php

/*  include cart items if it is not empty */
count($product->getData('carrocompras')) ? include('Template/cart-template.php') : include('');
/*  include cart items if it is not empty */


?>

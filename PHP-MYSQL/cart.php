<?php
ob_start();
   // include header php file
   include('header.php');
?>
<?php

// include cart items if it is not empty
  count($product->getData(table:'cart')) ? include('Template/_cart-template.php'): include('Template/notFound/_cart-notFound.php');


    

    // inclue whishlist-template.php file
    count($product->getData(table:'wishlist')) ? include('Template/_wishlist-template.php') : include('Template/notFound/_wishlist-notFound.php');
  

   // inclue new-phone.php file


   include('Template/_new-phone.php');

?>

<?php
// include footer.php
include('footer.php')
?>
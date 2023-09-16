<?php
ob_start();
   // include header php file
   include('header.php');
?>
<?php
   // include banner php file
   include('Template/_banner-area.php');

   // inclue top-sale.php file
   include('Template/_top-sale.php');
   // inclue special-price.php file
   include('Template/_special-price.php');
   // inclue banner-adds.php file
   include('Template/_banner-adds.php');
  // inclue new-phone.php file
  include('Template/_new-phone.php');
  // inclue blog.php file
  include('Template/_blog.php');

?>

<?php
// include footer.php
include('footer.php');
?>
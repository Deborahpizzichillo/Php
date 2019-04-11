<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>My first PHP script</title>
  </head>
  <body>
   
    

    <?php 
$image_url='https://cdn.instructables.com/F1V/5XHZ/GKS0QFFD/F1V5XHZGKS0QFFD.LARGE.jpg';
?>

<img src="<?php echo $image_url;?>">

<a href="<?php echo 'index.php'; ?>">Index Page</a>
<a href="<?php echo 'cats.php'; ?>">cats.php</a>

  </body>
</html>





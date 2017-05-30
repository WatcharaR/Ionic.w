<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>

 <?php
 $con=msqli_connect("localhost","root","","d56")
  if($con){
	  echo "connect sussecc";
}else{
	  echo "error connect";
}
?>

 </body>
</html>

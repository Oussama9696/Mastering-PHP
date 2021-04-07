<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  
	Étape 1: utilisez une fonction mathématique prédéfinie ici et faites-en écho

	Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho

	Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho 

 */
/*max of two or more numbers*/ 

echo max(2,5,7);

echo nl2br("\r\n");

/*make a string upercase*/ 
echo strtoupper("greenchip");

echo nl2br("\r\n");

$array = ["ouussama", "HAMMOURI"];

/*add new variables to an array*/ 
array_push($array, "24");

echo $array[2];

?>

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/* 
	Étape 1 - Créer une base de données dans PHPmyadmin

	Étape 2 - Créez un tableau comme celui de la conférence

	Étape 3 - Insérez des données

	Étape 4 - Connectez-vous à la base de données et lisez les données 
	*/
	$briefBase = new mysqli('localhost', "root", '', 'briefbase');

	$res = $briefBase->query("SELECT * FROM brieftable");

	$data = $res->fetch_array();

	$name = $data['name'];
	$prename = $data['prename'];
	$age = $data['age'];

	echo nl2br("$name \r\n");
	echo nl2br("$prename \r\n");
	echo nl2br("$age \r\n");
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>

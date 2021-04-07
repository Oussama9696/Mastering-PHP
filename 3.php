<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  

Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"

Étape 2: Créez un forloop qui affiche 10 nombres

Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas 

 */


/*  
Étape 1:*/
function number1($string){
	if($string==""){
		echo "Did you forget something?";
	}
	else if (!($string=="Greenchip")){
		echo "Are you shour about this?";
	}
	else{ 
		echo "I hate Greenchip";
	}
}

number1("Greenchip");
/*  
Étape 2:*/
echo "<br>";

for ($x = 1; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
/*  
Étape 3:*/
$n=2;
switch ($n) {
	case 1:
	  echo "First";
	  break;
	case 2:
		echo "Second";
	  break;
	case 3:
		echo "Third";
	  break;

	default:
	  echo "No Resault yet";
}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>
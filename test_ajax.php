<?php
if(!empty($_POST) && isset($_POST['tabletest'])) {
				
	$randnumb = rand(1, 10);
	$tableTest = $_POST['tabletest'];					
							
	echo('Combien font '.$tableTest.'x'.$randnumb.'?
		 <form action="index.php" method="post">
			<input type="text" name="proposition">
			<input type="hidden" name="randnumb" value="'.$randnumb.'">
			<input type="hidden" name="multiplier" value="'.$tableTest.'">
			<input type="submit" value="Réponse">
		 </form>');																											
}

if(!empty($_POST['proposition'])) {
					
	$proposition = $_POST['proposition'];
	$randnumb = ['randnumb'];
	$multiplier = $_POST['multiplier'];
	
	 if($proposition == ($randnumb * $multiplier)) {
		echo('Bravo vous avez trouvé la bonne réponse !');	
	 } else {		
		echo('Désolé vous vous êtes trompé !');
	 }
							
}


?>


<!DOCTYPE html>
	<html lang="fr">
		<head>
			<meta charset="utf-8">
			<title>multiplication avec PHP</title>
			
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
			<link rel="stylesheet" href="style.css">
			<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
			
		</head>
		
		<body>
			
			<div class="container">
				<div class="row">
					<h1>Tables de multiplications avec PHP</h1>
					<p>Veuillez choisir une table de multiplication</p>
						
					<div class="input-field col s12">
						<form action="index.php" method="post" name="table">
							<select name="table" id="select">
								<option value= "#" disabled selected>Choisir</option>
								<option value="1">table du 1</option>
								<option value="2">table du 2</option>
								<option value="3">table du 3</option>
								<option value="4">table du 4</option>
								<option value="5">table du 5</option>
								<option value="6">table du 6</option>
								<option value="7">table du 7</option>
								<option value="8">table du 8</option>
								<option value="9">table du 9</option>
								<option value="10">table du 10</option>					
							</select>
							<button class="btn waves-effect waves-light" type="submit" name="action">Valider
								<i class="material-icons right"></i>					 			
							</button>	
						</form>
					</div>
					
					<br>
					
					<div class="input-field col s12">					
						<form method="post" action="index.php" name="table">						
							<?php
								for($i = 1; $i <= 10; $i++) {
									echo '<p><label><input type="checkbox" name="table[]" value="'.$i.'"><span>Table du '.$i.'</span></label></p>';
								}
							?>
						
							<br>
							<button class="btn waves-effect waves-light" type="submit" name="action">Choisir
								<i class="material-icons right"></i>					 			
							</button>
						</form>
					</div>
					
					
						<?php
						if(!empty($_POST) && isset($_POST['table'])) {
							$table = $_POST['table'];
							
							function numero($facteurs) {
								
								for ($i=1; $i <= 10; $i++){
									echo ($i."x".$facteurs."=".$i*$facteurs."</br>");
								}
							}
							
							//si table est un array
							if (is_array($table)) {
								//pour chaque element de table que je stock dans une variable facteur
								foreach($table as $facteur) {
									// je relance ma fonction facteur avec le facteur en cours
									numero($facteur);
									echo '<br>';
								}
							// sinon, c'est un facteur seul, donc j'appelle ma fonction
							} else {
								numero($table);	
							}										
						}					
					?>
					<br><br>
					<div id="test">
						
						<p>Testez ici vos connaissances !</p>
						<div class="input-field col s12">
							<form action="index.php" method="post" name="tabletest">
								<select name="tabletest" id="select">
									<option value= "#" disabled selected>Choisir</option>
									<option value="1">table du 1</option>
									<option value="2">table du 2</option>
									<option value="3">table du 3</option>
									<option value="4">table du 4</option>
									<option value="5">table du 5</option>
									<option value="6">table du 6</option>
									<option value="7">table du 7</option>
									<option value="8">table du 8</option>
									<option value="9">table du 9</option>
									<option value="10">table du 10</option>					
								</select>
								<button class="btn waves-effect waves-light" type="submit" name="action">Valider
									<i class="material-icons right"></i>					 			
								</button>	
							</form>
						</div>
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
							
							if(!empty($_POST ['proposition'])) {
								
								$proposition = $_POST['proposition'];
								$randnumb = $_POST['randnumb'];
								$multiplier = $_POST['multiplier'];
								
								 if($proposition == ($randnumb * $multiplier)) {
									echo('Bravo vous avez trouvé la bonne réponse !');	
								 } else {		
									echo('Désolé vous vous êtes trompé !');
								 }
										
							}
						
						?>
						
					</div>
				</div>
			</div>
			
					<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
			<script src="app.js"></script>		
		</body>
	</html>
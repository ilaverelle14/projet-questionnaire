<!DOCTYPE html>

<html lang="en"> 
	<head>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" href="assets\css\style.css">

	</head>

	<body>
		
		<form class="survey-form" method="post" action="">
			<h1><i class="far fa-list-alt"></i>Questionnaire</h1>

			<div class="steps">
				<div class="step current"></div>
				<div class="step"></div>
				<div class="step"></div>
				<div class="step"></div>

			</div>
			<!-- AVEC SOI-->
			<div class="step-content current" data-step="1">
				<div class="fields">
					<p>Je sais identifier le déclencheur d'une émotion 
					</p>
					<div class="rating">
						<input type="radio" name="rating-1" id="radio0" value="Jamais vrai">
						<label for="radio0">0</label>
						<input type="radio" name="rating-1" id="radio1" value="Parfois vrai">
						<label for="radio1">1</label>
						<input type="radio" name="rating-1" id="radio2" value="Souvent vrai">
						<label for="radio2">2</label>
						<input type="radio" name="rating-1" id="radio3" value="Toujours vrai">
						<label for="radio3">3</label>
					</div>
				<div class="rating-footer">
					<span>Jamais vrai</span>
					<span>Parfois vrai</span>
					<span>Souvent vrai</span>
					<span>Toujours vrai</span>
				</div>

			</div>

			<div class="fields">
				<p>Quand je ne me sens pas bien,je sais très vite pourquoi
				</p>
				<div class="rating">
					<input type="radio" name="rating-2" id="radio0" value="Jamais vrai">
					<label for="radio0">0</label>
					<input type="radio" name="rating-2" id="radio1" value="Parfois vrai">
					<label for="radio1">1</label>
					<input type="radio" name="rating-2" id="radio2" value="Souvent vrai">
					<label for="radio2">2</label>
					<input type="radio" name="rating-2" id="radio3" value="Toujours vrai">
					<label for="radio3">3</label>
				</div>
				<div class="rating-footer">
					<span>Jamais vrai</span>
					<span>Parfois vrai</span>
					<span>Souvent vrai</span>
					<span>Toujours vrai</span>
				</div>

			</div>

			<div class="fields">
				<p>Je sais facilement pourquoi je ressens telle ou telle émotion 
				</p>
				<div class="rating">
					<input type="radio" name="rating-3" id="radio0" value="Jamais vrai">
					<label for="radio0">0</label>
					<input type="radio" name="rating-3" id="radio1" value="Parfois vrai">
					<label for="radio1">1</label>
					<input type="radio" name="rating-3" id="radio2" value="Souvent vrai">
					<label for="radio2">2</label>
					<input type="radio" name="rating-3" id="radio3" value="Toujours vrai">
					<label for="radio3">3</label>
				</div>
				<div class="rating-footer">
					<span>Jamais vrai</span>
					<span>Parfois vrai</span>
					<span>Souvent vrai</span>
					<span>Toujours vrai</span>
				</div>

			</div>

			<div class="fields">
				<p>Lorsqu'une personne fait quelque chose qui me dérange au cours d'une discussion ou 
				d'une activité, je comprends rapidement mes réactions.
				</p>
				<div class="rating">
					<input type="radio" name="rating-4" id="radio0" value="Jamais vrai">
					<label for="radio0">0</label>
					<input type="radio" name="rating-4" id="radio1" value="Parfois vrai">
					<label for="radio1">1</label>
					<input type="radio" name="rating-4" id="radio2" value="Souvent vrai">
					<label for="radio2">2</label>
					<input type="radio" name="rating-4" id="radio3" value="Toujours vrai">
					<label for="radio3">3</label>
				</div>
				<div class="rating-footer">
					<span>Jamais vrai</span>
					<span>Parfois vrai</span>
					<span>Souvent vrai</span>
					<span>Toujours vrai</span>
				</div>

			</div>

			<!-- AVEC LES AUTRES-->

			<div class="fields">
				<p>Je sais identifier ce que les autres ressentent
				</p>
				<div class="rating">
					<input type="radio" name="rating-5" id="radio0" value="Jamais vrai">
					<label for="radio0">0</label>
					<input type="radio" name="rating-5" id="radio1" value="Parfois vrai">
					<label for="radio1">1</label>
					<input type="radio" name="rating-5" id="radio2" value="Souvent vrai">
					<label for="radio2">2</label>
					<input type="radio" name="rating-5" id="radio3" value="Toujours vrai">
					<label for="radio3">3</label>
				</div>
				<div class="rating-footer">
					<span>Jamais vrai</span>
					<span>Parfois vrai</span>
					<span>Souvent vrai</span>
					<span>Toujours vrai</span>
				</div>

			</div>

			<div class="fields">
				<p>Quand quelqu'un me parle de ses émotions ,je comprends rapidement ce qui lui arrive 
				</p>
				<div class="rating">
					<input type="radio" name="rating-6" id="radio0" value="Jamais vrai">
					<label for="radio0">0</label>
					<input type="radio" name="rating-6" id="radio1" value="Parfois vrai">
					<label for="radio1">1</label>
					<input type="radio" name="rating-6" id="radio2" value="Souvent vrai">
					<label for="radio2">2</label>
					<input type="radio" name="rating-6" id="radio3" value="Toujours vrai">
					<label for="radio3">3</label>
				</div>
				<div class="rating-footer">
					<span>Jamais vrai</span>
					<span>Parfois vrai</span>
					<span>Souvent vrai</span>
					<span>Toujours vrai</span>
				</div>

			</div>

			<div class="fields">
				<p>Je sais facilement pourquoi une personne est triste ,contrariée,en colère ou a peur .
				</p>
				<div class="rating">
					<input type="radio" name="rating-7" id="radio0" value="Jamais vrai">
					<label for="radio0">0</label>
					<input type="radio" name="rating-7" id="radio1" value="Parfois vrai">
					<label for="radio1">1</label>
					<input type="radio" name="rating-7" id="radio2" value="Souvent vrai">
					<label for="radio2">2</label>
					<input type="radio" name="rating-7" id="radio3" value="Toujours vrai">
					<label for="radio3">3</label>
				</div>
				<div class="rating-footer">
					<span>Jamais vrai</span>
					<span>Parfois vrai</span>
					<span>Souvent vrai</span>
					<span>Toujours vrai</span>
				</div>

			</div>

			<div class="fields">
				<p>Lorsque j'assiste à une  scène ou une personne réagit émotionnellement,je comprends facilement 
				ce qui l'a fait réagir.
				</p>
				<div class="rating">
					<input type="radio" name="rating-8" id="radio0" value="Jamais vrai">
					<label for="radio0">0</label>
					<input type="radio" name="rating-8" id="radio1" value="Parfois vrai">
					<label for="radio1">1</label>
					<input type="radio" name="rating-8" id="radio2" value="Souvent vrai">
					<label for="radio2">2</label>
					<input type="radio" name="rating-8" id="radio3" value="Toujours vrai">
					<label for="radio3">3</label>
				</div>
				<div class="rating-footer">
					<span>Jamais vrai</span>
					<span>Parfois vrai</span>
					<span>Souvent vrai</span>
					<span>Toujours vrai</span>
				</div>

			</div>



			<div class="buttons">
				<a href="resultattrois.php" class="btn" data-set-step="2">Résultat</a>
			</div>


		</form>

	</body>

</html>



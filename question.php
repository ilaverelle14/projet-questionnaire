<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.104.2">
	<title>Questionnaire Process Optimal</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!-- Favicons -->
	<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
	<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
	<meta name="theme-color" content="#712cf9">

	<!-- Custom styles for this template -->
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
		<!--div class="step-content current" data-step="1"-->
			<div class="fields">
				<p>Je passe pour quelqu'un de dur. En g??n??ral avant de me marcher sur les pieds les autres y regardent ?? deux fois avant de me chercher des embrouilles </p>
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
		</!--div-->

		<!--div class="step-content current" data-step="1"-->
			<div class="fields">
				<p>En situation de conflit, je sais rester calme. Cela ne me touche pas, contrairement ?? d'autres
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
		</!--div>
		
		<div class="fields">
			<p>Je pense qu'il est de ma responsabilit?? morale d'intervenir et r??parer les choses quand les gens font des erreurs </p>
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
			<p>J'ai tendance ?? me sacrifier pour les autres et me sens bien quand je d??pense temps et energie avec eux</p>
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
		<div class="fields">
			<p>J'aime que mes efforts portent des fruits et m'apportent reconnaissance et succ??s</p>
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
			<p>Je me sens diff??rent des autres.J'ai du mal ?? comprendre la facon dont ils expriment leurs sentiments.</p>
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
			<p>Je suis une personne ind??pendante. Je mets une attention particuli??re ?? ma vie priv??e et au fait de prendre du temps pour moi</p>
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
			<p>Je ne suis pas ?? l'aise avec les prises de d??cisions importantes. Pour me s??curiser, je demande l'avis des autres</p>
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
		<div class="fields">
			<p>Les r??gles qui ne servent ?? rien, les limitations et risquer de passer ?? cot?? d'opportunit??s int??rr??ssantes, tout ???? est vraiment frustrant pour moi </p>
			<div class="rating">
				<input type="radio" name="rating-9" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating-9" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating-9" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating-9" id="radio3" value="Toujours vrai">
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
			<p>Me sentir en lien, uni avec les autres et ??viter les conflits, c'est vraiment important pour moi</p>
			<div class="rating">
				<input type="radio" name="rating-10" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating-10" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating-10" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating-10" id="radio3" value="Toujours vrai">
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
			<p>Pour moi d'abord et ensuite les autres, je sais comment doivent ??tre les choses et ne tol??re pas l'imperfection</p>
			<div class="rating">
				<input type="radio" name="rating-11" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating-11" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating-11" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating-11" id="radio3" value="Toujours vrai">
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
			<p>Je d??die mon temps libre ?? aider les autres. Je me sens valoriser par le fait qu'ils aient besoin de moi</p>
			<div class="rating">
				<input type="radio" name="rating-12" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating-12" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating-12" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating-12" id="radio3" value="Toujours vrai">
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
			<p>Je prend le soin de donner une image de gagnant tant pour ma carri??re que pour mon style de vie</p>
			<div class="rating">
				<input type="radio" name="rating-13" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating-13" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating-13" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating-13" id="radio3" value="Toujours vrai">
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
			<p>J'aime me plonger dans les fantasmes et les souvenirs. Quelque fois cela donne l'impression que je suis quelqu'un qui s'apitoie sur son propre sort</p>
			<div class="rating">
				<input type="radio" name="rating-14" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating-14" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating-14" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating-14" id="radio3" value="Toujours vrai">
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
			<p>Je suis objectif et r??souds les probl??mes sans en discuter avec les autres</p>
			<div class="rating">
				<input type="radio" name="rating-15" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating-15" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating-15" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating-15" id="radio3" value="Toujours vrai">
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
			<p>Je me sens le mieux lorsque je fais ce qu'il faut pour que ma relation avec les autres se passe en douceur</p>
			<div class="rating">
				<input type="radio" name="rating-16" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating-16" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating-16" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating-16" id="radio3" value="Toujours vrai">
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
			<p>J'aime ??tre toujours partant, avoir un calendrier bien rempli. Ne pas profiter de la vie n'est pas une option possible pour moi</p>
			<div class="rating">
				<input type="radio" name="rating-17" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating-17" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating-17" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating-17" id="radio3" value="Toujours vrai">
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
			<p>Je fais le n??cessaire pour que mes objectifs fix??s soient atteints y compris mettre la pression aux autres au besoin</p>
			<div class="rating">
				<input type="radio" name="rating-18" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating-18" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating-18" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating-18" id="radio3" value="Toujours vrai">
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
			<p>Je me reproche souvent de ne pas avoir fait aussi bien que je le pouvais et j'ai tendance ?? faire de m??me avec les autres</p>
			<div class="rating">
				<input type="radio" name="rating-19" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating-19" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating-19" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating-19" id="radio3" value="Toujours vrai">
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
			<p>Je me vois comme quelqu'un d'affectueux, ??motionnellement d??pendant et parfois possessif avec les gens que j'aime</p>
			<div class="rating">
				<input type="radio" name="rating-20" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating-20" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating-20" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating-20" id="radio3" value="Toujours vrai">
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
			<p>Je veux vraiment faire bonne impression. Atteindre mes objectifs et obtenir la reconnaissance sont des souhaits qui me sont chers </p>
			<div class="rating">
				<input type="radio" name="rating-21" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating-21" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating-21" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating-21" id="radio3" value="Toujours vrai">
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
			<p>Je suis une personne sensible, j'utilise mes ??motions et mon imagination pour r??soudre la plupart des probl??mes</p>
			<div class="rating">
				<input type="radio" name="rating-22" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating-22" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating-22" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating-22" id="radio3" value="Toujours vrai">
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
			<p>Je pr??f??re garder ce que je pense pour moi et r??soudre les probl??mes par mes propres r??flexions</p>
			<div class="rating">
				<input type="radio" name="rating-23" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating-23" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating-23" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating-23" id="radio3" value="Toujours vrai">
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
			<a href="question2.php" class="btn" data-set-step="2">Suivant</a>
		</div>
		
	</form>

</body>
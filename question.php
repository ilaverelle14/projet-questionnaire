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
		<div class="step-content current" data-step="1">
			<div class="fields">
				<p>Je passe pour quelqu'un de dur. En général avant de me marcher sur les pieds les autres y regardent à deux fois avant de me chercher des embrouilles </p>
				<div class="rating">
					<input type="radio" name="rating" id="radio0" value="Jamais vrai">
					<label for="radio0">0</label>
					<input type="radio" name="rating" id="radio1" value="Parfois vrai">
					<label for="radio1">1</label>
					<input type="radio" name="rating" id="radio2" value="Souvent vrai">
					<label for="radio2">2</label>
					<input type="radio" name="rating" id="radio3" value="Toujours vrai">
					<label for="radio3">3</label>
				</div>
				<div class="rating-footer">
					<span>Jamais vrai</span>
					<span>Parfois vrai</span>
					<span>Souvent vrai</span>
					<span>Toujours vrai</span>
				</div>
			</div>
		</div>
		<div class="step-content current" data-step="1">
			<div class="fields">
				<p>En situation de conflit, je sais rester calme. Cela ne me touche pas, contrairement à d'autres
				</p>
				<div class="rating">
					<input type="radio" name="rating" id="radio0" value="Jamais vrai">
					<label for="radio0">0</label>
					<input type="radio" name="rating" id="radio1" value="Parfois vrai">
					<label for="radio1">1</label>
					<input type="radio" name="rating" id="radio2" value="Souvent vrai">
					<label for="radio2">2</label>
					<input type="radio" name="rating" id="radio3" value="Toujours vrai">
					<label for="radio3">3</label>
				</div>
				<div class="rating-footer">
					<span>Jamais vrai</span>
					<span>Parfois vrai</span>
					<span>Souvent vrai</span>
					<span>Toujours vrai</span>
				</div>

			</div>
		</div>
		<div class="fields">
			<p>Je pense qu'il est de ma responsabilité morale d'intervenir et réparer les choses quand les gens font des erreurs </p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>J'ai tendance à me sacrifier pour les autres et me sens bien quand je dépense temps et energie avec eux</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>J'aime que mes efforts portent des fruits et m'apportent reconnaissance et succès</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>Je me sens différent des autres.J'ai du mal à comprendre la facon dont ils expriment leurs sentiments.</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>Je suis une personne indépendante. Je mets une attention particulière à ma vie privée et au fait de prendre du temps pour moi</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>Je ne suis pas à l'aise avec les prises de décisions importantes. Pour me sécuriser, je demande l'avis des autres</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>Les règles qui ne servent à rien, les limitations et risquer de passer à coté d'opportunités intérrèssantes, tout çà est vraiment frustrant pour moi </p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>Me sentir en lien, uni avec les autres et éviter les conflits, c'est vraiment important pour moi</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>Pour moi d'abord et ensuite les autres, je sais comment doivent être les choses et ne tolère pas l'imperfection</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>Je dédie mon temps libre à aider les autres. Je me sens valoriser par le fait qu'ils aient besoin de moi</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>Je prend le soin de donner une image de gagnant tant pour ma carrière que pour mon style de vie</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>Je suis objectif et résouds les problèmes sans en discuter avec les autres</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>J'aime être toujours partant, avoir un calendrier bien rempli. Ne pas profiter de la vie n'est pas une option possible pour moi</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>Je fais le nécessaire pour que mes objectifs fixés soient atteints y compris mettre la pression aux autres au besoin</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>Je me reproche souvent de ne pas avoir fait aussi bien que je le pouvais et j'ai tendance à faire de même avec les autres</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>Je me vois comme quelqu'un d'affectueux, émotionnellement dépendant et parfois possessif avec les gens que j'aime</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>Je suis une personne sensible, j'utilise mes émotions et mon imagination pour résoudre la plupart des problèmes</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
			<p>Je préfère garder ce que je pense pour moi et résoudre les problèmes par mes propres réflexions</p>
			<div class="rating">
				<input type="radio" name="rating" id="radio0" value="Jamais vrai">
				<label for="radio0">0</label>
				<input type="radio" name="rating" id="radio1" value="Parfois vrai">
				<label for="radio1">1</label>
				<input type="radio" name="rating" id="radio2" value="Souvent vrai">
				<label for="radio2">2</label>
				<input type="radio" name="rating" id="radio3" value="Toujours vrai">
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
		</div>


</body>
<!doctype html>
<html lang="fr-FR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Questionnaire Process Optimal</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- Favicons -->
  <meta name="theme-color" content="#712cf9">

  <!-- Custom styles for this template -->
  <link href="assets/css/carousel.css" rel="stylesheet">
</head>

<body>
    <?php include __DIR__ . '/partials/menu.php'; ?>
  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="bd-placeholder-img" width="100%" height="70%" src="assets\images\rectanglesmile.jpg" aria-hidden="true"
            preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" /></img>

          <div class="container">
            <div class="carousel-caption ">
              <h1>Dis moi tes combats je te dirai qui tu es.</h1>
              <p>Prêt !? Çà démarre maintenant !</p>
              <p><a class="btn btn-lg btn-primary" href="pages/auth/inscription.php">Inscris toi aujourd'hui</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="70%" src="assets/images/women.jpg" aria-hidden="true"
            preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="70%" fill="#777" /></img>

          <div class="container">
            <div class="carousel-caption">
              <h1> Découvre ton vrai Moi !</h1>
              <p> Réponx avec honnêteté meme si les réponses ne te plaisent pas.</p>
              <p> <a class="btn btn-lg btn-primary" href="pages\auth\connexion.php">Démarre maintenant</a> </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="70%" src="assets\images\awoman.jpg" aria-hidden="true"
            preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="70%" fill="#777" /></img>

          <div class="container">
            <div class="carousel-caption ">
              <h1>Sois toi!</h1>
              <p>çà ne dure que 15 minutes.</p>
              <p><a class="btn btn-lg btn-primary" href="about-us.php">A propos de nous</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

   <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="assets\images\smilewoman.jpg" role="img"
              aria-label="Placeholder: " preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
            <h2 class="fw-normal">Conscience émotionnelle</h2>
            <p>La conscience émotionnelle est la capacité de reconnaître et de comprendre ses propres émotions ainsi que celles des autres.
              Une bonne conscience émotionnelle contribue à une bonne santé mentale.
            </p>
            <p><a class="btn btn-secondary" href="questionun.php">Fais l'état de tes émotions &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="assets/images/sadman.jpg" role="img"
            aria-label="Placeholder:" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
          <h2 class="fw-normal">Expression émotionnelle</h2>
          <p>L'expression émotionnelle désigne l'ensemble des traits comportementaux par lesquels se révèle l'émotion,
             tels que le sourire, les pleurs, les mimiques faciales et les attitudes.
          </p>
          <p><a class="btn btn-secondary" href="questiondeux.php">Fais l'état de tes émotions &raquo;</a></p>
        </div><!-- /.col-lg-4 -->



        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="assets/images/hungryman.jpg" role="img"
            aria-label="Placeholder:" preserveAspectRatio="xMidYMid slice"  focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
          <h2 class="fw-normal">Compréhension émotionnelle</h2>
          <p>La compréhension émotionnelle c'est le fait de comprendre le processus émotionnel, faire des liens entre l’émotion, la situation,
            l’évaluation subjective et les besoins aussi bien pour soi que pour les autres. </p>
          <p><a class="btn btn-secondary" href="questiontrois.php">Fais l'état de tes émotions &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="assets\images\girljpg.jpg" role="img"
            aria-label="Placeholder: " preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
          <h2 class="fw-normal">Maitrise émotionnelle</h2>
          <p>La maîtrise de soi émotionnelle c'est la capacité à moduler ces émotions et à rester calme face à des situations stressantes,
             négatives ou qui provoquent de fortes réactions émotionnelles. </p>
          
          <p><a class="btn btn-secondary" href="questionquatre.php">Fais l'état de tes émotions &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="assets\images\hands.jpg" role="img"
            aria-label="Placeholder:" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
          <h2 class="fw-normal">Utilisation émotionnelle</h2>
          <p>L'utilisation émotionnelle, c'est également par la mise en relation cohérente de l'état émotionnel et du choix des activités. </p>
          <p><a class="btn btn-secondary" href="questioncinq.php">Fais l'état de tes émotions &raquo;</a></p>
        </div><!-- /.col-lg-4 -->


        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="assets\images\woman2.jpg" role="img"
            aria-label="Placeholder:" preserveAspectRatio="xMidYMid slice"  focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
          <h2 class="fw-normal">L'equilibre et l'harmonie émotionnelle </h2>
          <p>L'equilibre et l'harmonie émotionnelle c'est un état de stabilité psychique qui vous permet de tout affronter, même les situations les plus incommodantes.
             Il n'est pas question de quiétude ou de je-m'en-foutisme, mais bel et bien d'harmonie entre le corps et l'esprit.</p>
          <p><a class="btn btn-secondary" href="questionsix.php">Fais l'état de tes émotions &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

                        
       <hr class="featurette-divider">

    <div class="row featurette">
       <div class="col-md-7">
         <h2 class="featurette-heading fw-normal lh-1">Etes vous introverti. <span class="text-muted"> </span></h2>
         <p class="lead">L'introversion désigne l' état, ou la tendance,
           orienté par une gratification interne et le bien-être mental de l'individu concerné.
           Certains romanciers caractérisent les introvertis comme
           des individus dont l'énergie psychologique se concentre à travers la
           réflexion et qui diminue durant une interaction sociale.</p>
       </div>
       <div class="col-md-5">
         <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
           height="500" src="assets/images/woman1.jpg" role="img" aria-label="Placeholder: 500x500"
           preserveAspectRatio="xMidYMid slice" focusable="false">
         <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

        </div>
    </div>
      
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Etes vous extraverti. <span class="text-muted"></span></h2>
          <p class="lead">L'extraversion définit l'état, l'acte ou l'habitude, orientée par une gratification externe à la personnalité.
             Les individus extravertis tendent à se satisfaire des interactions sociales et à être enthousiastes, bavards, et assertifs notamment.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300"
            height="300" src="assets\images\extrawoman.jpg" role="img" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Etes vous ambiverti. <span class="text-muted"></span>
          </h2>
          <p class="lead">Vous êtes peut-être ambiverti. Médiatisé au début des années 2010,
            le terme ambiversion décrit les individus qui ne sont ni extravertis ni introvertis,
            mais plutôt un mélange des deux.
             Une personnalité flexible qui représenterait la majorité de la population.</p>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" src="assets/images/woman who think.jpg" role="img" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>



        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
    <div class="center btn">
      <button type="button" class="btn btn-primary btn-lg"><a class="btn btn-ask" href="question.php">Cliquer ici pour faire le test</button>
    </div>
    <?php include __DIR__ . '/partials/footer.php'; ?>
  </main>


  <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="assets/js/login.js"></script>

</body>

</html>
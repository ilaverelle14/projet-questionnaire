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
          <img class="bd-placeholder-img" width="100%" height="70%" src="assets/images/africanwoman.jpg" aria-hidden="true"
            preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" /></img>

          <div class="container">
            <div class="carousel-caption ">
              <h1>Tout savoir ?? propos de toi.</h1>
              <p>Met toi dans un environnement stable.</p>
              <p><a class="btn btn-lg btn-primary" href="inscription.php">Inscris toi aujourd'hui</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="70%" src="assets/images/women.jpg" aria-hidden="true"
            preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="70%" fill="#777" /></img>

          <div class="container">
            <div class="carousel-caption">
              <h1>D??couvre ton vrai Moi !.</h1>
              <p>R??ponx avec honn??tet?? meme si les r??ponses ne te plaisent pas.</p>
              <p><a class="btn btn-lg btn-primary" href="about-us.php">A propos de nous</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="bd-placeholder-img" width="100%" height="70%" src="assets/images/man2.jpg" aria-hidden="true"
            preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="70%" fill="#777" /></img>

          <div class="container">
            <div class="carousel-caption ">
              <h1>Sois toi!</h1>
              <p>???? ne dure que 15 minutes.</p>
              <p><a class="btn btn-lg btn-primary" href="inscription.php">Demarre maintenant</a></p>
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
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="assets/images/smilewoman.jpg" role="img"
            aria-label="Placeholder: " preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>

          <h2 class="fw-normal">HEUREUSE</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first
            column.</p>
          <p><a class="btn btn-secondary" href="#">Fais l'??tat de tes ??motions &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">

          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="assets/images/man1.jpg" role="img"
            aria-label="Placeholder:" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
          <h2 class="fw-normal">TRISTE</h2>
          <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.
          </p>
          <p><a class="btn btn-secondary" href="#">Fais l'??tat de tes ??motions&raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">

          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="assets/images/woman5.jpg" role="img"
            aria-label="Placeholder:" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
          <h2 class="fw-normal">EN COLERE</h2>
          <p>And lastly this, the third column of representative placeholder content.</p>
          <p><a class="btn btn-secondary" href="#">Fais l'??tat de tes ??motions &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Etes vous introverti. <span class="text-muted"> </span></h2>
          <p class="lead">L'introversion d??signe l' ??tat, ou la tendance, 
            orient?? par une gratification interne et le bien-??tre mental de l'individu concern??. 
            Certains romanciers caract??risent les introvertis comme
            des individus dont l'??nergie psychologique se concentre ?? travers la
             r??flexion et qui diminue durant une interaction sociale.</p>
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
          <p class="lead">L'extraversion d??finit l'??tat, l'acte ou l'habitude, orient??e par une gratification externe ?? la personnalit??.
             Les individus extravertis tendent ?? se satisfaire des interactions sociales et ?? ??tre enthousiastes, bavards, et assertifs notamment.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300"
            height="300" src="assets/images/woman4.jpg" role="img" aria-label="Placeholder: 500x500"
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
          <p class="lead">Vous ??tes peut-??tre ambiverti. M??diatis?? au d??but des ann??es 2010, 
            le terme ambiversion d??crit les individus qui ne sont ni extravertis ni introvertis, 
            mais plut??t un m??lange des deux.
             Une personnalit?? flexible qui repr??senterait la majorit?? de la population.</p>
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
      <button type="button" class="btn btn-primary btn-lg">Cliquer ici pour faire le test</button>
    </div>
    <?php include __DIR__ . '/partials/footer.php'; ?>
  </main>


  <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="assets/js/login.js"></script>

</body>

</html>
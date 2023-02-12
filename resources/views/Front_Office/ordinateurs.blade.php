<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/favicon.png ')}}">

    <title>Mon T-Shirt</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/album.css') }}" rel="stylesheet">
    <link href="{{asset('css/tshirt.css') }}" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</head>

<body>

    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">A propos</h4>
                        <p class="text-white">Bienvenue sur notre site de vente d'appareils électroniques Apple!<br><br>

                            Nous sommes fiers de vous offrir une large sélection de produits Apple de haute qualité, conçus pour offrir une expérience utilisateur inégalée.<br><br> Que vous recherchiez un nouvel iPhone, un MacBook ou un iPad, nous avons ce qu'il vous faut pour rester connecté et productif.

                            Nous comprenons que les consommateurs ont des attentes élevées en matière de qualité et de performance, c'est pourquoi nous ne proposons que des produits Apple authentiques et garantis. Chaque appareil est soigneusement inspecté pour garantir qu'il répond à nos normes élevées de qualité et de fiabilité.

                            Notre équipe de support client dévouée est là pour vous aider à trouver le produit qui vous convient le mieux. Nous sommes toujours disponibles pour répondre à vos questions et vous offrir des conseils pour trouver le produit idéal.

                            Nous sommes fiers de proposer des prix compétitifs sur tous nos produits Apple.<br> Et, pour vous offrir encore plus de valeur, nous proposons souvent des offres spéciales et des remises sur une sélection de produits.

                            Nous sommes convaincus que vous apprécierez votre expérience d'achat avec nous. Commandez dès maintenant et découvrez pourquoi nous sommes le choix préféré des consommateurs pour les appareils électroniques Apple de qualité supérieure.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">suivez nous sur Twitter</a></li>
                            <li><a href="#" class="text-white"> Facebook</a></li>
                            <li><a href="#" class="text-white">Nous écrire par mail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg>
                    <strong>Electronic store</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i> Panier</a>
                    </li>
                </ul>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-red">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="ordinateurs">Ordinateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Smarthphones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Autres articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                </ul>
            </div>
        </nav>
    </header>

    <main role="main">

        <section class="py-5 text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Commandez votre <br><span class="badge badge-light">article</span> <br><span class="badge badge-primary ">préféré </span>!</h1>
                <!-- <p class="lead text-muted">Dénichez THE T-Shirt de votre série, films préféré(e).</p> -->

            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('produits/macbookair.jpg')}}" class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <p class="card-text">MacBook air. <br>description Mac Book air.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">1119.00 €</span>
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('produits/macbookpro.jpg')}}" class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <p class="card-text">MacBook pro<br>description MacBook pro </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">1599.00 €</span>
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('produits/imac.jpg')}}" class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <p class="card-text">iMac <br>description de l'iMac </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">499.00 €</span>
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('produits/macmini.jpg')}}" class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <p class="card-text">Mac mini <br>description du Macmini </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">699.00 €</span>
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('produits/macstudio.jpg')}}" class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <p class="card-text">MacStudio <br>description du macstudio </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">2299.00 €</span>
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('produits/macpro.png')}}" class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <p class="card-text">Mac pro <br>description du Mac pro </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">6499.00 €</span>
                                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>Electronic store</p>
        </div>

    </footer>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/holder.min.js')}}"></script>
</body>

</html>
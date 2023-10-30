<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $page }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <style>
        @media (max-width: 767px) {
            .carousel-inner .carousel-item>div {
                display: none;
            }

            .carousel-inner .carousel-item>div:first-child {
                display: block;
            }
        }

        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

        @media (min-width: 768px) {

            .carousel-inner .carousel-item-end.active,
            .carousel-inner .carousel-item-next {
                transform: translateX(25%);
            }

            .carousel-inner .carousel-item-start.active,
            .carousel-inner .carousel-item-prev {
                transform: translateX(-25%);
            }
        }

        .carousel-inner .carousel-item-end,
        .carousel-inner .carousel-item-start {
            transform: translateX(0);
        }

        .offcanvas {
            width: 500px !important;
        }

        .docard {
            height: 150px;
            width: auto;
        }

        a {
            text-decoration: none;
        }

        .img-brand {
            height: 6rem;
            /* width: 10rem; */
        }
    </style>
</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <div class="d-flex justify-content-start">
                <a class="navbar-brand ms-1" href="#page-top">
                    <img src="images/logo_securitas_bgless.png" alt="..." />
                </a>

                <div class="col">
                    <h4 class="dore mb-0">SECURIT'AS</h4>
                    <p class="text-white fst-italic">Redifine security</p>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#apropos">Qui sommes nous?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Nos services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#paternaires">Paternaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="offcanvas" role="button" aria-controls="devis"
                            href="#devis">Devis</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#contecteznous" aria-controls="contecteznous">
                            Contactez-nous
                        </button>
                        <!-- <a class="nav-link" href="#contact">Contact</a> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <h2 class="fw-light opacity-75">Parce que votre tranquillité</h2>
            <h2 class="fw-light opacity-75">
                Et votre sécurité ne sont pas à prendre à la légère,
            </h2>
            <h2 class="fw-light opacity-75">Nous veillons sur vous et vos biens</h2> 
        </div>
    </header>

   
    
    @yield('content')

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">
                    Copyright &copy; SECURIT'AS 2023
                </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>



    <script>
        let items = document.querySelectorAll(".carousel .carousel-item");

        items.forEach((el) => {
            const minPerSlide = 4;
            let next = el.nextElementSibling;
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0];
                }
                let cloneChild = next.cloneNode(true);
                el.appendChild(cloneChild.children[0]);
                next = next.nextElementSibling;
            }
        });
    </script>

    <script>
        $(".count").counterUp({
            delay: 10,
            time: 2000,
        });
    </script>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>

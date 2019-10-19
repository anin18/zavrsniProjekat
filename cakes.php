<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ana, Marija,Nina">
    <meta name="description" content="Sweet Cakes-prezentacija torti">
    <meta name="keywords" content="torte, kolaci, porodicna firma.../">

    <!--Favicon-->
    <link rel="icon" type="icon/png" href="images/favicon/favicon-16x16.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <!--Custom page CSS-->
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/animation.css">

    <!--Hamburger menu CSS-->
    <link href="css/hamburgers.css" rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Home Sweet home</title>
</head>

<body>
    <!--HEADER STARTS HERE-->
    <header class="fixed-top py-0 mb-5">
        <div class="container">
            <nav class="navbar navbar-expand-md  p-0 ">
                <a class="navbar-brand py-0" href="#">
                    <img src="images/assets/logo.png" alt="logo">
                </a>

                <!--HAMBURGER MENU STARTS HERE-->
                <button class="hamburger hamburger--spin navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#main_menu" aria-controls="main_menu" aria-expanded="false"
                    aria-label="Toggle navigation" type=" button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <!--HAMBURGER MENU ENDS HERE-->


                <!--MAIN MENU STARTS HERE-->
                <div class="collapse navbar-collapse" id="main_menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Naslovna <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#about">O nama</a>
                        </li>
                        <li class="nav-item position-relative cake">
                            <a class="nav-link active" href="cakes.php">Torte
                                <span class="fa fa-caret-down position-absolute"></span> </a>
                                 <!--SUBMENU STARTS HERE-->
                            <ul class="submenu list-unstyled">
                                <li class="submenu-item">
                                    <a href="cakes_kids.php" class="submenu-link cake_kids">Za decu</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_18th.php" class="submenu-link cake_18th">Za 18.rodjendan</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_wedding.php" class="submenu-link cake_wedding">Za vencanje</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_creative.php" class="submenu-link cake_creative">Razni oblici</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_adults.php" class="submenu-link cake_adult">Svecane</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="my_cookie.php" class="submenu-link my_cookie" href="#">Kolaci</a>
                                </li>
                            </ul>
                            <!--SUBMENU ENDS HERE-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="comments.php">Komentari</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#contact">Kontakt</a>
                        </li>
                        <li class="nav-item" id="item">
                            
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--MAIN MENU ENDS HERE-->
    </header>
    <!--HEADER ENDS HERE-->

    <!--MAIN STARTS HERE-->
    <main style="background-image: url('images/assets/pink1.jpg')">
        <!--SECTION MAIN-SWEET STARTS HERE-->
        <section class="cakes-info text-center" id="#">
            <h1 class="title">Galerija proizvoda</h1>
            <div class="cakes-info-details">
                <h5 class="mb-5 ">Mi ispunjavamo sve Vaše zelje i ostvarujemo Vaše snove!
                    Možete da odaberete dizajn koji smo do sad vec imali ili da vi smislite nesto originalno,
                    posšaljete nam sliku,
                    a mi ćemo da joj damo i treću dimenziju.
                    </a></h5>
            </div>
        </section>
        <!--SECTION MAIN-SWEET ENDS HERE-->


        <!--SECTION CAKES-SORT STARTS HERE-->
        <section class="cakes-sort py-4 py-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4 mb-4  animation" data-animation="slideUp" data-delay="0.1s">
                        <article>
                            <figure class="mb-0">
                                <a href="cakes_kids.php"><img src="images/big/kids/b15.jpg" alt=""></a>
                            </figure>
                            <div class="cakes-sort-description p-3 bg-white">
                                <h2 class="cakes-sort-description-title text-info">Dečije torte</h2>
                                <p class="cakes-sort-description-detail">
                                    Obradujte svoje najmladje uksunim i maštovitim tortama.
                                </p>
                                <a href="cakes_kids.php" class="btn btn-info ">Pogledaj slike</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4 animation" data-animation="slideUp" data-delay="0.4s">
                        <article>
                            <figure class="mb-0">
                                <a href="cakes_18th.php"><img src="images/big/18th/ba5.jpg" alt=""></a>
                            </figure>
                            <div class="cakes-sort-description p-3 bg-white">
                                <h2 class="cakes-sort-description-title text-info">Punoletstvo</h2>
                                <p class="cakes-sort-description-detail">
                                    Uzivajte u odraslom dobu i ne prestanite da budete deca.
                                </p>
                                <a href="cakes_18th.php" class="btn btn-info ">Pogledaj slike</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4 animation" data-animation="slideUp" data-delay="0.7s">
                        <article>
                            <figure class="mb-0">
                                <a href="cakes_wedding.php" > <img src="images/big/wedding/w1.jpg" alt=""></a> 
                            </figure>
                            <div class="cakes-sort-description p-3 bg-white">
                                <h2 class="cakes-sort-description-title text-info">Za svadbu</h2>
                                <p class="cakes-sort-description-detail">
                                    Elegantne, bogate, ukusne za vas najsladji dan!
                                </p>
                                <a href="cakes_wedding.php" class="btn btn-info ">Pogledaj slike</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4 animation" data-animation="slideUp" data-delay="1.1s">
                        <article>
                            <figure class="mb-0">
                                <a href="cakes_creative.php"> <img src="images/big/creative/cr5.jpg" alt=""></a>
                            </figure>
                            <div class="cakes-sort-description p-3 bg-white">
                                <h2 class="cakes-sort-description-title text-info">Razne kreacije</h2>
                                <p class="cakes-sort-description-detail">
                                    Ispunjavamo Vaše želje,pravimo oblik koji Vi poželite.
                                </p>
                                <a href="cakes_creative.php" class="btn btn-info ">Pogledaj slike</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4 animation" data-animation="slideUp" data-delay="1.4s">
                        <article>
                            <figure class="mb-0">
                                <a href="cakes_adults.php"> <img src="images/big/adults/a20.jpg" alt=""></a>
                            </figure>
                            <div class="cakes-sort-description p-3 bg-white">
                                <h2 class="cakes-sort-description-title text-info">Svečane</h2>
                                <p class="cakes-sort-description-detail">
                                    Kada idete u goste, evo rešenja za prijatna i slatka iznenadjenja,
                                </p>
                                <a href="cakes_adults.php" class="btn btn-info ">Pogledaj slike</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-4 animation" data-animation="slideUp" data-delay="1.7s">
                        <article>
                            <figure class="mb-0">
                                <a href="my_cookie.php" ><img src="images/big/cookie/cookie5.jpg" alt=""></a>
                            </figure>
                            <div class="cakes-sort-description p-3 bg-white">
                                <h2 class="cakes-sort-description-title text-info">Kolači</h2>
                                <p class="cakes-sort-description-detail">
                                    Bilo da su posni ili mrsni, izled ( a i ukus im se ne razlikuje).
                                </p>
                                <a href="my_cookie.php" class="btn btn-info ">Pogledaj slike</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!--SECTION CAKES-GALLERY ENDS HERE-->
       
         
    </main>
    <!--MAIN ENDS HERE-->

    <!--FOOTER STARTS HERE-->
    <footer class="bg-dark py-2 py-md-3">
        <div class="container text-center">
            <p class="small mb-0 text-warning font-italic">Made by Ana, Marija, Nina 2019.</p>
        </div>
    </footer>
    <!--FOOTER ENDS HERE-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--Custom pages JS-->
   
    <!--All pages js-->
    <script src="js/main.js"></script>
</body>

<script type="text/javascript">

	$(document).ready(() => {
		let login = '<a class="nav-link" href="login.php"> Prijavite se <span class="fa fa-user"></span></a>';
		let logout = '<a class="nav-link" href="includes/logout.inc.php"> Odjava <span class="fa fa-user"></span></a>';
		let item = $('#item');
		$.post("includes/userExist.inc.php")
			.done(function (result) {
				if (result == 'true') {
					item.append(logout);
				} else {
					item.append(login);
				}
			});
	});

</script>

</html>

<?php
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Signin</title>
        <meta name="theme-color" content="#7952b3">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <style>
            body {
                color: #5a5a5a;
            }
            /* Featurettes
            ------------------------- */

            .featurette-divider {
            margin: 5rem 0; /* Space out the Bootstrap <hr> more */
            }

            /* Thin out the marketing headings */
            .featurette-heading {
            font-weight: 300;
            line-height: 1;
            /* rtl:remove */
            letter-spacing: -.05rem;
            }
            /* RESPONSIVE CSS
                -------------------------------------------------- */

                @media (min-width: 40em) {
                /* Bump up size of carousel content */
                .carousel-caption p {
                    margin-bottom: 1.25rem;
                    font-size: 1.25rem;
                    line-height: 1.4;
                }

                .featurette-heading {
                    font-size: 50px;
                }
                }

                @media (min-width: 62em) {
                .featurette-heading {
                    margin-top: 7rem;
                }
                }
                
                /* MARKETING CONTENT
                -------------------------------------------------- */

                /* Center align the text within the three columns below the carousel */
                .marketing .col-lg-4 {
                margin-bottom: 1.5rem;
                text-align: center;
                }
                .marketing h2 {
                font-weight: 400;
                }
                /* rtl:begin:ignore */
                .marketing .col-lg-4 p {
                margin-right: .75rem;
                margin-left: .75rem;
                }
                /* rtl:end:ignore */
                /* CUSTOMIZE THE CAROUSEL
                -------------------------------------------------- */

                /* Carousel base class */
                .carousel {
                margin-bottom: 4rem;
                }
                /* Since positioning the image, we need to help out the caption */
                .carousel-caption {
                bottom: 3rem;
                z-index: 10;
                }

                /* Declare heights because of positioning of img element */
                .carousel-item {
                height: 32rem;
                }
                .carousel-item > img {
                position: absolute;
                top: 0;
                left: 0;
                min-width: 100%;
                height: 32rem;
                }
                .bd-placeholder-img {
                    font-size: 1.125rem;
                    text-anchor: middle;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    user-select: none;
                }

                @media (min-width: 768px) {
                    .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                    }
                }


        </style>
	</head>
    <body>
        <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#home">UTDC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </ul>
                <?php
                    if($sign == true){?>
                    <a href="login.php"><button class="btn btn-outline-success" type="submit">Login</button></a>&nbsp;
                    <a href="signup.php"><button class="btn btn-outline-success" type="submit">Sign up</button></a>
                    <?php }
                    else{?>
                        <form class="d-flex" action="index.php" method="post">
                            <button class="btn btn-outline-success" type="submit" name="sign-out">sign out</button>
                        </form>
                    <?php }
                ?>
                </div>
            </div>
        </nav>
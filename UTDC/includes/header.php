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
            #btn-back-to-top {
                position: fixed;
                bottom: 20px;
                right: 20px;
                display: none;
            }
            .e1{
                /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#1c3d0b+0,22d658+65,6ecc7c+100 */
                background: #3a7f3b; /* Old browsers */
                background: -moz-linear-gradient(left,  #3a7f3b 40%, #22d658 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(left, #3a7f3b 40%, #22d658 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to right, #3a7f3b 40%, #22d658 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3a7f3b', endColorstr='#22d658',GradientType=1 ); /* IE6-9 */

            }
            .e2{
                /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#1c3d0b+0,22d658+65,6ecc7c+100 */
                background: #22d658; /* Old browsers */
                background: -moz-linear-gradient(right,  #3a7f3b 40%, #22d658 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(right, #3a7f3b 40%, #22d658 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to left, #3a7f3b 40%, #22d658 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#22d658', endColorstr='#3a7f3b',GradientType=1 ); /* IE6-9 */

            }
            body {
                color: #5a5a5a;
                background-color:#f4f4f4;
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
                .nav-link:hover{
                    color:#198754!important;
                    text-decoration:underline;
                }
                .dropdown-menu{
                    background-color: #f8f9fa;
                }
                .dropdown-item:hover{
                    background-color: #198754;
                    color: #f4f4f4;
                }


        </style>
	</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
            <div class="container-fluid">
                <a class="navbar-brand mx-4" href="#home">UTDC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link navbar-elements" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link navbar-elements" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link navbar-elements" href="#contact">Contact</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link navbar-elements dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li>
                            <?php if($sign == false){ ?>
                            <li class="nav-item dropdown">
                            <a class="nav-link navbar-elements dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="viewProfile.php">View profile</a></li>
                            </ul>
                            </li>
                            <?php } ?>
                        </ul>
                        <div class="d-flex">
                    <?php
                        if($sign == true){?>
                        <a href="login.php"><button class="btn btn-outline-success" type="submit">Login</button></a>&nbsp;
                        <a href="signup.php"><button class="btn btn-outline-success" type="submit">Sign up</button></a>
                        </div>
                        <?php }
                        else{?>
                            <form class="d-flex" action="index.php" method="post">
                                <button class="btn btn-outline-success" type="submit" name="sign-out">Sign out</button>
                            </form>
                        <?php }
                    ?>
                </div>
            </div>
        </nav>
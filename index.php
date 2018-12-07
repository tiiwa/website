<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>tiiwa</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700,900" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="cover.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand">
        <img src="assets/tiiwa-logo-white.svg" class="logo d-inline-block align-top" alt="tiiwa">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#who-we-are">Who We Are</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#what-we-do">What We Do</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Contact Us</a>
            </li>
        </ul>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfAPs1-9v3D6-l_ENTD291Cn9qjHMBp0cE6LXpc4aZQBYS9Yg/viewform?usp=sf_link"
           target="_blank" class="btn btn-lg btn-secondary">Sign Up</a>
    </div>
</nav>

<div class="intro main">
    <img src="assets/tiiwa-pattern.png" class="tiiwa-pattern">
    <h1 class="cover-heading">Change<br>begins<br>with us.</h1>
</div>

<!-- Large modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container narrow">
                    <h5 class="modal-title" id="exampleModalLabel">Contact us</h5>
                    <p>This is some amazing text about how people can reach out to us</p>

                    <form id="contact-form" name="contact-form" role="form" method="post" action="mail.php"   data-toggle="validator">
                        <div class="form-group name">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="required"
                                   data-error="Please enter your full name." value="Yaw">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group email">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                                   required="required" data-error="Please enter a valid email."
                                   value="joansah@gmail.com">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group message">
                                <textarea class="form-control" id="message" name="message" required="required"
                                          data-error="Please enter a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>

                        <input type="submit" class="btn btn-primary contact-btn" value="Submit"></input>
                    </form>

                </div>
            </div>
            <div class="modal-footer">
                <br>
                <div class="social-media modal-social">
                    <a href="https://www.facebook.com/tiiwaafrica/">
                        <img class="blk-icons" src="assets/facebook-blk-logo.svg">
                    </a>
                    <a href="https://twitter.com/tiiwaafrica/">
                        <img class="blk-icons" src="assets/twitter-blk-logo.svg">
                    </a>
                    <a href="https://www.instagram.com/tiiwaafrica/">
                        <img class="blk-icons" src="assets/instagram-blk-logo.svg">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="detail">
    <img src="assets/map.png" class="map">
    <div class="container row" id="who-we-are">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <h3>Who are we</h3>
            <img src="assets/header-bar.png" class="header-bar">
            <p>
                Tiiwa is a community of Africans abroad that are passionate about supporting
                initiatives that promote the development of the African continent. We are building
                a future where Africans across the world can collaborate to develop sustainable
                solutions and innovative ideas for the betterment of the continent.
            </p>
            <br>
            <h4>Our Mission</h4>
            <p>
                To inspire and equip Africans abroad to support initiatives that promote the
                development of the continent.
            </p>
            <br>
            <h4>Our Vision</h4>
            <p>To put Africans at the forefront of Africa’s development.</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 unite-text">
            <div class="container">
            <span>Uniting Africans globally for Africa’s development.<span>
            </div>
        </div>
    </div>
    <br>
    <div class="container row" id="what-we-do">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <h3> What we do</h3>
            <img src="assets/header-bar.png" class="header-bar">
            <br>
            <br><br>
        </div>
    </div>
    <div class="container row what-we-do">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <h4>Meetups</h4>
            <p>
                tiiwa meetups feature entrepreneurs with initiatives that promote the development of Africa,
                sharing about the purpose, vision, and challenges of their entreprise. We typically invite
                one entrepreneur based in Africa and another entrepreneur based abroad to share their ideas
                and provide actionable ways we can support their vision.
            </p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <h4>Labs</h4>
            <p>
                tiiwa labs is a space for members of the tiiwa community to volunteer their technical skills
                towards solving a problem proposed by an entrepreneur or stakeholder based in Africa.
                Multiple labs may run concurrently depending on the availability of volunteers, with each lab
                spanning a period of 3 months. tiiwa Labs will be launching soon. Stay tuned.
            </p>
        </div>
    </div>
    <div class="container row next-meetup">
        <div class="col"></div>
        <div class="col"></div>
    </div>
</div>

<div class="footer">
    <div class="main">
        <img src="assets/tiiwa-pattern.png" class="tiiwa-pattern footer-pattern">
    </div>
    <div class="footer-logo-corner">
        <img src="assets/tiiwa-logo-white.svg" class="logo d-inline-block align-top" alt="tiiwa">
        <p>copyright tiiwa 2018</p>
    </div>
    <div class="social-media">
        <a href="#" class="contact-us" data-toggle="modal" data-target=".bd-example-modal-lg">Contact Us</a>
        <a href="https://www.facebook.com/tiiwaafrica/">
            <img id="facebook" src="assets/facebook-logo.svg">
        </a>
        <a href="https://twitter.com/tiiwaafrica/">
            <img id="twitter" src="assets/twitter.svg">
        </a>
        <a href="https://www.instagram.com/tiiwaafrica/">
            <img id="instagram" src="assets/instagram.svg">
        </a>
    </div>
    <div class="footer-content">
        <span id="bold-text">Be a part of the change.</span><br>
        <span id="regular-text">Sign up to learn about tiiwa.</span><br>
        <a id="footer-btn"
           href="https://docs.google.com/forms/d/e/1FAIpQLSfAPs1-9v3D6-l_ENTD291Cn9qjHMBp0cE6LXpc4aZQBYS9Yg/viewform?usp=sf_link"
           target="_blank" class="btn btn-lg btn-secondary">Sign Up</a>
    </div>
</div>
</body>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js " integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
<script>
	$(document).ready(function () {
		$('#contact-form').validator();

		//
		// $(".contact-btn").click(function (e) {
		//
		// 	if (!e.isDefaultPrevented()) {
		// 		alert("Handler for .click() called.");
		// 	}
		//
		// });
	})
</script>
</body>
</html>

<?php

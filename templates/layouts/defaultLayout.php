<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Catalog - test</title>
    <meta content="Catalog is..." name="description">
    <meta content="catalog, fruits" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="/">Catalog<span>.</span></a></h1>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="/">Home</a></li>
                <li><a href="#comments">Comments</a></li>
                <li><a href="login">Login</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Welcome to <span>Catalog</span>
        </h1>
        <h2>Great Right Now Fruit</h2>
        <div class="d-flex">
            <a href="#products" class="btn-get-started scrollto">Get Started</a>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <?= $this->content ?>

</main><!-- End #main -->

<!-- ======= Modal ======= -->
<div class="modal fade" id="site-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="site-modal-title">Catalog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="response-body">Catalog</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div><!-- End Modal -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Catalog</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://despetovic.rs/" target="_blank">Nikola Despetovic</a>
        </div>
    </div>
</footer><!-- End Footer -->

<!-- Vendor JS Files -->
<script src="assets/lib/jquery/jquery-3.5.1.min.js"></script>
<script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
<?php

$title = "WiWP | 404 Error";

$metaD = "Welcome to Workshops in Wild Places";

include 'includes/header.php';

?>
<body>
   <!--banner-->

    <div role="banner" class="container-fluid bg-light p-0 animated fadeIn">
      <div id="hero" class="row d-flex m-0">
            <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center text-center text-white fs banner-home p-5">
                <h1 class="site-title ts l-h mb-3 w-100">
                    <span class="d-inline-block table-lg" data-aos="fade-down" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">Page</span> not <span class="d-inline-block pink table-lg" data-aos="fade-right" data-aos-easing="ease-in-out-sine" data-aos-duration="1000">Found</span>
                </h1>
                <p>Sorry, but the page you were trying to view does not exist.</p>
                <a href="/index"><button class="btn btn-outline-light mt-2">Return home</button></a>
            </div>
        </div>
    </div>
</body>
<?php

include 'includes/footer.php';

?>
<!-- IE needs 512+ bytes: https://blogs.msdn.microsoft.com/ieinternals/2010/08/18/friendly-http-error-pages/ -->

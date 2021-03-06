<!DOCTYPE html>
<html lang="en">
<?php include("_inc_head.php") ?>


    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />

    </head>

    <body>

        <div id="main">
            <?php include("_inc_header.php") ?>
                <!-- Breadcrumb Area start -->
                <section class="breadcrumb-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-content">
                                    <h1 class="breadcrumb-hrading">Contact Page</h1>
                                    <ul class="breadcrumb-links">
                                        <li><a href="index.html">Home</a></li>
                                        <li>Contact Us</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Breadcrumb Area End -->
                <!-- contact area start -->
                <div class="contact-area mtb-60px">
                    <div class="container">
                        <div class="contact-map mb-10">
                            <div id="map" style="height: 500px;"></div>
                        </div>
                        <div class="custom-row-2">
                            <div class="col-lg-4 col-md-5">
                                <div class="contact-info-wrap">
                                    <div class="single-contact-info">
                                        <div class="contact-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="contact-info-dec">
                                            <p>+012 345 678 102</p>
                                            <p>+012 345 678 102</p>
                                        </div>
                                    </div>
                                    <div class="single-contact-info">
                                        <div class="contact-icon">
                                            <i class="fa fa-globe"></i>
                                        </div>
                                        <div class="contact-info-dec">
                                            <p><a href="#">urname@email.com</a></p>
                                            <p><a href="#">urwebsitenaem.com</a></p>
                                        </div>
                                    </div>
                                    <div class="single-contact-info">
                                        <div class="contact-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="contact-info-dec">
                                            <p>Address goes here,</p>
                                            <p>street, Crossroad 123.</p>
                                        </div>
                                    </div>
                                    <div class="contact-social">
                                        <h3>Follow Us</h3>
                                        <div class="social-info">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="ion-social-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-youtube"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-google"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="contact-form">
                                    <div class="contact-title mb-30">
                                        <h2>Get In Touch</h2>
                                    </div>
                                    <form class="contact-form-style" id="contact-form" action="https://htmldemo.hasthemes.com/ecolife-preview/ecolife//front/php/mail.php" method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input name="name" placeholder="Name*" type="text" />
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="email" placeholder="Email*" type="email" />
                                            </div>
                                            <div class="col-lg-12">
                                                <input name="subject" placeholder="Subject*" type="text" />
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea name="message" placeholder="Your Message*"></textarea>
                                                <button class="submit" type="submit">SEND</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact area end -->
                <?php include("_inc_footer.php") ?>
        </div>

        <?php include("_inc_modals.php") ?>

            <?php include("_inc_js.php") ?>

                <script>
                    mapboxgl.accessToken = 'pk.eyJ1IjoiYW1pbmVlbGtoYWwiLCJhIjoiY2oyZ2Rka2Q1MDA2ZTJxbnp4N3JyanY5cSJ9.qQOReJkghudJfXCywxzlyA';
                    var map = new mapboxgl.Map({
                        container: 'map',
                        center: [-6.8448772, 33.9964135],
                        style: 'mapbox://styles/mapbox/streets-v11',
                        scrollZoom: false,
                        zoom: 15
                    });
                    marker = new mapboxgl.Marker({
                            color: 'blue'
                        }).setLngLat([-6.8448772, 33.9964135])
                        .addTo(map);
                </script>
    </body>

</html>
<!DOCTYPE html>
<html lang="en">
<?php include("_inc_head.php") ?>
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
                                    <h1 class="breadcrumb-hrading">Login / Register Page</h1>
                                    <ul class="breadcrumb-links">
                                        <li><a href="index.html">Home</a></li>
                                        <li>Login / Register</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Breadcrumb Area End -->
                <!-- login area start -->
                <div class="login-register-area mb-60px mt-53px">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                                <div class="login-register-wrapper">
                                    <div class="login-register-tab-list nav">
                                        <a class="active" data-toggle="tab" href="#lg1">
                                            <h4>login</h4>
                                        </a>
                                        <a data-toggle="tab" href="#lg2">
                                            <h4>register</h4>
                                        </a>
                                    </div>
                                    <div class="tab-content">
                                        <div id="lg1" class="tab-pane active">
                                            <div class="login-form-container">
                                                <div class="login-register-form">
                                                    <form action="https://htmldemo.hasthemes.com/ecolife-preview/ecolife/assets/php/mail.php" method="post">
                                                        <input type="text" name="user-name" placeholder="Username" />
                                                        <input type="password" name="user-password" placeholder="Password" />
                                                        <div class="button-box">
                                                            <div class="login-toggle-btn">
                                                                <input type="checkbox" />
                                                                <a class="flote-none" href="javascript:void(0)">Remember
                                                                    me</a>
                                                                <a href="#">Forgot Password?</a>
                                                            </div>
                                                            <button type="submit"><span>Login</span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="lg2" class="tab-pane">
                                            <div class="login-form-container">
                                                <div class="login-register-form">
                                                    <form action="https://htmldemo.hasthemes.com/ecolife-preview/ecolife/assets/php/mail.php" method="post">
                                                        <input type="text" name="user-name" placeholder="Username" />
                                                        <input type="password" name="user-password" placeholder="Password" />
                                                        <input name="user-email" placeholder="Email" type="email" />
                                                        <div class="button-box">
                                                            <button type="submit"><span>Register</span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- login area end -->
                <?php include("_inc_footer.php") ?>
        </div>

        <?php include("_inc_modals.php") ?>
            <?php include("_inc_js.php") ?>
    </body>

</html>
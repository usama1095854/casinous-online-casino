<?php include 'templates/header.php'; ?>


<!-- inner hero section start -->
<section class="inner-banner bg_img" style="background: url('assets/images/inner-banner/bg2.jpg') top;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-6 text-center">
                <h2 class="title text-white typing-effect">Sign Up</h2>
                <ul class="breadcrumbs d-flex flex-wrap align-items-center justify-content-center">
                    <li><a href="index.php">Home</a></li>
                    <li>Sign Up</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- inner hero section end -->

<!-- Account Section Starts Here -->
<section class="account-section overflow-hidden bg_img" style="background:url(assets/images/account/bg.jpg)">
    <div class="container">
        <div class="account__main__wrapper">
            <div class="account__form__wrapper sign-up">
                <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt="logo"></a></div>
                <form class="account__form form row g-4">
                    <div class="col-xl-6 col-md-6">
                        <div class="form-group">
                            <div for="fname" class="input-pre-icon"><i class="las la-user"></i></div>
                            <input id="fname" type="text" class="form--control form-control style--two" placeholder="Frist Name" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="form-group">
                            <div for="lname" class="input-pre-icon"><i class="las la-user"></i></div>
                            <input id="lname" type="text" class="form--control form-control style--two" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="form-group">
                            <div for="country" class="input-pre-icon"><i class="las la-globe"></i></div>
                            <select class="form-select form--control style--two">
                                <option>Bangladesh</option>
                                <option>India</option>
                                <option>Pakistan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="input-group">
                            <span class="input-group-text text--base style--two">+80</span>
                            <input type="text" class="form--control form-control style--two" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="form-group">
                            <div for="email" class="input-pre-icon"><i class="las la-envelope"></i></div>
                            <input id="email" type="email" class="form--control form-control style--two" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="form-group">
                            <div for="username" class="input-pre-icon"><i class="las la-user"></i></div>
                            <input id="username" type="text" class="form--control form-control style--two" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="form-group">
                            <div for="pass" class="input-pre-icon"><i class="las la-lock"></i></div>
                            <input id="pass" type="password" class="form--control form-control style--two" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="form-group">
                            <div for="pass" class="input-pre-icon"><i class="las la-lock"></i></div>
                            <input id="pass" type="password" class="form--control form-control style--two" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <button class="cmn--btn active w-100 btn--round" type="submit">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="account__content__wrapper">
                <div class="content text-center text-white">
                    <h3 class="title text--base mb-4">Welcome to Casinio</h3>
                    <p class="">Sign in your Account. Atque, fuga sapiente, doloribus qui enim tempora?</p>
                    <p class="account-switch mt-4">Already have an Account ? <a class="text--base ms-2" href="sign-in.php">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Account Section Ends Here -->

<?php include 'templates/footer.php'; ?>
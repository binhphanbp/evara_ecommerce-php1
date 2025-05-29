<!--=============== MAIN ===============-->
<main class="main">
    <!--=============== BREADCRUMB ===============-->
    <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
            <li><a href="index.html" class="breadcrumb__link">Home</a></li>
            <li><span class="breadcrumb__link"></span></li>
            <li><span class="breadcrumb__link">Login / Register</span></li>
        </ul>
    </section>

    <!--=============== LOGIN-REGISTER ===============-->
    <section class="login-register section--lg">
        <div class="login-register__container container grid">
            <div class="login">
                <h3 class="section__title">Login</h3>

                <!-- Form Login -->
                <form id="loginForm" class="form grid">
                    <div class="form-group">
                        <label for="loginEmail">Email</label>
                        <input
                                type="text"
                                id="loginEmail"
                                placeholder="abc@gmail.com"
                                class="form__input"
                        />
                        <span id="loginEmailError" class="error"></span>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input
                                type="password"
                                id="loginPassword"
                                placeholder="Type your password"
                                class="form__input"
                        />
                        <span id="loginPasswordError" class="error"></span>
                    </div>
                    <div class="form__btn">
                        <button class="btn" type="submit">Login</button>
                        <button class="btn btn-delete" onclick="clearLoginForm()">
                            Delete form
                        </button>
                    </div>
                </form>
            </div>
            <div class="register">
                <h3 class="section__title">Create an Account</h3>

                <!-- Form Register -->
                <form id="registerForm" class="form grid">
                    <div class="form-group">
                        <label for="regUsername">Username</label>
                        <input
                                type="text"
                                id="regUsername"
                                placeholder="Username"
                                class="form__input"
                        />
                        <span id="regUsernameError" class="error"></span>
                    </div>
                    <div class="form-group">
                        <label for="regEmail">Email</label>
                        <input
                                type="text"
                                id="regEmail"
                                placeholder="abc@gmail.com"
                                class="form__input"
                        />
                        <span id="regEmailError" class="error"></span>
                    </div>
                    <div class="form-group">
                        <label for="regPassword">Password</label>
                        <input
                                type="password"
                                id="regPassword"
                                placeholder="Type your password"
                                class="form__input"
                        />
                        <span id="regPasswordError" class="error"></span>
                    </div>
                    <div class="form-group">
                        <label for="regConfirmPassword">Confirm Password</label>
                        <input
                                type="password"
                                id="regConfirmPassword"
                                placeholder="Confirm your password"
                                class="form__input"
                        />
                        <span id="regConfirmPasswordError" class="error"></span>
                    </div>
                    <div class="form__btn">
                        <button class="btn" type="submit">Submit &amp; Register</button>
                        <button class="btn btn-delete" onclick="clearLoginForm()">
                            Delete form
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--=============== NEWSLETTER ===============-->
    <section class="newsletter section">
        <div class="newsletter__container container grid">
            <h3 class="newsletter__title flex">
                <img
                        src="./assets/img/icon-email.svg"
                        alt=""
                        class="newsletter__icon"
                />
                Sign in to Newsletter
            </h3>
            <p class="newsletter__description">
                ...and receive $25 coupon for first shopping.
            </p>
            <form action="" class="newsletter__form">
                <input
                        type="text"
                        placeholder="Enter Your Email"
                        class="newsletter__input"
                />
                <button type="submit" class="newsletter__btn">Subscribe</button>
            </form>
        </div>
    </section>
</main>
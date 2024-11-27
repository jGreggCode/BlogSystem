<!-- HEADER SECTION -->
<?php 
    include './public/pages/header.html';
?>
<body>
    <div class="my-container">
    <div class="forms-container">
        <div class="signin-signup">
        <form class="sign-in-form">
            <h2 class="title">Sign in</h2>
                <small style="text-align: center;">Rantle – Where every thought finds its voice.</small>
                <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username or email" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" />
            </div>
            <input type="button" name="loginBtn" id="loginBtn" value="Login" class="my-btn solid" />
            <a id="forgotPassword"><p class="social-text">Forgot Password</p></a>
        </form>

        <form class="sign-up-form">
            <h2 class="title">Sign up</h2>
                <small style="text-align: center;">Sign up now and let the world hear your side of the story!</small>
                <div id="registerMessage"></div>
                <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="registerUsername" id="registerUsername" placeholder="Username" />
            </div>
            <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" name="registerEmail" id="registerEmail" placeholder="Email" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="registerPassword" id="registerPassword" placeholder="Password" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="registerRePassword" id="registerRePassword" placeholder="Confirm Password" />
            </div>
            <input type="button" name="registerBtn" id="registerBtn" class="my-btn" value="Sign up" />
        </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
        <div class="content">
            <h3>Welcome to Rantle!</h3>
            <p>
            Join the community where you can share your thoughts, rants, and life updates with the world!
            </p>
            <button class="my-btn transparent" id="sign-up-btn">
            Sign up
            </button>
        </div>
        <img src="./public/img/Login.svg" class="image" alt="" />
        </div>
            <div class="panel right-panel">
                <div class="content">
                <h3>Welcome back to Rantle! </h3>
                <p>
                Ready to share more? Log in and keep ranting!
                </p>
                <button class="my-btn transparent" id="sign-in-btn">
                Sign in
                </button>
            </div>
            <img src="./public/img/Register.svg" class="image" alt="" />
        </div>
    </div>
    </div>

    <!-- FOOTER SECTION -->
    <?php
        include './public/pages/footer.html';
    ?>
</body>

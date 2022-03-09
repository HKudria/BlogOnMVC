<h1>Auth page</h1>

    <form method="post">
        <div class="form-group">
            <label for="auth-login">Login</label>
            <input type="text" class="form-control" id="auth-login" name="login">
        </div>
        <div class="form-group">
            <label for="auth-password">Password</label>
            <input type="password" class="form-control" id="auth-password" name="password">
        </div>
        <div class="form-group">
            <input type="checkbox" class="form-check-input" id="login-remember" name="remember">
            <label class="form-check-label" for="login-remember">
                Remember auth to 1 month
            </label>
        </div>
        <hr>
        <button class="btn btn-primary">Auth now</button>
        <?php if($authErr): ?>
        <hr>
        <div class="alert alert-danger">
            Incorrect auth data
        </div>
        <?php endif; ?>
    </form>
    <a href="<?php echo BASE_URL ?>">Go to main page</a>

<?php

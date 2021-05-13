<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once 'layout/scriptUser.php' ?>
</head>

<body>
    <div class="wrap">
        <div id="login">
            <h3 class="text-center text-white pt-5">Login form</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12" <?php if (isset($error) == false) {
                                                                    echo 'style="height:406px;"';
                                                                } else {
                                                                    echo 'style="height:325px;"';
                                                                }
                                                                ?>>
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center text-info">Login</h3>
                                <div class="form-group">
                                    <label for="username" class="text-info">*Username:</label><br>
                                    <input type="text" name="username" id="username" class="form-control">
                                    <?php if (isset($error) == false) {
                                        echo '<span style="color: red;">' . $usernameErr . '</span>';
                                    } ?>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">*Password:</label><br>
                                    <input type="password" name="password" id="password" class="form-control">
                                    <?php if (isset($error) == false) {
                                        echo '<span style="color: red;">' . $passwordErr . '</span>';
                                    } ?>
                                </div>

                                <div class="form-group">
                                    <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                    <input type="submit" name="submitForm" class="btn btn-info btn-md" value="submit">
                                </div>
                                <div id="register-link" class="text-right">
                                    <a href="?page=register" class="text-info">Register here</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
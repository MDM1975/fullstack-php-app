<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment III</title>
    <link rel="stylesheet" href="style/styles.css">
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/ios-filled/50/ffffff/book.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./utils/auth_user_utils.js"></script>
    <script src="./utils/register_user_utils.js"></script>
</head>
<body>
    <div id="registerFormContainer" style="display: none;">
       <?php include 'components/register_form.php' ?> 
    </div>
    <div class="container" style="margin-top: 75px;">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title
                        text-center">Login</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="username" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" data-id="loginInput" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="userPassword" class="form-control" id="userPassword" data-id="loginInput" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2 pt-2">
                                <button type="button" class="btn btn-primary" onclick="submitLogin()" >Login</button>
                                <button type="button" class="btn btn-outline-primary" onclick="openRegistrationForm()">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
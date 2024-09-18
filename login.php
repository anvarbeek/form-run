<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Log in</title>
</head>

<body style="background-color: #008AB8;">
    <div class="conteiner">
        <div class="row">
            <div class="col d-flex justify-content-center mt-5">
                <div class="card shadow-lg bg-light w-60">
                    <div class="card-head col-sm">
                        <a type="button" class="btn close d-flex justify-content-end" href="index.php" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                        <h1 class="text-primary fonnt">Uz<span class="text-muted ">Coder</span></h1>
                        <p class="col-sm text-secondary m-2 d-flex justify-content-center">Log in</p>
                    </div>
                    <form action="login.php" method="post">
                        <div class="form-group card-body col-sm ">
                            <div class="form-control mt-3">
                                <label for="" class="form-label">Email:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-control mt-3">
                                <label for="" class="form-label">Password:</label>  
                                <input type="password" class="form-control">
                            </div>
                            <div class="mt-3 d-flex justify-content-between">
                                <a href="password.php" class="text-decoration-none">Forgot password? </a>
                                <div class="flaot-right">
                                    <p>Create account <a href="signup.php" class="text-decoration-none">Sign Up</a></p>
                                </div>

                            </div>
                            <input type="submit" class="btn btn-success w-100 mt-4 ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
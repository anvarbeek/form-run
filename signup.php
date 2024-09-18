<?php include 'header.php';
include 'connect.php';


session_start();
$errors = [];
$f_name = $l_name = $email = $password = $confirm_password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["f_name"])){
        $errors[] = "First Name is required";
    }else{
        $f_name = $_POST["f_name"];
    }
    if(empty($_POST["l_name"])){
        $errors[] = "Last Name is required";
    }else{
        $l_name = $_POST["l_name"];
    }
    if(empty($_POST["email"])){
        $errors[] = "Email is required";
    }else{
        $email = $_POST["email"];
    }
    if(empty($_POST["phone"])){
        $errors[] = "Phone Number is required";
    }else{
        $phone = $_POST["phone"];
    }
    if(empty($_POST["password"]) === empty($_POST["confirm_password"])){
    $errors[] = "Password is required";
    }else{
        $password = $_POST["password"];
    }

    if(empty($errors)){

        $sql = "INSERT INTO login (f_name, l_name, email, phone, password) values ('$f_name', '$l_name', '$email', '$phone', '$password')";

        $r =mysqli_query($conn, $sql);



    }
}

?>
    <div class="conteiner">
        <div class="row">
            <div class="col d-flex justify-content-center mt-5">
                <div class="card shadow-lg  bg-light">
                    <div class="card-head col-sm">
                        <a type="button" class="btn close d-flex justify-content-end" href="index.php" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                        <h1 class="text-primary fonnt">Uz<span class="text-muted ">Coder</span></h1>
                        <h3 class="text-secondary d-flex justify-content-center">Sign up to UzCoder</h3>
                        <p class="col-sm text-secondary m-2 d-flex justify-content-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, vel.</p>
                    </div>
                    <form action="login.php" method="post">
                        <div class="form-group card-body col-sm ">
                            <div class="form-control mt-2 d-flex gap-3 ">
                                <div class=" mt-3">
                                    <label for="" class="form-label">First name:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class=" mt-3">
                                    <label for="" class="form-label">Last name:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-control mt-3">
                                <label for="" class="form-label">Email:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-control mt-3">
                                <label for="" class="form-label">Phone:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-control mt-3 d-flex gap-3 ">
                                <div class=" mt-3">
                                    <label for="" class="form-label">Password:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class=" mt-3">
                                    <label for="" class="form-label col-sm">Confirm password:</label>
                                    <input type="text" class="form-control">
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
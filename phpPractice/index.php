<!doctype html>
<html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Registration</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
                      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                <link rel="stylesheet" href="style.css">
            </head>
            <body>
        <?php

            $servername = "localhost";
            $username = "root";
            $password = "1234";
            $dbname = "practice";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            if(isset($_POST['username']) && isset($_POST['password'])){
                $name = $_POST['username'];
                $pass = $_POST['password'];
                $email = $_POST['email'];

                $sql = "INSERT INTO users (username, email, password)
                VALUES ('$name', '$email','$pass' )";


                if ($conn->query($sql) === TRUE) {
                    $smsg = "Registration success";
                } else {
                    $fsmsg = "Error";
                }
            }




                $conn->close();
        ?>



<div class="row">
    <div class="col">

    </div>
    <div class="col">
        <div class="container-fluid">

            <form class="form-signin" method="POST">
                <h2>Registration</h2>
                <?php if(isset($smsg)){?> <div class = "alert alert-success" role="alert"> <?php echo $smsg?></div> <?php }?>
                <?php if(isset($fsmsg)){?> <div class = "alert alert-danger" role="alert"> <?php echo $fsmsg?></div> <?php }?>
                <!--                Username-->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-name">Name:</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Имя пользователя"
                           aria-label="Имя пользователя" aria-describedby="basic-name"
                           name="username">
                </div>
                <!--                Email-->
                 <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Почтовый ящик"
                           aria-label="Почтовый ящик" aria-describedby="basic-email"
                    name="email">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-email">@google.com</span>
                    </div>
                </div>
                <!--                Password-->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-password">Password:</span>
                    </div>
                    <input type="password" class="form-control" placeholder="Пароль пользователя"
                           aria-label="Пароль пользователя" aria-describedby="basic-password"
                           name="password">
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Регистрация</button>
            </form>
        </div>

    </div>
    <div class="col">

    </div>
</div>


</body>
</html>
<?php

require ('validator.php');

if(isset($_POST['submit'])){
    $validation = new Validator($_POST);
    $errors = $validation->validateForm();
}


;?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Form Validation</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <img class="mb-4" src="php.png" alt="" width="100"
            height="100">
        <h1 class="h4 mb-3 font-weight-bold">Form Validation <br> Object-Oriented php</h1>

        <div class="form-group">
        <label for="" class="sr-only">Username</label>
        <input type="text" name="username"  class="form-control" placeholder="Username" >
        <span class="message"><?php echo htmlspecialchars($errors['username'] ?? '') ?></span>
        </div>

        <div class="form-group">
        <label for="" class="sr-only">Email address</label>
        <input type="text" name="email" class="form-control" placeholder="Email address">
        <span class="message"><?php echo htmlspecialchars($errors['email'] ?? '') ?></span>
        </div>
    

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
</body>

</html>
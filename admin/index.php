<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'AMBASS</title>

    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet">
</head>
<body class="bg-info">
    <h1 class="text-white text-center p-3">D'AMBASS ADMIN</h1>
    <div class="bg-white py-4">
        <h2 class="text-center">Admin Login</h2>
        <div class="container text-center">
            <form action="login_validation.php" method="POST">
            <div class="mb-3">
                    <input type="text" name="username" class="form-select w-70 m-auto"
                     placeholder="ENTER YOUR USERNAME"
                      required="required"
                     title="ENTER USERNAME" >
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control w-70 m-auto"
                     placeholder="ENTER YOUR PASSWORD"
                      required="required"
                     title="Please Enter Your Password">
                    
                </div>
                <button type="submit" class="btn btn-dark my-4">Submit</button>
            </form>
        </div>

    </div>
    </body>
</html>
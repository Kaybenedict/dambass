<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>D'AMBASS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./img/logo.PNG" rel="icon">
  <link href="./img/logo.PNG" rel="apple-touch-icon">
  </head>

  <body >
    <div class="vh-100 d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-md-8 col-lg-6">
            <div class="card bg-danger">
              <div class="card-body p-5">
                <form   action="login_validation.php" method="POST" class="mb-3 mt-md-4">
                  <h2 class="fw-bold mb-2 text-uppercase text-white">D'AMBASS</h2>
                  <p class=" mb-5 text-white">Please enter your unique code and password!</p>
                  <div class="mb-3">
                    <label for="email" class="form-label text-white">Unique Code</label>
                    <input type="text" name="unique_code" class="form-control" placeholder="dambass1234">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label text-white">Password</label>
                    <input type="password" name="password" class="form-control"  placeholder="*******">
                  </div>
                  <p class="small"><a class="text-primary" href="forget-password.php">Forgot password?</a></p>
                  <div class="d-grid">
                    <button class="btn btn-white btn-outline-dark" name="Login" type="submit">Login</button>
                  </div>
                </form>
                <div>
                  <p class="mb-0  text-center">Don't have an account?Buy a product <a href="index.php" class="text-primary fw-bold">Sign
                      Up</a></p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="global.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Forgot Password</title>
</head>

<body>
    <div class="container-fluid h-100">
        <div id="SignInDiv" class="row h-100 justify-content-center align-items-center">
            <form class="overflow-hidden border border-2 rounded">
                <div class="d-flex flex-row bd-highlight mb-3 justify-content-center">
                    <div class="p-2 bd-highlight">
                        <img src="images/LLAS.png" width="90" height="100" alt="logo">
                    </div>
                    <div class="p-2 bd-highlight align-self-center">
                        <p class="fw-bolder fs-5">LER LUM ADVISORY SERVICES SDN BHD</p>
                    </div>
                </div>
                <div class="text-center">
                    <h3>Password Reset</h3>
                </div>
                
                <div class="mx-5 mb-3">
                    <label for="EmployeeNo">Employee Number:</label>
                    <input type="text" class="form-control" placeholder="10001">
                </div>
                <div class="mx-5 mb-3">
                    <label for="pwd">New Password:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="mx-5 mb-3">
                    <label for="pwd">Confirm Password:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="d-grid gap-2 col-5 mx-auto mb-2">
                    <button type="submit" class="btn btn-success">SUBMIT</button>
                    <a role="button" class="btn btn-secondary" href="index.php">CANCEL</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
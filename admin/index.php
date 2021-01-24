<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="./assets/style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-x">login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
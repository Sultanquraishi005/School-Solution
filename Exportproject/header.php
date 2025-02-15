<?php
 session_start();
 if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location:admin-login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>Index Page</title>
    <style>
        
    </style>
</head>
<body class="bg-image" style="background-size: cover; background-image: url('https://slidechef.net/wp-content/uploads/2021/11/Real-Classroom-Background.jpg');">
    
    <!-- Navbar -->
    <header class="md-4">
        <nav class="navbar navbar-expand-md navbar-light bg-dark">
            <a href="/school-project/index.php" class="navbar-brand py-2 md-2">
                <i class="fas fa-school text-warning fa-2x"></i>
            </a>
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="nav">
            <?php if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) { ?>                  

                <ul class="navbar-nav">
                    <h3 class="text-light py-2 m-2">MicronInfotech - <span class="text-info">SchoolSolution</span></h3>
                    <li class="nav-item p-2">
                        <a class="nav-link text-light text-uppercase font-weight-bold py-3" href="./staff-select-school.php">Staff</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link text-light text-uppercase font-weight-bold py-3" href="./std-select-sch.php">Student</a>
                    </li>                     
                </ul> 
                  <!-- LogOut link for logged-in users only -->
            <div class="ml-auto d-flex float-right p-2">
                <a class="nav-link text-light text-uppercase font-weight-bold py-3" href="./logout.php">LogOut</a>                 
            </div>
            <?php } else { ?>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold py-3" href="login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link text-light text-uppercase font-weight-bold py-3" href="register.php">Register</a></li>
            </ul>
        <?php } ?>   
            </div>   
        </nav>
    </header>

    <main>
        <br><br>
    </main>

    <!-- Footer -->
    <footer class="text-center text-lg-start fixed-bottom bg-dark">
        <div>
            <p class="text-center m-2 text-light">&copy; Developed by Micron-Infotech, <script>document.write(new Date().getFullYear())</script>.</p>
        </div>
    </footer>

    <!-- Bootstrap and jQuery Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBkZtA2mQc98oLPCQ/4fJK7f9FW5DXvjgM5Lcc0NQ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $message = "The app is under alpha testing. Only pro users are allowed. You will be invited soon.";
}


if(isset($_POST['pro'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username=='bansi' && $password=='bansi') {
        header('Location: bansi.php');
    } else {
        header('Location: home.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MARGIN todo | Todo's</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</head>

<body style="background-color: #caf7ff;">

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4ee4ff;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="logo.png" alt="Logo" style="width:55px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">
                <h4 style="color: white;">MARGIN todo</h4>
            </a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="color: white;">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: white;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"
                        style="color: white;">Disabled</a>
                </li> -->
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <!-- <a href="#">
                    <h4 class="mr-sm-2">rishan</h4>
                </a>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
                <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#exampleModalCenter">About</button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">ABOUT</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Hi, this is a small project just to practice my technical skills. I have made this simple
                            todo app to manage your tasks in a clumsy free way. There is a task adder and then a list
                            showing the remaining tasks, priority as well as completed tasks.<br><br>
                            I dedicate this small project to my dear friend.<br>
                            Any feedback would be great towards the development.<br><br>
                            Thank you.<br>
                            Rishan Mascarenhas
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </nav>

    <br><br>



    <div class="container" style="background-color: #61e6fd;">
            <form method="post" action="index.php" class="form" style="margin: 3rem; padding:3rem;">
                <h3>LOGIN</h3>
                <?php if(isset($message)): ?>
                    <div class="alert alert-danger">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>
                <label>Username: </label>
                <input type="text" name="username" class="form-control col-md-6" placeholder="enter username">
                <label>Password: </label>
                <input type="password" name="password" class="form-control col-md-6" placeholder="enter password">
                <br>
                <input type="submit" name="login" class="btn btn-primary" value="LOGIN">
                <input type="submit" name="pro" class="btn btn-success" value="PRO" style="margin-left:1rem;">
            </form>
    </div>  


</body>

</html>
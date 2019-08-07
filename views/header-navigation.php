<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Carousel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary bg-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-success" href="<?=$_SERVER['PHP_SELF']?>?page=login">Register</a>
            <!-- Button trigger modal -->
            <?php
                if(isset($_SESSION['user'])):
            ?>
                    <a href="modules/auth/logout.php"></a>
            <?php
                else:
            ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
                Login
            </button>
            <?php
                endif;
            ?>
        </div>
    </nav>
</header>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Login Here</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="modules/auth/login.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="tbEmail">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="tbPasswd">
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <a class="btn btn-success" href="<?=$_SERVER['PHP_SELF']?>?page=login">Register</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<main role="main" class="margin-top-90">

<?php
if(isset($_SESSION['id']))
{?>
             <div class="container-fluid" style="padding:0;">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a class="navbar-brand" href="index.php">ArrayS Medic</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
                </div>
            </nav>

        </div>
<?php
}
else{
    ?>
        <div class="container-fluid" style="padding:0;">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a class="navbar-brand" href="index.php">ArrayS Medic</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fa fa-user-plus" aria-hidden="true"></i>
Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
Login</a>
                    </li>
                </ul>
                </div>
            </nav>
        </div>
<?php
}
?>
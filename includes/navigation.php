<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="#"><b class="title" onclick="crimson();">T</b>HE<b class="title" style="color:#17a2b8;" onclick="info();">C</b>HAT<b class="title" style="color:#E8A317;" onclick="goldenrod();">R</b>OOM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            
            <?php
            if(!isset($_SESSION['user_email_ss']))
            {
            ?>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#LoginModal">Login</a>
            </li>
            <?php
            }
            else
            {
            ?>
            <li class="nav-item">
                <a class="nav-link" href="includes/logout.php">Logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <?php
            }
            ?>
            
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
    </div>
</nav>
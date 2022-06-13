<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/Home">게시판</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Note">쪽지</a>
        </li>
    </ul>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
    
        <?php

        if(!empty($_SESSION['user_id']))
        {
            echo view('/Topbar/topbar_login.php');
        }
        else 
        {
            echo view('/Topbar/topbar_try_login.php');
        }

        ?>

    </ul>

</nav>
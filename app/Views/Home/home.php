<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>어서와 코리아</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php echo view('/Sidebar/sidebar_board.php');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php echo view('/Topbar/topbar.php');?>
                <!-- End of Topbar -->

            

                    <!-- Content Row -->

                    <div class="row" style="margin: 10px;">
                        <!-- 인기게시글 -->
                        <div class="col">
                            <div class="card shadow mb-6">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><a href="/Board/list/best">인기 게시판</a></h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            
                                <!-- Card Body -->
                                <?php 
                                $data = $_SESSION['post_id'];
                                
                                echo 
                                '
                                <div class="card-group">
                                    <div class="card" style="max-width: 1000px;">
                                        <div class="card-body">
                                                <div class="row no-gutters">
                                                    <div class="col-md-7">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><a href="/Board/view/best/100000">'.$data['100000']['title'].'</a></h5>
                                                            <p class="card-text">'.$data['100000']['content'].'</p>
                                                            <div class="input-group-append">
                                                                <img src="https://icons.getbootstrap.com/assets/icons/eye.svg">
                                                                <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100000']['see'].'</p>
                                                                <img src="https://icons.getbootstrap.com/assets/icons/hand-thumbs-up.svg" style="margin-left: 5px;">
                                                                <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100000']['like'].'</p>
                                                                <img src="https://icons.getbootstrap.com/assets/icons/chat-dots.svg" style="margin-left: 5px;">
                                                                <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100000']['comment'].'</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                
                                        </div>
                                
                                    </div>
                                    
                                    <div class="card-group" style="max-width: 1000px;">
                                        <div class="card">
                                            <div class="card-body mb-3">
                                                    <div class="row no-gutters">
                                                        <div class="col-md">
                                                            <p class="card-text"><a href="/Board/view/best/100004">'.$data['100004']['title'].'</a></p>
                                                            <div class="input-group-append" style="margin-top: -25px;">
                                                            <img src="https://icons.getbootstrap.com/assets/icons/eye.svg">
                                                            <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100004']['see'].'</p>
                                                            <img src="https://icons.getbootstrap.com/assets/icons/hand-thumbs-up.svg" style="margin-left: 5px;">
                                                            <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100004']['like'].'</p>
                                                            <img src="https://icons.getbootstrap.com/assets/icons/chat-dots.svg" style="margin-left: 5px;">
                                                            <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100004']['comment'].'</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="card-body mb-3">
                                                <div class="row no-gutters">
                                                    <div class="col-md">
                                                        <p class="card-text"><a href="/Board/view/best/100005">'.$data['100005']['title'].'</a></p>
                                                        <div class="input-group-append" style="margin-top: -25px;">
                                                            <img src="https://icons.getbootstrap.com/assets/icons/eye.svg">
                                                            <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100005']['see'].'</p>
                                                            <img src="https://icons.getbootstrap.com/assets/icons/hand-thumbs-up.svg" style="margin-left: 5px;">
                                                            <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100005']['like'].'</p>
                                                            <img src="https://icons.getbootstrap.com/assets/icons/chat-dots.svg" style="margin-left: 5px;">
                                                            <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100005']['comment'].'</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body mb-3">
                                                <div class="row no-gutters">
                                                    <div class="col-md">
                                                        <p class="card-text"><a href="/Board/view/best/100006">'.$data['100006']['title'].'</a></p>
                                                        <div class="input-group-append" style="margin-top: -25px;">
                                                            <img src="https://icons.getbootstrap.com/assets/icons/eye.svg">
                                                            <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100006']['see'].'</p>
                                                            <img src="https://icons.getbootstrap.com/assets/icons/hand-thumbs-up.svg" style="margin-left: 5px;">
                                                            <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100006']['like'].'</p>
                                                            <img src="https://icons.getbootstrap.com/assets/icons/chat-dots.svg" style="margin-left: 5px;">
                                                            <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100006']['comment'].'</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                ';
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row" style="margin: 10px; margin-top: 30px;">
                        <!-- Pie Chart -->
                        <div class="col-xl-6 col-lg-5" >
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><a href="/Board/list/china">중국 게시판</a></h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <?php
                                    $data = $_SESSION['post_id'];
                                
                                    echo
                                    '
                                        <div class="card-body">
                                            <div class="flex-row">
                                                <div class="col-md">
                                                    <p class="card-text"><a href="/Board/view/china/100005">'.$data['100005']['title'].'</a></p>
                                                    <div class="input-group-append" style="margin-top: -25px;">
                                                        <img src="https://icons.getbootstrap.com/assets/icons/eye.svg">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100005']['see'].'</p>
                                                        <img src="https://icons.getbootstrap.com/assets/icons/hand-thumbs-up.svg" style="margin-left: 5px;">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100005']['like'].'</p>
                                                        <img src="https://icons.getbootstrap.com/assets/icons/chat-dots.svg" style="margin-left: 5px;">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100005']['comment'].'</p>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>
                                    ';
                                ?>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-5" >
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><a href="/Board/list/japan">일본 게시판</a></h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <?php
                                    $data = $_SESSION['post_id'];
                                
                                    echo
                                    '
                                        <div class="card-body">
                                            <div class="flex-row">
                                                <div class="col-md">
                                                    <p class="card-text"><a href="/Board/view/japan/100004">'.$data['100004']['title'].'</a></p>
                                                    <div class="input-group-append" style="margin-top: -25px;">
                                                        <img src="https://icons.getbootstrap.com/assets/icons/eye.svg">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100004']['see'].'</p>
                                                        <img src="https://icons.getbootstrap.com/assets/icons/hand-thumbs-up.svg" style="margin-left: 5px;">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100004']['like'].'</p>
                                                        <img src="https://icons.getbootstrap.com/assets/icons/chat-dots.svg" style="margin-left: 5px;">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100004']['comment'].'</p>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>
                                    ';
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row" style="margin: 10px; margin-top: 30px;">
                        <!-- Pie Chart -->
                        <div class="col-xl-6 col-lg-5" >
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><a href="/Board/list/us">미국 게시판</a></h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <?php
                                    $data = $_SESSION['post_id'];
                                
                                    echo
                                    '
                                        <div class="card-body">
                                            <div class="flex-row">
                                                <div class="col-md">
                                                    <p class="card-text"><a href="/Board/view/us/100006">'.$data['100006']['title'].'</a></p>
                                                    <div class="input-group-append" style="margin-top: -25px;">
                                                        <img src="https://icons.getbootstrap.com/assets/icons/eye.svg">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100006']['see'].'</p>
                                                        <img src="https://icons.getbootstrap.com/assets/icons/hand-thumbs-up.svg" style="margin-left: 5px;">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100006']['like'].'</p>
                                                        <img src="https://icons.getbootstrap.com/assets/icons/chat-dots.svg" style="margin-left: 5px;">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100006']['comment'].'</p>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>
                                    ';
                                ?>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-5" >
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><a href="/Board/list/korea">한국 게시판</a></h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <?php
                                    $data = $_SESSION['post_id'];
                                
                                    echo
                                    '
                                        <div class="card-body">
                                            <div class="flex-row">
                                                <div class="col-md">
                                                    <p class="card-text"><a href="/Board/view/korea/100000">'.$data['100000']['title'].'</a></p>
                                                    <div class="input-group-append" style="margin-top: -25px;">
                                                        <img src="https://icons.getbootstrap.com/assets/icons/eye.svg">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100000']['see'].'</p>
                                                        <img src="https://icons.getbootstrap.com/assets/icons/hand-thumbs-up.svg" style="margin-left: 5px;">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100000']['like'].'</p>
                                                        <img src="https://icons.getbootstrap.com/assets/icons/chat-dots.svg" style="margin-left: 5px;">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100000']['comment'].'</p>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>

                                        <div class="card-body">
                                            <div class="flex-row">
                                                <div class="col-md">
                                                    <p class="card-text"><a href="/Board/view/korea/100001">'.$data['100001']['title'].'</a></p>
                                                    <div class="input-group-append" style="margin-top: -25px;">
                                                        <img src="https://icons.getbootstrap.com/assets/icons/eye.svg">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100001']['see'].'</p>
                                                        <img src="https://icons.getbootstrap.com/assets/icons/hand-thumbs-up.svg" style="margin-left: 5px;">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100001']['like'].'</p>
                                                        <img src="https://icons.getbootstrap.com/assets/icons/chat-dots.svg" style="margin-left: 5px;">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100001']['comment'].'</p>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>

                                        <div class="card-body">
                                            <div class="flex-row">
                                                <div class="col-md">
                                                    <p class="card-text"><a href="/Board/view/korea/100002">'.$data['100002']['title'].'</a></p>
                                                    <div class="input-group-append" style="margin-top: -25px;">
                                                        <img src="https://icons.getbootstrap.com/assets/icons/eye.svg">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100002']['see'].'</p>
                                                        <img src="https://icons.getbootstrap.com/assets/icons/hand-thumbs-up.svg" style="margin-left: 5px;">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100002']['like'].'</p>
                                                        <img src="https://icons.getbootstrap.com/assets/icons/chat-dots.svg" style="margin-left: 5px;">
                                                        <p class="small text" style="margin-top: 15px; margin-left: 3px;">'.$data['100002']['comment'].'</p>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>
                                    ';
                                ?>
                            </div>
                        </div>
                    </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php echo view('/Login/logout.php');?>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">


    <style>
        .board-date::before, .board-search-cnt:after, .board-like-cnt:after {
            content: "";
            display: inline-block;
            width: 1px;
            height: 12px;
            background: #ccc;
            margin: 0 10px 0 6px;
            vertical-align: -2px;
        }

        .board-header {
            margin: 16px 0 29px;
            padding-bottom: 11px;
            border-bottom: 1px solid #eee;
        }

        .board-file-box{
            margin-top: 15px;
            padding: 8px 13px 9px;
            border: 1px solid #d5d5d5;
        }

        .board-appending-file li, .comment-list li{
            float: left;
            margin-left: 7px;
            line-height: 16px;
        }

        .board-appending-file, .comment-list {
            list-style: none;
            overflow: hidden;
            margin: 0px 0 0 -7px;
            padding:0;
            display:block;
        }

    </style>


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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <?php echo '<h1 class="h3 mb-4 text-gray-800">'.$_SESSION['board_id'][$board_id].' 게시판'.'</h1>' ?>

                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="card shadow">
                                <!-- Card Header - Dropdown -->
                                <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Card Body -->
                                <div class="card-body">

                                    <?php
                                        $data = $_SESSION['post_id'][$post_id];
                                        
                                        $title = $data['title'];
                                        $author = $data['author'];
                                        $date = $data['date'];
                                        $see = $data['see'];
                                        $like = $data['like'];
                                        $dislike = $data['dislike'];
                                        $comment = $data['comment'];
                                        $content = $data['content'];

                                        $_SESSION['post_id'][$post_id]['see'] = $_SESSION['post_id'][$post_id]['see'] + 1;
                                    ?>

                                    <div class="row board-header">
                                        <div class="col-md-12">
                                            <h4 class="title small font-weight-bold text-gray-900"><?=$title?></h4>
                                            <div class="board-info d-flex justify-content-between small text-gray-700">
                                                <div class="d-flex">
                                                    <span class="user-id"><?=$author?></span>
                                                    <span class="board-date"><?=$date?></span>
                                                </div>

                                                <div class="d-flex">
                                                    <span class="board-search-cnt">조회 <?=$see?></span>
                                                    <span class="board-like-cnt">추천 <?=$like?></span>
                                                    <span class="board-reply-cnt">댓글 <?=$comment?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      

                                    <div class="row board-view">
                                        <div class="col-md-12 board-content">
                                            <div><?=$content?></div>
                                        </div>

                                        <div class="board-recommend col-md-12 mt-5">
                                            <div class="d-flex justify-content-center">
                                                <div class="mr-3">
                                                    <span class="like-num text-lg mr-3"><?=$like?></span>
                                                    <button class="like-btn btn btn-success btn-circle btn-lg">
                                                        <i class="fas fa-thumbs-up"></i>
                                                    </button>
                                                </div>

                                                <div class="ml-3">
                                                    <button class="dislike-btn btn btn-danger btn-circle btn-lg">
                                                        <i class="fas fa-thumbs-down"></i>
                                                    </button>
                                                    <span class="dislike-num text-lg ml-3"><?=$dislike?></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="board-attach col-md-12 mt-3">

                                            <div class="board-file-box">
                                                <strong>원본 첨부파일 <em class="font_red">0</em></strong>						
                                                <ul class="board-appending-file">
                                                    <!-- <li><a href="#">이미지.jpg</a></li>						 -->
                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row board-comment mt-4">
                                        <div class="col-md-12">

                                            <div class="comment-cnt">
                                                전체 댓글 <?=$comment?>개
                                            </div>

                                            <div class="comment-box border-top border-primary mt-2">

                                                <ul class="list-group list-group-flush">
                                                </ul>
                                            </diV>
                                        </div>

                                        
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer> -->
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
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Logout Modal-->
    <?php echo view('/Login/logout.php');?>
                                                    

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

</body>

<script>
</script>

</html>
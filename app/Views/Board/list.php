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

    <!-- 데이터테이블 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/> 

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
                                   <table id="board-list" class="table table-borderd">
                                       <thead>
                                           <tr>
                                               <th>번호</th>
                                               <th>제목</th>
                                               <th>글쓴이</th>
                                               <th>작성일</th>
                                               <th>조회</th>
                                               <th>추천</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        <?php
                                            foreach($_SESSION['post_id'] as $data)
                                            {
                                                if ($data['board_id'] == $_SESSION['board_id'][$board_id])
                                                {
                                                    echo
                                                    '
                                                    <tr>
                                                        <td>'.$data['id'].'</td>
                                                        <td><a href="/Board/view/'.$board_id.'/'.$data['id'].'">'.$data['title'].'</a></td>
                                                        <td>'.$data['author'].'</td>
                                                        <td>'.$data['date'].'</td>
                                                        <td>'.$data['see'].'</td>
                                                        <td>'.$data['like'].'</td>
                                                    </tr>
                                                    ';
                                                }
                                            }
                                        ?>
                                        </tbody>
                                   </table>
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
    <?php echo view('/Login/logout.php');?>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- 데이터테이블 -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

</body>

<script>
    $('#board-list').DataTable();


    $('#board-list_filter').addClass('d-flex')
    $('#board-list_filter').css('align-items', 'baseline')
    $('#board-list_filter').append('<button class="btn btn-primary ml-3"><a class="text-light" href="/Board/write">글쓰기</a></button>')
</script>

</html>
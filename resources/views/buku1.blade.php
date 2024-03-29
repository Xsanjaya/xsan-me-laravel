<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Xsan</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="assetsHome/images/favicon.png">
        <!-- ##### STYLESHEETS ##### -->
        <!-- Bootstrap -->
        <link href="assetsHome/css/bootstrap.min.css" rel="stylesheet">
        <!-- Linea Icons -->
        <link href="assetsHome/linea/styles.css" rel="stylesheet">
        <!-- Owl Carousel -->
        <link href="assetsHome/css/owl.carousel.min.css" rel="stylesheet">
        <link href="assetsHome/css/owl.theme.default.min.css" rel="stylesheet">
        <!-- Magnific popup -->
        <link href="assetsHome/css/magnific-popup.min.css" rel="stylesheet">
        <!-- Preloader -->
        <link href="assetsHome/css/preloader.min.css" rel="stylesheet">
        <!-- Main styles -->
        <link href="assetsHome/css/styles.min.css" rel="stylesheet">
        <!-- Responsive -->
        <link href="assetsHome/css/responsive.min.css" rel="stylesheet">
        <!-- Font Awesome Icons -->
        <link href="assetsHome/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

<body>
    <div class="menu">
        <ul>
            <li>
                <a style="background: none; color: #fff autohide" href="/" onclick="window.location.href='/'"><i class="fa fa-arrow-left"></i></a>
            </li>
        </ul>
    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="header-title text-center">Daftar Buku</h4>
                                    <div class="mb-2">
                                        <div class="">
                                            <div class="col-12 text-sm-center form-inline">
                                                <div class="form-group ml-1">
                                                    <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <table id="demo-foo-addrow" class="ml-2 table table-centered table-striped table-bordered mb-0 toggle-circle" data-page-size="18 ">
                                        <thead>
                                        <tr>
                                         <th data-toggle="true"> Penulis </th>
                                         <th> Judul Buku </th>
                                         <th data-hide=""> Kategori </th>
                                         <th data-hide=""> Status </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($book as $bk)
                                        <tr>
                                             <td>{{ $bk->penulisBK }}</td>
                                             <td>{{ $bk->judulBK }}</td>
                                             <td>{{ $bk->kategoriBK }}</td>
                                             @if($bk->statusBK == 'Tersedia')
                                                <td><span class="badge label-table badge-primary">{{ $bk->statusBK }}</span></td>
                                             @elseif($bk->statusBK == 'Dipinjam')
                                                <td><span class="badge label-table badge-success">{{ $bk->statusBK }}</span></td>
                                            @else
                                                <td><span class="badge label-table badge-danger">{{ $bk->statusBK }}</span></td>
                                            @endif
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                         <tr class="active">
                                            <td colspan="6">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10"></ul>
                                                </div>
                                            </td>
                                         </tr>
                                        </tfoot>
                                        </table>
                                    </div> <!-- end card-box -->
                                </div> <!-- end col -->
                            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Footable js -->
        <script src="assets/libs/footable/footable.all.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/foo-tables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>
</html>

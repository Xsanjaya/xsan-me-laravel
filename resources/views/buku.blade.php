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

        <!-- Footable css -->
        <link href="assets/libs/footable/footable.core.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>
<body>

<!-- Toggle menu -->
<button class="toggle-btn">
<span class="lines"></span>
</button><!-- hamburger button will only appear on mobile -->
<div class="menu">
    <ul>
      <li>
          <a style="background: none; color: #" href="/" onclick="window.location.href='/'"><i class="fa fa-arrow-left"></i></a>
      </li>
    </ul>
</div>
<!-- end Toggle menu -->

<!-- Pages Container -->
<div class="container">

  <div class="row">
      <div class="col-md-12">
          <div class="card-box">
              <h4 class="header-title text-center">Daftar Buku</h4>
              <div class="mb-2">
                  <div class="">
                      <div class="col-12 text-sm-center form-inline">
                          <div class="form-group ml-0">
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




</div>
<!-- end Pages Container -->

<!-- ##### JAVASCRIPTS ##### -->
<!-- jQuery Library -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<!-- Google Maps Library -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- Bootstrap js -->
<script src="/js/bootstrap.min.js"></script>
<!-- Retina Graphics -->
<script src="/js/retina.min.js"></script>
<!-- Magnific Popup -->
<script src="/js/jquery.magnific-popup.min.js"></script>
<!-- Theme Plugins -->
<script src="/js/theme-plugins.min.js"></script>
<!-- Custom Scripts -->
<script src="/js/scripts.min.js"></script>

<!-- Footable js -->
<script src="assets/libs/footable/footable.all.min.js"></script>

<!-- Init js -->
<script src="assets/js/pages/foo-tables.init.js"></script>


</body>
</html>

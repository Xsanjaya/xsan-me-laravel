<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title> xsan </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Footable css -->
        <link href="assets/libs/footable/footable.core.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="header-title text-center">Daftar Buku</h4>
                                    <!-- <p class="sub-header">
                                        Add or remove rows from your FooTable.
                                    </p> -->
                                    

                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                                <div class="form-group">
                                                    <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle" data-page-size="15 ">
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
                                             <td><span class="badge label-table badge-success">{{ $bk->statusBK }}</span></td>
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
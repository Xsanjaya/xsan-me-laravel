@extends('layouts.lyadmin')
@section('contently')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Post</h4>
        </div>
    </div>
</div>
<!-- end page title -->


           <!-- Modal Import -->
            <!-- <div id="modalImport" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                <form method="post" action="importbook" enctype="multipart/form-data">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Import Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      {{ csrf_field() }}
                        <label>Pilih file excel</label>
                        <div class="form-group">
                            <input type="file" name="file" required="required">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </form>
                </div>
            </div> -->
            <!-- End modal import -->

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="mb-2">
                <div class="row">
                    <div class="col-12 text-sm-center form-inline">
                        <div class="form-group mr-2">
                            <a href="create-post" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i>Add Post</a>
                        </div>
                        <div class="form-group">
                            <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                        </div>
                        <div class = "col-sm-7">
                            <div    class = "text-sm-right">
                                <button  data-toggle="modal" data-target="#modalImport" type="button" class="btn btn-light mb-2 emr-1">Import</button>
                                <button type="button" class="btn btn-light mb-2"><a href="exportbook"
                                >Export</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle" data-page-size="20">
                <thead>
                    <tr class="text-sm-center">
                        <!-- <th>#</th> -->
                        <th data-sort-initial="true" data-toggle="true">Author </th>
                        <th>Title Post</th>
                        <th>Short Post</th>
                        <th>Kategori</th>
                        <th data-hide="phone, tablet">Status</th>
                        <th data-sort-ignore="true" class="min-width">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                      <td class="table-user">
                          <img src="/../assets/images/users/deft-avatar.jpg" alt="table-user" class="mr-2 rounded-circle">
                          <a href="javascript:void(0);" class="text-body font-weight-semibold"> nama </a>
                      </td>
                        <td> title </td>
                        <td> Short </td>
                        <td> Kategori </td>
                        <td><span class="badge label-table badge-primary"> Status </span></td>
                        <td class="text-sm-center">
                            <form action="del" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                                <button class=" btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i>
                                </button>
                            </form>

                            <form name="edit" action="edit" class="d-inline">
                            <button class="btn btn-blue btn-xs btn-icon"><i class="fa fa-edit"></i></button>
                            </form>

                        </td>
                    </tr>
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
                        <!-- end row -->
                        <!-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                        <script>
                            CKEDITOR.replace( 'deskripsiBK' );
                        </script> -->
@endsection

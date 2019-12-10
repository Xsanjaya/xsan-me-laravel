@extends('layouts.lyadmin')
@section('contently')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
            </div>
            <h4 class="page-title">BOOK</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="mb-2">
                <div class="row">
                    <div class="col-12 text-sm-center form-inline">
                        <div class="form-group mr-2">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-input"><i class="mdi mdi-plus-circle mr-2"></i>Add Book</button>
                        </div>
                        <div class="form-group">
                            <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-right">
                                <button data-toggle="modal" data-target="#modalImport" type="button" class="btn btn-light mb-2 mr-1">Import</button>
                                <button type="button" class="btn btn-light mb-2"><a href="exportbook">Export</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



           <!-- Modal Import -->
            <div id="modalImport" class="modal" tabindex="-1" role="dialog">
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
            </div>
            <!-- End modal import -->

            <!-- /.modal Input book-->
            <div id="modal-input" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Form Input Data Buku </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body p-2">
                            <form method="post" action="create">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Penulis Buku</label>
                                        <input name="penulisBK" type="text" class="form-control" id="field-1" placeholder="Penulis Buku">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Judul Buku</label>
                                        <input name="judulBK" type="text" class="form-control" id="field-2" placeholder="Judul Buku">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">ISBN</label>
                                        <input name="isbnBK" type="text" class="form-control" id="field-2" placeholder=" ISBN">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="field-3" class="control-label">Kategori</label>
                                        <input name="kategoriBK" type="text" class="form-control" id="field-4" placeholder="Kategori">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="field-4" class="control-label">Status</label>
                                        <select name="statusBK" id="field-4" class="selectpicker form-control" data-style="btn-blue">
                                                <option>Tersedia</option>
                                                <option>Dipinjam</option>
                                                <option>Hilang</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group no-margin">
                                        <label for="field-5" class="control-label">Deskripsi Buku</label>
                                        <textarea name="deskripsiBK" class="form-control" id="field-5" placeholder="Write something about the book"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Create</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.modal -->

            <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle" data-page-size="20">
                <thead>
                    <tr class="text-sm-center">
                        <!-- <th>#</th> -->
                        <th data-sort-initial="true" data-toggle="true">Penulis Buku</th>
                        <th>Judul Buku</th>
                        <th data-hide="phone">Kategori</th>
                        <th data-hide="phone, tablet">Status</th>
                        <th data-sort-ignore="true" class="min-width">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($book as $bk)
                    <tr>
                        <!-- <td>{{ $loop->iteration }}</td> -->
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
                        <td class="text-sm-center">
                            <form action="del{{ $bk->id }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                                <button class=" btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i>
                                </button>
                            </form>

                            <form name="edit" action="edit{{ $bk->id }}" class="d-inline">
                            <button class="btn btn-blue btn-xs btn-icon"><i class="fa fa-edit"></i></button>
                            </form>

                        </td>
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
                        <!-- end row -->
                        <!-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                        <script>
                            CKEDITOR.replace( 'deskripsiBK' );
                        </script> -->
@endsection

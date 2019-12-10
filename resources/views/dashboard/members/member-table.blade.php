<link href="/../assets/libs/custombox/custombox.min.css" rel="stylesheet">
@extends('layouts.lyadmin')
@section('contently')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Member</h4>
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
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modal1"><i class="mdi mdi-plus-circle mr-2"></i>Add Member</button>
                        </div>
                        <div class="form-group">
                            <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                        </div>
                        <!-- <div class = "col-sm-7">
                            <div    class = "text-sm-right">
                                <button  data-toggle="modal" data-target="#modalImport" type="button" class="btn btn-light mb-2 emr-1">Import</button>
                                <button type="button" class="btn btn-light mb-2"><a href="exportbook"
                                >Export</a></button>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>





            <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle" data-page-size="20">
                <thead>
                    <tr class="text-sm-center">
                        <th data-sort-initial="true" data-toggle="true"> Nama </th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th >Create Date</th>
                        <th data-sort-ignore="true" class="min-width">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($member as $mbr)
                    <tr>
                      <td class="table-user">
                          <img src="/../assets/images/users/deft-avatar.jpg" alt="table-user" class="mr-2 rounded-circle">
                          <a href="javascript:void(0);" class="text-body font-weight-semibold"> {{ $mbr->name }} </a>
                      </td>
                        <td> {{ $mbr->username }} </td>
                        <td> {{ $mbr->email }} </td>
                        <td> {{ $mbr->position }} </td>
                        <td>{{ $mbr->created_at }} </td>
                        <td class="text-sm-center">
                            <form action="mbrdel{{ $mbr->id }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                                <button class=" btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i>
                                </button>
                            </form>

                            <form name="edit" action="member{{ $mbr->id }}" class="d-inline">
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


<!-- Modal -->
<!-- <div id="modal-member" class="modal">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Add New Members</h4>
    <div class="custom-modal-text text-left">
    <form action="addmember" method="post">
        @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name"  type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input name="username"  type="text" class="form-control" id="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="password">
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <select name="position" id="field-4" class="selectpicker form-control" data-style="btn-blue">
                     <option>Admin</option>
                     <option>Member</option>
                 </select>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-success waves-effect waves-light">Create</button>
            </div>
     </form>
    </div>
  </div> -->
<!-- end Modal -->
@endsection

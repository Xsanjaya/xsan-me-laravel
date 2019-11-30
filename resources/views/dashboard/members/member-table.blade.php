<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom box css -->
    <link href="/../assets/libs/custombox/custombox.min.css" rel="stylesheet">
</head>
@extends('layouts.lyadmin')
@section('contently')
     
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">xsan</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"><Table></Table></a></li>
                                            <li class="breadcrumb-item active">Members</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Members</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                        @if(auth()->user()->position == 'Admin')
                                            <div class="col-sm-4">
                                                <a href="#member-modal" class="btn btn-danger waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlaycolor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Add Member</a>
                                            </div>
                                        @endif
                                            <div class="col-sm-8">
                                                <div class="text-sm-right">
                                                    <button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-settings"></i></button>
                                                    <button type="button" class="btn btn-light mb-2 mr-1">Import</button>
                                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                                </div>
                                            </div>
                                            <!-- end col-->
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-striped" id="products-datatable">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Nama</th>
                                                        <th>Email</th>
                                                        <th>Position</th>
                                                        <!-- <th>-</th> -->
                                                        <th>Create Date</th>
                                                        <!-- <th>Status</th> -->
                                                        <th style="width: 85px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($member as $mbr)
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="/../assets/images/users/{{ $mbr->avatar }}" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">{{ $mbr->name }}</a>
                                                        </td>
                                                        <td>
                                                        {{ $mbr->email }}
                                                        </td>
                                                        <td>
                                                        {{ $mbr->position }}
                                                        </td>
                                                        <!-- <td>
                                                            New York
                                                        </td> -->
                                                        <td>
                                                        {{ $mbr->created_at }}
                                                        </td>
                                                        <!-- <td>
                                                            <span class="badge bg-soft-success text-success">Active</span>
                                                        </td> -->
                    
                                                        <td>
                                                            <a href="member{{ $mbr->id }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            
                                                            <form action="mbrdel{{ $mbr->id }}" method="post" class="">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button> 
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <ul class="pagination pagination-rounded justify-content-end mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2015 - 2019 &copy; UBold theme by <a href="">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Modal -->
        <div id="member-modal" class="modal-demo">
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
                        <input name="position" type="text" class="form-control" id="position" placeholder="">
                    </div>
                    

                    <div class="text-right">
                        <!-- <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" onclick="Custombox.close();">Cancel</button> -->
                        <button type="submit" class="btn btn-success waves-effect waves-light">Create</button>
                    </div>
             </form>
            </div>
    </div>
        @endsection 
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="/../assets/js/vendor.min.js"></script>

        <!-- Modal-Effect -->
        <script src="/../assets/libs/custombox/custombox.min.js"></script>

        <!-- App js -->
        <script src="/../assets/js/app.min.js"></script>

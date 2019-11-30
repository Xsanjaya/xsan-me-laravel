<!DOCTYPE html>
<html lang="en">
    <head>
         <!-- Plugins css -->
        <link href="/../assets/libs/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />
        <link href="/../assets/libs/dropify/dropify.min.css" rel="stylesheet" type="text/css" />
</head>
@extends('layouts.lyadmin')
@section('contently')

<!-- start page title -->
<div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">File Uploads</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">File Uploads</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Dropzone File Upload</h4>
                                        <p class="sub-header">
                                            DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.
                                        </p>
            
                                        <form action="dashboard/member{{$id}}" method="post" class="dropzone" id="myAwesomeDropzone">
                                        @csrf
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
            
                                            <div class="dz-message needsclick">
                                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                <h3>Drop files here or click to upload.</h3>
                                                <span class="text-muted font-13">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                            </div>
                                        <div class="clearfix text-right mt-3">
                                            <button type="submit" class="btn btn-danger"> <i class="mdi mdi-send mr-1"></i> Submit</button>
                                        </div></form>
                                        

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
@endsection
<!-- Vendor js -->
<script src="/../assets/js/vendor.min.js"></script>

<!-- Plugins js -->
<script src="/../assets/libs/dropzone/dropzone.min.js"></script>
<script src="/../assets/libs/dropify/dropify.min.js"></script>

<!-- Init js-->
<script src="/../assets/js/pages/form-fileuploads.init.js"></script>

<!-- App js -->
<script src="/../assets/js/app.min.js"></script>
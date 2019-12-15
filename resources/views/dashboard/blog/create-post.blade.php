@extends('layouts.lyadmin')
@section('contently')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Add Post</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<!-- Form row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Title</label>
                            <input type="text" class="form-control" name="titlePST" id="titlePST" >
                        </div>
                        <div class="form-group col-md-2">
                            <label class="col-form-label">Kategori</label>
                            <input type="text" class="form-control" name="kategori" id="kategori" >
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="bodyPST" id="bodyPST">
                    </div>
                    </div>
            </div> <!-- end card-body -->
            <button type="button" class="btn btn-danger waves-effect waves-light"> Save </button>
            <button type="submit" class="btn btn-primary waves-effect waves-light"> Create </button>
        </form>
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
<!-- end row -->

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'bodyPST' );
</script>

@endsection

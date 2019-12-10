@extends('layouts.lyadmin')
@section('contently')

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="mb-3 header-title">Edit Book form</h4>
                <form action="/dashboard/edit{{$id}}" method="POST" class="form-horizontal">
                    @method('patch')
                    {{csrf_field()}}
                    <div class="form-group row mb-3">
                        <label for="inputPenulis" class="col-3 col-form-label">Penulis</label>
                        <div class="col-9">
                            <input type="" class="form-control" name="penulisBK" placeholder="Penulis" value="{{$dbk->penulisBK}}">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="inputJudul" class="col-3 col-form-label">Judul Buku</label>
                        <div class="col-9">
                            <input type="" class="form-control" name="judulBK" placeholder="Judul Buku" value="{{$dbk->judulBK}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputJudul" class="col-3 col-form-label">Kategori Buku</label>
                        <div class="col-9">
                            <input type="" class="form-control" name="kategoriBK" placeholder="Kategori Buku" value="{{$dbk->kategoriBK}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputJudul" class="col-3 col-form-label">Status Buku</label>
                        <div class="col-9">
                        <select name="statusBK" id="field-4" class="selectpicker form-control" data-style="btn-blue" value="{{$dbk->statusBK}}">
                            <option>Tersedia</option>
                            <option>Dipinjam</option>
                            <option>Hilang</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputJudul" class="col-3 col-form-label">Deskripsi Buku</label>
                        <div class="col-9">
                            <input type="" class="form-control" name="deskripsiBK" placeholder="Deskripsi Buku" value="{{$dbk->deskripsiBK}}">
                        </div>
                    </div>

                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-9">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>
                        </div>
                    </div>
                </form>

            </div>  <!-- end card-body -->
        </div>  <!-- end card -->
    </div>
@endsection
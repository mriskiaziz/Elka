<title>Edit Kategori || Elka Farma</title>
@extends('layouts._dashboard.app')

@section('content')
    <div class="mx-4 mt-2">

        <div class="d-inline-flex">
            <a href="{{ route('admin.kategori') }}" class="text-decoration-none text-secondary fs-4">Kategori</a>
            <i class="mt-2 mx-3 fa-solid fa-chevron-right text-dark"></i>
            <a href="{{ route('admin.editKategori') }}" class="text-decoration-none text-dark fw-bold fs-4">Edit
                Kategori</a>
        </div>
        <h6 class="fs-6 mt-1 mb-4 fw-normal">Halaman Pengelolaan Kategori</h6>

        {{-- Tambah Kategori --}}

        <form action="/admin/input-obat/store" method="post" enctype="multipart/form-data">
            <div class="col-6 mb-3">
                <div class="fs-6 mb-1">Nama Obat</div>
                <input name="nama" type="text" class="bg-light form-control">
            </div>
            <div class="col-6 mb-3">
                <div class="fs-6 mb-1">Upload Gambar</div>
                <div class="d-flex custom-file-button">
                    <label class="input-group-text bg-secondary text-light px-4" for="inputGroupFile">Choose File</label>
                    <input name="image" type="file" class="form-control border-0 bg-transparent" id="inputGroupFile">
                </div>
            </div>

            <input type="submit" class="btn btn-danger mb-5 mt-5" value="Update Kategori">
        </form>
    </div>


    {{-- Style Input Choose File --}}
    <style>
        .custom-file-button input[type=file] {
            margin-left: -2px !important;
        }

        .custom-file-button input[type=file]::-webkit-file-upload-button {
            display: none;
        }

        .custom-file-button input[type=file]::file-selector-button {
            display: none;
        }

        .custom-file-button:hover label {
            cursor: pointer;
        }
    </style>
@endsection
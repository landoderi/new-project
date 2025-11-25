@extends('layouts.dashboard')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>
                <div class="card-body">
                    <form action="{{ route('kategori.update',$kategori->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="">Nama Kategori</label>
                            <input type="text" name="nama_kategori" value="{{ $kategori->nama_kategori }}"
                                class="form-control @error('nama_kategori') is-invalid @enderror">
                            @error('nama_kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-block btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
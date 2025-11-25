@extends('layouts.dashboard')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Edit Data Komponen</div>
                <div class="card-body">
                    <form action="{{ route('komponen.update',$komponen->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="">Nama Komponen</label>
                            <input type="text" name="nama_komponen" value="{{ $komponen->nama_komponen }}"
                                class="form-control @error('nama_komponen') is-invalid @enderror">
                            @error('nama_komponen')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Harga</label>
                            <input type="number" name="harga" value="{{ $komponen->harga }}" class="form-control
                            @error('harga') is-invalid @enderror">
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Stok</label>
                            <input type="number" name="stok" value="{{ $komponen->stok }}" class="form-control
                            @error('stok') is-invalid @enderror">
                            @error('stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Kategori</label>
                            <select name="id_kategori" class="form-control
                            @error('id_kategori') is-invalid @enderror">
                                @foreach ($kategori as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $komponen->id_kategori ? 'selected' :''}}>
                                    {{$data->nama_kategori}}
                                </option>
                                @endforeach
                            </select>
                            @error('id_kategori')
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
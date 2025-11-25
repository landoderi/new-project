@extends('layouts.dashboard')

@section('content')
<p>

</p>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Tambah Komponen
                    </div>
                    <div class="float-end">
                        <a href="{{ route('komponen.index') }}" class="btn btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('komponen.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Komponen</label>
                            <input type="text" class="form-control @error('nama_komponen') is-invalid @enderror"
                                name="nama_komponen" value="{{ old('nama_komponen') }}" placeholder="komponen Name" required>
                            @error('nama_komponen')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Produk</label>
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
                                value="{{ old('harga') }}" placeholder="Harga" required>
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Stok Produk</label>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok"
                                value="{{ old('stok') }}" placeholder="Stok" required>
                            @error('stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                            <div class="mb-3">
                            <label class="form-label">Kategori</label>
                                <select name="id_kategori" class="form-control @error('id_kategori') is-invalid @enderror">
                                    @foreach ($kategori as $data)
                                    <option value="{{ $data->id }}">{{$data->nama_kategori}}</option>
                                    @endforeach
                                </select>
                                @error('id_kategori')
                                <span class="invalid-feedback" role="alert">
                                    <strong {{ $message }}></strong>
                                </span>
                                @enderror
                            </div>

                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-warning">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
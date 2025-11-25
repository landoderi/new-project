@extends('layouts.dashboard')
@section('content')
<br>   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Komponen') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('komponen.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nama komponen</th>
                                <td>{{$komponen->nama_komponen}}</td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>{{ $komponen->harga }}</td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td>{{ $komponen->stok }}</td>
                            </tr>
                            <tr>
                                <td>Nama Kategori</td>
                                <td>{{ $komponen->kategori->nama_kategori }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
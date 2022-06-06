@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row container-fluid mt-3">
                    <div class="col-md-12" align="start" style="font-size: 1rem;">
                        <p>Tambah Data Produk</p>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('produk.store') }}" class="form-horizontal" method="POST">  
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2">Nama Produk</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Kategori Produk</label>
                            <div class="col-sm-12">
                                <select name="kategori" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($kategori as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Qty Awal</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="qty">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Harga Jual</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="jual">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Harga Beli</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="beli">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
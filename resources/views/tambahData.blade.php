@extends('layout.master')
@section('title')
@section('contents')
<div class="section-body">
  {{-- <div class="row">
      <div class="col-md-12"> --}}
      <form action="{{ route('simpan') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Produk</label>
                    <input type="text" name="nama_produk" value="{{ old('nama_produk') }}" class="form-control">
                        <text @error('nama_produk')
                            class="text-danger"
                        @enderror> @error('nama_produk')
                        {{ $message }}
                        @enderror</text>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                        <text @error('keterangan')
                            class="text-danger"
                        @enderror> @error('keterangan')
                        {{ $message }}
                        @enderror</text>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                        <text @error('harga')
                            class="text-danger"
                        @enderror> @error('harga')
                        {{ $message }}
                        @enderror</text>
                      </div>
                </div>
            </div>
             <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" name="jumlah" class="form-control">
                        <text @error('jumlah')
                            class="text-danger"
                        @enderror> @error('jumlah')
                        {{ $message }}
                        @enderror</text>
                      </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                <button class="btn btn-secondary" type="reset">Reset</button>
              </div>
            </form>
        </div>
      </div>
  </div>
</div>

@endsection

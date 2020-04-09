@extends('layouts.main')
@section('title', 'Halaman Tambah Student')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-6 mt-5">
      <h4 class="my-3">Create student</h4>
      <form method="POST" action="/students">
        @csrf
        <div class="form-group">
          <label for="nama">Nama :</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"       placeholder="Masukan Nama" autocomplete="off" value="{{old('nama')}}">
          @error('nama')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="nis">Nis :</label>
          <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" placeholder="Masukan nis" autocomplete="off" value="{{old('nis')}}">
          @error('nis')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan email" autocomplete="off" value="{{old('email')}}">
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="alamat">Alamat :</label>
          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukan alamat" autocomplete="off" value="{{old('alamat')}}">
          @error('alamat')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-success"> Simpan data</button>
      </form>
    </div>
  </div>
</div>

@endsection
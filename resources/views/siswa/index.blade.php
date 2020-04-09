@extends('layouts.main')
@section('title', 'Data Siswa')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md mt-3">
      <h4> Daftar Siswa </h4>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nis</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($siswas as $siswa)
          <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $siswa->nama }}</td>
          <td>{{ $siswa->nis }}</td>
          <td>{{ $siswa->email }}</td>
          <td>{{ $siswa->alamat }}</td>
          <td>
            <a href="#" class="badge badge-primary active">Detail</a>
            <a href="#" class="badge badge-success active">Edit</a>
            <a href="#" class="badge badge-danger active">Delete</a>
          </td>
          </tr>
          @endforeach
      
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
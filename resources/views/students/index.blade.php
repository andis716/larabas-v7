@extends('layouts.main')
@section('title', 'Data Student')

@section('content')
@if(session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif
<div class="container">
  <div class="row">
    <div class="col-6 mt-3">
      <h4> Daftar Siswa </h4>
      <a href="/students/create" class="btn btn-primary my-3"> Tambah data student </a>
      <ul class="list-group">
        @foreach ( $students as $student )
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $student->nama }}
        <a href="/students/{{ $student->id }}" class="badge badge-info badge-pill">Detail</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

@endsection
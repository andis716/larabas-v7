@extends('layouts.main')
@section('title', 'Detail students')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md mt-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body bg-dark text-white">
          <h4 class="card-title">Detail Student</h4>
          <div class="container bg-info p-3">
            <h5 class="card-subtitle my-2">{{ $student->nama }}</h5>
            <p class="card-text">{{ $student->nis }}</p>
            <p class="card-text">{{ $student->email }}</p>
            <p class="card-text">{{ $student->alamat }}</p>
            <p class="card-text">{{ $student->nama }}</p>
            <p class="card-text">{{ $student->created_at }}</p>
            @if (( $student->updated_at ) != null )
            <p class="card-text">{{ $student->updated_at }}</p>
            @endif
          </div>
          <div class="mr-3 mt-3">
          <a href="{{ $student->id }}/edit" class="btn btn-success">Edit</a>
          <form action="/students/{{ $student->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>  
            <a href="/students" class="btn btn-primary">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
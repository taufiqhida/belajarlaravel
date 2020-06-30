@extends('layout/main')

@section('title','Data Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">
    <h1 class="mt-3">Hello, {{ $student -> nama}}</h1>
         <div class="card" >
  <div class="card-body">
    <h5 class="card-title">{{ $student -> nama}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $student -> nrp}}</h6>
    <p class="card-text">{{ $student -> email}}</p>
    <p class="card-text">{{ $student -> hp}}</p>
    <p class="card-text">{{ $student -> jurusan}}</p>
<!--     <a href="#" class="badge badge-primary">Ubah</a>
    <a href="#" class="badge badge-danger">Hapus</a>-->  
    <a href="{{ $student->id }}/edit"  class="badge badge-primary"> Edit </a>
    <form action="{{ $student->id }}" method="post" class="d-inline">
      @method('delete')
      @csrf
    <button type="submit" class="badge badge-danger"> Hapus </button>
    </form>
    <a href="{{url('/students')}}" class="card-link">Kembali</a>  
</div>
</div>
</ul>
      </div>        
    </div>
  </div>
@endsection

      
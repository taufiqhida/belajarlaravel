@extends('layout/main')

@section('title','Edit Data Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-8">
            <h1 class="mt-3">Edit, data Mahasiswa</h1>
            <form method="post" action="{{ action('StudentsController@update', $student->id)}}">
              @method('patch')
              @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{$student->nama}}">
                  @error('nama')
                  <div class="invalid-feedback">
                      {{ $message }}
                </div>
                @enderror
                </div>
                <div class="form-group">
                  <label for="email">email</label>
                  <input type="text" class="form-control" id="email" placeholder="Masukan email" name="email" value="{{$student->email}}">
                </div>
                <div class="form-group">
                  <label for="hp">HP</label>
                  <input type="text" class="form-control @error('hp') is-invalid @enderror" id="hp" placeholder="Masukan HP" name="hp" value="{{$student->hp}}">
                  @error('hp')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="jurusan">jurusan</label>
                  <input type="text" class="form-control" id="jurusan" placeholder="Masukan jurusan" name="jurusan" value="{{$student->jurusan}}">
                </div>
                <button class="btn btn-primary" type="submit">Edit Data!  </button>

            </form>
            
      </div>        
    </div>
  </div>

@endsection
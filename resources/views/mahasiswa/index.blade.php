@extends('layout/main')

@section('title','Data Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
    <h1 class="mt-3">Hello, Mahasiswa</h1>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">HP</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  @foreach($mahasiswa as $mhs) 
  <tbody>
    <tr>
      <th scope="row">{{ $loop->iteration}}</th>
      <td>{{ $mhs->nama }}</td>
      <td>{{ $mhs->hp }}</td>
      <td>{{ $mhs->email}}</td>
      <td>{{ $mhs->jurusan}}</td>
      <td>
      	<a href=""><button type="button" class="btn btn-danger">Hapus</button></a>
      	<a href=""><button type="button" class="btn btn-secondary">Ubah</button></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
      </div>        
    </div>
  </div>

@endsection
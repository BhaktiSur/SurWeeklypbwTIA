@extends('layouts.main')

@section('title', 'Profile')

@section('content')
<h1>HALAMAN PROFILE</h1>
<p>Nama : {{ $name }}</p>
<p>NIM : {{ $nim }}</p>
<p>Prodi : {{ $prodi }}</p>
<img src="{{ $gambar }}" alt="Profile Image" width="200">
@endsection
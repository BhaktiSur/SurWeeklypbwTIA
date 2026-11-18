@extends('layouts.backend')

@section('title', 'Data Mahasiswa')

@section('content')
<class class="container mt-5">
    <h3>Data Mahasiswa</h3>

    <button type="button" class="btn btn-success">Tambah Data</button>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Prodi</th>
                <th scope="col">Email</th>
                <th scope="col">No. Hp</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach ($datas as $data)
            <tr>
                <th scope="row">{{ $no }}</th>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->prodi }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->nohp }}</td>
                <td>{{ $data->foto }}</td>
                <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
            </tr>
            <?php $no++ ?>
            @endforeach
        </tbody>
    </table>
</class>
@endsection
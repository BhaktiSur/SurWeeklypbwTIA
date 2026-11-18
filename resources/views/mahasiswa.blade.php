@extends('layouts.backend')

@section('title', 'Data Mahasiswa')

@section('content')

<div class="container mt-5">
    <h3>Data Mahasiswa</h3>

    <button type="button" class="btn btn-success mb-3">
        Tambah Data
    </button>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($datas as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->prodi }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->nohp }}</td>
                <td>{{ $data->foto }}</td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                </td>
            </tr>

            @empty
            <tr>
                <td colspan="8" class="text-center">
                    Belum ada data mahasiswa.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
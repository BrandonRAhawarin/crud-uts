@extends('layouts.app')

@section('title', 'Daftar Laptop')

@section('content')
    <h1>Daftar Laptop</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('laptops.create') }}" class="btn btn-primary mb-3">Tambah Laptop Baru</a>
    <table class="article-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Merek</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laptops as $laptop)
                <tr>
                    <td data-label="ID">{{ $laptop->id }}</td>
                    <td data-label="Nama">{{ $laptop->nama }}</td>
                    <td data-label="Merek">{{ $laptop->merek }}</td>
                    <td data-label="Harga">Rp {{ number_format($laptop->harga, 0, ',', '.') }}</td>
                    <td data-label="Aksi">
                        <a href="{{ route('laptops.show', $laptop->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('laptops.edit', $laptop->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('laptops.destroy', $laptop->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus laptop ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
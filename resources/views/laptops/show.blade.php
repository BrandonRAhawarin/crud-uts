@extends('layouts.app')


@section('content')
    <h1>Detail Laptop</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $laptop->nama }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $laptop->merek }}</h6>
            <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($laptop->harga, 0, ',', '.') }}</p>
            <p class="card-text"><strong>Deskripsi:</strong> {{ $laptop->deskripsi }}</p>
            <a href="{{ route('laptops.edit', $laptop->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('laptops.destroy', $laptop->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus laptop ini?')">Hapus</button>
            </form>
            <a href="{{ route('laptops.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
        </div>
    </div>
@endsection
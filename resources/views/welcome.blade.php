@extends('layouts.app')

@section('title', 'Selamat Datang di Toko Laptop')

@section('content')
<div class="welcome-container">
    <div class="welcome-card">
        <h1 class="welcome-title">Selamat Datang di Toko Laptop</h1>
        <p class="welcome-text">
            Selamat datang di aplikasi manajemen Toko Laptop! Aplikasi ini memungkinkan Anda untuk:
        </p>
        <ul class="welcome-text">
            <li>Melihat daftar laptop yang tersedia</li>
            <li>Menambahkan laptop baru</li>
            <li>Mengedit informasi laptop</li>
            <li>Menghapus laptop dari inventaris</li>
        </ul>
        <a href="{{ route('laptops.index') }}" class="welcome-button">Lihat Daftar Laptop</a>
    </div>
</div>
@endsection
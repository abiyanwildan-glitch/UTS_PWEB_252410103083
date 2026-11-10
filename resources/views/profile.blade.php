@extends('layouts.app')

@section('title', 'Profil · Kedai Sore')

@section('content')
    @include('components.navbar')

    <main class="container">
        <div class="eyebrow">Akun pengguna</div>
        <h1>Profil</h1>
        <p class="muted" style="margin-top:-2px; margin-bottom:24px;">Informasi sederhana tentang sesi yang sedang digunakan.</p>

        <section class="panel profile-card">
            <div class="avatar">{{ strtoupper(substr($username, 0, 1)) }}</div>
            <h2 style="margin-bottom:3px;">{{ $username }}</h2>
            <div class="muted" style="font-size:12px;">Pengguna Kedai Sore</div>
            <div style="margin-top:24px;">
                <div class="profile-line">
                    <span class="muted">Nama pengguna</span>
                    <strong>{{ $username }}</strong>
                </div>
                <div class="profile-line">
                    <span class="muted">Status akun</span>
                    <span class="tag">Aktif</span>
                </div>
                <div class="profile-line">
                    <span class="muted">Aplikasi</span>
                    <strong>Kedai Sore</strong>
                </div>
            </div>
            <a class="btn btn-light" style="margin-top:22px;" href="{{ route('dashboard', ['username' => $username]) }}">Kembali ke dashboard</a>
        </section>
    </main>

    <x-footer />
@endsection

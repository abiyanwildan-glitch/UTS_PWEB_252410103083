@extends('layouts.app')

@section('title', 'Dashboard · Kedai Sore')

@section('content')
    @include('components.navbar')

    <main class="container">
        <div class="eyebrow">Ringkasan kedai</div>
        <div class="welcome">
            <div>
                <h1>Selamat sore, {{ $username }}.</h1>
                <p>Senang melihatmu kembali. Berikut sedikit gambaran tentang Kedai Sore hari ini.</p>
            </div>
            <div class="coffee-stamp">Ks.</div>
        </div>

        <div class="stats">
            @foreach ($ringkasan as $item)
                <section class="panel stat">
                    <div class="stat-label">{{ $item['label'] }}</div>
                    <div class="stat-value">{{ $item['nilai'] }}</div>
                </section>
            @endforeach
        </div>

        <div class="section-row">
            <div>
                <h2>Mulai dari sini</h2>
                <div class="muted">Pilih halaman yang ingin kamu buka.</div>
            </div>
        </div>
        <div class="panel" style="padding:20px 22px; display:flex; justify-content:space-between; align-items:center; gap:18px; flex-wrap:wrap;">
            <div>
                <strong style="font-family:Georgia,serif; font-size:17px;">Daftar menu kedai</strong>
                <div class="muted" style="font-size:12px;">Lihat nama menu, kategori, harga, dan stok yang tersedia.</div>
            </div>
            <a class="btn" href="{{ route('pengelolaan', ['username' => $username]) }}">Lihat pengelolaan</a>
        </div>
    </main>

    <x-footer />
@endsection

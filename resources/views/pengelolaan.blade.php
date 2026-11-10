@extends('layouts.app')

@section('title', 'Pengelolaan Menu · Kedai Sore')

@section('content')
    @include('components.navbar')

    <main class="container">
        <div class="page-head">
            <div>
                <div class="eyebrow">Dapur dan etalase</div>
                <h1>Daftar menu</h1>
                <div class="muted">Menu yang saat ini tersedia di Kedai Sore.</div>
            </div>
            <span class="tag">{{ count($menus) }} menu tercatat</span>
        </div>

        <section class="panel">
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama menu</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $index => $menu)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><strong>{{ $menu['nama'] }}</strong></td>
                                <td><span class="tag">{{ $menu['kategori'] }}</span></td>
                                <td>Rp{{ number_format($menu['harga'], 0, ',', '.') }}</td>
                                <td>{{ $menu['stok'] }} item</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        <p class="muted" style="font-size:12px; margin-top:13px;">* Data menu merupakan data contoh yang dikirim dari PageController.</p>
    </main>

    <x-footer />
@endsection

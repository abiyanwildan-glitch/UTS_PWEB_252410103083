<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Pengunjung');

        $ringkasan = [
            ['label' => 'Menu tersedia', 'nilai' => 8],
            ['label' => 'Kategori menu', 'nilai' => 3],
            ['label' => 'Status kedai', 'nilai' => 'Buka'],
        ];

        return view('dashboard', compact('username', 'ringkasan'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Pengunjung');

        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
        $username = request()->query('username', 'Pengunjung');

        $menus = [
            ['nama' => 'Kopi Susu Sore', 'kategori' => 'Coffee', 'harga' => 18000, 'stok' => 24],
            ['nama' => 'Americano', 'kategori' => 'Coffee', 'harga' => 15000, 'stok' => 18],
            ['nama' => 'Cafe Latte', 'kategori' => 'Coffee', 'harga' => 20000, 'stok' => 12],
            ['nama' => 'Matcha Cream', 'kategori' => 'Non-coffee', 'harga' => 22000, 'stok' => 9],
            ['nama' => 'Chocolate', 'kategori' => 'Non-coffee', 'harga' => 19000, 'stok' => 15],
            ['nama' => 'Butter Croissant', 'kategori' => 'Snack', 'harga' => 16000, 'stok' => 7],
            ['nama' => 'Banana Bread', 'kategori' => 'Snack', 'harga' => 17000, 'stok' => 5],
            ['nama' => 'Manual Brew', 'kategori' => 'Coffee', 'harga' => 23000, 'stok' => 6],
        ];

        return view('pengelolaan', compact('username', 'menus'));
    }
}

<header class="topbar">
    <div class="nav-wrap">
        <a href="{{ route('dashboard', ['username' => request()->query('username', 'Pengunjung')]) }}" class="brand">
            <div class="brand-mark">K</div>
            <div>
                <div class="brand-name">Kedai Sore</div>
                <div class="brand-note">coffee & a little pause</div>
            </div>
        </a>
        <nav class="nav-links">
            <a href="{{ route('dashboard', ['username' => request()->query('username', 'Pengunjung')]) }}">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => request()->query('username', 'Pengunjung')]) }}">Pengelolaan</a>
            <a href="{{ route('profile', ['username' => request()->query('username', 'Pengunjung')]) }}">Profil</a>
        </nav>
        <div class="nav-user">Halo, {{ request()->query('username', 'Pengunjung') }}</div>
    </div>
</header>

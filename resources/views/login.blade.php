<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk · Kedai Sore</title>
    <style>
        :root { --cream:#f6f2eb; --paper:#fffdf9; --ink:#29251f; --muted:#81796e; --coffee:#79543a; --coffee-dark:#523824; --line:#e9e1d6; }
        * { box-sizing:border-box; } body { margin:0; background:var(--paper); color:var(--ink); font:14px/1.6 Arial, sans-serif; }
        .login-page { min-height:100vh; display:grid; grid-template-columns:1fr 1fr; }
        .login-side { background:#e9dfd2; padding:55px; display:flex; flex-direction:column; justify-content:space-between; }
        .brand { font: bold 20px Georgia,serif; } .brand span { color:var(--coffee); }
        h1 { font:normal clamp(35px,5vw,55px)/1.15 Georgia,serif; max-width:440px; margin:0 0 12px; }
        .login-side p { color:#71675c; max-width:390px; }
        .small { color:#82786c; font-size:11px; }
        .login-card-wrap { display:grid; place-items:center; padding:35px 24px; }
        .login-card { width:100%; max-width:390px; }
        .eyebrow { color:var(--coffee); text-transform:uppercase; letter-spacing:1.5px; font-size:10px; font-weight:bold; }
        h2 { font:normal 29px Georgia,serif; margin:8px 0; }
        .muted { color:var(--muted); }
        label { display:block; margin:22px 0 7px; font-size:12px; color:#5f564d; }
        input { width:100%; padding:12px 13px; border:1px solid var(--line); border-radius:5px; font:inherit; outline:none; }
        input:focus { border-color:#9a795d; }
        button { width:100%; margin-top:20px; padding:12px; border:0; border-radius:5px; background:var(--coffee-dark); color:white; cursor:pointer; font-size:13px; }
        button:hover { background:var(--coffee); }
        @media(max-width:700px) { .login-page { grid-template-columns:1fr; } .login-side { min-height:250px; padding:28px 25px; } h1 { font-size:34px; } .login-card-wrap { padding:40px 25px; } }
    </style>
</head>
<body>
    <main class="login-page">
        <section class="login-side">
            <div class="brand">Kedai <span>Sore.</span></div>
            <div>
                <div class="small">TEMPAT SINGGAH SEJENAK</div>
                <h1>Pelan-pelan saja, kopimu tidak ke mana.</h1>
                <p>Ruang kecil untuk mengelola menu dan menjaga cerita di balik setiap cangkir.</p>
            </div>
            <div class="small">coffee · conversations · comfort</div>
        </section>
        <section class="login-card-wrap">
            <div class="login-card">
                <div class="eyebrow">Selamat datang</div>
                <h2>Masuk ke Kedai Sore</h2>
                <p class="muted">Masukkan nama pengguna untuk melanjutkan.</p>
                <form action="{{ route('dashboard') }}" method="GET">
                    <label for="username">Nama pengguna</label>
                    <input id="username" type="text" name="username" placeholder="Contoh: abiyan" required>
                    <button type="submit">Masuk ke dashboard</button>
                </form>
                <p class="small" style="margin-top:18px;">Demo UTS Pemrograman Web · Tidak memerlukan kata sandi.</p>
            </div>
        </section>
    </main>
</body>
</html>

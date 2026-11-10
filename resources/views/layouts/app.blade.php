<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kedai Sore')</title>
    <style>
        :root {
            --cream: #f6f2eb;
            --paper: #fffdf9;
            --ink: #29251f;
            --muted: #81796e;
            --coffee: #79543a;
            --coffee-dark: #523824;
            --line: #e9e1d6;
            --sage: #e7ece3;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            background: var(--cream);
            color: var(--ink);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            line-height: 1.6;
        }
        a { color: inherit; text-decoration: none; }
        .topbar {
            background: var(--paper);
            border-bottom: 1px solid var(--line);
        }
        .nav-wrap {
            max-width: 1120px;
            margin: auto;
            padding: 17px 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }
        .brand { display: flex; align-items: center; gap: 11px; }
        .brand-mark {
            width: 36px; height: 36px; border-radius: 50%;
            background: var(--coffee-dark); color: #fff;
            display: grid; place-items: center; font-size: 17px;
        }
        .brand-name { font-family: Georgia, serif; font-size: 19px; font-weight: bold; }
        .brand-note { color: var(--muted); font-size: 11px; margin-top: -3px; }
        .nav-links { display: flex; align-items: center; gap: 25px; color: #62594f; }
        .nav-links a:hover, .nav-links a.active { color: var(--coffee); }
        .nav-user { color: var(--muted); font-size: 12px; }
        .container { max-width: 1120px; margin: 0 auto; padding: 38px 28px 55px; min-height: calc(100vh - 145px); }
        .eyebrow { color: var(--coffee); text-transform: uppercase; letter-spacing: 1.6px; font-size: 10px; font-weight: bold; }
        h1, h2, h3 { font-family: Georgia, 'Times New Roman', serif; font-weight: normal; }
        h1 { font-size: clamp(28px, 4vw, 39px); line-height: 1.2; margin: 8px 0 10px; }
        h2 { font-size: 23px; margin: 0 0 8px; }
        .muted { color: var(--muted); }
        .page-head { display: flex; justify-content: space-between; align-items: end; gap: 20px; margin-bottom: 27px; }
        .panel { background: var(--paper); border: 1px solid var(--line); border-radius: 9px; }
        .stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin: 26px 0; }
        .stat { padding: 20px 22px; }
        .stat-label { color: var(--muted); font-size: 12px; }
        .stat-value { font-family: Georgia, serif; font-size: 29px; margin-top: 5px; }
        .welcome {
            background: #eee6da; border-radius: 10px; padding: 29px 32px;
            display: flex; justify-content: space-between; align-items: center; gap: 20px;
        }
        .welcome p { max-width: 560px; color: #71675c; margin: 7px 0 0; }
        .coffee-stamp {
            width: 94px; height: 94px; flex: 0 0 94px; border: 1px solid #c9b9a5;
            border-radius: 50%; display: grid; place-items: center;
            color: var(--coffee-dark); font-family: Georgia, serif; font-size: 31px;
            transform: rotate(-8deg);
        }
        .section-row { display: flex; align-items: center; justify-content: space-between; margin: 28px 0 13px; }
        .btn {
            display: inline-block; background: var(--coffee-dark); color: white;
            border: 0; border-radius: 5px; padding: 10px 16px; font-size: 13px; cursor: pointer;
        }
        .btn:hover { background: var(--coffee); }
        .btn-light { background: transparent; color: var(--coffee-dark); border: 1px solid #cdbba8; }
        .btn-light:hover { background: #f4eee6; }
        .table-wrap { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; min-width: 570px; }
        th, td { text-align: left; padding: 14px 17px; border-bottom: 1px solid var(--line); }
        th { color: var(--muted); font-size: 11px; text-transform: uppercase; letter-spacing: .7px; font-weight: bold; }
        tr:last-child td { border-bottom: 0; }
        .tag { display: inline-block; padding: 4px 9px; border-radius: 20px; background: var(--sage); color: #53634e; font-size: 11px; }
        .profile-card { max-width: 620px; padding: 27px; }
        .avatar { width: 58px; height: 58px; border-radius: 50%; background: #e9ded0; color: var(--coffee-dark); display: grid; place-items: center; font-family: Georgia, serif; font-size: 24px; margin-bottom: 17px; }
        .profile-line { display: flex; justify-content: space-between; gap: 15px; padding: 14px 0; border-bottom: 1px solid var(--line); }
        .profile-line:last-child { border: 0; }
        .login-page { min-height: 100vh; display: grid; grid-template-columns: 1fr 1fr; }
        .login-side { background: #e9dfd2; padding: 55px; display: flex; flex-direction: column; justify-content: space-between; }
        .login-side h1 { max-width: 440px; font-size: clamp(35px, 5vw, 55px); }
        .login-side p { color: #71675c; max-width: 390px; }
        .login-card-wrap { display: grid; place-items: center; padding: 35px 24px; }
        .login-card { width: 100%; max-width: 390px; padding: 34px; }
        label { display: block; margin: 20px 0 7px; font-size: 12px; color: #5f564d; }
        input { width: 100%; padding: 12px 13px; border: 1px solid var(--line); border-radius: 5px; background: #fff; font: inherit; outline: none; }
        input:focus { border-color: #9a795d; }
        .login-card .btn { width: 100%; margin-top: 20px; padding: 12px; }
        .footer { border-top: 1px solid var(--line); background: var(--paper); color: var(--muted); text-align: center; padding: 17px; font-size: 11px; }
        @media (max-width: 700px) {
            .nav-wrap { padding: 14px 18px; flex-wrap: wrap; }
            .nav-links { order: 3; width: 100%; gap: 19px; overflow-x: auto; padding-top: 5px; font-size: 12px; }
            .nav-user { margin-left: auto; }
            .container { padding: 28px 18px 40px; }
            .stats { grid-template-columns: 1fr; gap: 10px; }
            .stat { padding: 15px 18px; }
            .welcome { padding: 23px; }
            .coffee-stamp { width: 65px; height: 65px; flex-basis: 65px; font-size: 23px; }
            .login-page { grid-template-columns: 1fr; }
            .login-side { min-height: 250px; padding: 28px 25px; }
            .login-side h1 { font-size: 34px; }
            .login-side .brand-note { display: none; }
            .login-card { padding: 26px; }
            .page-head { align-items: start; flex-direction: column; }
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>

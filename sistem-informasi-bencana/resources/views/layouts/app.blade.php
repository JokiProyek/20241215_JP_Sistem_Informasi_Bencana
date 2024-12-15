{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Bencana</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }

        .sidebar {
            position: fixed;
            width: 250px;
            height: 100vh;
            background: white;
            border-right: 1px solid #eee;
            overflow-y: auto;
        }

        .logo {
            padding: 20px;
            border-bottom: 1px solid #eee;
            font-weight: bold;
            text-align: center;
        }

        .user-section {
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-menu {
            padding: 15px 0;
        }

        .nav-item {
            padding: 10px 20px;
            color: #333;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-item:hover {
            background: #f5f5f5;
        }

        .nav-item.active {
            background: #f0f0f0;
        }

        .submenu {
            display: none;
            padding-left: 20px;
        }

        .submenu.show {
            display: block;
        }

        .top-bar {
            position: fixed;
            right: 0;
            top: 0;
            left: 250px;
            height: 60px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            border-bottom: 1px solid #eee;
        }

        .logout-btn {
            background: #000;
            color: white;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }
    </style>
    @yield('styles')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.submenu-trigger').forEach(trigger => {
                trigger.addEventListener('click', function() {
                    const submenu = this.nextElementSibling;
                    submenu.classList.toggle('show');
                });
            });
        });
    </script>
</head>
<body>
    <div class="sidebar">
        <div class="logo">SISTEM INFORMASI BENCANA</div>
        <div class="user-section">
            <i class="fas fa-user-circle"></i>
            <span>{{ Auth::user()->name }}</span>
        </div>
        <div class="nav-menu">
            <a href="{{ route('dashboard') }}" class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <div class="nav-item">
                <div class="submenu-trigger">
                    <i class="fas fa-exclamation-triangle"></i> Kejadian Bencana
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="submenu {{ Request::is('bencana*') ? 'show' : '' }}">
                    <a href="{{ route('disasters.alam') }}" class="nav-item {{ Request::is('bencana/alam') ? 'active' : '' }}">
                        <i class="fas fa-water"></i> Bencana Alam
                    </a>
                    <a href="{{ route('disasters.non-alam') }}" class="nav-item {{ Request::is('bencana/non-alam') ? 'active' : '' }}">
                        <i class="fas fa-fire"></i> Bencana Non-Alam
                    </a>
                </div>
            </div>
            <a href="{{ route('patients.index') }}" class="nav-item {{ Request::is('patients *') ? 'active' : '' }}">
                <i class="fas fa-users"></i> Data Pasien
            </a>
            <a href="#" class="nav-item">
                <i class="fas fa-chart-bar"></i> Grafik Bencana
            </a>
            <div class="nav-item">
                <div class="submenu-trigger">
                    <i class="fas fa-database"></i> Data Master
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="submenu {{ Request::is('master*') ? 'show' : '' }}">
                <a href="{{ route('disasters.alam') }}" class="nav-item {{ Request::is('bencana/alam') ? 'active' : '' }}">
                <i class="fas fa-list"></i> Jenis Bencana
                    </a>
                    <a href="{{ route('disasters.alam') }}" class="nav-item {{ Request::is('bencana/alam') ? 'active' : '' }}">
                        <i class="fas fa-user"></i> Pengguna
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="top-bar">
        <button class="menu-toggle">
            <i class="fas fa-bars"></i>
        </button>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="logout-btn">LOGOUT</button>
        </form>
    </div>

    @yield('content')
</body>
</html>
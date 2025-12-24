<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BINUS MAYA</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        body {
            background-color: #f5f5f5;
        }


@media (max-width: 768px) {
    .profile-photo {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        overflow: hidden;
        border: 2px solid #fff;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .profile-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
}

        /* Mobile Styles - Keeping exactly as before */
        @media (max-width: 768px) {
            .desktop-nav,
            .desktop-header,
            .desktop-content {
                display: none;
            }

            .mobile-view {
                display: block;
            }

            .mobile-status-bar {
                padding: 10px 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: 14px;
            }

            .header {
                padding: 10px 20px;
            }

            .user-select {
                background: white;
                padding: 12px 20px;
                border-radius: 25px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            }

            .university-name {
                font-size: 12px;
                color: #666;
            }

            .logo {
                padding: 20px;
            }

            .logo h1 {
                font-size: 24px;
                font-weight: bold;
            }

            .logo span {
                color: #FFA500;
            }

            .section-title {
                padding: 0 20px;
                font-size: 24px;
                margin-bottom: 15px;
            }

            .app-list {
                padding: 0 20px;
            }

            .app-item {
                display: flex;
                align-items: center;
                gap: 15px;
                margin-bottom: 20px;
            }

            .app-icon{
            width: 50px;
            height: 50px;
            background: #0093DD;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .app-icon svg {
            width: 30px;
            height: 30px;
            background: #ffffff; /* Latar belakang putih */
            padding: 6px; /* Tambahkan padding agar latar belakang putih terlihat */
            border-radius: 5px; /* Jika ingin sudutnya sedikit membulat */
            fill: orange;
        }

            .beelingua .app-icon {
                background: #20B2AA;
            }

            .all-apps {
                padding: 20px;
            }

            .all-apps a {
                color: #157fb1;
                text-decoration: none;
            }

            .mobile-nav {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                background: white;
                display: flex;
                justify-content: space-around;
                padding: 15px;
                border-top: 1px solid #eee;
            }
        }

        /* Desktop Styles */
        @media (min-width: 769px) {
            .mobile-view {
                display: none;
            }

            .desktop-view {
                display: flex;
                min-height: 100vh;
            }

            .desktop-nav {
                width: 280px;
                background: white;
                padding: 30px;
                border-right: 1px solid #eee;
                position: fixed;
                height: 100vh;
            }

            .desktop-logo {
                margin-bottom: 40px;
            }

            .desktop-logo h1 {
                font-size: 28px;
                font-weight: bold;
            }

            .desktop-logo span {
                color: #FFA500;
            }

            .nav-menu {
                list-style: none;
            }

            .nav-menu-item {
                padding: 15px 20px;
                margin: 5px 0;
                border-radius: 10px;
                cursor: pointer;
                display: flex;
                align-items: center;
                gap: 12px;
                font-size: 16px;
            }

            .nav-menu-item:hover {
                background: #f5f5f5;
            }

            .nav-menu-item.active {
                background: #157fb1;
                color: white;
            }

            .desktop-content {
                flex: 1;
                margin-left: 280px;
                padding: 30px;
            }

            .desktop-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 20px;
                background: white;
                border-radius: 15px;
                margin-bottom: 30px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            }

            .desktop-user {
                display: flex;
                align-items: center;
                gap: 15px;
            }

            .desktop-apps-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
                padding: 20px 0;
            }

            .desktop-app-card {
                background: white;
                padding: 20px;
                border-radius: 15px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.05);
                display: flex;
                align-items: center;
                gap: 15px;
                transition: transform 0.2s;
            }

            .desktop-app-card:hover {
                transform: translateY(-2px);
                box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            }

            .desktop-app-icon {
                width: 60px;
                height: 60px;
                background: #157fb1;
                border-radius: 15px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 24px;
            }

            .desktop-app-info h3 {
                font-size: 18px;
                margin-bottom: 5px;
            }

            .desktop-app-info p {
                font-size: 14px;
                color: #666;
            }

            .profile-img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
    object-position: center;
    border: 2px solid #fff;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

/* Atau jika ingin menggunakan class existing */
.profile-photo img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
    object-position: center;
    border: 2px solid #fff;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
.profile-photo {
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

        }

        .nav-menu a {
    text-decoration: none;
    color: black; /* Remove underline */
}

a {
    text-decoration: none; /* Remove the default underline */
    color: inherit; /* Make sure the link inherits the color from the parent */
    display: block; /* Ensure the entire card is clickable */
}
    </style>
</head>
<body>
    <!-- Mobile View -->
    <div class="mobile-view">
        <!-- Status Bar -->


        <!-- Header -->
        <!-- Mobile Header -->
<div class="header">
    <div class="user-select">
        <div>
            <div>Student Undergraduate</div>
            <div class="university-name">BINUS University</div>
        </div>
        <div class="profile-photo">
            <img src="{{ asset('images/binus.jpeg') }}" alt="Profile Photo" class="profile-img">
        </div>
    </div>
</div>


        <!-- Logo -->
        <div class="logo">
            <h1>BINUS<span>MAYA</span></h1>
        </div>

        <!-- Apps Section -->
        <h2 class="section-title">Semesta Apps</h2>
        <div class="app-list">
            <!-- App items exactly as before -->
            <div class="app-item">
                <div class="app-icon"><svg viewBox="0 0 24 24">
                    <path d="M12 3L1 9L12 15L21 10.09V17H23V9M5 13.18V17.18L12 21L19 17.18V13.18L12 17L5 13.18Z"/>
                </svg></div>
                <div>LMS</div>
            </div>
            <a href="{{ route('student.academy') }}" class="app-item" style="text-decoration: none; color: inherit;">
                <div class="app-icon"><svg viewBox="0 0 24 24">
                    <path d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z"/>
                </svg>
            </div>
                <div>Academic Services</div>
            </a>

            <div class="app-item">
                <div class="app-icon"><svg viewBox="0 0 24 24">
                    <path d="M21,5C19.89,4.65 18.67,4.5 17.5,4.5C15.55,4.5 13.45,4.9 12,6C10.55,4.9 8.45,4.5 6.5,4.5C4.55,4.5 2.45,4.9 1,6V20.65C1,20.9 1.25,21.15 1.5,21.15C1.6,21.15 1.65,21.1 1.75,21.1C3.1,20.45 5.05,20 6.5,20C8.45,20 10.55,20.4 12,21.5C13.35,20.65 15.8,20 17.5,20C19.15,20 20.85,20.3 22.25,21.05C22.35,21.1 22.4,21.1 22.5,21.1C22.75,21.1 23,20.85 23,20.6V6C22.4,5.55 21.75,5.25 21,5M21,18.5C19.9,18.15 18.7,18 17.5,18C15.8,18 13.35,18.65 12,19.5V8C13.35,7.15 15.8,6.5 17.5,6.5C18.7,6.5 19.9,6.65 21,7V18.5Z"/>
                </svg>
            </div>
                <div>Library</div>
            </div>

            <div class="app-item">
                <div class="app-icon"><svg viewBox="0 0 24 24">
                    <path d="M3,13H7V23H3V13M10,14H14V23H10V14M17,9H21V23H17V9M17,1H21V5H17V1M10,6H14V10H10V6M3,5H7V9H3V5Z"/>
                </svg>
            </div>
                <div>Student Activity</div>
            </div>

            <div class="app-item">
                <div class="app-icon"><svg viewBox="0 0 24 24">
                    <path d="M21,5C19.89,4.65 18.67,4.5 17.5,4.5C15.55,4.5 13.45,4.9 12,6C10.55,4.9 8.45,4.5 6.5,4.5C4.55,4.5 2.45,4.9 1,6V20.65C1,20.9 1.25,21.15 1.5,21.15C1.6,21.15 1.65,21.1 1.75,21.1C3.1,20.45 5.05,20 6.5,20C8.45,20 10.55,20.4 12,21.5C13.35,20.65 15.8,20 17.5,20C19.15,20 20.85,20.3 22.25,21.05C22.35,21.1 22.4,21.1 22.5,21.1C22.75,21.1 23,20.85 23,20.6V6C22.4,5.55 21.75,5.25 21,5M21,18.5C19.9,18.15 18.7,18 17.5,18C15.8,18 13.35,18.65 12,19.5V8C13.35,7.15 15.8,6.5 17.5,6.5C18.7,6.5 19.9,6.65 21,7V18.5Z"/>
                </svg>
            </div>
                <div>Binus Support</div>
            </div>

            <div class="app-item">
                <div class="app-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512 512" fill="orange">
                    <circle cx="256" cy="256" r="256" fill="white"/>
                    <path d="M288 288l76-164-164 76-76 164 164-76zM256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.3 0-200-89.7-200-200S145.7 56 256 56s200 89.7 200 200-89.7 200-200 200z"/>
                </svg>

            </div>
                <div>Freshmen</div>
            </div>

            <div class="app-item">
                <div class="app-icon"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                    <path d="M40 70 V30 Q40 20 50 20 L55 20 Q65 20 65 30 V70" stroke="orange" stroke-width="5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M40 30 L65 70" stroke="orange" stroke-width="5" fill="none" stroke-linecap="round"/>
                </svg>

            </div>
                <div>Neksus</div>
            </div>

            <div class="app-item">
                <div class="app-icon"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                    <!-- Topi Wisuda -->
                    <polygon points="30,30 50,20 70,30 50,40" fill="orange"/>
                    <rect x="43" y="40" width="14" height="6" fill="orange"/>

                    <!-- Buku Bawah -->
                    <path d="M25 70 H75 Q80 70 80 75 Q80 80 75 80 H25 Q20 80 20 75 Q20 70 25 70 Z" fill="orange"/>

                    <!-- Buku Atas -->
                    <path d="M25 60 H75 Q80 60 80 65 Q80 70 75 70 H25 Q20 70 20 65 Q20 60 25 60 Z" fill="orange"/>

                    <!-- Pembatas buku -->
                    <rect x="60" y="63" width="15" height="4" fill="white"/>
                </svg>

            </div>
                <div>Thesis</div>
            </div>
            <!-- ... rest of the mobile apps ... -->
        </div>

        <div class="all-apps">
            <a href="#">All Apps →</a>
        </div>

        <!-- Mobile Navigation -->
        <div class="mobile-nav">
            <div><a href="{{ route('student.dashboard') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
            </a></div>
            <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
        </div>
            <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
            </div>
            <div><a href="{{ route('student.app') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="5" height="5"></rect>
                <rect x="10" y="3" width="5" height="5"></rect>
                <rect x="17" y="3" width="5" height="5"></rect>
                <rect x="3" y="10" width="5" height="5"></rect>
                <rect x="10" y="10" width="5" height="5"></rect>
                <rect x="17" y="10" width="5" height="5"></rect>
                <rect x="3" y="17" width="5" height="5"></rect>
                <rect x="10" y="17" width="5" height="5"></rect>
                <rect x="17" y="17" width="5" height="5"></rect>
            </svg>
        </a></div>
            <div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn" style="color: #d32f2f;">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Desktop View -->
    <div class="desktop-view">
        <!-- Desktop Navigation -->
        <nav class="desktop-nav">
            <div class="desktop-logo">
                <h1>BINUS<span>MAYA</span></h1>
            </div>
            <ul class="nav-menu">
                <li class="nav-menu-item"><a href="{{ route('student.dashboard') }}"><span>🏠</span> Dashboard</a></li>
                <li class="nav-menu-item"><span>📅</span> Calendar</li>
                <li class="nav-menu-item"><span>🔔</span> Notifications</li>
                <li class="nav-menu-item"><a href="{{ route('student.app') }}"><span>⋮⋮⋮</span> Settings</a></li>
                <li class="nav-menu-item">
                    <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: block;">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link" style="color: #d32f2f; text-decoration: none; font-weight: bold; display: block; padding: 10px 15px; border: none; background: none; cursor: pointer;">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </li>

            </ul>

        </nav>

        <!-- Desktop Main Content -->
        <main class="desktop-content">
            <div class="desktop-header">
                <div class="desktop-user">
                    <div>
                        <h2>Welcome, Student</h2>
                        <p>Student Undergraduate - BINUS University</p>
                    </div>
                </div>
                <div class="header-icons">
                    <div class="profile-photo">
                        <img src="{{ asset('images/liza.JPG') }}" alt="Profile Photo" class="profile-img">
                    </div>
                </div>
            </div>

            <h2>Semesta Apps</h2>

            <div class="desktop-apps-grid">
                <!-- Desktop App Cards -->
                <div class="desktop-app-card">
                    <div class="desktop-app-icon">📚</div>
                    <div class="desktop-app-info">
                        <h3>LMS</h3>
                        <p>Learning Management System</p>
                    </div>
                </div>

                <div class="desktop-app-card">
                    <div class="desktop-app-icon">⚙️</div>
                    <div class="desktop-app-info">
                        <h3>Academic Services</h3>
                        <p>Manage your academic needs</p>
                    </div>
                </div>

                <div class="desktop-app-card">
                    <div class="desktop-app-icon">💬</div>
                    <div class="desktop-app-info">
                        <h3>Beelingua</h3>
                        <p>Language learning platform</p>
                    </div>
                </div>

                <!-- Add more desktop app cards as needed -->
            </div>
        </main>
    </div>
</body>
</html>

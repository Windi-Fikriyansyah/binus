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
            .desktop-nav,
            .desktop-header,
            .desktop-content {
                display: none;
            }

            .mobile-view {
                display: block;
                min-height: 100vh;
                background: linear-gradient(180deg, #157fb1 0%, #157fb1 100%);
                padding-bottom: 70px;
            }

            .mobile-status-bar {
                padding: 10px 20px;
                color: white;
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: 14px;
            }

            .user-select {
                background: white;
                padding: 12px 20px;
                border-radius: 25px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 15px 20px;
            }

            .university-name {
                font-size: 12px;
                color: #666;
            }

            .greeting {
                color: white;
                padding: 20px;
                font-size: 18px;
            }

            .student-name {
                color: white;
                padding: 0 20px;
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 20px;
            }

            .status-card {
                background: white;
                margin: 20px;
                padding: 30px;
                border-radius: 15px;
                text-align: center;
            }

            .status-icon {
                width: 80px;
                height: 80px;
                margin: 0 auto 20px;
            }

            .status-icon img {
                width: 100%;
                height: 100%;
            }

            .status-text {
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 15px;
            }

            .quote {
                font-size: 14px;
                color: #666;
                font-style: italic;
                margin-bottom: 10px;
            }

            .quote-author {
                font-size: 12px;
                color: #999;
            }

            .app-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 15px;
                padding: 20px;
            }

            .app-card {
                background: white;
                border-radius: 15px;
                padding: 20px;
            }

            .courses-card {
                background: white;
            }

            .courses-icon {
                width: 48px;
                height: 48px;
                background: #FF6B00;
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 24px;
                margin-bottom: 15px;
            }

            .support-card {
                background: linear-gradient(135deg, #00A3FF, #0077FF);
                color: white;
            }

            .card-title {
                font-weight: bold;
                margin-bottom: 10px;
            }

            .card-text {
                font-size: 12px;
                color: #666;
            }

            .support-card .card-text {
                color: white;
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

            .profile-photo {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                overflow: hidden;
            }

            .profile-photo img {
                width: 100%;
                height: 100%;
                object-fit: cover;
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
                background: #007AFF;
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
                background: #007AFF;
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


.card {
    background: white;
    border-radius: 15px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    padding: 1rem;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 1rem;
}
.desktop-apps-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    padding: 20px 0;
}

.desktop-app-card {
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    gap: 15px;
    transition: transform 0.2s;
}

.desktop-app-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.card-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
}

.courses-icon {
    background: #FF6B00;
    color: white;
}

.support-icon {
    background: #00A3FF;
    color: white;
}

.card-content {
    flex: 1;
}

.card h3 {
    color: #333;
    font-size: 1rem;
    font-weight: 600;
    margin: 0 0 0.25rem 0;
}

.card-hint, .card-description {
    color: #666;
    font-size: 0.875rem;
    margin: 0;
}

.quote-section {
    background: white;
    border-radius: 15px;
    padding: 1.5rem;
    margin: 1.5rem 0;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.quote-section blockquote {
    margin: 0;
    font-style: normal;
    color: #333;
    text-align: center;
    font-size: 0.9rem;
}

.quote-section footer {
    text-align: center;
    color: #666;
    margin-top: 0.5rem;
    font-size: 0.8rem;
}

.header-section {
    margin-bottom: 2rem;
    padding: 1.5rem;
    background: linear-gradient(135deg, #157fb1, #157fb1);
    border-radius: 15px;
    color: white;
}

.header-section .university,
.header-section .greeting,
.header-section .student-name,
.header-section .class-status {
    color: white;
    margin: 0.25rem 0;
}

.student-name {
    font-size: 1.5rem;
    font-weight: bold;
}

.class-status {
    margin-top: 1rem !important;
}
a {
    text-decoration: none; /* Remove the default underline */
    color: inherit; /* Make sure the link inherits the color from the parent */
    display: block; /* Ensure the entire card is clickable */
}
    </style>
</head>
<body>
    <div class="mobile-view">
        <div class="mobile-status-bar">

            <div>

            </div>
        </div>

        <div class="user-select">
            <div>
                <div>Student Undergraduate</div>
                <div class="university-name">BINUS University</div>
            </div>
            <div class="profile-photo">
                <img src="{{ asset('images/binus.jpeg') }}" alt="Profile Photo" class="profile-img">
            </div>
        </div>

        <div class="greeting">Good evening,</div>
        <div class="student-name">{{$name}}</div>

        <div class="status-card">
            <div class="status-icon">

            </div>
            <div class="status-text">No upcoming class</div>
            <div class="quote">"Being a student is easy. Learning requires actual work."</div>
            <div class="quote-author">- William Crawford -</div>
        </div>

        <div class="app-grid">
            <div class="app-card courses-card">
                <div class="courses-icon">📚</div>
                <div class="card-title">MY COURSES</div>
                <div class="card-text">Tap to View my latest LMS courses.</div>
            </div>
            <div class="app-card support-card">
                <div class="card-title">BINUS Support</div>
                <div class="card-text">BINUS support is just a message away through the channels below!</div>
            </div>
        </div>

        <div class="mobile-nav">
            <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
            </div>
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
            <div><a href="{{ route('student.app') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
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

            <div>
                <div class="header-section">
                    <p class="greeting">Good evening,</p>
                    <h1 class="student-name">{{$name}}</h1>
                    <p class="class-status">No upcoming class</p>
                </div>

                <div class="quote-section">
                    <blockquote>
                        "Being a student is easy. Learning requires actual work."
                        <footer>- William Crawford -</footer>
                    </blockquote>
                </div>

                <div class="desktop-apps-grid">
                    <div class="desktop-app-card">
                        <div class="card-icon courses-icon">📚</div>
                        <div class="card-content">
                            <h3>MY COURSES</h3>
                            <p class="card-hint">Tap to View my latest LMS courses.</p>
                        </div>
                    </div>

                    <div class="desktop-app-card">
                        <div class="card-icon support-icon">💬</div>
                        <div class="card-content">
                            <h3>BINUS Support</h3>
                            <p class="card-description">BINUS support is just a message away through the channels below!</p>
                        </div>
                    </div>
                </div>
            </div>


        </main>
    </div>
</body>
</html>

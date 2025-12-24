<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Services - BINUS MAYA</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        body {
            background: linear-gradient(180deg, #157fb1 0%, #157fb1 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .back-button {
            color: white;
            font-size: 24px;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .back-button i {
            font-size: 24px;
        }

        .status-bar {
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

        .page-title {
            color: white;
            padding: 20px;
            font-size: 32px;
            font-weight: normal;
        }

        .description {
            color: white;
            padding: 0 20px;
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .sub-description {
            color: white;
            padding: 0 20px;
            font-size: 16px;
            opacity: 0.9;
        }

        .features-container {
            background: white;
            padding: 20px;
            border-radius: 30px 30px 0 0;
            margin-top: 20px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            text-align: center;
        }

        .feature-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: #FF8C00;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
        }

        .feature-name {
            font-size: 12px;
            color: #333;
        }

        .coming-soon {
            text-align: center;
            color: #157fb1;
            padding: 20px;
            font-size: 14px;
            margin-top: 20px;
        }
    </style>
</head>
<body>


    <a href="{{ route('student.app') }}" class="back-button" style="text-decoration: none; color: white;">
        <i class="fas fa-chevron-left"></i>
        Academic Services
    </a>


    <div class="user-select">
        <div>
            <div>Student Undergraduate</div>
            <div class="university-name">BINUS University</div>
        </div>
        <div class="profile-photo">
            <img src="{{ asset('images/binus.jpeg') }}" alt="Profile Photo">
        </div>
    </div>

    <h1 class="page-title">Welcome to Academic Services</h1>

    <p class="description">Get the latest updates about academic informations anywhere and anytime you need through this mobile version</p>

    <p class="sub-description">This feature can also be accessed through the BINUSMAYA Website</p>

    <div class="features-container">
        <div class="features-grid">
            <a href="{{ route('student.financial') }}" class="feature-item" style="text-decoration: none; color: inherit;">
                <div class="feature-icon">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <div class="feature-name">Financial</div>
            </a>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="feature-name">Letter Request</div>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="feature-name">Graduation</div>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="feature-name">Invitation</div>
            </div>
        </div>

        <p class="coming-soon">More features coming soon. Stay tuned.</p>
    </div>
</body>
</html>

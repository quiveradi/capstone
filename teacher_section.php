<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="teacher_homepage.css">
</head>
<body>
    <style>
    .nav-logo {
        height: 40px;
    }

    .user-profile {
        height: 100px;
    }

    /* Sections Page Styling */
    .sections-container {
        padding: 20px;
    }

    .section-heading {
        margin-top: 30px;
        font-size: 24px;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .section-row {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 20px;
    }

    .section-btn {
        background-color: #c10000;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;;
        width: 100%;
        text-align: center;
        transition: background-color 0.3s;
    }

    .section-btn:hover {
        background-color: #900000;
    }

    .advisory-section .section-btn {
        padding: 15px 20px;
        font-size: 18px;
        width: 100%;
        max-width: 500px;
    }

    .subject-section .section-btn {
        padding: 30px 300px;
        font-size: 20px;
        flex: 1;
        max-width: calc(50% - 10px);
        min-height: 80px;
    }
    </style>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="profile">
                <img src="white user.png" class="user-profile">
                <div class="profile-name">Sir Job</div>
                <div class="profile-role">Teacher</div>
            </div>

            <nav class="nav-menu">
                <a href="teacher_homepage.php" class="nav-item" > <img src="white home.png" class="nav-logo"> Home</a>
                <a href="teacher_section.php" class="nav-item" > <img src="white section.png" class="nav-logo"> Section</a>
                <a href="teacher_grade.php" class="nav-item" > <img src="white grades.png" class="nav-logo"> Grades</a>
                <a href="teacher_referral.php" class="nav-item" > <img src="white referral.png" class="nav-logo"> Referral</a>
            </nav>

            <a href="teacher_login.php" class="logout"> <img src="white logout.png" class="nav-logo">Logout</a>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <header class="header">
                <h1 id="page-title">Class Sections</h1>
                <div class="school-info">
                    <img src="logo.png" alt="School Logo" class="school-logo">
                    <div class="school-name">
                        Napindan<br>Integrated<br>School
                    </div>
                </div>
            </header>

            <!-- Advisory Class Section - single column as in the image -->
            <div class="sections-container">
                    <!-- Advisory Class Section -->
                    <div class="advisory-section">
                        <h2 class="section-heading">Advisory Class</h2>
                        <div class="section-row">
                            <button class="section-btn" onclick="window.location.href='rosas.php'">Rosas</button>
                        </div>
                    </div>

                    <!-- Subject Class Section -->
                    <div class="subject-section">
                        <h2 class="section-heading">Subject Class</h2>
                        <div class="section-row">
                            <button class="section-btn">Gumamela</button>
                            <button class="section-btn">Sampaguita</button>
                        </div>
                        <div class="section-row">
                            <button class="section-btn">Sunflower</button>
                            <button class="section-btn">Rafflesia</button>
                        </div>
                        <div class="section-row">
                            <button class="section-btn">Asters</button>
                            <button class="section-btn">Tulips</button>
                        </div>
                    </div>
                </div>
</body>
</html>
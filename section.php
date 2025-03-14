<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="teacher_homepage.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
        cursor: pointer;
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
                <a href="#" class="nav-item" onclick="changeContent('home')"> <img src="white home.png" class="nav-logo"> Home</a>
                <a href="#" class="nav-item" onclick="changeContent('section')"> <img src="white section.png" class="nav-logo"> Section</a>
                <a href="#" class="nav-item" onclick="changeContent('grades')"> <img src="white grades.png" class="nav-logo"> Grades</a>
                <a href="#" class="nav-item" onclick="changeContent('referral')"> <img src="white referral.png" class="nav-logo"> Referral</a>
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

            <div class="content-area" id="content">
                <!-- Advisory Class Section -->
                <div class="sections-container">
                    <div class="advisory-section">
                        <h2 class="section-heading">Advisory Class</h2>
                        <div class="section-row">
                            <button class="section-btn" onclick="window.location.href='rosas.php'">Rosas</button>
                        </div>
                    </div>

                    <!-- Subject Class Section -->
                    <div class="subject-section">
                        <h2 class="section-heading">Subject Class</h2>
                        <!-- Row 1 -->
                        <div class="section-row">
                            <button class="section-btn">Gumamela</button>
                            <button class="section-btn">Sampaguita</button>
                        </div>
                        <!-- Row 2 -->
                        <div class="section-row">
                            <button class="section-btn">Sunflower</button>
                            <button class="section-btn">Rafflesia</button>
                        </div>
                        <!-- Row 3 -->
                        <div class="section-row">
                            <button class="section-btn">Asters</button>
                            <button class="section-btn">Tulips</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    // Load last visited section
    window.onload = function() {
        const savedSection = localStorage.getItem('currentSection') || 'section';
        changeContent(savedSection);
    };

    function changeContent(section) {
        const title = document.getElementById("page-title");
        const content = document.getElementById("content");

        if (section === "home") {
            title.innerText = "Home"; 
            content.innerHTML = "<p>Home content goes here.</p>";
        } else if (section === "section") {
            title.innerText = "Class Sections";
            content.innerHTML = `
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
            `;
        } else if (section === "grades") {
            title.innerText = "Grading";
            content.innerHTML = `
                <div class="sections">
                    <button class="section-btn">Section 1</button>
                    <button class="section-btn">Section 2</button>
                    <button class="section-btn">Section 3</button>
                    <button class="section-btn">Section 4</button>
                    <button class="section-btn">Section 5</button>
                    <button class="section-btn">Section 6</button>
                </div>`;
        } else if (section === "referral") {
            title.innerText = "Referral";
            content.innerHTML = "<p>Referral content goes here.</p>";
        }

        // Save section to localStorage
        localStorage.setItem('currentSection', section);
    }
</script>
</body>
</html>
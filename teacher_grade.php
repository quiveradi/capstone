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
    <h1 id="page-title">Grading</h1>
    <div class="school-info">
        <img src="logo.png" alt="School Logo" class="school-logo">
        <div class="school-name">
            Napindan<br>Integrated<br>School
        </div>
    </div>
</header>

    <script>
        function changeContent(section) {
            const title = document.getElementById("page-title");
            const content = document.getElementById("content");

            if (section === "section") {
                title.innerText = "Section";
                content.innerHTML = "<p>Section content goes here.</p>";
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
        }
    </script>

</body>
</html>

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
                <div class="profile-name">Sir Jake</div>
                <div class="profile-role">Guidance</div>
            </div>

            <nav class="nav-menu">
                <a href="#" class="nav-item" onclick="changeContent('section')"> <img src="white document.png" class="nav-logo"> Documents</a>
                <a href="#" class="nav-item" onclick="changeContent('grades')"> <img src="white record.png" class="nav-logo"> Records</a>
            </nav>

            <a href="guidance_login.php" class="logout"> <img src="white logout.png" class="nav-logo">Logout</a>
        </div>

        <!-- Main Content -->
        <div class="main-content">
        <header class="header">
    <h1 id="page-title">Homepage</h1>
    <div class="school-info">
        <img src="logo.png" alt="School Logo" class="school-logo">
        <div class="school-name">
            Napindan<br>Integrated<br>School
        </div>
    </div>
</header>


            <div class="content-area" id="content">
                <p>Welcome to the teacher homepage. Select an option from the sidebar.</p>
            </div>
        </div>
    </div>


</body>
</html>

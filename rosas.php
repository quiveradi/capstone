<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosas Section</title>
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

    /* Rosas Section Page Styling */
    .section-container {
        padding: 20px;
        margin-left: 250px;
    }

    .search-bar {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
        align-items: center;
    }

    .search-input {
        width: 300px;
        padding: 10px 15px;
        border: 1px solid #ccc;
        border-radius: 25px;
        font-size: 16px;
        outline: none;
        align-items: center;
    }

    .search-button {
        background: none;
        border: none;
        margin-left: -40px;
        cursor: pointer;
    }

    .students-table {
        width: 100%;
        border-collapse: collapse;
        align-items: center;
    }

    .students-table th {
        background-color: #e0e0e0;
        padding: 12px;
        text-align: left;
        font-weight: bold;
        border: 1px solid #ccc;
    }

    .students-table td {
        padding: 12px;
        border: 1px solid #ccc;
    }

    .students-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .view-btn {
        background-color: #1da1f2;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 8px 12px;
        cursor: pointer;
        font-size: 14px;
    }

    .view-btn:hover {
        background-color: #0d8ecf;
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
                <a href="teacher_homepage.php" class="nav-item"> <img src="white home.png" class="nav-logo"> Home</a>
                <a href="teacher_section.php" class="nav-item active"> <img src="white section.png" class="nav-logo"> Section</a>
                <a href="teacher_grade.php" class="nav-item"> <img src="white grades.png" class="nav-logo"> Grades</a>
                <a href="teacher_referral.php" class="nav-item"> <img src="white referral.png" class="nav-logo"> Referral</a>
            </nav>

            <a href="teacher_login.php" class="logout"> <img src="white logout.png" class="nav-logo">Logout</a>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <header class="header">
                <h1 id="page-title">Rosas</h1>
                <div class="school-info">
                    <img src="logo.png" alt="School Logo" class="school-logo">
                    <div class="school-name">
                        Napindan<br>Integrated<br>School
                    </div>
                </div>
            </header>

            <div class="content-area" id="content">
                <div class="section-container">

                <div class="search-bar">
                        <input type="text" class="search-input" placeholder="Enter LRN...">
                        <button class="search-button">🔍</button>
                    </div>
            
                    <!-- Students Table -->
                    <table class="students-table">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Gender</th>
                                <th>LRN</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bautista, Miguel Alfonso</td>
                                <td>M</td>
                                <td>304567891234</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Cruz, Rafael Dominic</td>
                                <td>M</td>
                                <td>214567892345</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Dela Cruz, Isagani Tomas</td>
                                <td>M</td>
                                <td>194567893456</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>De la Peña, Emilio Javier</td>
                                <td>M</td>
                                <td>384567894567</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Enriquez, Andres Miguel</td>
                                <td>M</td>
                                <td>274567895678</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Garcia, Teresa Lourdes</td>
                                <td>F</td>
                                <td>364567896789</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Gomez, Rosario Feliciana</td>
                                <td>F</td>
                                <td>444567898901</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Magbanua, Carmela Andrea</td>
                                <td>F</td>
                                <td>234567899012</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Mendoza, Danilo Roberto</td>
                                <td>M</td>
                                <td>324567800123</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Navarro, Carlos Emmanuel</td>
                                <td>M</td>
                                <td>214567801234</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Ponce, Bituin Estrella</td>
                                <td>F</td>
                                <td>294567802345</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Ramirez, Jose Antonio</td>
                                <td>M</td>
                                <td>374567803456</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Reyes, Maria Isabella</td>
                                <td>F</td>
                                <td>454567804567</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Salazar, Fernando Luis</td>
                                <td>M</td>
                                <td>534567805678</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Sandoval, Amihan Teresa</td>
                                <td>F</td>
                                <td>614567806789</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Santos, Andres Miguel</td>
                                <td>M</td>
                                <td>694567807890</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Torres, Alona Graciela</td>
                                <td>F</td>
                                <td>774567808901</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Villanueva, Ricardo Sebastian</td>
                                <td>M</td>
                                <td>854567809012</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>
                            <tr>
                                <td>Yvares, Gianna Mae</td>
                                <td>F</td>
                                <td>934567810123</td>
                                <td><button class="view-btn">View Documents</button></td>
                            </tr>

                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add functionality to search bar
        document.querySelector(".search-button").addEventListener("click", function() {
            const searchValue = document.querySelector(".search-input").value.trim();
            if (searchValue) {
                searchStudent(searchValue);
            }
        });
        
        document.querySelector(".search-input").addEventListener("keypress", function(e) {
            if (e.key === "Enter") {
                const searchValue = this.value.trim();
                if (searchValue) {
                    searchStudent(searchValue);
                }
            }
        });
        
        // Add functionality to view buttons
        document.querySelectorAll(".view-btn").forEach(button => {
            button.addEventListener("click", function() {
                const studentName = this.parentElement.parentElement.querySelector("td").textContent;
                const lrn = this.parentElement.parentElement.querySelector("td:nth-child(3)").textContent;
                alert(`Viewing documents for ${studentName} (LRN: ${lrn})`);
                // Here you could redirect to a student details page
                // window.location.href = `student_details.html?lrn=${lrn}`;
            });
        });
    });

    function searchStudent(lrn) {
        const rows = document.querySelectorAll(".students-table tbody tr");
        let found = false;
        
        rows.forEach(row => {
            const studentLRN = row.querySelector("td:nth-child(3)").textContent;
            if (studentLRN.includes(lrn)) {
                row.style.backgroundColor = "#ffffa0";
                found = true;
                
                // Scroll to the matching row
                row.scrollIntoView({ behavior: 'smooth', block: 'center' });
            } else {
                row.style.backgroundColor = "";
            }
        });
        
        if (!found) {
            alert("No student found with that LRN");
        }
    }
    </script>
</body>
</html>
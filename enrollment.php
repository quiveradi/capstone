<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid #333;
            background-color: white;
        }
        .header {
            background-color: #333;
            color: white;
            padding: 5px;
            font-size: 14px;
        }
        .form-title {
            background-color: red;
            color: white;
            padding: 8px;
            text-align: center;
            font-weight: bold;
        }
        .form-content {
            padding: 15px;
        }
        .section-header {
            background-color: #ccc;
            text-align: center;
            padding: 5px;
            font-weight: bold;
            margin: 15px 0;
        }
        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 10px;
        }
        .form-group {
            margin-right: 15px;
            margin-bottom: 10px;
            flex: 1;
            min-width: 150px;
        }
        label {
            display: block;
            font-size: 12px;
            margin-bottom: 3px;
        }
        input[type="text"] {
            width: 100%;
            padding: 3px;
            border: 1px solid #999;
        }
        .checkbox-group {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }
        .checkbox-label {
            margin-left: 2px;
            font-size: 12px;
        }
        .check-options {
            text-align: right;
            font-size: 12px;
        }
        .sex-container {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }
        .submit-button {
            background-color: red;
            color: white;
            border: none;
            padding: 8px 25px;
            border-radius: 15px;
            cursor: pointer;
            display: block;
            margin: 20px auto;
        }
        .parent-section {
            margin-bottom: 15px;
        }
        .parent-title {
            font-weight: bold;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="header">Enrollment Form</div>
        <div class="form-title">Basic Enrollment Form</div>
        
        <div class="form-content">
            <div class="form-row">
                <div class="form-group">
                    <label for="schoolYear">School Year:</label>
                    <input type="text" id="schoolYear">
                </div>
                
                <div class="check-options">
                    <span>Check the appropriate box only:</span>
                    <div style="display: flex; margin-top: 5px;">
                        <div class="checkbox-group">
                            <input type="checkbox" id="withLrn">
                            <label class="checkbox-label" for="withLrn">1. With LRN?</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="yes">
                            <label class="checkbox-label" for="yes">Yes</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="no">
                            <label class="checkbox-label" for="no">No</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="returning">
                            <label class="checkbox-label" for="returning">2. Returning Student</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="yes2">
                            <label class="checkbox-label" for="yes2">Yes</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="no2">
                            <label class="checkbox-label" for="no2">No</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="gradeLevel">Grade level to Enroll:</label>
                    <input type="text" id="gradeLevel">
                </div>
            </div>
            
            <div class="section-header">
                LEARNER INFORMATION
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName">
                </div>
                
                <div class="form-group">
                    <label for="birthDate">Birth date (mm/dd/yyyy):</label>
                    <input type="text" id="birthDate">
                </div>
                
                <div class="form-group">
                    <label for="birthPlace">Place of Birth (Municipality/City):</label>
                    <input type="text" id="birthPlace">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName">
                </div>
                
                <div class="form-group">
                    <div class="sex-container">
                        <span style="font-size: 12px; margin-right: 10px;">Sex:</span>
                        <div class="checkbox-group">
                            <input type="checkbox" id="male">
                            <label class="checkbox-label" for="male">Male</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="female">
                            <label class="checkbox-label" for="female">Female</label>
                        </div>
                    </div>
                    <label for="age">Age:</label>
                    <input type="text" id="age" style="width: 50%;">
                </div>
                
                <div class="form-group">
                    <label for="motherTongue">Mother Tongue:</label>
                    <input type="text" id="motherTongue">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="middleInitial">Middle Initial:</label>
                    <input type="text" id="middleInitial">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="commonName">Extension Name (e.g., Jr, II, if applicable):</label>
                    <input type="text" id="commonName">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="houseNo">House No.:</label>
                    <input type="text" id="houseNo">
                </div>
                
                <div class="form-group">
                    <label for="streetName">Street Name:</label>
                    <input type="text" id="streetName">
                </div>
                
                <div class="form-group">
                    <label for="barangay">Barangay:</label>
                    <input type="text" id="barangay">
                </div>
                
                <div class="form-group">
                    <label for="zipcode">Zipcode:</label>
                    <input type="text" id="zipcode">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="municipality">Municipality/City:</label>
                    <input type="text" id="municipality">
                </div>
                
                <div class="form-group">
                    <label for="province">Province:</label>
                    <input type="text" id="province">
                </div>
                
                <div class="form-group">
                    <label for="country">Country:</label>
                    <input type="text" id="country">
                </div>
            </div>
            
            <div class="section-header">
                PARENTS/GUARDIAN INFORMATION
            </div>
            
            <div class="parent-section">
                <div class="parent-title">Father's Name</div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="fatherLastName">Last Name:</label>
                        <input type="text" id="fatherLastName">
                    </div>
                    <div class="form-group">
                        <label for="fatherFirstName">First Name:</label>
                        <input type="text" id="fatherFirstName">
                    </div>
                    <div class="form-group">
                        <label for="fatherMiddleInitial">Middle Initial:</label>
                        <input type="text" id="fatherMiddleInitial">
                    </div>
                    <div class="form-group">
                        <label for="fatherPhoneNumber">Phone Number:</label>
                        <input type="text" id="fatherPhoneNumber">
                    </div>
                </div>
            </div>
            
            <div class="parent-section">
                <div class="parent-title">Mother's Name</div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="motherLastName">Last Name:</label>
                        <input type="text" id="motherLastName">
                    </div>
                    <div class="form-group">
                        <label for="motherFirstName">First Name:</label>
                        <input type="text" id="motherFirstName">
                    </div>
                    <div class="form-group">
                        <label for="motherMiddleInitial">Middle Initial:</label>
                        <input type="text" id="motherMiddleInitial">
                    </div>
                    <div class="form-group">
                        <label for="motherPhoneNumber">Phone Number:</label>
                        <input type="text" id="motherPhoneNumber">
                    </div>
                </div>
            </div>
            
            <div class="parent-section">
                <div class="parent-title">Legal Guardian's Name</div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="guardianLastName">Last Name:</label>
                        <input type="text" id="guardianLastName">
                    </div>
                    <div class="form-group">
                        <label for="guardianFirstName">First Name:</label>
                        <input type="text" id="guardianFirstName">
                    </div>
                    <div class="form-group">
                        <label for="guardianMiddleInitial">Middle Initial:</label>
                        <input type="text" id="guardianMiddleInitial">
                    </div>
                    <div class="form-group">
                        <label for="guardianPhoneNumber">Phone Number:</label>
                        <input type="text" id="guardianPhoneNumber">
                    </div>
                </div>
            </div>
            
            <button class="submit-button">SUBMIT</button>
        </div>
    </div>
</body>
</html>
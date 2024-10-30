<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=keyboard_return" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
            justify-content: flex-end; /* Align content to the right side */
        }

        .container {
            width: 60%; /* Adjusted width for more right alignment */
            padding: 20px 50px;
            background-color: #fff;
            margin-right: 300px; /* Space left for future navigation on the left */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional shadow for better contrast */
            border-radius: 8px;
        }
        .return-button {
            position: absolute;
            top: 20px;
            padding: 10px;
            left: 400px;
            font-size: 59px;
            color: #007bff;
            text-decoration: none;
        }

        .return-button:hover {
            color: #0056b3;
        }
        

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .section {
            margin-bottom: 30px;
        }

        .section h2 {
            color: #007bff;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        .section p, .section ul {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
        }

        .section ul {
            list-style-type: none;
            padding-left: 0;
        }

        .section ul li {
            margin-bottom: 15px;
        }

        .section ul li strong {
            display: block;
            color: #333;
        }

        .footer {
            font-size: 0.9rem;
            color: #777;
            text-align: center;
            margin-top: 40px;
        }

        .profile-pic {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 2px solid white;
            margin: 20px auto;
            margin-right: 60px;
            display: block;
        }

        /* Media query for smaller screens */
        @media (max-width: 768px) {
            .container {
                padding: 15px 20px;
                margin-right: 0; /* Removes extra right space on small screens */
                width: 100%; /* Full width for smaller screens */
            }
        }
    </style>
</head>
<body>
<a href="index.php" class="return-button">
        <span class="material-symbols-outlined">keyboard_return</span>
    </a>
    <div class="container">
        <h1>Curriculum Vitae</h1>
        <img src="IMG_20240601_102030.jpg" alt="Brian Caparoso" class="profile-pic">

        <!-- Personal Information Section -->
        <div class="section">
            <h2>Personal Information</h2>
            <p><strong>Name:</strong> Brian P. Caparoso</p>
            <p><strong>Email:</strong> caparosobrian@gmail.com</p>
            <p><strong>Phone:</strong> 639475972906</p>
            <p><strong>Address:</strong> San Vicente, Liloan Cebu, Philippines</p>
        </div>

        <!-- Education Section -->
        <div class="section">
            <h2>Education</h2>
            <ul>
                <li>
                    <strong>Bachelor of Science in Information Systems</strong>
                    Cebu Technological University - Main Campus<br>
                    2021 - Present
                </li>
            </ul>
        </div>

        <!-- Skills Section -->
        <div class="section">
            <h2>Skills</h2>
            <ul>
                <li><strong>Programming Languages:</strong> PHP, HTML, CSS, JavaScript</li>
                <li><strong>Software:</strong> Microsoft Office, Excel, QuickBooks</li>
                <li><strong>Languages:</strong> English, Cebuano, Tagalog</li>
                <li><strong>Other Skills:</strong> System Analysis, Business Process Management</li>
            </ul>
        </div>

        <!-- Return to Main Page Link -->
        <div class="footer">
            
            <br><br>
            Created by: Brian P. Caparoso | Date: 2024-10-15
        </div>
    </div>
</body>
</html>

<?php
session_start();

// Set the available courses with icons
$coursesWithIcons = [
    'Java' => '☕',
    'Python' => '🐍',
    'C-Language' => 'C',
    'DBMS' => '💾',
    'TOC' => '📘',
    'HTML' => '🌐',
];

// Check if $_SESSION['cou'] is set and not empty
if (isset($_SESSION['cou']) && is_array($_SESSION['cou'])) {
    $selectedCourses = $_SESSION['cou'];
} else {
    $selectedCourses = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected Courses</title>
    <style>
        body {
            background-image: url('https://img.freepik.com/premium-vector/white-paper-background-vector-illustration_961004-365.jpg?w=740');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            height: 100vh;
        }

        .card {
            position: relative;
            width: 200px;
            height: 250px;
            background-color: transparent;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            border: 2px solid rgb(5, 5, 43); /* Border color is white */
            border-radius: 5px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Align content to the top */
            text-align: left; /* Align text to the left */
            cursor: pointer;
            transform: scale(0.9);
            transition: transform 0.3s ease-in-out;
            background-blend-mode: overlay;
            animation: borderAnimation 3s infinite;
        }

        @keyframes borderAnimation {
            0% {
                border-color: rgb(5, 5, 43);
            }

            25% {
                border-color: rgba(255, 0, 0, 0.5);
            }

            50% {
                border-color: rgba(0, 123, 255, 0.7);
            }

            75% {
                border-color: rgba(57, 255, 20, 0.5);
            }

            100% {
                border-color: rgb(5, 5, 43);
            }
        }

        .card:hover {
            transform: scale(1.05); /* Adjust the scale factor as desired */
            animation: none; /* Disable the border animation on hover */
        }

        .card:before,
        .card:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border: 5px solid transparent;
            border-radius: 5px;
            animation: pulse 3s infinite;
        }

        .card:before {
            top: -5px;
            left: 0;
            border-image: linear-gradient(90deg, transparent, rgba(255, 49, 49, 0.5), rgb(255, 49, 49));
            border-image-slice: 1;
        }

        .card:after {
            bottom: -5px;
            right: 0;
            border-image: linear-gradient(90deg, rgb(57, 255, 20), rgba(57, 255, 20, 0.5), transparent);
            border-image-slice: 1;
        }

        .card-title {
            background-color: rgba(0, 123, 255, 0.7);
            color: #fff;
            padding: 10px;
            font-weight: bold;
            font-size: 18px;
        }

        .card-content {
            padding: 20px;
        }

        .course-icon {
            font-size: 64px;
            color: #007BFF;
            text-decoration: none;
        }

        .course-name {
            font-size: 24px;
            margin: 10px 0;
            color: black;
        }

        .card a {
            text-decoration: none;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
</head>

<body>
    <?php
    foreach ($coursesWithIcons as $course => $icon) {
        if (in_array($course, $selectedCourses)) {
    ?>
    <div class="card">
        <a href="<?= $course ?>.html">
            <div class="card-title"><?= $course ?></div>
            <div class="card-content">
                <i class="course-icon"><?= $icon ?></i>
                <div class="course-name"><?= $course ?></div>
            </div>
        </a>
    </div>
    <?php
        }
    }
    ?>
</body>

</html>

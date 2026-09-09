<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>

    <style>
        body {
            background-color: #e8f5e9;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }

        a {
            color: #2e7d32;
            text-decoration: none;
            background-color: #c8e6c9;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 8px;
            display: inline-block;
        }

        a:hover {
            background-color: #a5d6a7;
        }

        h1 {
            color: #1b5e20;
            margin-top: 40px;
        }

        p {
            background-color: white;
            color: #2e7d32;
            width: 400px;
            margin: 0 auto;
            padding: 15px;
            border: 1px solid #81c784;
            border-bottom: none;
            text-align: left;
        }

        p:first-of-type {
            border-radius: 10px 10px 0 0;
        }

        p:last-of-type {
            border-bottom: 1px solid #81c784;
            border-radius: 0 0 10px 10px;
        }
    </style>
</head>

<body>

    <a href="/student">Home</a>
    <a href="/student/profile">Profile</a>

    <h1>Student Profile</h1>

    <p>Student ID: <?php echo $student_id; ?></p>
    <p>Name: <?php echo $name; ?></p>
    <p>Course: <?php echo $course; ?></p>
    <p>Year: <?php echo $year; ?></p>
    <p>Section: <?php echo $section; ?></p>
    <p>Email: <?php echo $email; ?></p>

</body>
</html>
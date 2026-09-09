<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <style>
        :root { --green: #2e7d32; --light: #e8f5e9; --accent: #1b5e20; }
        body { font-family: Arial, Helvetica, sans-serif; background: linear-gradient(180deg,#f6fff8,#ffffff); color: #0b2b13; margin:0; }
        .header { background: var(--green); color: #fff; padding: 18px 24px; }
        .header h1 { margin:0; font-size:1.25rem; }
        .container { max-width: 820px; margin: 24px auto; padding: 20px; background: var(--light); border-radius: 8px; box-shadow: 0 4px 14px rgba(46,125,50,0.06); }
        .profile-row { margin-bottom: 10px; }
        .label { font-weight:700; color: var(--green); display:inline-block; width:110px; }
    </style>
</head>
<body>
    <header class="header">
        <h1>Student Profile</h1>
    </header>
    <main class="container">
        <div class="profile-row"><span class="label">Student ID:</span> <?php echo htmlspecialchars($student_id); ?></div>
        <div class="profile-row"><span class="label">Name:</span> <?php echo htmlspecialchars($name); ?></div>
        <div class="profile-row"><span class="label">Course:</span> <?php echo htmlspecialchars($course); ?></div>
        <div class="profile-row"><span class="label">Year:</span> <?php echo htmlspecialchars($year); ?></div>
        <div class="profile-row"><span class="label">Section:</span> <?php echo htmlspecialchars($section); ?></div>
        <div class="profile-row"><span class="label">Email:</span> <?php echo htmlspecialchars($email); ?></div>
    </main>
</body>
</html>
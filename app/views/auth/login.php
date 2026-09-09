<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        :root {
            --primary-color: #2563eb;
            --primary-hover: #1d4ed8;
            --danger-color: #dc2626;
            --bg-color: #f8fafc;
            --surface-color: #ffffff;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --radius: 8px;
            --shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; background-color: var(--bg-color); color: var(--text-main); line-height: 1.5; }
        a { color: var(--primary-color); text-decoration: none; }

        .site-header { background-color: var(--surface-color); border-bottom: 1px solid var(--border-color); padding: 1rem 2rem; font-size: 1.25rem; font-weight: 600; margin-bottom: 2rem; box-shadow: var(--shadow); }
        .site-header a { color: var(--text-main); }

        .card-container { max-width: 420px; margin: 2rem auto; padding: 2rem; background-color: var(--surface-color); border-radius: var(--radius); box-shadow: var(--shadow); border: 1px solid var(--border-color); }
        h1 { font-size: 1.5rem; font-weight: 700; color: var(--text-main); margin-bottom: 1.5rem; }

        .form-group { margin-bottom: 1.25rem; display: flex; flex-direction: column; }
        .form-group label { font-size: 0.875rem; font-weight: 600; color: var(--text-main); margin-bottom: 0.375rem; }

        .form-group input[type="email"],
        .form-group input[type="password"],
        .form-group select {
            width: 100%;
            padding: 0.625rem 0.75rem;
            font-size: 0.95rem;
            color: var(--text-main);
            background-color: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            outline: none;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        .btn { display: block; width: 100%; padding: 0.75rem 1rem; font-size: 0.95rem; font-weight: 600; color: #ffffff; background-color: var(--primary-color); border: none; border-radius: var(--radius); cursor: pointer; transition: background-color 0.2s ease; margin-top: 0.5rem; }
        .btn:hover { background-color: var(--primary-hover); }

        .notification { background-color: #fef2f2; color: var(--danger-color); border: 1px solid #fecaca; padding: 0.75rem 1rem; border-radius: var(--radius); font-size: 0.875rem; margin-bottom: 1.25rem; }
    </style>
</head>
<body>
    <header class="site-header">
        <a href="<?= site_url('/'); ?>">My Site</a>
    </header>

    <div class="card-container">
        <h1>Login</h1>
        
        <?php if (!empty($error)): ?>
            <div class="notification"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
        <?php endif; ?>

        <form action="<?= site_url('/login'); ?>" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="role">Login as</label>
                <select id="role" name="role" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button class="btn" type="submit">Login</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductView</title>
    <style>
        :root {
            --primary-color: #2563eb;
            --primary-hover: #1d4ed8;
            --danger-color: #dc2626;
            --danger-hover: #b91c1c;
            --bg-color: #f8fafc;
            --surface-color: #ffffff;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --notification-bg: #dbeafe;
            --notification-text: #1e40af;
            --radius: 8px;
            --shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; background-color: var(--bg-color); color: var(--text-main); line-height: 1.5; padding-bottom: 2rem; }
        a { color: var(--primary-color); text-decoration: none; transition: color 0.2s ease; }
        a:hover { text-decoration: underline; }

        .site-header { background-color: var(--surface-color); border-bottom: 1px solid var(--border-color); padding: 1rem 2rem; font-size: 1.25rem; font-weight: 600; margin-bottom: 1.5rem; box-shadow: var(--shadow); }
        .site-header a { color: var(--text-main); }

        .container { max-width: 1100px; margin: 0 auto; padding: 0 1rem; }

        .top-actions { max-width: 1100px; margin: 0 auto 1rem auto; padding: 0 1rem; display: flex; gap: 0.5rem; }
        .btn-action { display: inline-block; padding: 0.5rem 1rem; border-radius: var(--radius); font-weight: 500; font-size: 0.9rem; text-decoration: none; }
        .btn-add { background-color: var(--primary-color); color: #ffffff; }
        .btn-add:hover { background-color: var(--primary-hover); text-decoration: none; }
        .btn-logout { background-color: transparent; color: var(--text-muted); border: 1px solid var(--border-color); }
        .btn-logout:hover { background-color: #f1f5f9; color: var(--text-main); text-decoration: none; }

        table { width: 100%; border-collapse: collapse; background-color: var(--surface-color); border-radius: var(--radius); overflow: hidden; box-shadow: var(--shadow); border: 1px solid var(--border-color); }
        th, td { padding: 0.75rem 1rem; text-align: left; }
        th { background-color: #f1f5f9; color: var(--text-muted); font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em; font-weight: 600; border-bottom: 1px solid var(--border-color); }
        td { border-bottom: 1px solid var(--border-color); font-size: 0.95rem; }
        tr:last-child td { border-bottom: none; }
        tr:hover { background-color: #f8fafc; }

        td a { margin-right: 0.5rem; font-weight: 500; font-size: 0.875rem; }
        td a.action-edit { color: var(--primary-color); }
        td a.action-delete { color: var(--danger-color); }
        td a.action-delete:hover { color: var(--danger-hover); }

        .notification { max-width: 1100px; margin: 0 auto 1.5rem auto; padding: 0.875rem 1.25rem; background-color: var(--notification-bg); color: var(--notification-text); border-radius: var(--radius); font-size: 0.95rem; display: flex; align-items: center; justify-content: space-between; }
        .notification button { background: none; border: none; font-size: 1.25rem; color: var(--notification-text); cursor: pointer; opacity: 0.7; }
        .notification button:hover { opacity: 1; }

        @media (max-width: 768px) { .container { overflow-x: auto; } table { min-width: 600px; } }
    </style>
</head>
<body>
    <header class="site-header">
        <a href="<?= site_url('/products'); ?>"><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></a>
    </header>

    <?php if (!empty($notification)): ?>
        <div class="notification" role="status" id="notification">
            <?= htmlspecialchars($notification, ENT_QUOTES, 'UTF-8'); ?>
            <button type="button" onclick="document.getElementById('notification').remove();" aria-label="Close notification">&times;</button>
        </div>
    <?php endif; ?>

    <div class="top-actions">
        <?php if ($user_role === 'admin'): ?>
            <a href="<?= site_url('/product/create'); ?>" class="btn-action btn-add">Add Product</a>
        <?php endif; ?>
        <a href="<?= site_url('/logout'); ?>" class="btn-action btn-logout">Logout</a>
    </div>

    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Created At</th>
                <?php if ($user_role === 'admin'): ?>
                    <th>Actions</th>
                <?php endif; ?>
            </tr>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['product_name']; ?></td>
                    <td><?php echo $product['description']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['created_at']; ?></td>
                    <?php if ($user_role === 'admin'): ?>
                        <td>
                            <a href="<?= site_url('/product/edit/' . $product['id']); ?>" class="action-edit">Edit</a>
                            <a href="<?= site_url('/product/delete/' . $product['id']); ?>" class="action-delete" onclick="return confirm('Delete this product?');">Delete</a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <?php if (!empty($notification)): ?>
        <script>
            window.setTimeout(function () {
                var notification = document.getElementById('notification');
                if (notification) {
                    notification.remove();
                }
            }, 4000);
        </script>
    <?php endif; ?>
</body>
</html>
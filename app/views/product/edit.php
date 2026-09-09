<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; background-color: var(--bg-color); color: var(--text-main); line-height: 1.5; padding-bottom: 2rem; }
        a { color: var(--primary-color); text-decoration: none; }

        .site-header { background-color: var(--surface-color); border-bottom: 1px solid var(--border-color); padding: 1rem 2rem; font-size: 1.25rem; font-weight: 600; margin-bottom: 2rem; box-shadow: var(--shadow); }
        .site-header a { color: var(--text-main); }

        .card-container { max-width: 550px; margin: 2rem auto; padding: 2rem; background-color: var(--surface-color); border-radius: var(--radius); box-shadow: var(--shadow); border: 1px solid var(--border-color); }

        h2 { font-size: 1.5rem; font-weight: 700; color: var(--text-main); margin-bottom: 1.5rem; }

        .error-list { background-color: #fef2f2; color: var(--danger-color); border: 1px solid #fecaca; padding: 0.75rem 1rem 0.75rem 2rem; border-radius: var(--radius); font-size: 0.875rem; margin-bottom: 1.25rem; }

        .form-group { margin-bottom: 1.25rem; display: flex; flex-direction: column; }
        .form-group label { font-size: 0.875rem; font-weight: 600; color: var(--text-main); margin-bottom: 0.375rem; }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group textarea {
            width: 100%;
            padding: 0.625rem 0.75rem;
            font-size: 0.95rem;
            color: var(--text-main);
            background-color: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            outline: none;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
            font-family: inherit;
        }

        .form-group textarea { min-height: 100px; resize: vertical; }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        .form-actions { display: flex; flex-direction: column; gap: 0.75rem; margin-top: 1.5rem; }

        .btn { display: inline-block; width: 100%; padding: 0.75rem 1rem; font-size: 0.95rem; font-weight: 600; color: #ffffff; background-color: var(--primary-color); border: none; border-radius: var(--radius); cursor: pointer; transition: background-color 0.2s ease; text-align: center; }
        .btn:hover { background-color: var(--primary-hover); }

        .btn.secondary { background-color: transparent; color: var(--text-muted); border: 1px solid var(--border-color); }
        .btn.secondary:hover { background-color: #f1f5f9; color: var(--text-main); }
    </style>
</head>
<body>
    <header class="site-header">
        <a href="<?= site_url('/products'); ?>">Products</a>
    </header>
    <div class="card-container">
        <h2>Edit Product</h2>
        
        <?php if (!empty($errors)): ?>
            <ul class="error-list">
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="<?= site_url('/product/edit/' . $product['id']); ?>" method="post">
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" id="product_name" name="product_name" value="<?= htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" required><?= htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" step="0.01" value="<?= htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" value="<?= htmlspecialchars($product['quantity'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            
            <div class="form-actions">
                <button class="btn" type="submit">Update Product</button>
                <a class="btn secondary" href="<?= site_url('/product/display'); ?>">Back to products</a>
            </div>
        </form>
    </div>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; background-color: var(--bg-color); color: var(--text-main); line-height: 1.5; padding-bottom: 2rem; }
        a { color: var(--primary-color); text-decoration: none; }

        .site-header { background-color: var(--surface-color); border-bottom: 1px solid var(--border-color); padding: 1rem 2rem; font-size: 1.25rem; font-weight: 600; margin-bottom: 2rem; box-shadow: var(--shadow); }
        .site-header a { color: var(--text-main); }

        .card-container { max-width: 550px; margin: 2rem auto; padding: 2rem; background-color: var(--surface-color); border-radius: var(--radius); box-shadow: var(--shadow); border: 1px solid var(--border-color); }

        h2 { font-size: 1.5rem; font-weight: 700; color: var(--text-main); margin-bottom: 1.5rem; }

        .error-list { background-color: #fef2f2; color: var(--danger-color); border: 1px solid #fecaca; padding: 0.75rem 1rem 0.75rem 2rem; border-radius: var(--radius); font-size: 0.875rem; margin-bottom: 1.25rem; }

        .form-group { margin-bottom: 1.25rem; display: flex; flex-direction: column; }
        .form-group label { font-size: 0.875rem; font-weight: 600; color: var(--text-main); margin-bottom: 0.375rem; }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group textarea {
            width: 100%;
            padding: 0.625rem 0.75rem;
            font-size: 0.95rem;
            color: var(--text-main);
            background-color: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            outline: none;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
            font-family: inherit;
        }

        .form-group textarea { min-height: 100px; resize: vertical; }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        .form-actions { display: flex; flex-direction: column; gap: 0.75rem; margin-top: 1.5rem; }

        .btn { display: inline-block; width: 100%; padding: 0.75rem 1rem; font-size: 0.95rem; font-weight: 600; color: #ffffff; background-color: var(--primary-color); border: none; border-radius: var(--radius); cursor: pointer; transition: background-color 0.2s ease; text-align: center; }
        .btn:hover { background-color: var(--primary-hover); }

        .btn.secondary { background-color: transparent; color: var(--text-muted); border: 1px solid var(--border-color); }
        .btn.secondary:hover { background-color: #f1f5f9; color: var(--text-main); }
    </style>
</head>
<body>
    <header class="site-header">
        <a href="<?= site_url('/products'); ?>">Products</a>
    </header>
    <div class="card-container">
        <h2>Edit Product</h2>
        
        <?php if (!empty($errors)): ?>
            <ul class="error-list">
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="<?= site_url('/product/edit/' . $product['id']); ?>" method="post">
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" id="product_name" name="product_name" value="<?= htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" required><?= htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" step="0.01" value="<?= htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" value="<?= htmlspecialchars($product['quantity'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            
            <div class="form-actions">
                <button class="btn" type="submit">Update Product</button>
                <a class="btn secondary" href="<?= site_url('/product/display'); ?>">Back to products</a>
            </div>
        </form>
    </div>
</body>
</html>
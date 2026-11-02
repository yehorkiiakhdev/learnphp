<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Technology and news blog">
    <meta name="theme-color" content="#f5f7fb">

    <title><?= htmlspecialchars($title ?? 'TechBlog') ?></title>

    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="/blog.css" rel="stylesheet">

    <style>
        :root {
            --bs-primary: #2563eb;
            --bs-primary-rgb: 37, 99, 235;
            --bs-body-bg: #f5f7fb;
            --bs-body-color: #172033;
            --bs-border-color: #e5eaf2;
            --bs-link-color: #2563eb;
            --bs-link-hover-color: #1d4ed8;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f5f7fb;
            color: #172033;
        }

        a {
            text-decoration: none;
        }

        .btn {
            font-weight: 600;
            border-radius: 8px;
        }

        .btn-primary {
            --bs-btn-bg: #2563eb;
            --bs-btn-border-color: #2563eb;
            --bs-btn-hover-bg: #1d4ed8;
            --bs-btn-hover-border-color: #1d4ed8;
        }

        .card {
            border: 1px solid #e5eaf2;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(23, 32, 51, 0.04);
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            letter-spacing: -0.5px;
        }
    </style>
</head>

<body>

<?php include __DIR__ . '/icons.php'; ?>
<?php include __DIR__ . '/theme-select.php'; ?>
<?php include __DIR__ . '/nav.php'; ?>

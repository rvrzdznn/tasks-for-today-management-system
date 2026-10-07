<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskly — Login</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
<main class="container">
    <section class="header">
        <div class="eyebrow">Taskly</div>
        <h1>Login</h1>
        <p>Sign in to manage your tasks.</p>
    </section>

    <?php if (session()->getFlashdata('error')): ?>
        <p><?= esc(session()->getFlashdata('error')) ?></p>
    <?php endif; ?>

    <form action="<?= base_url('login') ?>" method="post">
        <p>
            <label for="username">Username</label><br>
            <input type="text" id="username" name="username" value="<?= old('username') ?>" required>
        </p>
        <p>
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" required>
        </p>
        <button type="submit">Log In</button>
    </form>
</main>
</body>
</html>

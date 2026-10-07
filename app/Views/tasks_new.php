<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskly — New Task</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
<nav class="navbar"><div class="logo">task<span>ly</span></div><div class="nav-links"><a href="<?= base_url('/') ?>">Today</a><a href="<?= base_url('tasks') ?>">Tasks</a><a href="<?= base_url('profile') ?>">Profile</a><a href="<?= base_url('about') ?>">About</a><a href="<?= base_url('logout') ?>">Logout</a></div></nav>
<main class="container">
    <section class="header"><div class="eyebrow">Task management</div><h1>New task</h1><p>Add something to your list.</p></section>
    <?php if ($errors = session()->getFlashdata('errors')): ?><div><?= implode('<br>', array_map('esc', $errors)) ?></div><?php endif; ?>
    <form action="<?= base_url('tasks/create') ?>" method="post">
        <p><label for="title">Title</label><br><input type="text" id="title" name="title" value="<?= old('title') ?>" required></p>
        <p><label for="task_date">Task date</label><br><input type="date" id="task_date" name="task_date" value="<?= old('task_date') ?>" required></p>
        <p><label for="status">Status</label><br><select id="status" name="status"><option value="pending">Pending</option><option value="done">Done</option></select></p>
        <button type="submit">Create Task</button>
    </form>
</main>
</body>
</html>

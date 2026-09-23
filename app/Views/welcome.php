<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Taskly — Today</title>

    <link rel="stylesheet"
          href="<?= base_url('css/style.css') ?>">

</head>

<body>

<nav class="navbar">

    <div class="logo">
        task<span>ly</span>
    </div>

    <div class="nav-links">

        <a href="<?= base_url('/') ?>">
            Today
        </a>

        <a href="<?= base_url('tasks') ?>">
            Tasks
        </a>

        <a href="<?= base_url('profile') ?>">
            Profile
        </a>

        <a href="<?= base_url('about') ?>">
            About
        </a>

    </div>

</nav>


<main class="container">

    <section class="header">

        <div class="eyebrow">
            <?= date('l, F j') ?>
        </div>

        <h1>
            Good morning 👋
        </h1>

        <p>
            Let's get some stuff done today.
        </p>

    </section>


    <?php

        $totalTasks = count($tasks);

        $completedTasks = 0;

        foreach ($tasks as $task) {

            if ($task['status'] === 'done') {
                $completedTasks++;
            }

        }

    ?>


    <section class="stats">

        <div class="stat-card">

            <div class="stat-number">
                <?= $totalTasks ?>
            </div>

            <div class="stat-label">
                tasks today
            </div>

        </div>


        <div class="stat-card">

            <div class="stat-number">
                <?= $completedTasks ?>
            </div>

            <div class="stat-label">
                completed ✓
            </div>

        </div>

    </section>


    <section>

        <div class="section-header">

            <h2>
                Today's agenda
            </h2>

            <span class="task-count">
                <?= $totalTasks ?> tasks
            </span>

        </div>


        <div class="task-grid">

            <?php if (!empty($tasks)): ?>

                <?php foreach ($tasks as $task): ?>

                    <div class="task-card">

                        <div class="task-icon">

                            <?php if ($task['status'] === 'done'): ?>

                                ✓

                            <?php else: ?>

                                ○

                            <?php endif; ?>

                        </div>


                        <div class="task-info">

                            <div class="task-title">
                                <?= esc($task['title']) ?>
                            </div>

                            <div class="task-date">
                                <?= esc($task['task_date']) ?>
                            </div>

                        </div>


                        <span class="status <?= esc($task['status']) ?>">

                            <?= esc($task['status']) ?>

                        </span>

                    </div>

                <?php endforeach; ?>


            <?php else: ?>

                <div class="empty">

                    <div style="font-size: 25px; margin-bottom: 8px;">
                        ✨
                    </div>

                    You're all caught up.
                    <br>

                    No tasks for today.

                </div>

            <?php endif; ?>

        </div>

    </section>

</main>


<footer class="footer">

    made for getting things done · taskly

</footer>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Taskly — All Tasks</title>

    <link rel="stylesheet" href="/css/style.css">

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
            Your workspace
        </div>

        <h1>
            All tasks
        </h1>

        <p>
            Everything you've got going on, in one place.
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
                total tasks
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
                Task list
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

                    No tasks found.

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
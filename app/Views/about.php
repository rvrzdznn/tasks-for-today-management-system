<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Taskly — About</title>

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
            About the project
        </div>

        <h1>
        </h1>

        <p>
            A simple task management system built with CodeIgniter 4.
        </p>

    </section>


    <div class="about-card">

        <div class="about-icon">
            ✦
        </div>

        <div>

            <h2>
                Tasks for Today Management System
            </h2>

            <p>
                Small task management application
                designed to organize daily tasks and make it
                easier to see what needs to get done.
            </p>

            <p>
                Built as part of IT0049 — Web System Technologies.
            </p>

            <div class="tech-tags">

                <span>CodeIgniter 4</span>
                <span>PHP</span>
                <span>MySQL</span>
                <span>MVC</span>

            </div>

        </div>

    </div>


    <div class="developer-card">

        <div>

            <div class="eyebrow">
                Developer
            </div>

            <h2>
                Reever Lanze Dizon
            </h2>

            <p>
                BS Information Technology
            </p>

        </div>

    </div>

</main>


<footer class="footer">


</footer>

</body>

</html>
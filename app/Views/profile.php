<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Taskly — Profile</title>

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
            Your account
        </div>

        <h1>
            Profile
        </h1>

        <p>
            Your information for the Tasks for Today system.
        </p>

    </section>


    <?php if (!empty($user)): ?>

        <div class="profile-card">

            <div class="profile-avatar">
                <?= strtoupper(substr($user['full_name'], 0, 1)) ?>
            </div>


            <div class="profile-info">

                <h2>
                    <?= esc($user['full_name']) ?>
                </h2>

                <p class="username">
                    @<?= esc($user['username']) ?>
                </p>

                <div class="profile-details">

                    <div>
                        <span>Email</span>
                        <strong>
                            <?= esc($user['email']) ?>
                        </strong>
                    </div>

                    <div>
                        <span>Member since</span>
                        <strong>
                            <?= esc($user['created_at']) ?>
                        </strong>
                    </div>

                </div>

            </div>

        </div>

    <?php else: ?>

        <div class="empty">
            No user profile found.
        </div>

    <?php endif; ?>

</main>


<footer class="footer">

    made for getting things done · taskly

</footer>

</body>

</html>
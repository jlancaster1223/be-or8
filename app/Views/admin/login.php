<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be Or8 - WordPress Site Management</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/static/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/static/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/static/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/static/site.webmanifest">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400;500;600;700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/index.css">

</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__icon">
                <div class="header__icon__image">
                    <img src="https://placehold.co/600x400" alt="Be Or8">
                </div>

            </div>
            <div class="header__menu">
                <!-- Menu with "Home", "About", "Guides", "Pricing" -->
                <nav>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/guides">Guides</a></li>
                        <li><a href="/#pricing">Pricing</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header__cta">
                <a href="#" class="button button-primary">
                    <span>Sign Up</span>
                </a>
            </div>
        </div>
    </header>

    <main>
        <section class="admin-form padding-top padding-bottom">
            <div class="container">
                <form action="#" method="post">
                    <h1>Login</h1>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="button button-primary">Login</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__top">
            <div class="container">

            </div>
        </div>

        <div class="footer__middle">
            <div class="container">

            </div>
        </div>

        <div class="footer__bottom">
            <div class="container">
                <p>&copy; <?= date('Y'); ?> Be Or8. All rights reserved.</p>
                <nav>
                    <ul>
                        <li><a href="/admin">Login</a></li>
                        <li><a href="/terms-of-use">Terms of use</a></li>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
</body>

</html>
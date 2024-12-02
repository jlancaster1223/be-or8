<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Be Or8</title>

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

<body class="admin dashboard">
    <aside>
        <h2>Sites</h2>
        <div class="sites__search">
            <input type="text" name="Search" placeholder="search" id="">
        </div>

        <?php
        $sites = [
            [
                'site_name' => 'Embryo Digital',
                'site_url' => 'https://embryo.com',
                'site_key' => 'asllweksks',
                'site_tags' => [
                    'Active' => 'primary'
                ]
            ],
            [
                'site_name' => 'Netbiz Group',
                'site_url' => 'https://netbizgroup.co.uk',
                'site_key' => 'asllweksls',
                'site_tags' => [
                    'Down' => 'warning'
                ]
            ],
        ];
        ?>

        <div class="sites__list">
            <?php foreach($sites as $site) { ?>
                <?php
                // If this is the first, tehn active
                $active = ($site === $sites[0] ? 'active' : '');
                ?>
                <div class="sites__list__item <?=$active;?>" data-key="<?php echo $site['site_key']; ?>" data-url="<?=$site['site_url'];?>" data-name="<?=$site['site_name'];?>">
                    <div class="sites__list__item__header">
                        <h3><?php echo $site['site_name']; ?></h3>
                        <span><?php echo $site['site_url']; ?></span>
                    </div>
                    <div class="sites__list__item__footer">
                        <?php foreach($site['site_tags'] as $tag => $class) { ?>
                            <div class="sites__list__item__tag sites__list__item__tag__<?php echo $class; ?>">
                                <span><?php echo $tag; ?></span>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </aside>
    <main>
        <header>
            <h1>Dashboard</h1>
            <div class="header__actions">
                <button class="button button__primary">Add Site</button>
            </div>
        </header>
        <section class="site__header">
            <div class="site__header__info">
                <h2><?=$sites[0]['site_name'];?></h2>
                <span><?=$sites[0]['site_url'];?></span>
            </div>
            <div class="site__header__actions">

            </div>
        </section>

        <div class="tabs">
            <div class="tabs__labels">
                <div class="tabs__labels__label active" data-tabid="overview">Overview</div>
                <div class="tabs__labels__label" data-tabid="uptime">Uptime</div>
                <div class="tabs__labels__label" data-tabid="security">Security</div>
            </div>

            <div class="tabs__content">
                <div class="tabs__content__item active" data-tabid="overview">
                    <h3>Overview</h3>
                </div>
                <div class="tabs__content__item" data-tabid="uptime">
                    <h3>Uptime</h3>

                    <div class="uptimeGraph">
                        <?php $barCount = 4*24; ?>
                        <?php for($i = 0; $i < $barCount; $i++) { ?>
                            <?php
                            // Pick either up or down randomly
                            $number = rand(0, 1);
                            $status = ($number % 2 === 0 ? 'up' : 'down');
                            ?>
                            <div class="uptimeGraph__bar uptimeGraph__bar__<?=$status;?>"></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tabs__content__item" data-tabid="security">
                    <h3>Security</h3>
                </div>
            </div>
        </div>
    </main>
</body>

<!-- Use jquery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/assets/js/script.js"></script>

</html>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        CakePHP: the rapid development PHP framework:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="container text-center">
            </a>
            <h1>
                Welcome to My Cake PHP 🍓
            </h1>
            <h2>
                By FERRERE Guillyann
            </h2>
            <?= $this->Html->link(
                'Go to page2', // The text displayed on the button
                ['controller' => 'home', 'action' => 'page2'], // The CakePHP route or URL
                ['class' => 'button-class'],
                ['type' => 'button']);
                ?>
            <body>
                <p>
                "Amidst a serene forest, a majestic waterfall cascades down a rocky cliff, creating a mesmerizing display of water and mist. The sunlight filters through the dense foliage, casting a warm glow on the surroundings. Vibrant wildflowers bloom along the banks of a gentle stream that meanders through the scene. A curious deer stands at the water's edge, taking a drink, while colorful birds flit among the branches above. The tranquility of the setting invites you to immerse yourself in the beauty of nature, providing a moment of peace and serenity."
                Feel free to modify and expand upon this description to suit your artistic vision. Happy creating!
                </p>
                <br>
                <?= $test?>
                <?= $this->Html->image('anime_girl.png') ?>
            </body>
        </div>
    </header>
</body>
</html>
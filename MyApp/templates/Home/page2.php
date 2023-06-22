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
                'Go to index', // The text displayed on the button
                ['controller' => 'home', 'action' => 'index'], // The CakePHP route or URL
                ['class' => 'button-class'],
                ['type' => 'button']);
                ?>
            <body>
                <p>
                "A lone sailboat gracefully glides across the shimmering surface of a tranquil lake. The sky above is painted in hues of orange and pink as the sun begins to set, casting a warm glow over the scene. Towering mountains embrace the water, their peaks covered in a delicate blanket of mist. In the distance, a small cabin nestled among the trees exudes a sense of coziness and solitude. The gentle ripples of the lake reflect the serenity of the moment, inviting you to embark on a journey of peaceful contemplation."
                Feel free to interpret and bring this description to life on your canvas!
                </p>
                <br>
                <?= $this->Html->image('je_saispas.avif') ?>
            </body>
        </div>
    </header>
</body>
</html>
<html>
<head>
    <header class="header">
        <p>This is the header content.</p>
    </header>
    <footer class="footer">
        <p>This is the footer content.</p>
    </footer>
</head>
</html>

<main class="main">
    <div class="container">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
        <?= $this->Html->css('footer') ?>
    </div>
</main
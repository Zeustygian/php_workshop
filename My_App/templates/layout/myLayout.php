<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>The peppo lord</h1>
<p>Hello world.</p>

</body>
</html>

<main class="main">

    <div class="container">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
</main>

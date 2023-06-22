<h1>Login</h1>
    <div class="user form">
        <?= $this->Form->create() ?>
        <fieldset>
        <legend>Entrer vos identifiants</legend>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
        </fieldset>
        <?= $this->Form->submit(__('Login')) ?>
        <?= $this->Form->end() ?>

        <?= $this->Html->Link("S'enregistrer", ['action' => 'add']) ?>
    </div>
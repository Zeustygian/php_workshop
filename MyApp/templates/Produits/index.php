<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Produit> $produits
 */
?>
<div class="produits index content">
    <?= $this->Html->link(__('New Produit'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Produits') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nom') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('prix') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('users_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produits as $produit): ?>
                <tr>
                    <td><?= $this->Number->format($produit->id) ?></td>
                    <td><?= h($produit->nom) ?></td>
                    <td><?= h($produit->image) ?></td>
                    <td><?= h($produit->prix) ?></td>
                    <td><?= h($produit->description) ?></td>
                    <td><?= $produit->has('user') ? $this->Html->link($produit->user->id, ['controller' => 'Users', 'action' => 'view', $produit->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $produit->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produit->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produit->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

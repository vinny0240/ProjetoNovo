<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<?php $this->assign('title', __('Usuários') ); ?>

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'breadcrumb' => [
      'Todos',
    ]
  ])
);
?>

<div class="card card-primary card-outline" style="background-color: #2B4560; color: #E1E7E0;">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><!-- --></h2>
    <div class="card-toolbox">
      <?= $this->Paginator->limitControl([], null, [
            'label'=>false,
            'class' => 'form-control-sm',
          ]); ?>
      <?= $this->Html->link(__('Novo Usuário'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0">
    <table class="table text-nowrap">
        <thead>
          <tr>
              <th><?= $this->Paginator->sort('Id_usuário') ?></th>
              <th><?= $this->Paginator->sort('Email') ?></th>
              <th><?= $this->Paginator->sort('Username') ?></th>
              <th><?= $this->Paginator->sort('Cpf') ?></th>
              <th><?= $this->Paginator->sort('Senha') ?></th>
              <th><?= $this->Paginator->sort('Criado') ?></th>
              <th><?= $this->Paginator->sort('Modificado') ?></th>
              <th class="actions"><?= __('Ações') ?></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $user): ?>
          <tr>
            <td><?= $this->Number->format($user->id_user) ?></td>
            <td><?= h($user->email) ?></td>
            <td><?= h($user->username) ?></td>
            <td><?= h($user->cpf) ?></td>
            <td><?= h($user->password) ?></td>
            <td><?= h($user->created) ?></td>
            <td><?= h($user->modified) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $user->id_user], ['class'=>'btn btn-xs btn-outline-primary', 'escape'=>false]) ?>
              <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id_user], ['class'=>'btn btn-xs btn-outline-primary', 'escape'=>false]) ?>
              <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $user->id_user], ['class'=>'btn btn-xs btn-outline-danger', 'escape'=>false, 'confirm' => __('Quer mesmo deletar # {0}?', $user->id_user)]) ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
  </div>
  <!-- /.card-body -->

  <div class="card-footer d-md-flex paginator">
    <div class="mr-auto" style="font-size:.8rem">
      <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
    </div>

    <ul class="pagination pagination-sm">
      <?= $this->Paginator->first('<i class="fas fa-angle-double-left"></i>', ['escape'=>false]) ?>
      <?= $this->Paginator->prev('<i class="fas fa-angle-left"></i>', ['escape'=>false]) ?>
      <?= $this->Paginator->numbers() ?>
      <?= $this->Paginator->next('<i class="fas fa-angle-right"></i>', ['escape'=>false]) ?>
      <?= $this->Paginator->last('<i class="fas fa-angle-double-right"></i>', ['escape'=>false]) ?>
    </ul>

  </div>
  <!-- /.card-footer -->
</div>

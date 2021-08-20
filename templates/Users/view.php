<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<?php
$this->assign('title', __('Usuário') );

$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'breadcrumb' => [
      'Todos' => ['action'=>'index'],
      'Visualização',
    ]
  ])
);
?>

<div class="view card card-primary card-outline" style="background-color: #2B4560; color: #E1E7E0;">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($user->nome) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table text-nowrap">
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Cpf') ?></th>
            <td><?= h($user->cpf) ?></td>
        </tr>
        <tr>
            <th><?= __('Senha') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Usuário') ?></th>
            <td><?= $this->Number->format($user->id_user) ?></td>
        </tr>
        <tr>
            <th><?= __('Criado') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Deletar'),
          ['action' => 'delete',  $user->id_user],
          ['confirm' => __('Quer mesmo deletar # {0}?',  $user->id_user), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Editar'), ['action' => 'edit',  $user->id_user], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancelar'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>
</div>



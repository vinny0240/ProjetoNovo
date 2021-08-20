<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<?php $this->assign('title', __('Adicionar Usuário') ); ?>

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'breadcrumb' => [
      'Todos' => ['action'=>'index'],
      'Adicionar',
    ]
  ])
);
?>


<div class="card card-primary card-outline" style="background-color: #2B4560; color: #E1E7E0;">
  <?= $this->Form->create($user) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('Email');
      echo $this->Form->control('Username');
      echo $this->Form->control('Cpf');
      echo $this->Form->control('Senha');
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="ml-auto">
      <?= $this->Form->button(__('Salvar')) ?>
      <?= $this->Html->link(__('Cancelar'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>

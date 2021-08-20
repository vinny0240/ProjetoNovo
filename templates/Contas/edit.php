<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conta $conta
 */
?>

<?php $this->assign('title', __('Editar Conta') ); ?>

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'breadcrumb' => [
      'Todas' => ['action'=>'index'],
      'Visualizar' => ['action'=>'view', $conta->id_conta],
      'Edição',
    ]
  ])
);
?>


<div class="card card-primary card-outline" style="background-color: #2B4560; color: #E1E7E0;">
  <?= $this->Form->create($conta) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('Banco', ['options' => $bancos, 'empty' => true]);
      echo $this->Form->control('Agência');
      echo $this->Form->control('Número da conta');
      echo $this->Form->control('Saldo');
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Deletar'),
          ['action' => 'delete', $conta->id_conta],
          ['confirm' => __('Quer mesmo deletar # {0}?', $conta->id_conta), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Form->button(__('Salvar')) ?>
      <?= $this->Html->link(__('Cancelar'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>

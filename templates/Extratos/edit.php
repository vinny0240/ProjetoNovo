<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Extrato $extrato
 */
?>

<?php $this->assign('title', __('Editar Extrato') ); ?>

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'breadcrumb' => [
      'Todos' => ['action'=>'index'],
      'Visualizar' => ['action'=>'view', $extrato->id_extrato],
      'Edição',
    ]
  ])
);
?>


<div class="card card-primary card-outline" style="background-color: #2B4560; color: #E1E7E0;">
  <?= $this->Form->create($extrato) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('Valor');
      echo $this->Form->control('Tipo');
      echo $this->Form->control('Conta', ['options' => $contas, 'empty' => true]);
      echo $this->Form->control('Descrição');
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Deletar'),
          ['action' => 'delete', $extrato->id_extrato],
          ['confirm' => __('Quer mesmo deletar # {0}?', $extrato->id_extrato), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Form->button(__('Salvar')) ?>
      <?= $this->Html->link(__('Cancelar'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>

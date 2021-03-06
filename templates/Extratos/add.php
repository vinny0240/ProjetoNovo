<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Extrato $extrato
 */
?>

 <?php $this->assign('title', __(' ') ); ?> 

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'breadcrumb' => [
      'Todos' => ['action'=>'index'],
      'Adição',
    ]
  ])
);
?>


<div class="card card-primary card-outline" style="background-color: #2B4560; color: #E1E7E0;">
  <?= $this->Form->create($extrato) ?>
  <div class="card-body">
    <?php

      echo $this->Form->control('valor');
      echo $this->Form->label('tipo');
      echo $this->Form->select('tipo',['ENTRADA' => 'ENTRADA', 'SAIDA' => 'SAIDA']);
      echo $this->Form->control('conta_id', ['options' => $contas, 'empty' => true]);
      echo $this->Form->control('descricao');
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

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Extrato $extrato
 */
?>

<?php
$this->assign('title', __('Extrato') );

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
    <h2 class="card-title"><?= h($extrato->id_extrato) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table text-nowrap">
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($extrato->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Conta') ?></th>
            <td><?= $extrato->has('conta') ? $this->Html->link($extrato->conta->nconta, ['controller' => 'Contas', 'action' => 'view', $extrato->conta->id_conta]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Descrição') ?></th>
            <td><?= h($extrato->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Extrato') ?></th>
            <td><?= $this->Number->format($extrato->id_extrato) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= $this->Number->format($extrato->valor) ?></td>
        </tr>
        <tr>
            <th><?= __('Criado') ?></th>
            <td><?= h($extrato->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($extrato->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Deletar'),
          ['action' => 'delete',  $extrato->id_extrato],
          ['confirm' => __('Quer mesmo deletar # {0}?',  $extrato->id_extrato), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Editar'), ['action' => 'edit',  $extrato->id_extrato], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancelar'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>
</div>



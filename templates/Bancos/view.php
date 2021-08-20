<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banco $banco
 */
?>

<?php
$this->assign('title', __('Banco') );

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
    <h2 class="card-title"><?= h($banco->nome) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table text-nowrap">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($banco->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Banco') ?></th>
            <td><?= $this->Number->format($banco->id_banco) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Deletar'),
          ['action' => 'delete',  $banco->id_banco],
          ['confirm' => __('Quer mesmo deletar # {0}?',  $banco->id_banco), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Editar'), ['action' => 'edit',  $banco->id_banco], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancelar'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-contas view card" style="background-color: #2B4560; color: #E1E7E0;">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= __('Contas Relacionadas') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('Novo'), ['controller' => 'Contas' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('Tudo '), ['controller' => 'Contas' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table text-nowrap">
      <tr>
          <th><?= __('Id Conta') ?></th>
          <th><?= __('Banco Id') ?></th>
          <th><?= __('Agência') ?></th>
          <th><?= __('Número da conta') ?></th>
          <th><?= __('Saldo') ?></th>
          <th><?= __('Criado') ?></th>
          <th><?= __('Modificado') ?></th>
          <th class="actions"><?= __('Ações') ?></th>
      </tr>
      <?php if (empty($banco->contas)) { ?>
        <tr>
            <td colspan="8" class="text-muted">
              Contas record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($banco->contas as $contas) : ?>
        <tr>
            <td><?= h($contas->id_conta) ?></td>
            <td><?= h($contas->banco_id) ?></td>
            <td><?= h($contas->agencia) ?></td>
            <td><?= h($contas->nconta) ?></td>
            <td><?= h($contas->saldo) ?></td>
            <td><?= h($contas->created) ?></td>
            <td><?= h($contas->modified) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('Visualizar'), ['controller' => 'Contas', 'action' => 'view', $contas->id_conta], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Editar'), ['controller' => 'Contas', 'action' => 'edit', $contas->id_conta], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Contas', 'action' => 'delete', $contas->id_conta], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Quer mesmo deletar # {0}?', $contas->id_conta)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>


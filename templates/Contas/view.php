<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conta $conta
 */
?>

<?php
$this->assign('title', __('Conta') );

$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'breadcrumb' => [
      'Todas' => ['action'=>'index'],
      'Visualização',
    ]
  ])
);
?>

<div class="view card card-primary card-outline" style="background-color: #2B4560; color: #E1E7E0;">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($conta->nconta) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table text-nowrap">
        <tr>
            <th><?= __('Banco') ?></th>
            <td><?= $conta->has('banco') ? $this->Html->link($conta->banco->nome, ['controller' => 'Bancos', 'action' => 'view', $conta->banco->id_banco]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id Conta') ?></th>
            <td><?= $this->Number->format($conta->id_conta) ?></td>
        </tr>
        <tr>
            <th><?= __('Agência') ?></th>
            <td><?= $this->Number->format($conta->agencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Número da conta') ?></th>
            <td><?= $this->Number->format($conta->nconta) ?></td>
        </tr>
        <tr>
            <th><?= __('Saldo') ?></th>
            <td><?= $this->Number->format($conta->saldo) ?></td>
        </tr>
        <tr>
            <th><?= __('Criado') ?></th>
            <td><?= h($conta->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($conta->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Deletar'),
          ['action' => 'delete',  $conta->id_conta],
          ['confirm' => __('Quer mesmo deletar # {0}?',  $conta->id_conta), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Editar'), ['action' => 'edit',  $conta->id_conta], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancelar'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-extratos view card" style="background-color: #2B4560; color: #E1E7E0;">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= __('Extratos Relacionados') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('Novo'), ['controller' => 'Extratos' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('Tudo '), ['controller' => 'Extratos' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table text-nowrap">
      <tr>
          <th><?= __('Id Extrato') ?></th>
          <th><?= __('Valor') ?></th>
          <th><?= __('Tipo') ?></th>
          <th><?= __('Conta') ?></th>
          <th><?= __('Criado') ?></th>
          <th><?= __('Modificado') ?></th>
          <th><?= __('Descrição') ?></th>
          <th class="actions"><?= __('Ações') ?></th>
      </tr>
      <?php if (empty($conta->extratos)) { ?>
        <tr>
            <td colspan="8" class="text-muted">
              Extratos record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($conta->extratos as $extratos) : ?>
        <tr>
            <td><?= h($extratos->id_extrato) ?></td>
            <td><?= h($extratos->valor) ?></td>
            <td><?= h($extratos->tipo) ?></td>
            <td><?= h($extratos->conta_id) ?></td>
            <td><?= h($extratos->created) ?></td>
            <td><?= h($extratos->modified) ?></td>
            <td><?= h($extratos->descricao) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('Visualizar'), ['controller' => 'Extratos', 'action' => 'view', $extratos->id_extrato], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Editar'), ['controller' => 'Extratos', 'action' => 'edit', $extratos->id_extrato], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Extratos', 'action' => 'delete', $extratos->id_extrato], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Quer mesmo deletar # {0}?', $extratos->id_extrato)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>


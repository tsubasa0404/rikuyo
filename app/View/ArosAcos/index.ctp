<?php $this->set('title_for_layout', 'Users'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Access Control')); ?>
          <h1><?= __('Access Control') ?></h1>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 maxW700">
          <div class="main-box">
            <header class="main-box-header clearfix">
              <h2>
                <?php echo __('Users'); ?>
              </h2>
            </header>
            <div class="main-box-body clearfix">


              <div class="arosAcos index table-responsive">
               <h2><?php echo __('リストAcl'); ?></h2>
               <table class="table table-bordered table-hover ">
                 <tr>
                   <th><?php echo $this->Paginator->sort('id'); ?></th>
                   <th><?php echo $this->Paginator->sort('aro_id'); ?></th>
                   <th><?php echo $this->Paginator->sort('aco_id'); ?></th>
                   <th><?php echo $this->Paginator->sort('AcoAlias'); ?></th>
                   <th><?php echo $this->Paginator->sort('作成'); ?></th>
                   <th><?php echo $this->Paginator->sort('読込'); ?></th>
                   <th><?php echo $this->Paginator->sort('更新'); ?></th>
                   <th><?php echo $this->Paginator->sort('削除'); ?></th>
                   <th class="actions"><?php echo __('Actions'); ?></th>
                 </tr>
                 <?php
                 foreach ($arosAcos as $arosAco): ?>
                 <tr>
                   <td><?php echo h($arosAco['ArosAco']['id']); ?></td>
                   <td><?php echo h($arosAco['Aro']['id']); ?></td>
                   <td><?php echo h($arosAco['Aco']['id']); ?></td>
                   <td><?php echo h($arosAco['Aco']['alias']); ?></td>
                   <td><?php echo h($arosAco['ArosAco']['_create']); ?></td>
                   <td><?php echo h($arosAco['ArosAco']['_read']); ?></td>
                   <td><?php echo h($arosAco['ArosAco']['_update']); ?></td>
                   <td><?php echo h($arosAco['ArosAco']['_delete']); ?></td>
                   <td class="actions">
                     <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $arosAco['ArosAco']['id'])); ?>
                     <?php echo $this->Html->link(__('View'), array('action' => 'view', $arosAco['ArosAco']['id'])); ?>
                   </td>
                 </tr>
               <?php endforeach; ?>
             </table>
             <p>
               <?php
               echo $this->Paginator->counter(array(
                 'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                 ));
                 ?> </p>
                 <div class="paging">
                   <?php
                   echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                   echo $this->Paginator->numbers(array('separator' => ''));
                   echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
                   ?>
                 </div>
               </div>
               <div class="actions">
                 <h3><?php echo __('Actions'); ?></h3>
                 <ul>
                   <li><?php echo $this->Html->link(__('新規Acl'), array('controller'=>'Users','action' => 'acl_add')); ?></li>
                   <li><?php echo $this->Html->link(__('Userリスト'), array('controller' => 'Users', 'action' => 'index')); ?> </li>
                   <li><?php echo $this->Html->link(__('Groupリスト'), array('controller' => 'Groups', 'action' => 'index')); ?> </li>
                 </ul>
               </div>
              </div>
            </div>
          </div>



<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
  $(function(){
    $('.md-modal').remove();
    $('#UserUsername').val("");
    $('#UserPassword').val("");

    $('.alert').fadeOut(5000);
  });
<?php $this->Html->scriptEnd(); ?>
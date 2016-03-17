<div class="Acl form">
<?php echo $this->Form->create('Acl'); ?>
 <fieldset>
 <legend><?php echo __('パーミッションの追加'); ?></legend>
 <?php
 echo $this->Form->input('role_id');
 echo $this->Form->input('aco');
 echo $this->Form->radio('create',array(
 'allow'=>'許可','deny'=>'禁止'),
 array('legend'=>'作成','value'=>'deny'));
 echo $this->Form->radio('read',array(
 'allow'=>'許可','deny'=>'禁止'),
 array('legend'=>'読み込み','value'=>'deny'));
 echo $this->Form->radio('update',array(
 'allow'=>'許可','deny'=>'禁止'),
 array('legend'=>'更新','value'=>'deny'));
 echo $this->Form->radio('delete',array(
 'allow'=>'許可','deny'=>'禁止'),
 array('legend'=>'削除','value'=>'deny'));
 ?>
 </fieldset>
<?php echo $this->Form->end(__('追加')); ?>
</div>
<div class="actions">
 <h3><?php echo __('Actions'); ?></h3>
 <ul>
 <li><?php echo $this->Html->link(__('新規User'), array('controller'=>'users','action' => 'add')); ?></li>
 <li><?php echo $this->Html->link(__('リストroles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
 <li><?php echo $this->Html->link(__('新規role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
 <li><?php echo $this->Html->link(__('リストAcl'), array('controller' => 'arosacos', 'action' => 'index')); ?> </li>
 </ul>
</div>
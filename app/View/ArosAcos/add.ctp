<div class="arosAcos form">
<?php echo $this->Form->create('ArosAco',array('action'=>'../users/index','method'=>'post')); ?>
 <fieldset>
 <legend><?php echo __('新規Acl'); ?></legend>
 <?php
 echo $this->Form->input('aro_id');
 echo $this->Form->input('aco_id');
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
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
 <h3><?php echo __('Actions'); ?></h3>
 <ul>
<li><?php echo $this->Html->link(__('リストAcl'), array('action' => 'index')); ?></li>
 <li><?php echo $this->Html->link(__('リストGroup'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
 <li><?php echo $this->Html->link(__('リストUser'), array('controller' => 'users', 'action' => 'index')); ?> </li>
 </ul>
</div>
<div class="entradasTorniquetes form">
<?php echo $this->Form->create('EntradasTorniquete'); ?>
	<fieldset>
		<legend><?php echo __('Edit Entradas Torniquete'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entrada_id');
		echo $this->Form->input('torniquete_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EntradasTorniquete.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('EntradasTorniquete.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Entradas Torniquetes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Entradas'), array('controller' => 'entradas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entrada'), array('controller' => 'entradas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Torniquetes'), array('controller' => 'torniquetes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Torniquete'), array('controller' => 'torniquetes', 'action' => 'add')); ?> </li>
	</ul>
</div>

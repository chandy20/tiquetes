<div class="widget-box">
	<div class="widget-content nopadding">
	<h2 style="text-align:center"><?php echo __('Listado de autorizaciones'); ?></h2>
	<table class="table table-bordered data-table">
	<thead>
	<tr>
			<!-- <th><?php //echo $this->Paginator->sort('id'); ?></th> -->
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<!-- <th class="actions"><?php //echo __('Actions'); ?></th> -->
	</tr>
	</thead>
	<tbody>
	<?php foreach ($authorizations as $authorization): ?>
	<tr>
		<!-- <td><?php //echo h($authorization['Authorization']['id']); ?>&nbsp;</td> -->
		<td style="text-align:center"><?php echo h($authorization['Authorization']['nombre']); ?>&nbsp;</td>
	<!-- 	<td class="actions">
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $authorization['Authorization']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $authorization['Authorization']['id']), array(), __('Are you sure you want to delete # %s?', $authorization['Authorization']['id'])); ?>
		</td> -->
	</tr>
</div>
<?php endforeach; ?>
	</tbody>
	</table>
<!-- 	<p>
	<?php
	// echo $this->Paginator->counter(array(
	// 'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	//));
	?>	</p>
	<div class="paging">
	<?php
		// echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		// echo $this->Paginator->numbers(array('separator' => ''));
		// echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?> -->
	</div>
</div>
<!-- <div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>
		<li><?php //echo $this->Html->link(__('New Authorization'), array('action' => 'add')); ?></li>
		<li><?php //echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div> -->

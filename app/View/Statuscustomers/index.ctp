<div class="statuscustomers index">
	<h2><?php echo __('Status Customers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('issold'); ?></th>
			<th class="text-center"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($statuscustomers as $statuscustomer): ?>
	<tr>
		<td><?php echo h($statuscustomer['Statuscustomer']['id']); ?>&nbsp;</td>
		<td><?php echo h($statuscustomer['Statuscustomer']['name']); ?>&nbsp;</td>
		<td>
		<?php 
			if ($statuscustomer['Statuscustomer']['issold']==1) {
				echo 'yes';
			}else{
				echo '';
			}
		?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $statuscustomer['Statuscustomer']['id']), array('class'=>'btn btn-xs btn-success')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $statuscustomer['Statuscustomer']['id']), array('class'=>'btn btn-xs btn-primary')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $statuscustomer['Statuscustomer']['id']), array('class'=>'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $statuscustomer['Statuscustomer']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
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
		<li><?php echo $this->Html->link(__('New Status'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>

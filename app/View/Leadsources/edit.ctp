<div class="leadsources form">
<?php echo $this->Form->create('Leadsource'); ?>
	<fieldset>
		<legend><?php echo __('Edit Lead Source'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Leadsource.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Leadsource.name')))); ?></li>
		<li><?php echo $this->Html->link(__('List Lead Sources'), array('action' => 'index')); ?></li>
	</ul>
</div>

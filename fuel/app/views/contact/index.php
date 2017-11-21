<h2>Listing <span class='muted'>Contacts</span></h2>
<br>
<?php if ($Contacts): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Message</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($Contacts as $item): ?>		<tr>

			<td><?php echo $item->名前; ?></td>
			<td><?php echo $item->メールアドレス; ?></td>
			<td><?php echo $item->メッセージ; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('contact/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('contact/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('contact/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Contacts.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('contact/create', 'Add new Contact', array('class' => 'btn btn-success')); ?>

</p>

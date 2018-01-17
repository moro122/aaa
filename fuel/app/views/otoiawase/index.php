<h2><span class='muted'>確認ページ</span></h2>
<br>
<p class="text-center">以下の内容でよければ、送信お願いします。</p>



<?php if ($otoiawases): ?>

<?php echo Form::open(array('action'=>'send','class' => 'form-horizontal'));?>

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
<?php foreach ($otoiawases as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->email; ?></td>
			<td><?php echo $item->message; ?></td>
			<td>
<?php echo Html::anchor('otoiawase/edit/'.$item->id, '<i class="icon-wrench"></i> 編集', array('class' => 'btn btn-default btn-sm')); ?>
<?php echo Html::anchor('otoiawase/delete/'.$item->id, '<i class="icon-trash icon-white"></i> 削除', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('このデータを削除しますがよろしいですか?')")); ?>
					</div>
				


		</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Otoiawases.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('otoiawase/create', '送信する', array('class' => 'btn btn-success')); ?>

</p>

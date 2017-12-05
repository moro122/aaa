<h2>Viewing <span class='muted'>#<?php echo $otoiawase->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $otoiawase->name; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $otoiawase->email; ?></p>
<p>
	<strong>Message:</strong>
	<?php echo $otoiawase->message; ?></p>

<?php echo Html::anchor('otoiawase/edit/'.$otoiawase->id, '編集する'); ?> |
<?php echo Html::anchor('otoiawase', '戻る'); ?>
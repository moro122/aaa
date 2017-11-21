<h2>Viewing <span class='muted'>#<?php echo $inquiry->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $inquiry->name; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $inquiry->email; ?></p>
<p>
	<strong>Message:</strong>
	<?php echo $inquiry->message; ?></p>

<?php echo Html::anchor('inquiry/edit/'.$inquiry->id, 'Edit'); ?> |
<?php echo Html::anchor('inquiry', 'Back'); ?>
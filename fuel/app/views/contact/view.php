<h2>Viewing <span class='muted'>#<?php echo $Contact->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $Contact->name; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $Contact->email; ?></p>
<p>
	<strong>Message:</strong>
	<?php echo $Contact->message; ?></p>

<?php echo Html::anchor('contact/edit/'.$Contact->id, 'Edit'); ?> |
<?php echo Html::anchor('contact', 'Back'); ?>
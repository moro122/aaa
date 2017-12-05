<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('名前', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($Contact) ? $Contact->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'名前')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('メールアドレス', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($Contact) ? $Contact->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'メールアドレス')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('メッセージ', 'message', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('message', Input::post('message', isset($Contact) ? $Contact->message : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'メッセージ')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
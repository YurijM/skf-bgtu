<?=HTML::style($dir_css.'bootstrap.css')?>
<?=HTML::style($dir_css.'skfbgtu_auth.css')?>

<div class="auth col-sm-offset-4 col-sm-4 col-xs-offset-2 col-xs-8 text-center">
	<h4><?=$page_title?></h4>

	<?=Form::open()?>
    <div class="form-group">
      <?= Form::input(
      	'username',
				$user->username,
				[
					'class' => 'form-control',
					'placeholder' => 'Пользователь',
					'autofocus'
				]
			) ?>
    </div>
    <div class="form-group">
			<?=Form::password(
				'password',
				$password,
				[
					'class' => 'form-control',
					'placeholder' => 'Текущий пароль'
				]
			)?>
    </div>
    <div class="form-group">
      <?= Form::password(
      	'password_confirm',
				$password_confirm,
				[
					'class' => 'form-control',
					'placeholder' => 'Подтвердить новый пароль'
				]
			)?>
    </div>

		<? if (isset($error)): ?>
      <div class="error text-danger text-center"><?=$error?></div>
    <? endif ?>

		<div class="form-submit text-center">
			<?= Form::submit(
				'save',
				'Сменить пароль',
				[
					'class' => 'btn btn-primary btn-lg',
					'style' => 'width: 200px'
				]
			)?>
			<?= Form::submit(
				'cancel',
				'Отмена',
				[
					'class' => 'btn btn-warning btn-lg',
					'style' => 'width: 200px'
				]
			)?>
		</div>
	<?=Form::close() ?>
</div>

<nav class="menu navbar navbar-default">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<i class="user fas fa-user fa-2x text-primary"></i>
		<div class="person text-primary"><?= $user->person ?></div>
	</div>

	<div class="collapse navbar-collapse" id="navbar-collapse">
		<ul class="nav navbar-nav navbar-right">
			<? if ($kind == 0): ?>
				<li>
					<?= HTML::anchor(
						'cabinet',
						'<i class="fas fa-home"></i>&nbsp;Главная',
						[
							'class' => 'btn btn-primary btn-sm',
							'role' => 'button',
							'style' => 'outline: 0'
						]
					) ?>
				</li>
				<li>
					<?= HTML::anchor(
						'cabinet/chat',
						'<i class="far fa-comments"></i>&nbsp;Чат',
						[
							'class' => 'btn btn-primary btn-sm',
							'role' => 'button',
							'style' => 'outline: 0'
						]
					) ?>
				</li>
				<li>
					<?= HTML::anchor(
						'cabinet/mark',
						'<i class="fas fa-graduation-cap"></i>&nbsp;Успеваемость',
						[
							'class' => 'btn btn-primary btn-sm',
							'role' => 'button',
							'style' => 'outline: 0'
						]
					) ?>
				</li>
			<? else: ?>
				<li>
					<?= HTML::anchor(
						'cabinet',
						'<i class="far fa-comments"></i>&nbsp;Чат',
						[
							'class' => 'btn btn-primary btn-sm',
							'role' => 'button',
							'style' => 'outline: 0'
						]
					) ?>
				</li>
				<li>
					<?= HTML::anchor(
						'cabinet/portfolio',
						'<i class="fas fa-trophy"></i>&nbsp;Портфолио студентов',
						[
							'class' => 'btn btn-primary btn-sm',
							'role' => 'button',
							'style' => 'outline: 0'
						]
					) ?>
				</li>
			<? endif ?>
			<?/* if (($kind > 0) or (mb_substr($user->group, 0, 1) != 'З')): */?>
				<li>
					<?= HTML::anchor(
						'cabinet/distance',
						'<i class="fas fa-chalkboard-teacher"></i>&nbsp;Дистанционное обучение',
						[
							'class' => 'btn btn-primary btn-sm',
							'role' => 'button',
							'style' => 'outline: 0'
						]
					) ?>
				</li>
			<?/* endif */?>
			<li>
				<?= HTML::anchor(
					'cabinet/literature',
					'<i class="fas fa-book-open"></i>&nbsp;Учебные материалы',
					[
						'class' => 'btn btn-primary btn-sm',
						'role' => 'button',
						'style' => 'outline: 0'
					]
				) ?>
			</li>
			<li>
				<?= HTML::anchor(
					'cabinet/exit',
					'<i class="fas fa-sign-out-alt"></i>&nbsp;Выход',
					[
						'class' => 'btn btn-primary btn-sm',
						'role' => 'button',
						'style' => 'outline: 0'
					]
				) ?>
			</li>
		</ul>
	</div>
</nav>

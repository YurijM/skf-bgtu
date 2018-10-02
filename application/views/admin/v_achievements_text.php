<h4><?=$page_title?> - <small>таблица</small> achievements_text</h4>

<div class="admin-list">
	<div class="text-right">
		<?=HTML::anchor('admin/achievements', 'К списку достижений')?>
	</div>

	<?=Form::open('admin/achievements/savetext')?>
		<div class="form-group col-xs-12">
			<?=Form::label('content', 'Текст на страницы "Достижения"')?>
			<?=Form::textarea('content', $text->content, ['class' => 'form-control', 'rows'=> 35, 'placeholder' => 	'Поле content'])?>

			<?=Form::hidden('id', $text->id)?>

			<div class="form-submit col-xs-12 text-center">
				<?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
			</div>
		</div>
	<? Form::close() ?>

	<div class="remark col-xs-12 bg-danger text-danger">
		<p>
			При вводе дополнительных сведений для форматирования используйте язык разметки текста <strong>Markdown</strong>.
		</p>
		Описание синтаксиса языка разметки <strong>Markdown</strong> можно почитать на сайтах <a href="http://rukeba.com/by-the-way/markdown-sintaksis-po-russki/" target="_blank">http://rukeba.com/by-the-way/markdown-sintaksis-po-russki</a> или <a href="http://paulradzkov.com/2014/markdown_cheatsheet/" target="_blank">http://paulradzkov.com/2014/markdown_cheatsheet/</a>
	</div>

	<div class="col-xs-12 text-right">
		<?=HTML::anchor('admin/achievements', 'К списку достижений')?>
	</div>
</div>

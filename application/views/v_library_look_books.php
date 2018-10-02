<div class="library row">
	<h2 class="text-center"><?=$page_title?></h2>

	<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-12 small">
		<div class="form-group col-xs-5">
			<?=Form::label('author', 'Автор')?>
			<select name="author" class="form-control">
				<option value="" selected>Не задан</option>

				<? foreach ($authors as $item): ?>
					<option value="<?=$item->author_first_initials?>" <?=($item->author == $author ? 'selected' : '')?>>
						<?=$item->author?>
					</option>
				<? endforeach ?>
			</select>
		</div>

		<div class="col-xs-2 text-center">
			или
		</div>

		<div class="form-group col-xs-5">
			<?=Form::label('edited', 'Под редакцией', ['class' => 'text-right', 'style' => 'display: block'])?>
			<select name="edited" class="form-control">
				<option value="" selected>Не задано</option>

				<? foreach ($editeds as $author): ?>
					<option value="<?=$author['edited']?>" <?=($author['edited'] == $edited ? 'selected' : '')?>>
						<?=$author['author']?>
					</option>
				<? endforeach ?>
			</select>
		</div>

		<div class="form-group col-xs-5">
			<?=Form::label('book', 'Название содержит')?>
			<?=Form::input('book', $book, ['class' => 'form-control'])?>
		</div>

		<div class="col-xs-2 text-center">
			или
		</div>

		<div class="form-group col-xs-5">
			<?=Form::label('keyword', 'Содержит ключевое слово', ['class' => 'text-right', 'style' => 'display: block'])?>
			<?=Form::input('keyword', $keyword, ['class' => 'form-control'])?>
		</div>

		<div class="form-group col-xs-12 text-center">
			<?=Form::button('search', 'Искать',
				['class' => 'btn btn-success btn-sm', 'onclick' => 'bookSearch()']
			)?>
		</div>
	</div>

	<div id="search-result" class="col-xs-12">
	</div>
</div>

<script>
	function bookSearch()
	{
		$('#search-result').html('');

		$.ajaxSetup({
			async: false
		});

		$('#search-result').load('/librarylookbooks/search', {
			author: $('select[name="author"]').val(),
			edited: $('select[name="edited"]').val(),
			book: $('input[name="book"]').val(),
			keyword: $('input[name="keyword"]').val()
		});

	}
</script>

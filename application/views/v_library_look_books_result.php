<? if ($amount > $max_search_result): ?>
	<div class="text-center text-danger">
		Результат поиска содержит более <?=$max_search_result?> наим. литературы<br>
		Пожалуйста, уточните параметры поиска.
	</div>
<? elseif ($amount > 0): ?>
	<h5 class="text-center">Найдено <strong><?=$amount?></strong> изд.</h5>
	<div class="col-xs-12 table-responsive">
		<table class="table table-bordered">
			<tr>
				<th width="1%">№ п/п</th>
				<th width="12%">Автор(ы)</th>
				<th width="33%">Название</th>
				<th width="2%">Год изд.</th>
				<th width="50%">Ключевые слова</th>
				<th width="2%"></th>
			</tr>
			<? $n = 1 ?>
			<? foreach ($result as $item): ?>
				<tr>
					<td class="text-center"><?=$n++?></td>
					<td class="author"><?=$item['AuthorFirstInitials'] ? : $item['Author']?></td>
					<td class="book"><?=$item['Book']?></td>
					<td class="text-center"><?=$item['PublicationYear']?></td>
					<td class="keyword"><?=$item['Keyword']?></td>
					<td class="text-center"><?=$item['IsOrIsnt']?></td>
				</tr>
			<? endforeach ?>
		</table>
	</div>
<? else: ?>
	<div class="text-center text-danger">
		Ничего не найдено
	</div>
<? endif ?>

<script>
	$(document).ready(function(){
		setTextBold($('select[name="author"]').val(),'.author');
		setTextBold($('select[name="edited"]').val(),'.author');
		setTextBold($('input[name="book"]').val(),'.book');
		setTextBold($('input[name="keyword"]').val(),'.keyword');

		// Автоматическая прокрутка до верхнего меню при загрузке страницы
		$(function() {
			$('html, body').stop().animate({
				scrollTop: $('#search-result').offset().top
			}, 1000);
		});
	});

	function setTextBold(str_search, element)
	{
		if (str_search == '')
			return;

		$(element).each(
			function()
			{
				var search = str_search.toLocaleLowerCase();

				// внутри функции this указывает на текущий DOM-элемент
				var str = this.innerHTML.toLocaleLowerCase();
				var iLen = search.length;
				var iStart = 0;
				var iEnd = str.indexOf(search);
				var s = '';
				while (iEnd >= 0)
				{
					s = s + this.innerHTML.substring(iStart, iEnd) + '<span style="border: 1px dotted #555; font-weight: bold;">' + this.innerHTML.substr(iEnd, iLen) + '</span>';
					iStart = iEnd + iLen;
					iEnd = str.indexOf(search, iStart);
				}
				this.innerHTML = s + this.innerHTML.substring(iStart);
			}
		);
	}
</script>
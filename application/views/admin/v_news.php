<!-- Стиль и скрипт для datepicker -->
<?=HTML::style($dir_css.'jquery-ui.min.css')?>
<?=HTML::script($dir_js.'jquery-ui.min.js')?>

<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> news</h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/news'.($page ? '/'.$page : ''), 'К списку новостей')?>
  </div>

  <?=Form::open('admin/news/save')?>
    <div class="form-group col-md-2 col-sm-3 col-xs-12">
      <?=Form::label('date', 'Дата')?>
      <?=Form::input('date', Helper_Addfunction::date_from_mysql($news->date), array('class' => 'form-control', 'placeholder' => 'Поле title'))?>
    </div>

    <div class="form-group col-md-2 col-sm-3 col-xs-12">
      <?=Form::label('category', 'Категория')?>
      <?=Form::select(
        'category',
        ['' => null, 'культура' => 'культура', 'наука' => 'наука', 'спорт' => 'спорт', 'ВУЦ' => 'ВУЦ'],
        $news->category,
        ['class' => 'form-control']
      )?>
    </div>

	  <div class="form-group col-xs-12">
      <?=Form::label('title', 'Заголовок')?>
      <?=Form::textarea('title', $news->title, array('class' => 'form-control', 'placeholder' => 'Поле title', 'rows'
      => 1))?>
    </div>

    <div class="form-group col-xs-12">
      <?=Form::label('news', 'Новость')?>
      <?=Form::textarea('news', $news->news, array('class' => 'form-control', 'placeholder' => 'Поле news', 'rows' => 20))?>
    </div>
  
    <div class="remark col-xs-12 bg-danger text-danger">
      <p>
        При вводе текста новости для форматирования используйте <strong>HTML-тэги</strong>.
      </p>
        <strong><span class="text-uppercase">обязательно !!!</span></strong><br>
      Для того, чтобы перейти на новую строку текста используйте либо тэг <strong><?=HTML::chars('<br>')?></strong>, либо обрамите абзац тэгами <strong><?=HTML::chars('<p> </p>')?></strong>.
    </div>
  
    <?=Form::hidden('id', $news->id)?>
    <?=Form::hidden('page', $page)?>
  
    <div class="form-submit text-center col-xs-12">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($news->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($news->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  <?=Form::close() ?>

  <!-- Галерея отображается только при редактировании уже существующей новости -->
  <? if (isset($galery)): ?>
    <div class="galery col-xs-12">
      <h4>Галерея</h4>

      <?=Form::open('/admin/news/selectphoto/'.$news->id.'/'.$page)?>
        <?=Form::submit('add_photo', 'Добавить новую фотографию', array('class' => 'btn btn-info btn-xs'))?>
      <?=Form::close() ?>

      <? foreach ($galery as $photo): ?>
        <div class="photo text-center">
          <a href="/admin/news/selectphoto/<?=$news->id.'/'.$page.'/'.$photo->id?>">
            <img src="<?=$dir_img_news.substr_replace($photo->photo, '_mini', strripos($photo->photo, '.'), 0)?>" title="Редактировать фото" alt="<?=$photo->description.' '.$site_name?>" <?=($photo->id == $news->news_galery_id ? 'style="outline: 2px solid #F00"' : '')?>>
          </a>
        </div>
      <? endforeach ?>
    </div>
  <!-- Если это новая новость, то предлагается после её создания вызвать её на редактирование и добавить фотографии -->
  <? else: ?>
    <div class="remark col-xs-12 bg-info text-info text-center">
      После сохранения новости Вы можете вызвать её на редактирование и добавить фотографии в галерею.
    </div>
  <? endif ?>
</div>

<script>
	$(document).ready(function(){
    $('[name="date"]').datepicker({
		});
  });
</script>
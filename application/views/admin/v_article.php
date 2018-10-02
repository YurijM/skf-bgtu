<?=(isset($confirmation_delete) ? $confirmation_delete : '')?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/articles/'.$page, 'К списку статей')?>
  </div>

  <div class="remark bg-danger text-danger">
    Перед вводом данных по статье сначала убедитесь, что <strong>периодическое издание</strong>, в котором опубликована статья, и <strong>авторы</strong> статьи уже добавлены в базу данных.
  </div>

  <?=Form::open('admin/articles/save/'.$article->id.'/'.$page, array('class' => 'form-horizontal'))?>
    <div class="form-group">
      <?=Form::label('periodical', 'Периодическое издание', array('class' => 'control-label col-lg-3 col-sm-4 col-xs-12'))?>
      <div class="col-lg-9 col-sm-8 col-xs-12">
        <select name="periodical" class="form-control" autofocus>
          <option value="0" <?=($article->periodical_id ? '' : 'selected')?>>Поле periodical_id</option>

          <? foreach ($periodicals as $periodical): ?>
            <option <?=($article->periodical_id == $periodical->id ? 'selected' : '')?> value="<?=$periodical->id?>"><?=$periodical->periodical.' '.$periodical->year.($periodical->number ? ' №'.$periodical->number.' ' : '')?></option>
          <? endforeach ?>
        </select>
      </div>
    </div>
  
    <div class="form-group">
      <?=Form::label('page_from', 'страницы с', array('class' => 'control-label col-lg-3 col-sm-4 col-xs-7'))?>
      <div class="col-lg-1 col-sm-2 col-xs-2">
        <?=Form::input('page_from', $article->page_from, array('class' => 'form-control text-center', 'placeholder' => 'Поле page_from'))?>
      </div>
      
      <?=Form::label('page_to', 'по', array('class' => 'control-label col-sm-1 col-xs-1'))?>
      <div class="col-lg-1 col-sm-2 col-xs-2">
        <?=Form::input('page_to', $article->page_to, array('class' => 'form-control text-center', 'placeholder' => 'Поле page_to'))?>
      </div>
    </div>
  
    <div class="form-group">
      <?=Form::label('author', 'Авторы', array('class' => 'control-label col-lg-3 col-sm-4 col-xs-12'))?>
      <div class="col-lg-9 col-sm-8 col-xs-12">
        <select name="author" class="form-control">
          <option value="0" selected>Добавить автора (поле author_id)</option>

          <? foreach ($authors as $author): ?>
            <option value="<?=$author->id?>"><?=$author->author?></option>
          <? endforeach ?>
        </select>
      </div>
  
      <? $article_authors = $article->authors->find_all() ?>
      <div class="col-lg-offset-3 col-lg-9 col-sm-offset-4 col-sm-8">
        <table class="author">
          <? foreach ($article_authors as $author): ?>
            <tr>
              <td><?=$author->author?></td>
              <td>
                <a href="/admin/articles/deleteauthor/<?=$article->id?>/<?=$author->id?>/<?=$page?>" title="Удалить автора">
                  <i class="fa fa-minus-circle text-danger"></i>
                </a>
              </td>
            </tr>
          <? endforeach ?>
        </table>
      
        <div class="remark bg-info text-primary">
          Для ввода второго и каждого последующего автора статьи, нужно добавить автора, сохранить статью и открыть её снова на редактирование.
        </div>
      </div>
    </div>
      
    <div class="form-group">
      <?=Form::label('is_student', 'Студенческая публикация', array('class' => 'control-label col-lg-3 col-sm-4'))?>
      <div class="col-lg-9 col-sm-8">
        <?=Form::checkbox('is_student', $article->is_student, ($article->is_student > 0), array('id' => 'is_student', 'class' => 'form-control'))?>
      </div>
    </div>

    <div class="form-group">
      <?=Form::label('article', 'Название статьи', array('class' => 'control-label col-lg-3 col-sm-4'))?>
      <div class="col-lg-9 col-sm-8">
        <?=Form::input('article', $article->article, array('class' => 'form-control', 'placeholder' => 'Поле article'))?>
      </div>
    </div>
  
    <?=Form::hidden('id', $article->id)?>

    <div class="form-submit text-center col-xs-12">
      <?=Form::submit('save', 'Сохранить', array('class' => 'btn btn-success btn-sm'))?>
      <!-- Не получилось корректно привязать модальное окно к кнопке submit.
      Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit. -->
      <?=($article->id ? Form::submit('delete', 'Удалить', array('id' => 'delete', 'class' => 'hidden')) : '')?>
      <?=($article->id ? Form::button('delete_button', 'Удалить', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-toggle' => 'modal', 'data-target' => '#delete_modal')) : '')?>
    </div>
  <?=Form::close() ?>
</div>

<script>
  $(document).ready(function() {
    $("select").change(function () {
      if($(this).val() == "0")
        $(this).addClass("select-placeholder");
      else
        $(this).removeClass("select-placeholder");
    });
    
    $("select").change();
    
    $('input[name=is_student]').on('click', function() {
      if ($(this).attr("checked"))
      {
        $(this).attr("checked", false);
        $(this).val(0);
      }
      else
      {
        $(this).attr("checked", true);
        $(this).val(1);
      }
    });
  });
</script>
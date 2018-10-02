<?=$confirmation_delete?>

<h4><?=$page_title?> - <small>каталог</small> <?=$dir?></h4>

<div class="admin-list">
  <div class="slider row">
    <?=Form::open('/admin/slider/add', array('class' => 'text-center'))?>
      <div class="form-group">
        <?=Form::submit('add', 'Добавить фото в слайдер', array('class' => 'btn btn-info btn-sm'))?>
      </div>
    <?=Form::close()?>

    <? foreach ($photos as $photo): ?>
      <img src="<?=$dir.$photo?>" title="Удалить фото" data-file="<?=$photo?>" data-toggle="modal" data-target="#delete_modal" alt="<?=$site_name?>"> 
    <? endforeach ?>

    <?=Form::open('/admin/slider/add', array('class' => 'text-center'))?>
      <div class="form-group">
        <?=Form::submit('add', 'Добавить фото в слайдер', array('class' => 'btn btn-info btn-sm'))?>
      </div>
    <?=Form::close()?>

    <?=Form::open('/admin/slider/delete', array('id' => 'form-delete', 'class' => 'hidden'))?>
      <?=Form::hidden('src', '')?>
      <?=Form::submit('delete', 'Удалить фото', array('id' => 'delete', 'class' => 'hidden'))?>
    <?=Form::close()?>
  </div>
</div>

<script>
	$(document).ready(function(){
    $('img').on('click', function(){
      $('input[name=src]').val($(this).attr('data-file'));
    });
  })
</script>
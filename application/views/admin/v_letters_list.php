<?=$confirmation_delete?>

<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>Дата</th>
        <th>Тема</th>
        <th>Отправитель</th>
        <th>Письмо</th>
      </tr>
      <? $n = 1 ?>
      <? foreach ($letters as $letter): ?>
        <tr>
          <td class="letter-date text-primary text-center" title="Удалить письмо" data-id="<?=$letter->id?>" data-toggle="modal" data-target="#delete_modal"><?=Helper_Addfunction::datetime_from_mysql($letter->date)?></td>
          <td><?=$letter->theme?></td>
          <td><?=$letter->from_name.' ('.$letter->from_email.($letter->from_phone != '' ? ', тел.'.$letter->from_phone : '').')'?></td>
          <td><?=nl2br($letter->letter)?></td>
        </tr>
      <? endforeach ?>
    </table>
  </div>

  <?=Form::open('/admin/letters/delete', array('id' => 'form-delete', 'class' => 'hidden'))?>
    <?=Form::hidden('id', '')?>
    <?=Form::submit('delete', 'Удалить письмо', array('id' => 'delete', 'class' => 'hidden'))?>
  <?=Form::close()?>
</div>

<script>
	$(document).ready(function(){
    $('.letter-date').on('click', function(){
      $('input[name=id]').val($(this).attr('data-id'));
    });
  })
</script>
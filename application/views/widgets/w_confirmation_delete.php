<!-- Модальное окно для подтверждения удаления -->
<div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="record-label" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="record-label"><?=$message?></h4>
      </div>

      <div class="modal-body">
        Вы действительно хотите удалить этот объект ?
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
        <button id="delete_yes" type="submit" class="btn btn-primary">Да</button>
      </div>
    </div>
  </div>
</div>

<script>
	$(document).ready(function(){
      // Не получилось корректно привязать модальное окно к кнопке submit.
      // Пришлось кнопку submit делать скрытой, а модальное окно привязать к простой кнопке.
      // На кнопку "Да" модального окна повесил обработчик, который "нажимает" на скрытую кнопку submit.
      // ВАЖНО!!! На "основной" форме кнопка submit для удаления должна иметь id="delete".
    $('#delete_yes').click(function() {
      $('#delete_modal').modal('hide');
      $('#delete').click();
    });
  });
</script>
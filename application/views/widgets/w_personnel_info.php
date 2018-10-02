<? foreach ($personnel as $employee): ?>
  <!-- Модальное окно для дополнительных сведений -->
  <div class="modal fade" id="employee-<?= $employee->id ?>" tabindex="-1" role="dialog" aria-labelledby="record-label"
       aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="record-label">
            <?= $employee->family.' '.$employee->name.' '.$employee->patronymic ?>
          </h4>
        </div>
        <div class="modal-body">
          <?= Kodoc_Markdown::markdown(($employee->add_info ? $employee->add_info : '*Дополнительные сведения
          отсутствуют*')) ?>
        </div>
      </div>
    </div>
  </div>
<? endforeach ?>

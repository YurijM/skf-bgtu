<div class="matriculants row">
  <h2 class="text-center"><?=$page_title?></h2>

  <div class="form col-sm-offset-4 col-sm-4 col-xs-offset-2 col-xs-8 text-center">
    <div class="form-group row">
      <?=Form::label('year', 'Приём', ['class' => 'col-sm-5 col-xs-5 text-right', 'style' => 'padding-top: .75em'])?>
      <div class="col-md-4 col-sm-5 col-xs-6">
        <select name="year" class="form-control">
          <? foreach ($years as $year): ?>
            <option value="<?=$year->year?>"><?=$year->year?>г.</option>
          <? endforeach ?>
        </select>
      </div>
    </div>

    <div class="goto" data="/applicationsnumber/">Поданные заявления</div>
    <div class="goto" data="/enrollmentorders/">Приказы на зачисление</div>
    <!--<div class="goto" data="/matriculants/">Списки на зачисление</div>-->
  </div>
</div>

<script>
  $(document).ready(function() {
    $(".goto").on("click", function () {
      window.location = $(this).attr("data") + $("[name=year]").val();
    })
  });
</script>
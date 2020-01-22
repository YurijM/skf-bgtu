<h4><?=$page_title?> - <small>таблица</small> <?=$table?></h4>

<div class="admin-list">
  <div class="text-right">
    <?=HTML::anchor('admin/degrees/edit', 'Добавить учёную степень')?>
  </div>
  
  <div class="table table-responsive">
    <table class="table-responsive table-bordered table-condensed">
      <tr>
        <th>Учёная степень</th>
      </tr>
      <? foreach ($degrees as $degree): ?>
        <tr>
          <td>
            <?=HTML::anchor('admin/degrees/edit/'.$degree->id, $degree->degree.($degree->short ? ' ('.$degree->short.')' : ''))?>
          </td>
        </tr>
      <? endforeach ?>
    </table>
  </div>
</div>
    
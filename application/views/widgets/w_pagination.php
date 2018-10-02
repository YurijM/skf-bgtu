<? if ($count > 1): ?>
<div class="row">
  <nav class="text-center">
    <ul class="pagination">
      <li <?=($page == 1 ? 'class="disabled"' : '')?>>
        <a href="/<?=$url?>/<?=$page - 1?><?=(isset($add_param) ? '/'.$add_param : '')?>" title="Предыдущая страница" aria-label="Предыдущая страница">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <? for ($i = 1; $i <= $count; $i++): ?>
        <li <?=($i == $page ? 'class="active"' : '')?>><a href="/<?=$url?>/<?=$i?><?=(isset($add_param) ? '/'.$add_param : '')?>"><?=$i?></a></li>
      <? endfor ?>
      <li <?=($page == $count ? 'class="disabled"' : '')?>>
        <a href="/<?=$url?>/<?=$page + 1?><?=(isset($add_param) ? '/'.$add_param : '')?>" title="Следующая страница" aria-label="Следующая страница">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</div>
<? endif ?>

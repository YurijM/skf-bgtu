<div class="structure row" itemprop="structOrgUprav">
  <h2 class="text-center"><?=$page_title?></h2>

	<div class="table-responsive table-width">
		<table class="table table-bordered table-condensed bg-info">
			<tr>
				<th style="width: 22%">
					Наименование структурного подразделения
				</th>
				<th>
					ФИО руководителя структурного подразделения
				</th>
				<th>
					Должность руководителя структурного подразделения
				</th>
				<th>
					Адреса электронной почты структурного подразделения (при наличии)
				</th>
				<th>
					Сведения о наличии положений о структурных подразделениях с приложением их в виде электронных документов, подписанных электронной подписью
				</th>
				<th>
					Контактный телефон
				</th>
				<th>
					Адрес местонахождения
				</th>
				<th style="width: 12%">
					Адрес официального сайта в сети "Интернет"
				</th>
			</tr>
			<? $first = true; ?>
			<? foreach ($personnel as $item): ?>
				<tr>
					<td itemprop="name">
						<?=$item->structure->structure?>
					</td>
					<td itemprop="fio">
						<?=$item->personnel->family.' '.$item->personnel->name.' '.$item->personnel->patronymic; ?>
					</td>
					<td itemprop="post">
						<?= $item->post; ?>
					</td>
					<td itemprop="email">
						<?= $item->email; ?>
					</td>
					<td itemprop="divisionClauseDocLink">
						<?= ($item->structure->doc && $item->structure->file_doc
							? HTML::anchor(
								$dir_docs_structure.$item->structure->file_doc,
								$item->structure->doc,
								['target' => '_blank']
							)
							: 'документа нет'
						) ?>
					</td>
					<td>
						<?= $item->phone; ?>
					</td>
					<? if ($first): ?>
						<? $first = false; ?>
						<td rowspan="<?= $personnel_count ?>" itemprop="addressStr">
							<?= $address; ?>
						</td>
						<td rowspan="<?= $personnel_count ?>" itemprop="site">
							http://skf-bgtu.ru
						</td>
					<? endif; ?>
				</tr>
			<? endforeach; ?>
		</table>
	</div>

	<h4 class="text-center">Сведения о филиалах и представительствах</h4>
	<p itemprop="nameFil repInfo">
		Филиалы и представительства отсутствуют.
	</p>
</div>

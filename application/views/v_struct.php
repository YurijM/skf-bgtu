<div class="structure row" itemprop="structOrgUprav">
  <h2 class="text-center"><?=$page_title?></h2>

	<div class="table-responsive table-width">
		<table class="table table-bordered table-condensed bg-info">
			<tr>
				<th style="width: 22%" itemprop="name">
					Наименование структурного подразделения
				</th>
				<th itemprop="fio">
					ФИО руководителя структурного подразделения
				</th>
				<th>
					Должность руководителя структурного подразделения
				</th>
				<th itemprop="email">
					Адреса электронной почты структурного подразделения (при наличии)
				</th>
				<th itemprop="divisionClauseDocLink">
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
					<td>
						<?=$item->structure->structure?>
					</td>
					<td>
						<?=$item->personnel->family.' '.$item->personnel->name.' '.$item->personnel->patronymic; ?>
					</td>
					<td>
						<?= $item->post; ?>
					</td>
					<td>
						<?= $item->email; ?>
					</td>
					<td>
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
						<td rowspan="<?= $personnel_count ?>">
							<?= $address; ?>
						</td>
						<td rowspan="<?= $personnel_count ?>">
							http://skf-bgtu.ru
						</td>
					<? endif; ?>
				</tr>
			<? endforeach; ?>
		</table>
	</div>
</div>

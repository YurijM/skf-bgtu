<div class="specialties">
	<? if (!$receiving): ?>
		<h4 class="text-center" style="margin: 3em 0">
			Приемная кампания <?= (int)$start[2] - 1 ?> закрыта.
			<br>
			Приемная кампания <?= $start[2] ?> открывается <?= implode('.', $start) ?>
		</h4>

	<? else: ?>
	<h2 class="text-center"><?= $page_title ?></h2>

	<div class="row text-center" style="margin-top: 1em; margin-bottom: 1.5em">
		<h4 style="text-decoration: underline">
			<?= HTML::anchor(
				'https://www.bstu.ru/abitur/bachelor/priemInf/DocLink',
				'правила приема на обучение по программам бакалавриата',
				array('target' => '_blank')
			) ?>
		</h4>
	</div>

	<!--<div class="row programs" style="margin-top: 1em; margin-bottom: 1.5em">
		<div class="col-sm-4 col-xs-12 text-center bg-info">-->
	<div class="table-responsive">
		<table class="table table-condensed">
			<tr>
				<td class="programs text-center bg-info" style="width: 33%">
					<p>
						<?= HTML::anchor(
							'/apply',
							'Подать заявление'
						) ?>
					</p>
					<p>
						<?= HTML::anchor(
							$dir_docs_admission . 'blank.pdf',
							'Бланки заявлений',
							['target' => '_blank']
						) ?>
					</p>
					<p>
						<?= HTML::anchor(
							$dir_docs_admission . 'obrazec.pdf',
							'Образцы заполнения бланков заявлений',
							['target' => '_blank']
						) ?>
					</p>
					<p>
						<?= HTML::anchor(
							'#item3',
							'Перечень вступительных испытаний, необходимых для поступления'
						) ?>
					</p>
					<!--<p>
				<? /*= HTML::anchor(
					'/schedulematriculant',
					'Расписание вступительных испытаний',
					["style" => "color: red !important"]
				) */ ?>
			</p>-->
					<p>
						<?= HTML::anchor(
							'/examinationprograms',
							'Программа вступительных испытаний'
						) ?>
					</p>
					<p>
						<?= HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 22.04.2025 14:47
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) ?>
						<?= HTML::anchor(
							$dir_docs_admission . 'vi_vo1.pdf',
							'Расписание вступительных испытаний в рамках контрольных цифр приема',
							['target' => '_blank']
						) ?>
					</p>
					<p>
						<?= HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 22.04.2025 14:47
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) ?>
						<?= HTML::anchor(
							$dir_docs_admission . 'vi_vo2.pdf',
							'Расписание вступительных испытаний на места с полным возмещением затрат',
							['target' => '_blank']
						) ?>
					</p>
				</td>
				<!--</div>

				<hr class="visible-xs col-xs-12" style="margin-top: 1em; margin-bottom: 1em;">

				<div class="col-sm-4 col-xs-12 text-center bg-success">-->
				<td class="programs text-center bg-success" style="width: 33%">
					<p>
						<?= HTML::anchor(
							'/admissionrules',
							'Информация о приёме 2025г.',
							["style" => "color: red !important"]
						) ?>
					</p>
					<p>
						<?= HTML::anchor(
							'#item1',
							'Сведения о количестве мест для приема граждан на обучение по образовательным программам высшего образования - программам бакалавриата'
						) ?>
					</p>
					<p>
						<?= HTML::anchor(
							'#item2',
							'Сведения о количестве мест в рамках контрольных цифр приема на обучение по программам бакалавриата'
						) ?>
					</p>
					<p>
						<?= HTML::anchor(
							'#item4',
							'Минимальное количество баллов ЕГЭ'
						) ?>
					</p>
					<p>
						<?= HTML::anchor(
							$dir_docs_docs . 'dogovor_vo.pdf',
							'Форма договора на обучение',
							['target' => '_blank']
						) ?>
					</p>
					<p>
						<?= HTML::image(
							$dir_img . 'signature.png',
							[
								'style' => 'max-width: 1em',
								'title' => 'Файл подписан простой электронной подписью
Дата, время: 30.05.2025 09:50
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b'
							]
						) ?>
						<?= HTML::anchor(
							$dir_docs_docs . 'preiskurant_vo.pdf',
							'Стоимость обучения',
							['target' => '_blank']
						) ?>
					</p>
				</td>

				<td class="programs text-center bg-info">
					<p>
						<?= HTML::anchor(
							'/applicationsnumber',
							'Поданные заявления'
						) ?>
					</p>
					<p>
						<?= HTML::anchor(
							'/rankedlists',
							'Ранжированные списки абитуриентов',
							["style" => "color: red !important"]
						) ?>
					</p>
				</td>
			</tr>
		</table>
	</div>

	<h4 id="item1" class="text-center">
		Сведения о количестве мест для приема граждан на обучение по образовательным программам высшего образования - программам бакалавриата
	</h4>

	<div class="table-responsive">
		<table class="table table-bordered table-condensed">
			<tr>
				<th rowspan="3">Форма обучения</th>
				<th rowspan="3">Код и наименование специальности или направления подготовки</th>
				<th colspan="3">Количество мест для приема граждан на обучение</th>
			</tr>
			<tr>
				<th colspan="2">за счет бюджетных ассигнований федерального бюджета</th>
				<th rowspan="2">по договорам об оказании платных образовательных услуг</th>
			</tr>
			<tr>
				<th style="width: 15%">всего</th>
				<th>в том числе квота лиц, имеющих особое право</th>
			</tr>
			<tr class="bg-info text-info">
				<td rowspan="3" style="vertical-align: middle" class="text-center">Очная</td>
				<td class="text-center">08.03.01 Строительство</td>
				<td class="text-center" style="vertical-align: middle">15</td>
				<td class="text-center" style="vertical-align: middle">6</td>
				<td class="text-center" style="vertical-align: middle">20</td>
			</tr>
			<tr class="bg-info text-info">
				<td class="text-center">09.03.01 Информатика и вычислительная техника</td>
				<td class="text-center" style="vertical-align: middle">8</td>
				<td class="text-center" style="vertical-align: middle">3</td>
				<td class="text-center" style="vertical-align: middle">20</td>
			</tr>
			<tr class="bg-info text-info">
				<td class="text-center">38.03.01 Экономика</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">20</td>
			</tr>
			<tr>
				<td rowspan="3" style="vertical-align: middle" class="text-center">Заочная</td>
				<td class="text-center">08.03.01 Строительство</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">0</td>
			</tr>
			<tr>
				<td class="text-center">09.03.01 Информатика и вычислительная техника</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">20</td>
			</tr>
			<tr>
				<td class="text-center">38.03.01 Экономика</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">0</td>
			</tr>
			<tr class="bg-info text-info">
				<td rowspan="3" style="vertical-align: middle" class="text-center">Очно-заочная</td>
				<td class="text-center">08.03.01 Строительство</td>
				<td class="text-center" style="vertical-align: middle">4</td>
				<td class="text-center" style="vertical-align: middle">3</td>
				<td class="text-center" style="vertical-align: middle">50</td>
			</tr>
			<tr class="bg-info text-info">
				<td class="text-center">09.03.01 Информатика и вычислительная техника</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">0</td>
			</tr>
			<tr class="bg-info text-info">
				<td class="text-center">38.03.01 Экономика</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">40</td>
			</tr>
		</table>
	</div>

	<hr>

	<h4 id="item2" class="text-center">
		Сведения о количестве мест в рамках контрольных цифр приема на обучение по программам бакалавриата
	</h4>

	<div class="table-responsive">
		<table class="table table-bordered table-condensed">
			<tr>
				<th rowspan="3">Наименование направления подготовки</th>
				<th rowspan="3">Код</th>
				<th colspan="13">Контрольные цифры приема граждан, обучающихся за счет бюджетных ассигнований
					федерального бюджета по программам бакалавриата
				</th>
			</tr>
			<tr>
				<th rowspan="2">всего</th>
				<th colspan="5">из них по очной форме</th>
				<th colspan="2">из них по заочной форме</th>
				<th colspan="5">из них по очно-заочной форме</th>
			</tr>
			<tr>
				<th>всего</th>
				<th>общий конкурс</th>
				<th>в пределах квоты целевого приема</th>
				<th>места по особой квоте</th>
				<th>в пределах отдельной квоты</th>
				<th>всего</th>
				<th>из них в пределах квоты</th>
				<th>всего</th>
				<th>общий конкурс</th>
				<th>в пределах квоты целевого приема</th>
				<th>места по особой квоте</th>
				<th>в пределах отдельной квоты</th>
			</tr>
			<tr>
				<td colspan="2" class="text-center">Итого</td>
				<td class="text-center">27</td>
				<td class="text-center">23</td>
				<td class="text-center">12</td>
				<td class="text-center">3</td>
				<td class="text-center">3</td>
				<td class="text-center">5</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">4</td>
				<td class="text-center">1</td>
				<td class="text-center">1</td>
				<td class="text-center">1</td>
				<td class="text-center">1</td>
			</tr>
			<tr>
				<td>Строительство</td>
				<td>08.03.01</td>
				<td class="text-center">19</td>
				<td class="text-center">15</td>
				<td class="text-center">8</td>
				<td class="text-center">2</td>
				<td class="text-center">2</td>
				<td class="text-center">3</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">4</td>
				<td class="text-center">2</td>
				<td class="text-center">0</td>
				<td class="text-center">1</td>
				<td class="text-center">1</td>
			</tr>
			<tr>
				<td>Информатика и вычислительная техника</td>
				<td style="vertical-align: middle">09.03.01</td>
				<td class="text-center" style="vertical-align: middle">8</td>
				<td class="text-center" style="vertical-align: middle">8</td>
				<td class="text-center" style="vertical-align: middle">4</td>
				<td class="text-center" style="vertical-align: middle">1</td>
				<td class="text-center" style="vertical-align: middle">1</td>
				<td class="text-center" style="vertical-align: middle">2</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">0</td>
				<td class="text-center" style="vertical-align: middle">0</td>
			</tr>
			<tr>
				<td>Экономика</td>
				<td>38.03.01</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
				<td class="text-center">0</td>
			</tr>
		</table>
		<hr>

		<h4 id="item3" class="text-center">
			Перечень вступительных испытаний, необходимых для поступления
		</h4>

		<div class="table-responsive">
			<table class="table table-bordered table-condensed">
				<tr>
					<th>Шифр</th>
					<th>Направления подготовки</th>
					<th>Перечень вступительных испытаний</th>
					<th>для выпускников школ</th>
					<th>для поступающих на базе средне-профессионального или высшего образования</th>
				</tr>
				<tr>
					<td>08.03.01</td>
					<td>Строительство</td>
					<td>
						<ul style="list-style-type: disc">
							<li><u>математика</u><sup>1</sup>;</li>
							<li>русский язык;</li>
							<li>физика или информатика и ИКТ (по выбору поступающего)</li>
						</ul>
					</td>
					<td class="text-center">ЕГЭ</td>
					<td class="text-center">тестирование</td>
				</tr>
				<tr>
					<td>09.03.01</td>
					<td>Информатика и вычислительная техника</td>
					<td>
						<ul style="list-style-type: disc">
							<li><u>математика</u><sup>1</sup>;</li>
							<li>русский язык;</li>
							<li>физика или информатика и ИКТ (по выбору поступающего)</li>
						</ul>
					</td>
					<td class="text-center">ЕГЭ</td>
					<td class="text-center">тестирование</td>
				</tr>
				<tr>
					<td>38.03.01</td>
					<td>Экономика</td>
					<td>
						<ul style="list-style-type: disc">
							<li><u>математика</u><sup>1</sup>;</li>
							<li>русский язык;</li>
							<li>обществознание или информатика и ИКТ (по выбору поступающего)</li>
						</ul>
					</td>
					<td class="text-center">ЕГЭ</td>
					<td class="text-center">тестирование</td>
				</tr>
			</table>
		</div>
		<div class="remark">
			Примечание:<br>
			<sup>1</sup> - профильный общеобразовательный предмет (обозначен первым и выделен подчеркиванием).
		</div>

		<hr>

		<h4 id="item4" class="text-center">
			Минимальное количество баллов ЕГЭ
		</h4>

		<div class="table-responsive">
			<table class="table table-bordered table-condensed">
				<tr>
					<th rowspan="2">№</th>
					<th rowspan="2">Код направления подготовки (специальности)</th>
					<th rowspan="2">Наименование направления подготовки (специальности)</th>
					<th colspan="4">
						Минимальное количество баллов единого государственного экзамена по общеобразовательным предметам
					</th>
				</tr>
				<tr>
					<th colspan="2">Предмет</th>
					<th>бюджет</th>
					<th>платно</th>
				</tr>
				<tr>
					<td class="text-center" rowspan="4" style="vertical-align: middle">1</td>
					<td class="text-center" rowspan="4" style="vertical-align: middle">08.03.01</td>
					<td class="text-center" rowspan="4" style="vertical-align: middle">Строительство</td>
					<td rowspan="2"></td>
					<td>Русский язык</td>
					<td class="text-center">40</td>
					<td class="text-center">40</td>
				</tr>
				<tr>
					<td>Математика</td>
					<td class="text-center">40</td>
					<td class="text-center">40</td>
				</tr>
				<tr>
					<td class="text-center" rowspan="2" style="vertical-align: middle">по выбору поступающих</td>
					<td>Физика</td>
					<td class="text-center">39</td>
					<td class="text-center">39</td>
				</tr>
				<tr>
					<td>Информатика и ИКТ</td>
					<td class="text-center">44</td>
					<td class="text-center">44</td>
				</tr>
				<tr>
					<td class="text-center" rowspan="4" style="vertical-align: middle">2</td>
					<td class="text-center" rowspan="4" style="vertical-align: middle">09.03.01</td>
					<td class="text-center" rowspan="4" style="vertical-align: middle">
						Информатика и вычислительная техника
					</td>
					<td rowspan="2"></td>
					<td>Русский язык</td>
					<td class="text-center">40</td>
					<td class="text-center">40</td>
				</tr>
				<tr>
					<td>Математика</td>
					<td class="text-center">40</td>
					<td class="text-center">40</td>
				</tr>
				<tr>
					<td class="text-center" rowspan="2" style="vertical-align: middle">по выбору поступающих</td>
					<td>Физика</td>
					<td class="text-center">39</td>
					<td class="text-center">39</td>
				</tr>
				<tr>
					<td>Информатика и ИКТ</td>
					<td class="text-center">44</td>
					<td class="text-center">44</td>
				</tr>
				<tr>
					<td class="text-center" rowspan="4" style="vertical-align: middle">3</td>
					<td class="text-center" rowspan="4" style="vertical-align: middle">38.03.01</td>
					<td class="text-center" rowspan="4" style="vertical-align: middle">Экономика</td>
					<td rowspan="2"></td>
					<td>Русский язык</td>
					<td class="text-center">40</td>
					<td class="text-center">40</td>
				</tr>
				<tr>
					<td>Математика</td>
					<td class="text-center">40</td>
					<td class="text-center">40</td>
				</tr>
				<tr>
					<td class="text-center" rowspan="2" style="vertical-align: middle">по выбору поступающих</td>
					<td>Обществознание</td>
					<td class="text-center">45</td>
					<td class="text-center">45</td>
				</tr>
				<tr>
					<td>Информатика и ИКТ</td>
					<td class="text-center">44</td>
					<td class="text-center">44</td>
				</tr>
			</table>
		</div>

		<h4 class="text-center">
			Сведения о наличии общежития
		</h4>
		<p>Общежитие отсутствует.</p>

		<? endif ?>
	</div>

	<script>
		$(document).ready(function () {
			$('table:even').addClass('bg-success').addClass('text-success');
			$('table:odd').addClass('bg-info').addClass('text-info');
		});
	</script>

	<style>
		.programs p > a {
			text-decoration: underline !important;
			color: #333 !important;
		}

		.programs p > a:active {
			text-decoration: underline !important;
		}
	</style>
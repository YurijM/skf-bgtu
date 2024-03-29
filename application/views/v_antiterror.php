<div class="antiterror row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<p>
		Терроризм определяется как идеология насилия и практика воздействия на общественное сознание, на принятие
		решений органами государственной власти, органами местного самоуправления или международными организациями,
		связанная с силовым воздействием, устрашением мирного населения и/или иными формами противоправных
		насильственных действий.
	</p>
	<p>
		Сегодня терроризм является одной из наиболее острых и злободневных проблем современности, он разрушает
		основы государственного устройства, порождает ненависть и недоверие между народами, становится угрозой
		духовным и материальным ценностям.
	</p>
	<p>
		Особое внимание радикальные сообщества уделяют высшим учебным заведениям, ведь студенты являются одной из
		наиболее уязвимых групп населения для проникновения криминальных и деструктивных идеологий.
	</p>
	<p>
		Безопасность университета — это безопасность каждого его студента, преподавателя, сотрудника. Работа по
		обеспечению безопасности ведётся в различных направлениях: защита персонала от чрезвычайных происшествий,
		криминальных и других проявлений негативного характера.
	</p>
	<p>
		Активная работа ведётся по предупреждению актов терроризма, экстремизма и антикриминальной защиты. Территория и
		учебные корпуса оборудованы автоматической системой контроля доступа, что даёт возможность в реальном времени
		вести учёт персонала, находящегося в помещениях; установлена система видеонаблюдения. Охрана территории,
		учебных корпусов осуществляется службой охраны, согласно договора.
	</p>
	<p>
		В нашем университете создана многоуровневая система мер, цель которых – создание единой образовательной,
		научной, духовно-нравственной и культурно-досуговой среды, направленной на предупреждение экстремистских и
		террористических действий.
	</p>

	<p>
		<strong>Инструкции при угрозе возникновения или возникновении чрезвычайных ситуаций в университете и на его территории:</strong>
	</p>
	<ul  style="list-style-type: disc">
		<li>
			<?= HTML::anchor($dir_docs . 'instr_stud.pdf',
				'Инструкция по действиям обучающихся, посетителей СКФ БГТУ им.В.Г.Шухова',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= HTML::anchor($dir_docs . 'instr_prep.pdf',
				'Инструкция по действиям преподавателей, работников СКФ БГТУ им.В.Г.Шухова',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= HTML::anchor($dir_docs . 'pravila_antiterror.pdf',
				'Памятка «Правила поведения обучающихся при нападении в университете»',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= HTML::anchor($dir_docs . 'pamyatka.pdf',
				'Памятка об ответственности за публичные действия, направленные на распространение заведомо ложной информации, дискредитацию использования ВС РФ',
				['target' => '_blank']
			) ?>
		</li>
	</ul>

	<p>
		<strong>Ссылки на официальные источники:</strong>
	</p>
	<ul  style="list-style-type: disc">
		<li>
			<?= Html::anchor(
				'https://scienceport.ncpti.ru',
				'портал «Наука и образование против террора»;',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			<?= Html::anchor(
				'http://www.fsb.ru/fsb/supplement/advice/instros.htm',
				'рекомендации гражданам по действиям при угрозе совершения террористического акта;',
				['target' => '_blank']
			) ?>
		</li>
		<li>
			гл. 24, "Уголовный кодекс Российской Федерации" от 13.06.1996 N 63-ФЗ (ред. от 27.12.2019)
			{КонсультантПлюс} – уголовная ответственность за террористические действия;
		</li>
		<li>
			<?= Html::anchor(
				'http://www.honestnet.ru/glavnaya/stranitsa-118.html',
				'молодёжь в борьбе с терроризмом, экстремизмом, наркоманией, алкоголизмом, детской порнографией в
			Интернете.',
				['target' => '_blank']
			) ?>
		</li>
	</ul>
</div>

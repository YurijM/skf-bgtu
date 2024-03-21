<?php defined('SYSPATH') or die('No direct script access.');

class Model_Docs extends Model
{
	public function load()
	{
		return [
			'copyDoc1' => [
				[
					'title' => 'Копия устава федерального государственного бюджетного образовательного учреждения высшего образования "Белгородский государственный технологический университет им.В.Г.Шухова" (утвержден приказом Министерства образования и науки Р.Ф. от 16 ноября 2018г. №957)',
					'link' => 'ustav.pdf',
					'itemprop' => 'ustavDocLink'
				],
				[
					'title' => 'Копия приказа о переименовании Северо-Кавказского филиала федерального государственного бюджетного образовательного учреждения высшего образования "Белгородский государственный технологический университет им.В.Г.Шухова"',
					'link' => 'prikaz_o_filiale_2015.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Положение о Северо-Кавказском филиале федерального государственного бюджетного образовательного учреждения высшего образования "Белгородский государственный технологический университет им.В.Г.Шухова" (г.Минеральные Воды)',
					'link' => 'polog_2017.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Копии лицензий на осуществление образовательной деятельности (с приложениями):',
					'link' => '',
					'style' => 'margin-bottom: .5em; font-weight: bold',
					'itemprop' => 'licenseDocLink'
				],
				[
					'title' => 'Лицензия на право ведения образовательной деятельности',
					'link' => 'license.pdf',
					'itemprop' => '',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Копии свидетельств о государственной аккредитации (с приложениями):',
					'link' => '',
					'style' => 'margin-bottom: .5em; font-weight: bold',
					'itemprop' => 'accreditationDocLink'
				],
				[
					'title' => 'Свидетельство о государственной аккредитации',
					'link' => 'accreditation.pdf',
					'style' => 'margin-left: 2em',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение к свидетельству о государственной аккредитации',
					'link' => 'pril_accr.pdf',
					'style' => 'margin-left: 2em',
					'itemprop' => ''
				],
			],
			'docLink' => [
				[
					'title' => 'Правила внутреннего распорядка:',
					'link' => '',
					'itemprop' => 'perevodDocLink',
					'style' => 'margin-bottom: .5em; font-weight: bold'
				],
				[
					'title' => 'Правила внутреннего распорядка обучающихся',
					'link' => 'pravila_vnutr.pdf',
					'sign' => 'Файл подписан простой электронной подписью
Дата, время: 06.04.2021 14:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b',
					'itemprop' => 'localActStud',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Правила внутреннего трудового распорядка',
					'link' => 'pravila_vnutr.pdf',
					'sign' => 'Файл подписан простой электронной подписью
Дата, время: 06.04.2021 14:05
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b',
					'itemprop' => 'localActOrder',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Коллективный договор:',
					'link' => '',
					'itemprop' => 'localActCollec',
					'style' => 'margin-bottom: .5em; font-weight: bold'
				],
				[
					'title' => 'Коллективный договор',
					'link' => 'kol_dogovor.pdf',
					'sign' => 'Файл подписан простой электронной подписью
Дата, время: 14.12.2022 11:42
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e',
					'itemprop' => 'localActCollec',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Отчеты:',
					'link' => '',
					'itemprop' => '',
					'style' => 'margin-bottom: .5em; font-weight: bold'
				],
				[
					'title' => 'Отчет о результатах самообследования 2021',
					'link' => 'samoobsledovanie2021.pdf',
					'sign' => 'Файл подписан простой электронной подписью
Дата, время: 11.04.2022 11:08
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b',
					'itemprop' => 'reportEduDocLink',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Отчет о результатах самообследования 2022',
					'link' => 'samoobsledovanie2022.pdf',
					'sign' => 'Файл подписан простой электронной подписью
Дата, время: 17.04.2023 13:16
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b',
					'itemprop' => 'reportEduDocLink',
					'style' => 'margin-left: 2em'
				],
			],

			'localAct1' => [
				[
					'title' => 'Правила приема обучающихся:',
					'link' => '',
					'style' => 'margin-bottom: .5em; font-weight: bold',
					'itemprop' => ''
				],
				[
					'title' => 'Правила приема на обучение по образовательным программам высшего образования – программам бакалавриата в 2024 году',
					'link' => 'pravila_vo_24.pdf',
					'style' => 'margin-left: 2em',
					'itemprop' => 'priemDocLink'
				],
				[
					'title' => 'Правила приема на обучение по образовательным программам среднего профессионального образования в 2023 году',
					'link' => 'pravila_spo.pdf',
					'sign' => 'Файл подписан простой электронной подписью
Дата, время: 01.11.2022 11:44
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b',
					'style' => 'margin-left: 2em',
					'itemprop' => 'modeDocLink'
				],
				[
					'title' => 'Режим занятий  обучающихся:',
					'link' => '',
					'style' => 'margin-bottom: .5em; font-weight: bold',
					'itemprop' => ''
				],
				[
					'title' => 'Распоряжение о режиме занятий обучающихся',
					'link' => 'regim.pdf',
					'sign' => 'Файл подписан простой электронной подписью
Дата, время: 07.04.2021 11:44
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b',
					'style' => 'margin-left: 2em',
					'itemprop' => 'modeDocLink'
				],
				[
					'title' => 'Распоряжение о режиме занятий обучающихся в СПО',
					'link' => 'regim_spo.pdf',
					'style' => 'margin-left: 2em',
					'itemprop' => 'modeDocLink'
				],
				[
					'title' => 'Формы, периодичность и порядок текущего контроля успеваемости и промежуточной аттестации обучающихся:',
					'link' => '',
					'style' => 'margin-bottom: .5em; font-weight: bold',
					'itemprop' => ''
				],
				[
					'title' => 'Положение о порядке организации и проведения текущего контроля успеваемости и промежуточной аттестации обучающихся по образовательным программам высшего образования',
					'link' => 'pol_tek_kontr.pdf',
					'sign' => 'Файл подписан простой электронной подписью
Дата, время: 01.10.2022 10:05
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e',
					'itemprop' => '',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Положение об организации и осуществлении образовательной деятельности по образовательным программам среднего профессионального образования',
					'link' => 'pol_spo.pdf',
					'sign' => 'Файл подписан простой электронной подписью
Дата, время: 05.09.2022 09:15
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b',
					'itemprop' => 'tekKontrolDocLink',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Положение по разработке рабочих программ учебных дисциплин по СПО',
					'link' => 'pol_rp_spo.pdf',
					'sign' => 'Файл подписан простой электронной подписью
Дата, время: 07.06.2021 14:34
ФИО: Курбатов Владимир Леонидович
Должность: директор
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b',
					'itemprop' => 'tekKontrolDocLink',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Положение о реализации процесса о текущем контроле знаний и промежуточной аттестации обучающихся по программам подготовки специалистов среднего звена',
					'link' => 'pol_att_spo.pdf',
					'itemprop' => 'tekKontrolDocLink',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Порядок и основания перевода, отчисления и восстановления обучающихся:',
					'link' => '',
					'itemprop' => 'perevodDocLink',
					'style' => 'margin-bottom: .5em; font-weight: bold'
				],
				[
					'title' => 'Положение о порядке перевода обучающихся в другую организацию, осуществляющую образовательную деятельность по образовательным программам высшего образования',
					'link' => 'pol_perevod_vus.pdf',
					'sign' => 'Файл подписан простой электронной подписью
Дата, время: 01.03.2022 11:25
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e',
					'itemprop' => '',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Положение о порядке обучения, перевода, отчисления и предоставления академических отпусков обучающимся в БГТУ им.В.Г.Шухова',
					'link' => 'pol_per_otch.pdf',
					'sign' => 'Файл подписан простой электронной подписью
Дата, время: 26.02.2021 09:20
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e',
					'itemprop' => '',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Положение о порядке перехода с платного обучения на бесплатное',
					'link' => 'perevod_b.pdf',
					'sign' => 'Файл подписан простой электронной подписью
Дата, время: 02.10.2023 11:20
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b',
					'itemprop' => '',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Положение о комиссии по вопросам перехода с платного обучения на бесплатное',
					'link' => 'perevod_com.pdf',
					'sign' => 'Файл подписан простой электронной подписью
Дата, время: 02.10.2023 11:20
ФИО: Курбатов Владимир Леонидович
Должность: первый заместитель директора
Уникальный ключ: 5f9e5d79cd1555bedbf271ba7dddc82b7348723b',
					'itemprop' => '',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Положение о реализации процесса о порядке перезачёта учебных дисциплин, междисциплинарных курсов, профессиональных модулей и практик для специалистов среднего звена',
					'link' => 'pol_per_spo.pdf',
					'itemprop' => '',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Порядок оформления возникновения, приостановления и прекращения отношений между образовательной организацией и обучающимися и (или) родителями (законными представителями) несовершеннолетних обучающихся:',
					'link' => '',
					'itemprop' => 'vozDocLink',
					'style' => 'margin-bottom: .5em; font-weight: bold'
				],
				[
					'title' => 'Локальный нормативный акт, регламентирующий порядок оформления, возникновения, приостановления и прекращения отношений между образовательной организацией и обучающимися и (или) родителями (законными представителями) несовершеннолетних обучающихся',
					'link' => 'poryadok_platn_uslug_01032019.pdf',
					'sign' => 'Файл подписан простой электронной подписью
Дата, время: 12.01.2021 10:10
ФИО: Глаголев Сергей Николаевич
Должность: ректор
Уникальный ключ: 2c649776ce03da0494ed73c86a12c16e',
					'itemprop' => 'vozDocLink',
					'style' => 'margin-left: 2em'
				],
			],

			'attachments' => [
				[
					'title' => 'Приложение 1',
					'link' => 'pril1.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 2',
					'link' => 'pril2.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 3',
					'link' => 'pril3.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 4',
					'link' => 'pril4.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 5',
					'link' => 'pril5.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 6',
					'link' => 'pril6.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 7',
					'link' => 'pril7.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 8',
					'link' => 'pril8.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 9',
					'link' => 'pril9.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 10',
					'link' => 'pril10.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 11 - 12',
					'link' => 'pril11-12.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 13',
					'link' => 'pril13.pdf',
					'itemprop' => ''
				],
			],

			'attachments1' => [
				[
					'title' => 'Приложение 1',
					'link' => 'pril_1.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 2',
					'link' => 'pril_2.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 3',
					'link' => 'pril_3.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 4',
					'link' => 'pril_4.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 5-1',
					'link' => 'pril_5_1.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 5-2',
					'link' => 'pril_5_2.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 6',
					'link' => 'pril_6.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 7',
					'link' => 'pril_7.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 8',
					'link' => 'pril_8.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 9',
					'link' => 'pril_9.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Приложение 10',
					'link' => 'pril_10.pdf',
					'itemprop' => ''
				],
			]
		];
	}
}
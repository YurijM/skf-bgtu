<?php defined('SYSPATH') or die('No direct script access.');

class Model_Docs extends Model
{
	public function load()
	{
		return [
			'docs' => [
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
					'title' => 'Приложение к лицензии на право ведения образовательной деятельности',
					'link' => 'license_supplement.pdf',
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
					'itemprop' => '',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Приложение к свидетельству о государственной аккредитации',
					'link' => 'pril_accr.pdf',
					'itemprop' => '',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Копии локальных нормативных актов, регламентирующих правила приема обучающихся:',
					'link' => '',
					'style' => 'margin-bottom: .5em; font-weight: bold',
					'itemprop' => 'docLink'
				],
				[
					'title' => 'Правила приема поступающих в СКФ БГТУ им.В.Г.Шухова на 2019/2020 учебный год',
					'link' => 'pravila_19_20.pdf',
					'itemprop' => 'priemDocLink',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Копия локального нормативного акта, регламентирующего режим занятий обучающихся',
					'link' => 'regim.pdf',
					'itemprop' => 'modeDocLink',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Копии локальных нормативных актов, регламентирующих формы, периодичность и порядок текущего контроля успеваемости и промежуточной аттестации обучающихся:',
					'link' => '',
					'style' => 'margin-bottom: .5em; font-weight: bold',
					'itemprop' => 'docLink'
				],
				[
					'title' => 'Положение о порядке организации и проведения промежуточной аттестации обучающихся',
					'link' => 'pol_pr_att.pdf',
					'itemprop' => '"tekKontrolDocLink',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Положение о порядке организации и проведения текущего контроля успеваемости',
					'link' => 'pol_tek_kontr.pdf',
					'itemprop' => '"tekKontrolDocLink',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Копии локальных нормативных актов, регламентирующих порядок и основания перевода, отчисления и восстановления обучающихся:',
					'link' => '',
					'style' => 'margin-bottom: .5em; font-weight: bold',
					'itemprop' => 'docLink'
				],
				[
					'title' => 'Положение о порядке перевода обучающихся в другую организацию, осуществляющую образовательную деятельность по образовательным программам высшего образования',
					'link' => 'pol_perevod_vus.pdf',
					'itemprop' => 'perevodDocLink',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Положение о порядке обучения, перевода, отчисления и предоставления академических отпусков обучающимся в БГТУ им.В.Г.Шухова',
					'link' => 'pol_per_otch.pdf',
					'itemprop' => 'perevodDocLink',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Положение о порядке перехода с платного обучения на бесплатное',
					'link' => 'perevod_08_09_2017.pdf',
					'itemprop' => '',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Положение о комиссии по вопросам перехода с платного обучения на бесплатное',
					'link' => 'perevod_com.pdf',
					'itemprop' => '',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Копия локального нормативного акта, регламентирующего порядок оформления, возникновения, приостановления и прекращения отношений между образовательной организацией и обучающимися и (или) родителями (законными представителями) несовершеннолетних обучающихся',
					'link' => 'poryadok_platn_uslug_01_03_2019.pdf',
					'itemprop' => 'vozDocLink',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Копия плана финансово - хозяйственной деятельности образовательной организации, утвержденного в установленном законодательством Российской Федерации и порядке, или бюджетных смет образовательной организации',
					'link' => 'plan_fhd_2018.pdf',
					'itemprop' => 'finPlanDocLink'
				],
				[
					'title' => 'Копия правил внутреннего распорядка обучающихся',
					'link' => 'pravila_vnutr_2018.pdf',
					'itemprop' => 'localActStud'
				],
				[
					'title' => 'Копия правил внутреннего трудового распорядка',
					'link' => 'pravila_vnutr_2018.pdf',
					'itemprop' => 'localActOrder'
				],
				[
					'title' => 'Об утверждении положения о студенческой антикоррупционной комиссии СКФ БГТУ им.В.Г.Шухова',
					'link' => 'pr_corr.pdf',
					'itemprop' => 'LocalActOrder'
				],
				[
					'title' => 'Приказ о запрете курения на территории университета',
					'link' => 'pr_smoke.pdf',
					'itemprop' => 'LocalActOrder'
				],
				[
					'title' => 'Копия коллективного договора',
					'link' => 'kol_dorovor_30.12.2013.pdf',
					'itemprop' => 'localActCollec'
				],
				[
					'title' => 'Документ о порядке оказания платных образовательных услуг',
					'link' => 'poryadok_platn_uslug_01_03_2019.pdf',
					'itemprop' => 'paidEduDocLink'
				],
				[
					'title' => 'Положение о платных образовательных услугах',
					'link' => 'plat_usl_2016.pdf',
					'itemprop' => 'paidEduDocLink'
				],
				[
					'title' => 'Положение об обработке и защите персональных данных',
					'link' => 'polojenie_lich_d.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Политика в отношении обработки персональных данных',
					'link' => 'politika_pd.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Положение о комиссии по урегулированию конфликтов интересов',
					'link' => 'pol_konf_inter.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Отчеты:',
					'link' => '',
					'itemprop' => 'reportEduDocLink',
					'style' => 'margin-bottom: .5em; font-weight: bold'
				],
				[
					'title' => 'Отчет о результатах самообследования',
					'link' => 'samoobsledovanie2018.pdf',
					'itemprop' => '',
					'style' => 'margin-left: 2em'
				],
			],

			'orders' => [
				[
					'title' => 'Приказ № 3/72-ХД от 27.06.2019г. "Об установлении стоимости платных образовательных услуг на 2019/2020 учебный год для 1 курса"',
					'description' => '',
					'link' => 'pr72.pdf',
					'itemprop' => 'paidEduDocLink'
				],
				[
					'title' => 'Приказ № 3/73-ХД от 27.06.2019г. "Об установлении стоимости платных образовательных услуг на 2019/2020 учебный год для 2 курса"',
					'description' => '',
					'link' => 'pr73.pdf',
					'itemprop' => 'paidEduDocLink'
				],
				[
					'title' => 'Приказ № 3/74-ХД от 27.06.2019г. "Об установлении стоимости платных образовательных услуг на 2019/2020 учебный год для 3 курса"',
					'description' => '',
					'link' => 'pr74.pdf',
					'itemprop' => 'paidEduDocLink'
				],
				[
					'title' => 'Приказ № 3/75-ХД от 27.06.2019г. "Об установлении стоимости платных образовательных услуг на 2019/2020 учебный год для 4-5 курса"',
					'description' => '',
					'link' => 'pr75.pdf',
					'itemprop' => 'paidEduDocLink'
				],
				[
					'title' => 'Приказ № 3/76-ХД от 27.06.2019г. "О снижении стоимости платных образовательных услуг"',
					'description' => '',
					'link' => 'pr76.pdf',
					'itemprop' => 'paidEduDocLink'
				],
				[
					'title' => 'Прейскурант стоимости платных образовательных услуг на 2019/2020 учебный год для 1 курса',
					'description' => '',
					'link' => 'preiskurant1.pdf',
					'itemprop' => 'paidEduDocLink'
				],
				[
					'title' => 'Прейскурант стоимости платных образовательных услуг на 2019/2020 учебный год для 2 курса',
					'description' => '',
					'link' => 'preiskurant2.pdf',
					'itemprop' => 'paidEduDocLink'
				],
				[
					'title' => 'Прейскурант стоимости платных образовательных услуг на 2019/2020 учебный год для 3 курса',
					'description' => '',
					'link' => 'preiskurant3.pdf',
					'itemprop' => 'paidEduDocLink'
				],
				[
					'title' => 'Прейскурант стоимости платных образовательных услуг на 2019/2020 учебный год для 4-5 курсов',
					'description' => '',
					'link' => 'preiskurant4_5.pdf',
					'itemprop' => 'paidEduDocLink'
				]
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
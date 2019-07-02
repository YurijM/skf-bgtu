<?php defined('SYSPATH') or die('No direct script access.');

class Model_Docs extends Model {
	public function load()
	{
		return [
			'docs' => [
				[
					'title' => 'Устав федерального государственного бюджетного образовательного учреждения высшего образования "Белгородский государственный технологический университет им.В.Г.Шухова" (утвержден приказом Министерства образования и науки Р.Ф. от 16 ноября 2018г. №957)',
					'link' => 'ustav.pdf',
					'itemprop' => 'Ustav_DocLink'
				],
				[
					'title' => 'Приказ о переименовании Северо-Кавказского филиала федерального государственного бюджетного образовательного учреждения высшего образования "Белгородский государственный технологический университет им.В.Г.Шухова"',
					'link' => 'prikaz_o_filiale_2015.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Положение о Северо-Кавказском филиале федерального государственного бюджетного образовательного учреждения высшего образования "Белгородский государственный технологический университет им.В.Г.Шухова" (г.Минеральные Воды)',
					'link' => 'polog_2017.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Лицензия на право ведения образовательной деятельности',
					'link' => 'license.pdf',
					'itemprop' => 'License_DocLink'
				],
				[
					'title' => 'Приложение к лицензии на право ведения образовательной деятельности',
					'link' => 'license_supplement.pdf',
					'itemprop' => 'License_DocLink'
				],
				[
					'title' => 'Свидетельство о государственной аккредитации',
					'link' => 'accreditation.pdf',
					'itemprop' => 'Accreditation_DocLink'
				],
				[
					'title' => 'Приложение к свидетельству о государственной аккредитации',
					'link' => 'pril_accr.pdf',
					'itemprop' => 'Accreditation_DocLink'
				],
				[
					'title' => 'Правила приема поступающих в СКФ БГТУ им.В.Г.Шухова на 2019/2020 учебный год',
					'link' => 'pravila_19_20.pdf',
					'itemprop' => 'Priem_DocLink'
				],
//				[
//					'title' => 'Формы, периодичность и порядок текущего контроля успеваемости и промежуточной аттестации обучающихся',
//					'link' => 'formi_sroki_kontrolya_07.10.2011.pdf',
//					'itemprop' => 'Tek_kontrol_DocLink'
//				],
				[
					'title' => 'Распоряжение о режиме занятий обучающихся',
					'link' => 'regim.pdf',
					'itemprop' => ''
				],
				/*[
					'title' => 'Положение о порядке организации и проведения текущего контроля успеваемости',
					'link' => 'tec_contr.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Положение о порядке организации и проведения промежуточной аттестации обучающихся',
					'link' => 'prom_att.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Положение о порядке обучения, перевода, отчисления и предоставления академических отпусков обучающимся',
					'link' => 'per_otch.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Положение о порядке отчисления обучающихся',
					'link' => 'otch.pdf',
					'itemprop' => ''
				],*/
				/*[
					'title' => 'Порядок выдачи и ведения зачетной книжки, студенческого билета обучающегося',
					'link' => 'pologenie_zach_kn.pdf',
					'itemprop' => ''
				],*/
				[
					'title' => 'Положение о порядке организации и проведения промежуточной аттестации обучающихся',
					'link' => 'pol_pr_att.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Положение о порядке организации и проведения текущего контроля успеваемости',
					'link' => 'pol_tek_kontr.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Положение о порядке перевода обучающихся в другую организацию, осуществляющую образовательную деятельность по образовательным программам высшего образования',
					'link' => 'pol_perevod_vus.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Положение о порядке обучения, перевода, отчисления и предоставления академических отпусков обучающимся в БГТУ им.В.Г.Шухова',
					'link' => 'pol_per_otch.pdf',
					'itemprop' => ''
				],
			],

//			'regulations' => [
//				[
//					'title' => 'Положение о порядке приема, перевода и восстановления на второй и последующий курсы в Белгородский государственный технологический университет им.В.Г.Шухова',
//					'link' => 'perevod_bstu_20.01.2012.pdf',
//					'itemprop' => 'Perevod_DocLink'
//				],
//				[
//					'title' => 'Положение о порядке отчисления обучающихся',
//					'link' => 'pologenie_otchisl.pdf',
//					'itemprop' => 'Perevod_DocLink'
//				],
//				[
//					'title' => 'Порядок оформления возникновения, приостановления и прекращения отношений между образовательной организацией и обучающимися и (или) родителями (законными представителями) несовершеннолетних обучающихся',
//					'link' => '',
//					'itemprop' => 'Voz_DocLink'
//				],
//			],

			'docs_continuation' => [
				/*[
					'title' => 'О порядке перехода с платного обучения на бесплатное',
					'link' => 'pologenie_perehod_na_budjet.pdf',
					'itemprop' => ''
				],*/
				[
					'title' => 'О порядке перехода с платного обучения на бесплатное ',
					'link' => 'pologenie_perevod_bespl.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'План финансово-хозяйственной деятельности',
					'link' => 'plan_fhd_2018.pdf',
					'itemprop' => 'FinPlan_DocLink'
				],
				[
					'title' => 'Правила внутреннего распорядка',
					'link' => 'pravila_vnutr_2018.pdf',
					'itemprop' => 'LocalActOrder'
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
					'title' => 'Коллективный договор',
					'link' => 'kol_dorovor_30.12.2013.pdf',
					'itemprop' => 'LocalActCollec'
				],
				[
					'title' => 'Образец договора об оказании платных образовательных услуг',
					'link' => 'dogovor_2018.pdf',
					'itemprop' => 'PaidEdu_DocLink'
				],
				[
					'title' => 'Положение о платных образовательных услугах',
					'link' => 'plat_usl_2016.pdf',
					'itemprop' => 'PaidEdu_DocLink'
				],
				[
					'title' => 'Положение об обработке и защите персональных данных',
					'link' => 'polojenie_lich_d.pdf',
					'itemprop' => 'PaidEdu_DocLink'
				],
				[
					'title' => 'Политика в отношении обработки персональных данных',
					'link' => 'politika_pd.pdf',
					'itemprop' => 'PaidEdu_DocLink'
				],
				[
					'title' => 'Положение о комиссии по урегулированию конфликтов интересов',
					'link' => 'pol_konf_inter.pdf',
					'itemprop' => 'PaidEdu_DocLink'
				],
				[
					'title' => 'Отчеты:',
					'link' => '',
					'itemprop' => 'ReportEdu_DocLink',
					'style' => 'margin-bottom: .5em; font-weight: bold'
				],
				[
					'title' => 'Отчет о результатах самообследования 2016',
					'link' => 'self_2017.pdf',
					'itemprop' => 'ReportEdu_DocLink',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Отчет о научной деятельности 2017',
					'link' => 'nauka2017.pdf',
					'itemprop' => 'ReportEdu_DocLink',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Отчет о результатах самообследования 2017',
					'link' => 'samoobsledovanie2017.pdf',
					'itemprop' => 'ReportEdu_DocLink',
					'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Отчет о результатах самообследования 2018',
					'link' => 'samoobsledovanie2018.pdf',
					'itemprop' => 'ReportEdu_DocLink',
					'style' => 'margin-left: 2em'
				],
			],

			'orders' => [
				[
					'title' => 'Приказ № 3/72-ХД от 27.06.2019г. "Об установлении стоимости платных образовательных услуг на 2019/2020 учебный год для 1 курса"',
					'description' => '',
					'link' => 'pr72.pdf',
					'itemprop' => 'PaidEdu_DocLink'
				],
				[
					'title' => 'Приказ № 3/73-ХД от 27.06.2019г. "Об установлении стоимости платных образовательных услуг на 2019/2020 учебный год для 2 курса"',
					'description' => '',
					'link' => 'pr73.pdf',
					'itemprop' => 'PaidEdu_DocLink'
				],
				[
					'title' => 'Приказ № 3/74-ХД от 27.06.2019г. "Об установлении стоимости платных образовательных услуг на 2019/2020 учебный год для 3 курса"',
					'description' => '',
					'link' => 'pr74.pdf',
					'itemprop' => 'PaidEdu_DocLink'
				],
				[
					'title' => 'Приказ № 3/75-ХД от 27.06.2019г. "Об установлении стоимости платных образовательных услуг на 2019/2020 учебный год для 4-5 курса"',
					'description' => '',
					'link' => 'pr75.pdf',
					'itemprop' => 'PaidEdu_DocLink'
				],
				[
					'title' => 'Приказ № 3/76-ХД от 27.06.2019г. "О снижении стоимости платных образовательных услуг"',
					'description' => '',
					'link' => 'pr76.pdf',
					'itemprop' => 'PaidEdu_DocLink'
				],
				[
					'title' => 'Прейскурант стоимости платных образовательных услуг на 2019/2020 учебный год для 1 курса',
					'description' => '',
					'link' => 'preiskurant1.pdf',
					'itemprop' => 'PaidEdu_DocLink'
				],
				[
					'title' => 'Прейскурант стоимости платных образовательных услуг на 2019/2020 учебный год для 2 курса',
					'description' => '',
					'link' => 'preiskurant2.pdf',
					'itemprop' => 'PaidEdu_DocLink'
				],
				[
					'title' => 'Прейскурант стоимости платных образовательных услуг на 2019/2020 учебный год для 3 курса',
					'description' => '',
					'link' => 'preiskurant3.pdf',
					'itemprop' => 'PaidEdu_DocLink'
				],
				[
					'title' => 'Прейскурант стоимости платных образовательных услуг на 2019/2020 учебный год для 4-5 курсов',
					'description' => '',
					'link' => 'preiskurant4_5.pdf',
					'itemprop' => 'PaidEdu_DocLink'
				]
			],
      
			'docs_continuation1' => [
				[
					'title' => 'Предписание Федеральной службы по надзору в сфере образования и науки (Рособрнадзор) от 20.09.2016',
					'link' => 'predpisaniya2016.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Отчет об исполнении предписаний Федеральной службы по надзору в сфере образования и науки',
					'link' => 'otchet_predpis2016.pdf',
					'itemprop' => '',
          'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Приложения к отчету об исполнении предписаний Федеральной службы по надзору в сфере образования и науки',
					'link' => 'attachments',
					'itemprop' => '',
          'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Предписание Федеральной службы по надзору в сфере образования и науки (Рособрнадзор) от 28.02.2017',
					'link' => 'predpisaniya2017.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Отчет об исполнении предписаний Федеральной службы по надзору в сфере образования и науки',
					'link' => 'otchet_predpis2017.pdf',
					'itemprop' => '',
          'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Приложения к отчету об исполнении предписаний Федеральной службы по надзору в сфере образования и науки',
					'link' => 'attachments1',
					'itemprop' => '',
          'style' => 'margin-left: 2em'
				],
				[
					'title' => 'Письмо Рособрнадзора №07-1109 от 16.05.2017г. о снятии предписаний',
					'link' => 'snyatie_predpisanij_20170516.pdf',
					'itemprop' => ''
				],
				[
					'title' => 'Ответ Управления надзора и контроля за организациями, осуществляющими образовательную деятельность',
					'link' => 'result2017.pdf',
					'itemprop' => ''
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
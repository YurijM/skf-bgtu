<div class="cost row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<div class="col-xs-6">
		<div class="col-xs-12">
			<div class="thumbnail text-center">
				<?= HTML::anchor(
					$dir_docs . 'preiskurant15_vo.pdf',
					HTML::image(
						$dir_img_docs . 'preiskurant15_vo.jpg',
						[
							'class' => 'img img-rounded',
							'title' => 'Просмотреть документ',
							'alt' => $page_title
						]
					),
					['target' => '_blank']
				) ?>
				<div class="caption" style="min-height:3em; max-height:3em">
					Стоимость обучения ВУЗ
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="thumbnail text-center">
				<?= HTML::anchor(
					$dir_docs . 'preiskurant12_spo.pdf',
					HTML::image(
						$dir_img_docs . 'preiskurant12_spo.jpg',
						[
							'class' => 'img img-rounded',
							'title' => 'Просмотреть документ',
							'alt' => $page_title
						]
					),
					['target' => '_blank']
				) ?>
				<div class="caption" style="min-height:3em; max-height:3em">
					Стоимость обучения СПО
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-6">
		<div class="thumbnail text-center">
			<?= HTML::anchor(
				$dir_docs . 'kvitanciya_na_oplatu.pdf',
				HTML::image(
					$dir_img_docs . 'kvitanciya_na_oplatu.jpg',
					[
						'class' => 'img img-rounded',
						'title' => 'Просмотреть документ',
						'alt' => $page_title
					]
				),
				['target' => '_blank']
			) ?>
			<div class="caption" style="min-height:3em; max-height:3em">
				Квитанция на оплату
			</div>
		</div>
	</div>

	<div class="col-xs-12">
		<b>Способы оплаты:</b>
		<ol>
			<li>
				В филиалах и терминалах Московского индустриального банка (в г.Минеральные Воды по адресу: ул.22
				Партсъезда, д.70 - в районе кинотеатра
				«Октябрь», проезд маршрутом №2, 2а). Банк взимает комиссию в размере 1% от суммы оплаты.
			</li>
			<li>
				В филиалах и терминалах Сбербанка России (<?= HTML::anchor(
					$dir_docs . 'sber_student.pdf',
					'инструкция',
					[
						'style' => 'text-decoration: underline !important',
						'target' => '_blank'
					]) ?>)
				<br>
				<?= HTML::anchor('https://online.sberbank.ru/CSAFront/payOrderPaymentLogin.do?ReqId=1368927834384&ST=ufs.billing',
					'Ссылка для быстрого перехода в Сбербанк онлайн с ноутбуков и стационарных ПК для оплаты за обучение',
					[
						'style' => 'text-decoration: underline !important',
						'target' => '_blank'
					]) ?>
				. В поле "Лицевой счет" ввести № договора со студентом.
			</li>
		</ol>
	</div>
</div>

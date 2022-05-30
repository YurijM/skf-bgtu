<!-- Ссылки на контролирующие организации в нормальном режиме -->
<? if ($mode == 'normal'): ?>
	<div class="col-sm-10 hidden-xs text-center">
		<div class="col-sm-3 hidden-xs text-center">
			<a href="https://minobrnauki.gov.ru" target="_blank" style="display: block">
				<img class="img-responsive" src="<?= $dir_img ?>minobrnauki.png" alt="Министерство науки и высшего образования РФ" style="margin: auto">
			</a>
		</div>
		<div class="col-sm-3 hidden-xs text-center">
			<a href="http://fcior.edu.ru/kontakty" target="_blank" style="display: block">
				<img class="img-responsive" src="<?= $dir_img ?>fcior-edu.png" alt="Федеральный центр информационно-образовательных ресурсов" style="margin:
			auto">
			</a>
		</div>
		<div class="col-sm-3 hidden-xs text-center">
			<a href="http://edu.ru" target="_blank" style="display: block">
				<img class="img-responsive" src="<?= $dir_img ?>edu.png" alt="Российское образование" style="margin: auto">
			</a>
		</div>
		<div class="col-sm-3 hidden-xs text-center">
			<a href="http://obrnadzor.gov.ru" target="_blank" style="display: block">
				<img class="img-responsive" src="<?= $dir_img ?>obrnadzor.png" alt="Рособрнадзор" style="margin: auto">
			</a>
		</div>
	</div>
	<div class="col-sm-2 hidden-xs text-center">
		<a href="https://26.rkn.gov.ru/law/p7096/" target="_blank" style="display: block">
			<img class="img-responsive" src="<?= $dir_img ?>roskomnadzor.png" alt="Роскомнадзор. Персональные данные" style="margin: auto">
		</a>
	</div>

	<!-- Ссылки на контролирующие организации для мобильных телефонов -->
	<div class="col-xs-12 hidden-lg hidden-md hidden-sm text-center">
		<a href="http://минобрнауки.рф" target="_blank">
			<img src="<?= $dir_img ?>minobr.png" alt="Министерство образования и науки РФ">
		</a>
		<hr>
	</div>
	<div class="col-xs-12 hidden-lg hidden-md hidden-sm text-center">
		<a href="http://fcior.edu.ru/kontakty" target="_blank" style="display: block">
			<img src="<?= $dir_img ?>fcior-edu.png" alt="Федеральный центр информационно-образовательных ресурсов">
		</a>
		<hr>
	</div>
	<div class="col-xs-12 hidden-lg hidden-md hidden-sm text-center">
		<a href="http://edu.ru" target="_blank">
			<img src="<?= $dir_img ?>edu.png" alt="Российское образование">
		</a>
		<hr>
	</div>
	<div class="col-xs-12 hidden-lg hidden-md hidden-sm text-center">
		<a href="http://obrnadzor.gov.ru" target="_blank">
			<img src="<?= $dir_img ?>obrnadzor.png" alt="Рособрнадзор">
		</a>
		<hr>
	</div>
	<div class="col-xs-12 hidden-lg hidden-md hidden-sm text-center">
		<a href="https://26.rkn.gov.ru/law/p7096/" target="_blank">
			<img src="<?= $dir_img ?>roskomnadzor.png" alt="Роскомнадзор. Персональные данные">
		</a>
		<hr>
	</div>

	<!-- Ссылки на контролирующие организации для слабовидящих -->
<? else: ?>
	<div class="col-sm-3 hidden-xs text-center">
		<a href="http://минобрнауки.рф" target="_blank">Министерство образования и науки Российской Федерации</a>
	</div>
	<div class="col-sm-3 hidden-xs text-center">
		<a href="http://fcior.edu.ru/kontakty" target="_blank" style="display: block">Федеральный центр информационно-образовательных ресурсов</a>
	</div>
	<div class="col-sm-3 text-center">
		<a href="http://edu.ru" target="_blank">Российское образование (федеральный портал)</a>
	</div>
	<div class="col-sm-3 text-center">
		<a href="http://obrnadzor.gov.ru" target="_blank">Федеральная служба по надзору в сфере образования</a>
	</div>
<? endif ?>


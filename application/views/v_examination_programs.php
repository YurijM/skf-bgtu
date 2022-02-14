<div class="examination-programs row">
	<h2 class="text-center"><?= $page_title ?></h2>

	<ul  style="list-style-type: disc">
		<li class="info">
			<?= HTML::anchor(
				$dir_docs_programs . 'math.pdf',
				'программа вступительных испытаний по математике',
				['target' => '_blank']
			) ?>
		</li>
		<li class="info">
			<?= HTML::anchor(
				$dir_docs_programs . 'math_ticket.pdf',
				'образец экзаменационного билета по математике',
				['target' => '_blank']
			) ?>
		</li>
		<li class="info">
			<?= HTML::anchor(
				$dir_docs_programs . 'rus.pdf',
				'программа вступительных испытаний по русскому языку',
				['target' => '_blank']
			) ?>
		</li>
		<li class="info">
			<?= HTML::anchor(
				$dir_docs_programs . 'rus_ticket.pdf',
				'образец экзаменационного билета по русскому языку',
				['target' => '_blank']
			) ?>
		</li>
		<li class="info">
			<?= HTML::anchor(
				$dir_docs_programs . 'phy.pdf',
				'программа вступительных испытаний по физике',
				['target' => '_blank']
			) ?>
		</li>
		<li class="info">
			<?= HTML::anchor(
				$dir_docs_programs . 'phy_ticket.pdf',
				'образец экзаменационного билета по физике',
				['target' => '_blank']
			) ?>
		</li>
		<li class="info">
			<?= HTML::anchor(
				$dir_docs_programs . 'inf.pdf',
				'программа вступительных испытаний по информатике',
				['target' => '_blank']
			) ?>
		</li>
		<li class="info">
			<?= HTML::anchor(
				$dir_docs_programs . 'inf_ticket.pdf',
				'образец экзаменационного билета по информатике',
				['target' => '_blank']
			) ?>
		</li>
		<li class="info">
			<?= HTML::anchor(
				$dir_docs_programs . 'obsch.pdf',
				'программа вступительных испытаний по обществознанию',
				['target' => '_blank']
			) ?>
		</li>
		<li class="info">
			<?= HTML::anchor(
				$dir_docs_programs . 'obsch_ticket.pdf',
				'образец экзаменационного билета по обществознанию',
				['target' => '_blank']
			) ?>
		</li>
	</ul>
</div>

<style>
	li.info > a {
		text-decoration: underline !important;
		color: #333 !important;
	}

	li.info > a:active {
		text-decoration: underline !important;
	}

	.info {
		margin-bottom: 5px;
	}
</style>
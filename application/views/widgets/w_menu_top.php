<nav class="menu-top navbar navbar-default row">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<div class="collapse navbar-collapse" id="navbar-collapse">
		<ul class="nav navbar-nav">
			<? foreach ($menu as $item): ?>
				<? if (count($item['sub_menu']) > 0): ?>
					<li class="dropdown">
						<a class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"
							 role="button" aria-expanded="false">
							<?= $item['item'] ?> <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<? foreach ($item['sub_menu'] as $sub_item): ?>
								<? if ($sub_item['item'] == 'divider'): ?>
									<li class="divider"></li>
								<? else: ?>
									<li>
										<!--<a href="<?/*= $sub_item['link_to'] */?>">
											<?/*= $sub_item['item'] */?>
										</a>-->
										<? if (strripos($sub_item['link_to'], '.pdf') == false): ?>
											<?= HTML::anchor(
												$sub_item['link_to'],
												$sub_item['item']
											); ?>
										<? else: ?>
											<?= HTML::anchor(
												$sub_item['link_to'],
												$sub_item['item'],
												['target' => '_blank']
											); ?>
										<? endif; ?>
									</li>
								<? endif ?>
							<? endforeach ?>
						</ul>
					</li>
				<? else: ?>
					<li>
						<a href="<?= $item['link_to'] ?>" class="btn btn-primary btn-sm" role="button">
							<?= $item['item'] ?>
						</a>
					</li>
				<? endif ?>
			<? endforeach ?>
		</ul>
	</div>
</nav>

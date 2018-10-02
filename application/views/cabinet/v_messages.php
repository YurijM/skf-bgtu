<? foreach ($messages as $message): ?>
	<div style="width: 85%; margin: .5em .5em .25em .5em; <?= $message['id_from'] == $userId
		? 'float: left; background-color: #c9e2f1;'
		: 'float: right; background-color: #c9f1e2;' ?>
		padding: .5em; box-shadow: 0 0 .5em rgba(0, 0, 0, 0.5); border-radius: 1em;">
		<div style="<?= $message['id_to'] == $userId
			? 'float: right; text-align: right; margin: 0 0 .5em 1em; border: 1px solid #3c763d;'
			: 'float: left; margin: 0 1em .5em 0; border: 1px solid #337ab7;'
		?> padding:.5em; border-radius: 1em; background-color: #eee">
			<table>
				<tr>
					<td rowspan="2" style="padding-right: 5px;">
						<? if ($message['id_to'] == $userId): ?>
							<i class="fas fa-2x fa-arrow-alt-circle-left text-success"></i>
						<? else: ?>
							<i class="fas fa-2x fa-arrow-alt-circle-right text-primary"></i>
						<? endif ?>
					</td>
					<td>
						<? if ($message['id_to'] == $userId): ?>
							<b><?= $message['user_from'] ?></b>
						<? else: ?>
							<a href="javascript:void(0)"
									title="Редактировать сообщение"
									onclick="messageEdit(<?= $message['id'] ?>, <?= $message['id_to'] ?>)">
								<b><?= $message['user_to']?></b>
							</a>
						<? endif ?>
					</td>
				</tr>
				<tr>
					<td class="small">
						<?= Helper_Addfunction::int_to_datetime($message['date_send'], false) ?>
					</td>
				</tr>
			</table>
		</div>
		<div>
			<?= $message['message'] ?>
		</div>
	</div>
<? endforeach ?>

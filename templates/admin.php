<!DOCTYPE html>
<html lang="ru">
	<head>
	    <meta charset="utf-8">
	    <title><?=$title;?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="admin">
			<form class="admin__form  form  <?php if(count($errors) > 0) { echo 'form--invalid';}; ?>" method="POST" action="sendlink.php">
				<div class="form__close-btn"><span></span></div>
				<div class="form__input-wrap  <?php if(isset($errors['name'])) { echo 'form__input-wrap--invalid';}; ?>">
					<input type="text" name="name" placeholder="Benedict" value="<?= isset($values['name']) ? $values['name'] : '' ?>">
					<span class="form__error">Введите email</span>
				</div>
				<div class="form__input-wrap  <?php if(isset($errors['email'])) { echo 'form__input-wrap--invalid';}; ?>">
					<input type="text" name="email" placeholder="benedictcumberbatch@gmail.com" value="<?= isset($values['email']) ? $values['email'] : '' ?>">
					<span class="form__error">Введите имя</span>
				</div>
                <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
				<input  class="form__btn  btn" type="submit" value="Отправить ссылку">
			</form>
		</div>
        <div class="admin-table  admin-table__customers">
        	<h2 class="admin-table__title">Высланы реквизиты на оплату</h2>
			<table>
				<tr>
					<th>&#8470;</th>
					<th>Дата</th>
					<th>Имя</th>
					<th>email</th>
				</tr>
				<?php foreach ($customers as $customer): ?>
					<tr>
						<td><?=$customer['id'];?></td>
						<td><?=$customer['created_at'];?></td>
						<td><?=$customer['name'];?></td>
						<td><?=$customer['email'];?></td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
		<div class="admin-table  admin-table__participants">
        	<h2 class="admin-table__title">Участники курса</h2>
			<table>
				<tr>
					<th>&#8470;</th>
					<th>Дата</th>
					<th>Имя</th>
					<th>email</th>
				</tr>
				<?php foreach ($participants as $participant): ?>
					<tr>
						<td><?=$participant['id'];?></td>
						<td><?=$participant['created_at'];?></td>
						<td><?=$participant['name'];?></td>
						<td><?=$participant['email'];?></td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</body>
</html>

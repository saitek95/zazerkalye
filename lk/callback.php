<?php include '../header.php'; ?>
<div class="breadcrumb">
	<ul>
		<li><a href="/">Главная</a></li>
		-
		<li><a href="/lk/">Личный кабинет</a></li>
		-
		<li><a href="/lk/my-orders.php">Мои заказы</a></li>
	</ul>
</div>
<h1>Личный кабинет</h1>
<div class="page-lk">
	<div class="lk-link">
		<ul>
			<li><a href="../lk/">Личные данные</a></li>
			<li><a href="../lk/my-orders.php">Мои заказы</a></li>
			<li><a>Вывод средств</a></li>
			<li><a>Выгрузить CSV каталог</a></li>
			<li><a href="../lk/contacts.php">Контакты и реквизиты</a></li>
			<li><a href="../lk/partners.php">Партнерская программа</a></li>
			<li><a>Рекламации</a></li>
			<li><a>Договор</a></li>
			<li class="active"><a href="../lk/callback.php">Обратная связь</a></li>
			<li><a>Выйти</a></li>
		</ul>
	</div>
	<div class="page-lk-callback">
		<h2>Обратная связь</h2>
		<input type="text" placeholder="ФИО *">	
		<input type="text" placeholder="+7 (000) 000 00 00 *" class="phone">	
		<input type="text" placeholder="E-mail *">
		<select name="topic" id="topic">
			<option value="">Выберите тему обращения *</option>
			<option value="variable-1">variable-1</option>
			<option value="variable-2">variable-2</option>
			<option value="variable-3">variable-3</option>
		</select>
		<input type="text" placeholder="Сообщение ">
		<a href="" class="btn-red">Отправить</a>
		<p>Нажимая на кнопку, я соглашаюсь с условиями пользовательского соглашения</p>
	</div>
</div>
<?php include '../footer.php'; ?>
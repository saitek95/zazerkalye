<?php include '../header.php'; ?>
<div class="breadcrumb">
	<ul>
		<li><a href="/">Главная</a></li>
		-
		<li><a href="/lk/">Личный кабинет</a></li>
		-
		<li><a href="/lk/">Личные данные</a></li>
	</ul>
</div>
<h1>Личный кабинет</h1>
<div class="page-lk">
	<div class="lk-link">
		<ul>
			<li class="active"><a href="../lk/">Личные данные</a></li>
			<li><a href="../lk/my-orders.php">Мои заказы</a></li>
			<li><a>Вывод средств</a></li>
			<li><a>Выгрузить CSV каталог</a></li>
			<li><a href="../lk/contacts.php">Контакты и реквизиты</a></li>
			<li><a href="../lk/partners.php">Партнерская программа</a></li>
			<li><a>Рекламации</a></li>
			<li><a>Договор</a></li>
			<li><a href="../lk/callback.php">Обратная связь</a>Обратная связь</a></li>
			<li><a>Выйти</a></li>
		</ul>
	</div>
	<div class="lk-info">
		<div class="top-block grid-columns-4">
			<div class="user-photo">
				<i class="icon lk-no-photo"></i>
				<div class="item">
					<p>content@mail.ru</p>
					<p>Иван Иванов</p>
				</div>
			</div>
			<div class="user-buy">
				<p>В июле 2023</p>
				<p>1 300 000 ₽</p>
			</div>
			<div class="user-discount">
				<p>Скидка партнера</p>
				<p>30% <span>Как увеличить?</span></p>
			</div>
			<div class="user-balance">
				<p>Баланс</p>
				<p>20 400 ₽</p>
			</div>
		</div>
		<div class="user-info">
			<div class="contacts-info">
				<h2>Контактные данные</h2>
				<input type="text" placeholder="ФИО *">
				<div class="grid-columns-2 gap-16">
					<input type="text" placeholder="E-mail *">
					<input type="text" placeholder="+7 (000) 000 00 00 *" class="phone">
				</div>
			</div>
			<div class="delivery-info">
				<h2>Адрес доставки</h2>
				<input type="text" placeholder="Description">
				<div class="grid-columns-5">
					<input type="text" placeholder="Индекс">
					<input type="text" placeholder="Квартира/офис *">
					<input type="text" placeholder="Подъезд">
					<input type="text" placeholder="Этаж">
					<input type="text" placeholder="Домофон">
				</div>
				<input type="text" placeholder="Комментарий курьеру">
			</div>
			<div class="details-info">
				<h2>Реквизиты</h2>
				<div class="grid-columns-3 gap-16">
					<input type="text" placeholder="ИНН">
					<input type="text" placeholder="БИК">
					<input type="text" placeholder="Расчетный счет">
				</div>
			</div>
			<div class="user-pswd">
				<h2>Пароль</h2>
				<div class="grid-columns-3 gap-16">
					<input type="text" placeholder="Старый пароль *">
					<input type="text" placeholder="Новый пароль *">
					<input type="text" placeholder="Подтвердить пароль *">
				</div>
			</div>
			<a class="btn-red">Сохранить</a>
		</div>
	</div>
</div>
<?php include '../footer.php'; ?>
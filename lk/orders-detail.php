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
			<li class="active"><a href="../lk/my-orders.php">Мои заказы</a></li>
			<li><a>Вывод средств</a></li>
			<li><a>Выгрузить CSV каталог</a></li>
			<li><a href="../lk/contacts.php">Контакты и реквизиты</a></li>
			<li><a href="../lk/partners.php">Партнерская программа</a></li>
			<li><a>Рекламации</a></li>
			<li><a>Договор</a></li>
			<li><a href="../lk/callback.php">Обратная связь</a></li>
			<li><a>Выйти</a></li>
		</ul>
	</div>
	<div class="orders-detail">
		<div class="info-order-name">
			<h2>Заказ № 2357 <span>от 05 июля 2023 года</span></h2>
			<p class="green-block">Исполнен</p>
		</div>
		<div class="item">
			<img src="../assets/img/cart/Rectangle 3.jpg" alt="">
			<div class="info-order-product">
				<a class="name">Зеркало с подсветкой, с фацетом, настенное, 70см х 160см, 4000К</a>
				<div class="count">Количество <span>12 шт</span></div>
				<div class="total-order">Сумма <span>12 340₽</span></div>
			</div>
		</div>
		<div class="item">
			<img src="../assets/img/cart/Rectangle 3.jpg" alt="">
			<div class="info-order-product">
				<a class="name">Зеркало с подсветкой, с фацетом, настенное, 70см х 160см, 4000К</a>
				<div class="count">Количество <span>12 шт</span></div>
				<div class="total-order">Сумма <span>12 340₽</span></div>
			</div>
		</div>
		<div class="item">
			<img src="../assets/img/cart/Rectangle 3.jpg" alt="">
			<div class="info-order-product">
				<a class="name">Зеркало с подсветкой, с фацетом, настенное, 70см х 160см, 4000К</a>
				<div class="count">Количество <span>12 шт</span></div>
				<div class="total-order">Сумма <span>12 340₽</span></div>
			</div>
		</div>
		<div class="order-info-detail">
			<div class="left">
				<div class="user-info">
					<p>Получатель</p>
					<div>
						<p>Пермяков Игорь</p>
						<p>example@gmail.com</p>
						<p>+7 982 090 20 32</p>
					</div>
				</div>
				<div class="delivery-info">
					<p>Номер заказа транспортной компании</p>
					<div class="items">
						<i class="icon cdek"></i>
						<p>23423556568679</p>
						<i class="icon copy-element"></i>
						<i class="icon share"></i>
						<a href="" class="btn-green">Отследить заказ</a>
					</div>
					<p>Адрес доставки</p>
					<p>Екатеринбург, до Постамата № 3519, ул. Расточная, 17</p>
				</div>
			</div>
			<div class="right">
				<div class="total-info">
					<p>Итого</p>
					<p>20 400 ₽</p>
				</div>
				<div class="btns">
					<a href="" class="btn-grey">
						Скачать счет
					</a>
					<a href="" class="btn-red">Повторить</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include '../footer.php'; ?>
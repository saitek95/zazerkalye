<?php include '../header.php'; ?>
<div class="breadcrumb">
	<ul>
		<li><a href="/">Главная</a></li>
		-
		<li><a href="/cart/">Корзина</a></li>
		-
		<li><a href="/cart/">Оформление заказа</a></li>
	</ul>
</div>
<h1>Оформление заказа</h1>
<div class="page-order">
	<div class="order-info">
		<div class="user-info">
			<p>Контактные данные</p>
			<input type="text" placeholder="ФИО*" name="name">
			<div class="grid-columns-2 gap-16">
				<input type="text" placeholder="+7 (000) 000 00 00 *" name="phone">
				<input type="text" placeholder="E-mail" name="mail">
			</div>
		</div>
		<div class="delivery-info">
			<p>Выберите способ доставки в <span>Екатеринбург  <i class="icon arrow-down-red"></i></span></p>
			<ul class="grid-columns-3 gap-16">
				<li class="active">
					<div class="name">
						<i class="icon courier"></i>
						<p>Курьером на указанный адрес</p>
					</div>
					<p class="price">от 600 ₽</p>
				</li>
				<li>
					<div class="name">
						<i class="icon pick-up-point"></i>
						<p>До пункта выдачи</p>
					</div>
					<p class="price">от 600 ₽</p>
				</li>
				<li>
					<div class="name">
						<i class="icon self-pickup"></i>
						<p>Самовывоз из г. Иваново</p>
					</div>
					<p class="price">Бесплатно</p>
				</li>
			</ul>
		</div>
		<div class="delivery-info transport">
			<p>Выберите транспортную компанию</p>
			<ul class="grid-columns-3 gap-16">
				<li class="active">
					<div class="name">
						<i class="icon cdek"></i>
					</div>
					<p class="price">от 1 600 ₽</p>
				</li>
				<li>
					<div class="name">
						<i class="icon boxberry"></i>
					</div>
					<p class="price">от 1 600 ₽</p>
				</li>
				<li>
					<div class="name">
						<i class="icon delline"></i>
					</div>
					<p class="price">от 1 600 ₽</p>
				</li>
			</ul>
		</div>
		<div class="delivery-address">
			<p>Адрес доставки</p>
			<div class="grid-columns-2 gap-16">
				<input type="text" placeholder="Город *" class="city"> 
				<input type="text" placeholder="Улица *"> 
			</div>
			<div class="grid-columns-4 gap-16">
				<input type="text" placeholder="Квартира/офис *"> 
				<input type="text" placeholder="Подъезд"> 
				<input type="text" placeholder="Этаж"> 
				<input type="text" placeholder="Домофон"> 
			</div>
			<input type="text" placeholder="Комментарий курьеру">
		</div>
	</div>
	<div class="order-total-info">
		<div class="promocode">
			<input type="text" placeholder="Промокод">
			<a class="btn-green"><i class="icon check-green"></i></a>
		</div>
		<p>Итого: <span>40 170 ₽</span></p>
		<p>Товаров на сумму: <span>38 661 ₽</span></p>
		<p>Доставка (оплачивается отдельно): <span>1 509 ₽</span></p>
		<a class="btn-red">Перейти к оплате</a>
		<div class="dolyame-info">
			<div class="items">
				<i class="icon dolyame"></i>
				<p>4 платежа по 10 000 ₽</p>
			</div>
			<i class="icon slider-home-next"></i>
		</div>
		<p class="policy">Нажимая на кнопку, я соглашаюсь с условиями Пользовательского соглашения</p>
	</div>
</div>
<?php include '../footer.php'; ?>
@extends('layouts.app')

@section('content')
	<header>
		@include('inc.nav')
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<h3 class="hero__subtitle">"АПК - новый драйвер экономики"</h3>
						<h1 class="hero__title">приглашаем<br>  на Республиканский агрофорум</h1>

						<h4 class="hero__info">астана, 16 ноября 2018 <br>Дворец Независимости</h4>
					</div>
					<div class="col-lg-5">
						<form action="" method="" class="form">
							<h4 class="form__heading">принять участвие</h4>
						  <ul class="nav nav-tabs" role="tablist">
						    <li class="nav-item">
						      <a class="nav-link active" data-toggle="tab" href="#menu1">компания</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#menu2">физическое лицо</a>
						    </li>
						  </ul>
						  <!-- Tab panes -->
						  <div class="tab-content">
						    <div id="menu1" class="tab-pane active">
						      <input type="text" name="ИМЯ" placeholder="ИМЯ КОМПАНИИ" required>
						      <input type="number" name="ТЕЛЕФОН" placeholder="ТЕЛЕФОН" required>
						      <input type="email" name="ПОЧТА" placeholder="ПОЧТА" required>
						      <button class="reg-button butn" type="submit"></button>
						    </div>
						    <div id="menu2" class="tab-pane">
						      <input type="text" name="ИМЯ" placeholder="ИМЯ" required>
						      <input type="number" name="ТЕЛЕФОН" placeholder="ТЕЛЕФОН" required>
						      <input type="email" name="ПОЧТА" placeholder="ПОЧТА" required>
						      <button class="reg-button butn" type="submit"></button>
						    </div>
						  </div>
						</form>
					  <!-- Nav tabs -->
					</div>
					<div class="col-lg-12">
						<div class="count">
							<div class="count__item">
								<div>
									<span class="count__number visits">71 000</span>
									<span class="count__icon plus">+</span>
								</div>
								<p class="count__title">Уникальных посетителей</p>
							</div>
							<div class="count__item">
								<div>
									<span class="count__number area">32 000</span>
									<span class="count__icon">M<sup>2</sup></span>
								</div>	
								<p class="count__title">Площад выставки</p>
							</div>
							<div class="count__item">
								<div>
									<span class="count__number users">1 000</span>
								</div>
								<p class="count__title">Участников</p>
							</div>
							<div class="count__item">
								<div>
									<span class="count__number country">12</span>
								</div>
								<p class="count__title">Стран</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="scroll-down">
				<p>ПОЕХАЛИ</p>
			</div>
		</div>
	</header>


	<section class="event section" id="event">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section__info">
						<div class="number-bg">01</div>
						<span class="section__number">01.</span>
						<p class="section__name">О мероприятии</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="event__content">
						<h1 class="section__heading">Самая большая агропромышленная выставка в Казахстане</h1>

						<div class="service">
							<div class="row">
								<div class="col-lg-6">
									<p class="service__item">Выставка техники и оборудования</p>
									<p class="service__item">Выставка возобновляемых источников энергии</p>
								</div>
								<div class="col-lg-6">
									<p class="service__item">Выставочная зона</p>
									<p class="service__item">Выставка животных</p>
									<p class="service__item">Экспозиция «Ферма семейного типа»</p>
								</div>
							</div>
						</div>
						<button class="butn">зарегистрироваться</button>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="y-border"></div>
					<div class="event__video">
						<div class="play-butn">
							<i class="fa fa-play"></i>
						</div>
					</div>
					<div class="wrapper-2018">
						<!-- <h1>2018</h1> -->
						<div class="block-2018"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section program" id="program">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6">
					<div class="section__info">
						<div class="number-bg">02</div>
						<span class="section__number">02.</span>
						<p class="section__name">Программа</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="table">
						<h3 class="table__heading">Программа фестиваля</h3>
						<p class="table__subheading">Qazmeat</p>
						<div class="table__list">
							<div class="item">
								<span class="time">08.00 - 09.00</span>
								<p class="title">Регистрация участников, утренний кофе-брейк</p>
							</div>
							<div class="item">
								<span class="time">08.00 - 09.00</span>
								<p class="title">Утрение мастер-классы. Выставка продукции АПК</p>
							</div>
							<div class="item">
								<span class="time">08.00 - 09.00</span>
								<p class="title">Демонстрация цифровых решений АПК</p>
							</div>
							<div class="item">
								<span class="time">08.00 - 09.00</span>
								<p class="title">3 и 4 мастер-классы</p>
							</div>
							<div class="item">
								<span class="time">08.00 - 09.00</span>
								<p class="title">Обед в ресторане в формате фуршет</p>
							</div>
							<div class="item">
								<span class="time">08.00 - 09.00</span>
								<p class="title">Рассадка делегатов</p>
							</div>
							<div class="item">
								<span class="time">08.00 - 09.00</span>
								<p class="title">Пленарное заседание Форума с участием Главы государства</p>
							</div>
						</div>
						<a href="/programm">
							<button class="more-butn butn"></button>
						</a>
					</div>
				</div>
				<div class="col-lg-6">
					<h1 class="section__heading">Открытый фестиваль<br> QazMeat day</h1>
					<div class="service">
						<div class="row">
							<div class="col-lg-6 service__item">
								<h5 class="title">Выставка животных в формате экспозиции “современная ферма”</h5>
								<p class="content">25 племенных жывотних породы Ангус будут представлены на конкурсе среди заводчиков. Выставка представит актуальные технологии, применяемые в сельськом хозяйствее, в контексте жывотноводческой фермы</p>
							</div>
							<div class="col-lg-6 service__item">
								<h5 class="title">проект “будущие фермеры </h5>
								<p class="content">10 участников-юниоров в течение 2-х месяцев учатся ухаживать за животными, разбираются в племенном деле, тонкостяч содержания бычков. В финале юниори наравне со взрослыми участниками будут претендовать на звание лучшего животного породы Ангус.</p>
							</div>
							<div class="col-lg-6 service__item">
								<h5 class="title">мастер-классы от шеф-поваров и дегустация блюд из мяса ангусов</h5>
								<p class="content">Повара известных ресторанов Астаны и приглашенные гости расскажут о правильном приготовлении блюд из мяса Ангуса, научат розбираться в качестве мяса и готовить сочные стейки.</p>
							</div>
							<div class="col-lg-6 service__item">
								<h5 class="title">”Ярмарка  вакансий в сельском хазяйстве</h5>
								<p class="content">Молодие кадры отрасли узнают о вакансиях, условиях и перспективах в силнейших хозяйствах по всему Казахстану. Собеседования и отбор кандидатов в формате speed dating.</p>
							</div>
						</div>
					</div>
					<button class="butn">подробнее</button>
				</div>
			</div>
		</div>
	</section>

	<section class="section registration" id="registration">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section__info">
						<div class="number-bg">03</div>
						<span class="section__number">03.</span>
						<p class="section__name">Регистрация на форум</p>
					</div>
					<h1 class="section__heading">регистрация участника</h1>
					<p class="section__subheading">Заполните форму регистрации для участия на форуме.После обработки данных с Вами свяжется персональный менеджер.</p>
				</div>
				<div class="col-lg-6">
					<div class="map">
						<img src="images/map.png" alt="Map">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="registration__form">
						<form action="">
							<div class="row">
								<div class="col-lg-6">
									<input type="text" class="form-field" placeholder="Фамилия">
									<input type="text" class="form-field" placeholder="Отчество">
									<input type="text" class="form-field" placeholder="Страна">
									<input type="number" class="form-field" placeholder="Телефон">
									<input type="text" class="form-field" placeholder="Должность">
									<input type="text" class="form-field" placeholder="Категория">
									<label class="membership">Участие в пленарном заседании
										<input type="checkbox" class="checkbox">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="col-lg-6">
									<input type="text" class="form-field" placeholder="Имя">
									<input type="number" class="form-field" placeholder="ИИН">
									<input type="text" class="form-field" placeholder="Город">
									<input type="text" class="form-field" placeholder="Компания">
									<input type="email" class="form-field" placeholder="Ваш E-mail">
									<input type="text" class="form-field" placeholder="Примечание">
									<button class="butn" type="submit">далее</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-3 subscribe">
					<h5 class="subscribe__heading">подписаться на новости</h5>
					<form action="">
						<input type="email" name="email" placeholder="Введите Е-mail"><br>
						<button class="butn" type="submit">подписаться</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="section members" id="members">
		<div class="container">
			<div class="row">
				<div class="offset-lg-6 col-lg-6">
					<div class="section__info">
						<div class="number-bg">04</div>
						<span class="section__number">04.</span>
						<p class="section__name">Участники форума</p>
					</div>
					<h1 class="section__heading">Информация об фермерах</h1>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-lg-8">
					<div class="main-member row">
						<div class="col-lg-6">
							<div class="main-member__img">
								<div class="offset-border"></div>
								<div class="slider">
									<div class="butns">
										<button class="butn left">
											<i class="fas fa-arrow-left"></i>
										</button>
										<button class="butn right">
											<i class="fas fa-arrow-right"></i>
										</button>
									</div>
									<div class="list">
										<div class="img" style="background-image: url('images/member1.jpg')"></div>
										<div class="img" style="background-image: url('images/member2.jpg')"></div>
										<div class="img" style="background-image: url('images/member3.jpg')"></div>
										<div class="img" style="background-image: url('images/member2.jpg')"></div>
									</div>
								</div>

							</div>
						</div>
						<div class="col-lg-6">
							<div class="main-member__info">
								<h2 class="main-member__name">Марат<br> Мансуров</h2>
								<p class="main-member__prof">Бизнесмен, агроном, благотворитель</p>
								<ul class="main-member__desc">
									<li class="item">Совладелец агрохолдинга RESTart</li>
									<li class="item">Спикер бизнес-форума Алматы</li>
									<li class="item">Участник множества передач о агробизнесе</li>
								</ul>
								<a href="/member" class="more">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="members__list">
						<div class="member">
							<div class="member__img">
								<div class="img" style="background-image: url('images/member2.jpg')"></div>
							</div>
							<div class="member__info">
								<h4 class="member__name">Мирас Султанов</h4>
								<p class="member__prof">Бизнесмен, агроном, благотворитель</p>
								<a href="#members.html" class="more">Подробнее</a>
							</div>
						</div>
						<div class="member">
							<div class="member__img">
								<div class="img" style="background-image: url('images/member2.jpg')"></div>
							</div>
							<div class="member__info">
								<h4 class="member__name">Мирас Султанов</h4>
								<p class="member__prof">Бизнесмен, агроном, благотворитель</p>
								<a href="#members.html" class="more">Подробнее</a>
							</div>
						</div>
						<div class="member">
							<div class="member__img">
								<div class="img" style="background-image: url('images/member2.jpg')"></div>
							</div>
							<div class="member__info">
								<h4 class="member__name">Мирас Султанов</h4>
								<p class="member__prof">Бизнесмен, агроном, благотворитель</p>
								<a href="#members.html" class="more">Подробнее</a>
							</div>
						</div>
					</div>
					<button class="more-butn butn"></button>
				</div>
			</div>
		</div>
	</section>

	<section class="section smi" id="smi">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section__info">
						<div class="number-bg">05</div>
						<span class="section__number">05.</span>
						<p class="section__name">СМИ</p>
					</div>
					<h1 class="section__heading">для прессы</h1>
				</div>
			</div>
			<div class="row news">
				<div class="col-lg-4">
					<div class="item">
						<div class="img"></div>
						<div class="overlay"></div>
						<h3 class="item__heading">информация для сми</h3>
						<a href="/press/info">
							<button class="butn">подробнее</button>
						</a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="item">
						<div class="img"></div>
						<div class="overlay"></div>
						<h3 class="item__heading">акредитация сми</h3>
						<a href="/press/credit">
							<button class="butn">подробнее</button>
						</a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="item">
						<div class="img"></div>
						<div class="overlay"></div>
						<h3 class="item__heading">Фотобанк</h3>
						<a href="/press/photobank">
							<button class="butn">подробнее</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="partner section" id="partner">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="section__info">
						<div class="number-bg">06</div>
						<span class="section__number">06.</span>
						<p class="section__name">Партнеры</p>
					</div>
					<h1 class="section__heading">генеральные партнеры форума</h1>
					<div class="icons-slider">
						<div class="wrapper">
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="show">
						<div class="show__content">
							<h3 class="show__heading">все партнеры</h3>
							<a href="" class="show__link">Показать</a>
						</div>
						<div class="next">
							<img src="images/arrow.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contacts section" id="contacts">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 map-block" style='background-image: url("https://maps.googleapis.com/maps/api/staticmap?center=51.1453701,71.48930680000001&zoom=14&size=960x699&key=AIzaSyD9ycobB5RiavbXpJBo0Muz2komaqqvGv0&markers=51.1453701,71.48930680000001&scale=2")'></div>
				<div class="col-lg-6 contacts__pt">
					<div class="section__info">
						<div class="number-bg">07</div>
						<span class="section__number">07.</span>
						<p class="section__name">Контакты</p>
					</div>
					<h1 class="section__heading">остались вопросы?<br> звоните на номер</h1>
					<div class="info">
						<div class="info__item">
							<a href="" class="tel">+7 495 <span class="y">25 48 444</span></a>
						</div>
						<div class="info__item">
							<p class="addres">г. Астана,<br> Дворец Независимости</p>
						</div>
						<div class="info__item">
							<a href="mailto:qazmeat@rambler.ru" class="mail">Qazmeat@rambler.ru</a>
						</div>
					</div>
					<button class="map-schema">Cхема проезда</button>
				</div>
			</div>
		</div>
	</section>

  @include('inc.footer')
@endsection

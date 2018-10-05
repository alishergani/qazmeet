@extends('layouts.app')

@section('content')
	<header>
		@include('inc.nav')
		<div class="header-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="header-page__title">пресс-центр</h1>
					</div>
				</div>
				<div class="row button-wrapper">
					<div class="col-lg-4 col-12">
						<a href="/press/info">
							<button class="tab-button" data-name="ИНФОРМАЦИЯ ДЛЯ СМИ"></button>
						</a>
					</div>
					<div class="col-lg-4 col-12">
						<a href="/press/credit">
							<button class="tab-button active" data-name="АКРЕДИТАЦИЯ СМИ"></button>
						</a>
					</div>
					<div class="col-lg-4 col-12">
						<a href="/press/photobank">
							<button class="tab-button" data-name="ФОТОБАНК"></button>
						</a>
					</div>
				</div>
				<nav class="page-bread">
				  <ul class="bread">
				    <li class="bread__item">
				    	<a href="#">Главная</a>
				    </li>
				    <li class="bread__item active">
				    	<a href="#">Пресс-центр</a>
				    </li>
				    <li class="bread__item active">
				    	<a href="#">Аккредитация</a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
	</header>

	<div class="press-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="quote">
						<p class="text">На мероприятия компании «КазМит» аккредитация начинается за две недели и заканчивается за два дня до начала каждого мероприятия, если не установлены специальные правила аккредитации.</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="credit-app">
						<span class="title">Аккредитация СМИ</span>
						<h3 class="heading">заявка на аккредитацию</h3>
						<p class="subheading">Заполните заявку аккредитции для участия на форуме. После обработки данных с Вами свяжется персональный менеджер.</p>
					</div>
					<form action="" class="credit-form">
					  <select>
					    <option selected>КазМит. 2018 </option>
					    <option value="1">One</option>
					    <option value="2">Two</option>
					    <option value="3">Three</option>
					  </select>
					  <div class="input-wrapper">
						  <input type="text" name="smi-name" 
						  				placeholder="Название СМИ" class="w-100">
						  <input type="text" name="fio" 
						  				placeholder="Ф. И. О. сорудника *" class="w-100">
					  </div>
					  <div class="input-wrapper half">
						  <input type="email" name="email" 
						  				placeholder="E-mail сотрудника *">
						  <input type="number" name="number" 
						  				placeholder="Телефон *">
					  </div>
					  <div class="input-wrapper half">
						  <input type="text" name="speciality" 
						  				placeholder="Должность *">
						  <label for="participation">
						  	<input type="checkbox" name="participation">
						  	Участие в пленарном заседании
							</label>
					  </div>
					  <hr>
					  <div class="input-wrapper">
						  <input type="text" name="smi-name" 
						  				placeholder="Ф. И. О. главного редактора *" class="w-100">
					  </div>
					  <div class="input-wrapper half">
						  <input type="text" name="smi-name" 
						  				placeholder="E-mail редакции *">
						  <input type="text" name="smi-name" 
						  				placeholder="Телефон редакции *">
						</div>
					  <div class="input-wrapper half">
						  <label for="participation">
						  	<input type="checkbox" name="participation">
						  	Ознакомлен с правилами аккредитации для педставителей СМИ
							</label>

							<button type="submit" class="butn">отправить</button>
					  </div>
					</form>

					<div class="rules">
						<h3 class="heading">ПРАВИЛА АККРЕДИТАЦИИ ПРЕДСТАВИТЕЛЕЙ СМИ</h3>
						<p class="item">1. Аккредитация представителей средств массовой информации (далее СМИ) на выставки, конференции, конгрессы, форумы и другие события, организованные компанией «КазМит», осуществляется в соответствии с Законом Российской Федерации «О средствах массовой информации» и настоящими Правилами в целях упорядочения работы представителей СМИ на мероприятиях.</p>
						<p class="item">2. Аккредитация представителей СМИ обязательна для работы на всех мероприятиях, организованных компанией «ЭкспоФорум-Интернэшнл». Аккредитация действует на каждое событие отдельно (выставка, конгресс, форум и другое) в течение срока его проведения.</p>
						<p class="item">3. Право на аккредитацию имеют журналисты, фотокорреспонденты, телеоператоры российских СМИ, зарегистрированных в Федеральном агентстве по печати и массовым коммуникациям в соответствии с Законом Российской Федерации «О средствах массовой информации», а также иностранные журналисты, аккредитованные при МИД России.</p>
						<p class="item">4. Лица, не являющиеся представителями СМИ, а также представители рекламных изданий, каталогов или интернет-порталов коммерческой направленности не имеют права на аккредитацию СМИ.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
  @include('inc.footer')
@endsection
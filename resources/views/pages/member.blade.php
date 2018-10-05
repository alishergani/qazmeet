@extends('layouts.app')

@section('content')
	<header>
		@include('inc.nav')
		<div class="header-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="header-page__title">участник форума</h1>
					</div>
				</div>
				<nav class="page-bread">
				  <ul class="bread">
				    <li class="bread__item">
				    	<a href="#">Главная</a>
				    </li>
				    <li class="bread__item active">
				    	<a href="#">Участники</a>
				    </li>
				    <li class="bread__item active">
				    	<a href="#">Участник</a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
	</header>

	<div class="single-member">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="member-ava">
						<div class="offset-border"></div>
						<div class="img" style="background-image: url('images/member1.jpg');"></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="member">
						<h2 class="_name">Рубен <br>Варданян
							<span class="specialty">farmers</span>
						</h2>
						<p class="_prof">Бизнесмен, агроном, благотворитель</p>
						<ul class="_desc">
							<li class="item">Совладелец агрохолдинга RESTart</li>
							<li class="item">Спикер бизнес-форума Алматы</li>
							<li class="item">Участник множества передач о агробизнесе</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="about-member">
				<div class="row">
					<div class="col-lg-12">
						<h4 class="title">Один из ключевых спикеров Бизнес-Форума <span class="y">«QazMeat» 2018</span> – Рубен Варданян</h4>
						<p class="subtitle">Партнер компании «Варданян, Бройтман и партнеры», социальный предприниматель, соучредитель Гуманитарной инициативы «Аврора», один из основателей Московской школы управления СКОЛКОВО.</p>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-lg-6">
						<div class="reasons">
							<p class="title">Почему непременно стоит попасть на его выступление? Наш спикер...</p>
							<ul class="reasons-list">
								<li class="item">имеет исключительный карьерный опыт: выпускник МГУ, пришел в новорожденную инвесткомпанию «Тройка Диалог» в качестве сотрудника отдела – и в том же году стал исполнительным директором;</li>
								<li class="item">профессиональный инвестор и управленец, который входит в рейтинг Forbes «200 богатейших бизнесменов России»;</li>
								<li class="item">человек с Большой Мечтой «сделать благотворительность в России профессиональной, мощной и системной».</li>
								<li class="item">знает, как «вооружить удочкой»: Варданян – основатель и председатель совета директоров PHILIN(от Philanthropy Infrastructure – «Инфраструктура благотворительности»); эта организация предоставляет НКО все услуги от юридического сопровождения до бюджетирования.</li>
								<li class="item">прогрессивный: называет наше время «эпохой талантизма» и верит, что человек без денег может создать компанию, которая будет стоит миллиарды, – и сам тому яркий пример.</li>
								<li class="item">один из немногих способен планировать на десятилетия вперед – и не ошибаться в своих прогнозах</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="video-block">
							<iframe width="100%" height="320" src="https://www.youtube.com/embed/a-x5xUbZsjQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

							<div class="quote">
								<p class="text">Почему непременно стоит попасть на его выступление? смотрите видео-обращение нашего спикера</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 text-center">
						<a href="/members">
							<button class="butn">все участники</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	
  @include('inc.footer')
@endsection
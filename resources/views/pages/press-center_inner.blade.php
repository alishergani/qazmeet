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
					<div class="col-lg-4">
						<button class="tab-button active" data-name="ИНФОРМАЦИЯ ДЛЯ СМИ"></button>
					</div>
					<div class="col-lg-4">
						<button class="tab-button" data-name="АКРЕДИТАЦИЯ СМИ"></button>
					</div>
					<div class="col-lg-4">
						<button class="tab-button" data-name="ФОТОБАНК"></button>
					</div>
				</div>
				<nav class="page-bread">
				  <ul class="bread">
				    <li class="bread__item">
				    	<a href="#">Главная</a>
				    </li>
				    <li class="bread__item">
				    	<a href="#">Пресс-центр</a>
				    </li>
				    <li class="bread__item active">
				    	<a href="#">Статья 1</a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
	</header>


	<div class="press-center">
		<div class="container">
			<div class="smi-info">
				<div class="inner">

					<div class="inner__content">
						<div class="inner__date">
							<div class="date">19.07.2018</div>
						</div>

						<h1 class="inner__heading">Стратегические нацкомпании Казахстана под руководством АО «Самрук-Казына» утвердили планы трансформации своего бизнеса</h1>

						<div class="inner__bg-img">
							<img src="assets/img/member3.jpg" alt="">
						</div>

						<p class="inner__text">АО «Самрук-Казына» - фонд национального благосостояния, управляющий крупнейшими стратегическими активами Казахстана, утвердил решением правления «дорожные карты» реализации Программы трансформации бизнеса холдинга и его портфельных компаний.</p>
						
						<p class="inner__quote">«Дорожные карты» определяют ключевые инициативы для достижения основных целей 1 этапа Программы, сроки их реализации и вовлечения национальных компаний в трансформацию бизнеса на ближайшие три года.</p>

						<p class="inner__text">АО «Самрук-Казына» - фонд национального благосостояния, управляющий крупнейшими стратегическими активами Казахстана, утвердил решением правления «дорожные карты» реализации Программы трансформации бизнеса холдинга и его портфельных компаний.</p>

						<p class="inner__text">Согласно указанным документам, активная фаза работ по трансформации бизнеса началась в 2014 году в самом Фонде, национальном операторе железных дорог «Казахстан темир жолы», крупнейшей почтовой компании «Казпочта», в основных бизнес-единицах нефтегазовой компании «КазМунайГаз». С 2015 года работы по трансформации бизнеса начнутся в мировом производителе урана «КазАтомПром» и электроэнергетических компаниях KEGOC и «Самрук-Энерго».</p> 

						<div class="inner__video">
							<div class="video">
								<img src="assets/img/4.jpg" alt="">
							</div>
							<div class="title">Смотрите видео с выставки</div>
						</div>

						<p class="inner__text">Модернизация деятельности Фонда в рамках Программы трансформации предполагает совершенствование подходов к инвестированию, оптимизацию бизнес-процессов и структуры портфеля, а также масштабную реорганизацию и «дебюрократизацию» деятельности Фонда.Экономический эффект от реализации Программы трансформации АО «Самрук-Қазына» оценивается в $11 млрд.</p>

						<div class="download">
							<div class="download__item">
								<a href="#">Скачать DOC</a>
							</div>
							<div class="download__item">
								<a href="#">Скачать PDF</a>
							</div>
						</div>
					</div>


					<div class="row more">
						<h3 class="more__heading">читайте также</h3>

						<div class="col-lg-4 more__card">
							<div class="img" style="background-image: url('assets/img/member3.jpg');">
								<div class="date">19.07.2018</div>
							</div>
							<p class="text">ИНФОРМАЦИЯ О БЕЗОПАСНОСТИ И КОНФИДЕНЦИАЛЬНОСТИ ПЛАТЕЖЕЙ</p>
							<a href="/press-center__inner.html" class="more">подробнее</a>
						</div>
						<div class="col-lg-4 more__card">
							<div class="img" style="background-image: url('assets/img/member3.jpg');">
								<div class="date">19.07.2018</div>
							</div>
							<p class="text">ИНФОРМАЦИЯ О БЕЗОПАСНОСТИ И КОНФИДЕНЦИАЛЬНОСТИ ПЛАТЕЖЕЙ</p>
							<a href="/press-center__inner.html" class="more">подробнее</a>
						</div>
						<div class="col-lg-4 more__card">
							<div class="img" style="background-image: url('assets/img/member3.jpg');">
								<div class="date">19.07.2018</div>
							</div>
							<p class="text">ИНФОРМАЦИЯ О БЕЗОПАСНОСТИ И КОНФИДЕНЦИАЛЬНОСТИ ПЛАТЕЖЕЙ</p>
							<a href="/press-center__inner.html" class="more">подробнее</a>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	
  @include('inc.footer')
@endsection
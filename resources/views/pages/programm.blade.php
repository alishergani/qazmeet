@extends('layouts.app')

@section('content')
	<header>
		@include('inc.nav')
		<div class="header-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="header-page__title">программа форума</h1>
					</div>
				</div>
				<nav class="page-bread">
				  <ul class="bread">
				    <li class="bread__item">
				    	<a href="#">Главная</a>
				    </li>
				    <li class="bread__item active">
				    	<a href="#">программа</a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
	</header>

	<div class="programm-page">
		<div class="container">
			<div class="row mob-rev">
				<div class="col-lg-9">
					<div class="section__info">
						<div class="number-bg">Programm</div>
						<span class="section__number">Qazmeet</span>
					</div>
					<h2 class="section__heading">Программа форума <br>“АПК- новый драйвер экономики”</h2>

					<div class="list">
						<div id="accordion">
						  <div class="card">
						    <div class="card-header" id="headingOne">
					        <button class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					        	<span class="inf">
						          <span class="time">08.00 - 09.00</span>
						          <p class="title">Регистрация участников, утренний кофе-брейк</p>
					        	</span>
					          <i class="fas fa-angle-down"></i>
					        </button>
						    </div>

						    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						      <div class="card-body">
						      	<div class="item">
						      		<div class="place">
						      			<span>фойэ</span>
						      		</div>
						      		<div class="content">
						      			<p>Выставка отечественной продукции АПК</p>
						      		</div>
						      	</div>
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingTwo">
						      <button class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						      	<span class="inf">
						          <span class="time">10.30 - 11.30</span>
						          <p class="title">Демонстрация цифровых решений АПК</p>
						      	</span>
					          <i class="fas fa-angle-down"></i>
					        </button>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						      <div class="card-body">
						      	<div class="item">
						      		<div class="place">
						      			<span>фойэ</span>
						      		</div>
						      		<div class="content">
						      			<p>Выставка отечественной продукции АПК</p>
						      		</div>
						      	</div>
						      	<div class="item">
						      		<div class="place">
						      			<span>Зал 1</span> – Конференц холл
						      		</div>
						      		<div class="content">
						      			<p class="pg">
						      				<b>Мастер-класс 1:</b> Принципы проектного управления. Ответственность МИО за реализацию госпрограмм.
						      			</p>
						      			<p class="pg"><b>Аудитория:</b> акимы и заместители акимов районов, отделы сельского хозяйства. 300 человек.</p>
						      			<p class="pg">
						      				<b>Действие:</b>
						      			 	Проектное управление на районном уровне. Презентация рейтингов акимов районов по    	исполнению показателей ГП: 
						      			 	<ul>
						      			 		<li>Программа Сыбага</li>
														<li>Выделение земель</li>
														<li>Эффективное использование земель</li>
						      			 	</ul>
						      			 	Ответственность акимов районов за реализацию политики МСХ на местах.
						      			</p>
						      			<p class="pg"><b>Модератор:</b> Евниев А.К.</p>
						      			<p class="pg"><b>Спикеры:</b> зарубежные эксперты (Канада, США), представители МСХ, представитель МИО (Ерейментауский район).</p>
						      		</div>
						      	</div>
						      	<div class="item">
						      		<div class="place">
						      			<span>Зал 2</span> – Галерея (2 этаж)
						      		</div>
						      		<div class="content">
						      			<p class="pg">
						      				<b>Мастер-класс 2:</b> Роль НПО в развитии отрасли сельского хозяйства. Казахстан, США, Канада, Австралия.
						      			</p>
						      			<p class="pg"><b>Аудитория:</b> отраслевые ассоциации, союзы и палаты, политические партии, НПП, Министерства, представители областных акиматов, сельхозпроизводители.</p>
						      			<p class="pg">
						      				<b>Действие:</b> выступление представителей зарубежных ассоциаций Австралии, Канады, США с презентацией их опыта. Выступление казахстанских спикеров, вопросы развития села через укрепление НПО: вопросы развития села, сельская инфраструктура. 
						      			 	<ul>
						      			 		<li>Программа Сыбага</li>
														<li>Выделение земель</li>
														<li>Эффективное использование земель</li>
						      			 	</ul>
						      			 	Ответственность акимов районов за реализацию политики МСХ на местах.
						      			</p>
						      			<p class="pg"><b>Модератор:</b> Мамытбеков А.С.</p>
						      			<p class="pg"><b>Спикеры:</b>  зарубежные эксперты (США, Канада, Австралия), Е. Ахметов (МСХ РК), представитель ГАК, представитель НПП, А. Даринов (Союз фермеров РК), представитель МОР РК</p>
						      		</div>
						      	</div>
						      </div>
						     </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingTwo">
						      <button class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						      	<span class="inf">
						          <span class="time">10.30 - 11.30</span>
						          <p class="title">Демонстрация цифровых решений АПК</p>
						      	</span>
					          <i class="fas fa-angle-down"></i>
					        </button> </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						      <div class="card-body">
						      	<div class="item">
						      		<div class="place">
						      			<span>фойэ</span>
						      		</div>
						      		<div class="content">
						      			<p>Выставка отечественной продукции АПК</p>
						      		</div>
						      	</div>
						      	<div class="item">
						      		<div class="place">
						      			<span>Зал 1</span> – Конференц холл
						      		</div>
						      		<div class="content">
						      			<p class="pg">
						      				<b>Мастер-класс 1:</b> Принципы проектного управления. Ответственность МИО за реализацию госпрограмм.
						      			</p>
						      			<p class="pg"><b>Аудитория:</b> акимы и заместители акимов районов, отделы сельского хозяйства. 300 человек.</p>
						      			<p class="pg">
						      				<b>Действие:</b>
						      			 	Проектное управление на районном уровне. Презентация рейтингов акимов районов по    	исполнению показателей ГП: 
						      			 	<ul>
						      			 		<li>Программа Сыбага</li>
														<li>Выделение земель</li>
														<li>Эффективное использование земель</li>
						      			 	</ul>
						      			 	Ответственность акимов районов за реализацию политики МСХ на местах.
						      			</p>
						      			<p class="pg"><b>Модератор:</b> Евниев А.К.</p>
						      			<p class="pg"><b>Спикеры:</b> зарубежные эксперты (Канада, США), представители МСХ, представитель МИО (Ерейментауский район).</p>
						      		</div>
						      	</div>
						      	<div class="item">
						      		<div class="place">
						      			<span>Зал 2</span> – Галерея (2 этаж)
						      		</div>
						      		<div class="content">
						      			<p class="pg">
						      				<b>Мастер-класс 2:</b> Роль НПО в развитии отрасли сельского хозяйства. Казахстан, США, Канада, Австралия.
						      			</p>
						      			<p class="pg"><b>Аудитория:</b> отраслевые ассоциации, союзы и палаты, политические партии, НПП, Министерства, представители областных акиматов, сельхозпроизводители.</p>
						      			<p class="pg">
						      				<b>Действие:</b> выступление представителей зарубежных ассоциаций Австралии, Канады, США с презентацией их опыта. Выступление казахстанских спикеров, вопросы развития села через укрепление НПО: вопросы развития села, сельская инфраструктура. 
						      			 	<ul>
						      			 		<li>Программа Сыбага</li>
														<li>Выделение земель</li>
														<li>Эффективное использование земель</li>
						      			 	</ul>
						      			 	Ответственность акимов районов за реализацию политики МСХ на местах.
						      			</p>
						      			<p class="pg"><b>Модератор:</b> Мамытбеков А.С.</p>
						      			<p class="pg"><b>Спикеры:</b>  зарубежные эксперты (США, Канада, Австралия), Е. Ахметов (МСХ РК), представитель ГАК, представитель НПП, А. Даринов (Союз фермеров РК), представитель МОР РК</p>
						      		</div>
						      	</div>
						      </div>
						     </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingTwo">
						      <button class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						      	<span class="inf">
						          <span class="time">10.30 - 11.30</span>
						          <p class="title">Демонстрация цифровых решений АПК</p>
						      	</span>
					          <i class="fas fa-angle-down"></i>
					        </button></div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						      <div class="card-body">
						      	<div class="item">
						      		<div class="place">
						      			<span>фойэ</span>
						      		</div>
						      		<div class="content">
						      			<p>Выставка отечественной продукции АПК</p>
						      		</div>
						      	</div>
						      	<div class="item">
						      		<div class="place">
						      			<span>Зал 1</span> – Конференц холл
						      		</div>
						      		<div class="content">
						      			<p class="pg">
						      				<b>Мастер-класс 1:</b> Принципы проектного управления. Ответственность МИО за реализацию госпрограмм.
						      			</p>
						      			<p class="pg"><b>Аудитория:</b> акимы и заместители акимов районов, отделы сельского хозяйства. 300 человек.</p>
						      			<p class="pg">
						      				<b>Действие:</b>
						      			 	Проектное управление на районном уровне. Презентация рейтингов акимов районов по    	исполнению показателей ГП: 
						      			 	<ul>
						      			 		<li>Программа Сыбага</li>
														<li>Выделение земель</li>
														<li>Эффективное использование земель</li>
						      			 	</ul>
						      			 	Ответственность акимов районов за реализацию политики МСХ на местах.
						      			</p>
						      			<p class="pg"><b>Модератор:</b> Евниев А.К.</p>
						      			<p class="pg"><b>Спикеры:</b> зарубежные эксперты (Канада, США), представители МСХ, представитель МИО (Ерейментауский район).</p>
						      		</div>
						      	</div>
						      	<div class="item">
						      		<div class="place">
						      			<span>Зал 2</span> – Галерея (2 этаж)
						      		</div>
						      		<div class="content">
						      			<p class="pg">
						      				<b>Мастер-класс 2:</b> Роль НПО в развитии отрасли сельского хозяйства. Казахстан, США, Канада, Австралия.
						      			</p>
						      			<p class="pg"><b>Аудитория:</b> отраслевые ассоциации, союзы и палаты, политические партии, НПП, Министерства, представители областных акиматов, сельхозпроизводители.</p>
						      			<p class="pg">
						      				<b>Действие:</b> выступление представителей зарубежных ассоциаций Австралии, Канады, США с презентацией их опыта. Выступление казахстанских спикеров, вопросы развития села через укрепление НПО: вопросы развития села, сельская инфраструктура. 
						      			 	<ul>
						      			 		<li>Программа Сыбага</li>
														<li>Выделение земель</li>
														<li>Эффективное использование земель</li>
						      			 	</ul>
						      			 	Ответственность акимов районов за реализацию политики МСХ на местах.
						      			</p>
						      			<p class="pg"><b>Модератор:</b> Мамытбеков А.С.</p>
						      			<p class="pg"><b>Спикеры:</b>  зарубежные эксперты (США, Канада, Австралия), Е. Ахметов (МСХ РК), представитель ГАК, представитель НПП, А. Даринов (Союз фермеров РК), представитель МОР РК</p>
						      		</div>
						      	</div>
						      </div>
						     </div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="schedule">
						<h3 class="heading">время</h3>
						<div class="time">
							<span>08.00 - 09.00</span>
						</div>
						<div class="time">
							<span>08.00 - 09.00</span>
						</div>
						<div class="time">
							<span>08.00 - 09.00</span>
						</div>
						<div class="time">
							<span>08.00 - 09.00</span>
						</div>
						<div class="time">
							<span>08.00 - 09.00</span>
						</div>
						<div class="time">
							<span>14.30 - 17.00</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
  @include('inc.footer')
@endsection
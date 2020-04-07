<!DOCTYPE html>
<html lang="ru">
	<head>
	    <meta charset="utf-8">
	    <title><?=$title;?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="Keywords" content="психолог, нлп-мастер, индивидуальные консультации, бизнес-тренинги, гипнотерапевт. Одесса, Украина">
	    <meta name="Description" content="Помогаю людям изменить жизнь, наладить отношения, выйти из кризиса. Работаю в Одессе, Украина">
	    <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header class="main-header">
				<div class="header-block">
					<h1 class="header-block__title title">Как пережить<br>кризис<br>и выйти из него победителем</h1>
					<p class="header-block__text">
						Проверенные способы от Сергея Дурдыева &#8212; Бизнес-тренера,<br>психолога, специалиста по выходу из кризисных ситуаций
					</p>
				</div>
			</header>
			<?=$page_content;?>
			<footer class="main-footer">
				<div class="main-footer__pop-up  pop-up">
					<form class="form  <?php if(count($errors) > 0) { echo 'form--invalid';}; ?>" method="POST" action="sendmail.php">
				<div class="form__close-btn"><span></span></div>
				<div class="form__input-wrap">
					<input type="text" name="name" placeholder="Benedict" required>
				</div>
				<div class="form__input-wrap">
					<input type="text" name="email" placeholder="benedictcumberbatch@gmail.com" required>
				</div>
				<div class="form__input-wrap  form__input-wrap--checkbox">
                    <input type="checkbox" name="accept" id="accept-footer-block" required checked>
                    <label class="form__label  form__label--checkbox" for="accept-footer-block">Заполняя эту форму, я даю согласие на обработку моих данных</label>
                </div>
				<input  class="form__btn  btn" type="submit" value="Получить доступ">
			</form>
				</div>
				<div class="social-block">
					<ul class="social-block__list">
						<li class="social-block__item  social-block__item--face">
							<span><svg><use xlink:href="#facebook"></use></svg></span>
							<a class="social-block__link  social-block__link--face" href="https://www.facebook.com/sergei.durdyev">
								Ссылка на профиль в Facebook
							</a>
						</li>
						<li class="social-block__item  social-block__item--insta">
							<span><svg><use xlink:href="#instagram"></use></svg></span>
							<a class="social-block__link  social-block__link--insta" href="https://www.instagram.com/sergei_psycholog_durdyiev/">
								Ссылка на профиль в Instagram
							</a>
						</li>
						<li class="social-block__item  social-block__item--email">
							<span><svg><use xlink:href="#mail"></use></svg></span>
							<a class="social-block__link  social-block__link--email" href="#">
								sergeidurdyev@gmail.com
							</a>
						</li>
					</ul>
				</div>
			</footer>
		</div>
		<svg display="none">
			<symbol id="facebook" viewBox="0 0 23.101 23.101">
                <g>
					<path d="M8.258,4.458c0-0.144,0.02-0.455,0.06-0.931c0.043-0.477,0.223-0.976,0.546-1.5c0.32-0.522,0.839-0.991,1.561-1.406
						C11.144,0.208,12.183,0,13.539,0h3.82v4.163h-2.797c-0.277,0-0.535,0.104-0.768,0.309c-0.231,0.205-0.35,0.4-0.35,0.581v2.59h3.914
						c-0.041,0.507-0.086,1-0.138,1.476l-0.155,1.258c-0.062,0.425-0.125,0.819-0.187,1.182h-3.462v11.542H8.258V11.558H5.742V7.643
						h2.516V4.458z"/>
				</g>
			</symbol>
			<symbol id="instagram" viewBox="0 0 169.063 169.063">
				<g>
					<path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
						c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
						c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
						c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
					<path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
						C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
						c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
					<path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
						c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
						C135.661,29.421,132.821,28.251,129.921,28.251z"/>
				</g>
			</symbol>
			<symbol id="mail" viewBox="0 0 483.3 483.3">
				<g>
					<path d="M424.3,57.75H59.1c-32.6,0-59.1,26.5-59.1,59.1v249.6c0,32.6,26.5,59.1,59.1,59.1h365.1c32.6,0,59.1-26.5,59.1-59.1
						v-249.5C483.4,84.35,456.9,57.75,424.3,57.75z M456.4,366.45c0,17.7-14.4,32.1-32.1,32.1H59.1c-17.7,0-32.1-14.4-32.1-32.1v-249.5
						c0-17.7,14.4-32.1,32.1-32.1h365.1c17.7,0,32.1,14.4,32.1,32.1v249.5H456.4z"/>
					<path d="M304.8,238.55l118.2-106c5.5-5,6-13.5,1-19.1c-5-5.5-13.5-6-19.1-1l-163,146.3l-31.8-28.4c-0.1-0.1-0.2-0.2-0.2-0.3
						c-0.7-0.7-1.4-1.3-2.2-1.9L78.3,112.35c-5.6-5-14.1-4.5-19.1,1.1c-5,5.6-4.5,14.1,1.1,19.1l119.6,106.9L60.8,350.95
						c-5.4,5.1-5.7,13.6-0.6,19.1c2.7,2.8,6.3,4.3,9.9,4.3c3.3,0,6.6-1.2,9.2-3.6l120.9-113.1l32.8,29.3c2.6,2.3,5.8,3.4,9,3.4
						c3.2,0,6.5-1.2,9-3.5l33.7-30.2l120.2,114.2c2.6,2.5,6,3.7,9.3,3.7c3.6,0,7.1-1.4,9.8-4.2c5.1-5.4,4.9-14-0.5-19.1L304.8,238.55z"
						/>
				</g>
			</symbol>
		</svg>
		<script src="js/pop-up.js"></script>
	</body>
</html>

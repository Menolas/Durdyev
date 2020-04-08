<main>
	<div class="video">
		<p class="video__text">
			Здесь в широкофрматной версии после 1440 пикселей предлагаю впердолить какой нибудь тект о том что конкретно ты продаешь, о том, например, что видосы короткие, емкие, содержат описание практических заданий, кратко о курсе для кого и почему он нужен.
		</p>
		<div class="video__container">
		    <img src="img/video-label.png" alt="video label">
		</div>
		<button class="video__access-btn  btn">Получи доступ всего за 5$</button>

		<div class="video__pop-up  pop-up  <?php if(count($errors) > 0) { echo 'pop-up--shown';}; ?>">
			<form class="form  <?php if(count($errors) > 0) { echo 'form--invalid';}; ?>" method="POST" action="sendmail.php">
				<div class="form__close-btn"><span></span></div>
				<div class="form__input-wrap  <?php if(isset($errors['name'])) { echo 'form__input-wrap--invalid';}; ?>">
					<input type="text" name="name" placeholder="Benedict" value="<?= isset($values['name']) ? $values['name'] : '' ?>">
					<span class="form__error">Введите email</span>
				</div>
				<div class="form__input-wrap  <?php if(isset($errors['email'])) { echo 'form__input-wrap--invalid';}; ?>">
					<input type="text" name="email" placeholder="benedictcumberbatch@gmail.com" value="<?= isset($values['email']) ? $values['email'] : '' ?>">
					<span class="form__error">Введите имя</span>
				</div>
				<div class="form__input-wrap  form__input-wrap--checkbox  <?php if(isset($errors['accept'])) { echo 'form__input-wrap--invalid';}; ?>">
                    <input type="checkbox" name="accept" id="accept" checked>
                    <label class="form__label  form__label--checkbox" for="accept">Заполняя эту форму, я даю согласие на обработку моих данных</label>
                    <span class="form__error">Дайте согласие на обработку ваших данных (адеса електронной почты)</span>
                </div>
                <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
				<input  class="form__btn  btn" type="submit" value="Получить доступ">
			</form>
		</div>
	</div>
	<section class="reviews">
		<h2 class="reviews__title  title__secondary">Отзывы</h2>
		<p class="reviews__describing">
			Здесь тоже в широкоформатной версии думаю нужно че то написать, несколько строк о том, что очень сильно впитывается и помогает, самым разным слоям населения с самыми разными видами жоп  
		</p>
		<ul class="reviews__list">
			<li class="reviews__item">
				<div class="reviews__reviewer-portret">
					<img src="img/reviewer-portret-1.jpg" alt="счастливый участник курса">
				</div>
				<span class="reviews__reviewer-name">Васенька Пупочкин</span>
				<p class="reviews__text">Зашибись курс. Зашибись помогло. Теперь ваще не парюсь и могу ваще всьо</p>
			</li>
			<li class="reviews__item">
				<div class="reviews__reviewer-portret">
					<img src="img/reviewer-portret-1.jpg" alt="счастливый участник курса">
				</div>
				<span class="reviews__reviewer-name">Васенька Пупочкин</span>
				<p class="reviews__text">Зашибись курс. Зашибись помогло. Теперь ваще не парюсь и могу ваще всьо</p>
			</li>
			<li class="reviews__item">
				<div class="reviews__reviewer-portret">
					<img src="img/reviewer-portret-1.jpg" alt="счастливый участник курса">
				</div>
				<span class="reviews__reviewer-name">Васенька Пупочкин</span>
				<p class="reviews__text">Зашибись курс. Зашибись помогло. Теперь ваще не парюсь и могу ваще всьо</p>
			</li>
			<li class="reviews__item">
				<div class="reviews__reviewer-portret">
					<picture>
						<source media="(min-width: 1440px)" srcset="img/reviewer-portret-4-desktop.jpg">
						<source media="(min-width: 1024px)" srcset="img/reviewer-portret-4-tablet.jpg">
						<img src="img/reviewer-portret-4-mobile.jpg" alt="счастливый участник курса">
					</picture>
				</div>
				<span class="reviews__reviewer-name">Елена Кунина</span>
				<p class="reviews__text">Это было увлекательно и интересно, ведь что может быть более увлекательным, чем встреча с самим собой, настоящим. Мы так много не знаем о себе, как выяснилось после курса) Простые и не очень упражнения и практики позволили мне встретиться лицом к лицу со своими глубинными страхами, о которых я не подозревала, убеждениями, которые разрушали мою жизнь а также показали мне мои сильные стороны. Мечты превратились в реальные планы и мир заблистал новыми красками. Спасибо Сергею.</p>
			</li>
		</ul>
		<button class="reviews__access-btn  btn">Получи доступ всего за 5$</button>
		<div class="reviews__pop-up  pop-up  <?php if(count($errors) > 0) { echo 'pop-up--shown';}; ?>">
			<form class="form  <?php if(count($errors) > 0) { echo 'form--invalid';}; ?>" method="POST" action="sendmail.php">
				<div class="form__close-btn"><span></span></div>
				<div class="form__input-wrap  <?php if(isset($errors['name'])) { echo 'form__input-wrap--invalid';}; ?>">
					<input type="text" name="name" placeholder="Benedict" value="<?= isset($values['name']) ? $values['name'] : '' ?>">
					<span class="form__error">Введите email</span>
				</div>
				<div class="form__input-wrap  <?php if(isset($errors['email'])) { echo 'form__input-wrap--invalid';}; ?>">
					<input type="text" name="email" placeholder="benedictcumberbatch@gmail.com" value="<?= isset($values['email']) ? $values['email'] : '' ?>">
					<span class="form__error">Введите имя</span>
				</div>
				<div class="form__input-wrap  form__input-wrap--checkbox  <?php if(isset($errors['accept'])) { echo 'form__input-wrap--invalid';}; ?>">
                    <input type="checkbox" name="accept" id="accept-reviews" checked>
                    <label class="form__label  form__label--checkbox" for="accept-reviews">Заполняя эту форму, я даю согласие на обработку моих данных</label>
                    <span class="form__error">Дайте согласие на обработку ваших данных (адеса електронной почты)</span>
                </div>
                <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
				<input  class="form__btn  btn" type="submit" value="Получить доступ">
			</form>
		</div>
	</section>
	<?=$customer_mail;?>
</main>

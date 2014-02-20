<?php  defined( '_JEXEC' ) or die; ?>
<div class='container block-nav block-blue' data-target='#showcase' data-toggle='collapse'>
    <div class='col-md-12'>
        <ul>
            <li>
                <span>В центре внимания</span>
            </li>
            <li>
                <i class='fa fa-angle-right'></i>
            </li>
            <li>
                <a href='/'>Все новости</a>
            </li>
        </ul>
        <i class='fa fa-angle-down icon'></i>
    </div>
</div>
<div class='container collapse in' id='showcase'>
    <div class='col-md-4 newslist wrapper'>
        <ul>
            <li class="active">
                <a data-slide-to='0' data-target='#carousel' href='#'>
                    <span class='date'>13/<small>03</small></span>
                    <span class="news-item">Итоги голосования</span>
                </a>
            </li>
            <li>
                <a data-slide-to='1' data-target='#carousel' href='#'>
                    <span class='date'>04/<small>03</small></span>
                    <span class="news-item">Кавалеры орденов</span>
                </a>
            </li>
            <li>
                <a data-slide-to='2' data-target='#carousel' href='#'>
                    <span class='date'>04/<small>03</small></span>
                    <span class="news-item">Кто  будет спонсором</span>
                </a>
            </li>
            <li>
                <a data-slide-to='1' data-target='#carousel' href='#'>
                    <span class='date'>04/<small>03</small></span>
                    <span class="news-item">Хозяева выиграли всё</span>
                </a>
            </li>
            <li class="active">
                <a data-slide-to='1' data-target='#carousel' href='#'>
                    <span class='date'>04/<small>03</small></span>
                    <span class="news-item">Пятнадцатый тур</span>
                </a>
            </li>
            <li>
                <a data-slide-to='1' data-target='#carousel' href='#'>
                    <span class='date'>04/<small>03</small></span>
                    <span class="news-item">Прошедший матч</span>
                </a>
            </li>
            <li>
                <a data-slide-to='1' data-target='#carousel' href='#'>
                    <span class='date'>04/<small>03</small></span>
                    <span class="news-item">Нижний Новгород дошел до самого верха</span>
                </a>
            </li>
            <li class="active">
                <a data-slide-to='1' data-target='#carousel' href='#'>
                    <span class='date'>04/<small>03</small></span>
                    <span class="news-item">Нижний Новгород дошел до самого верха</span>
                </a>
            </li>
            <li>
                <a data-slide-to='1' data-target='#carousel' href='#'>
                    <span class='date'>04/<small>03</small></span>
                    <span class="news-item">МногоГранкин</span>
                </a>
            </li>
            <li>
                <a data-slide-to='1' data-target='#carousel' href='#'>
                    <span class='date'>04/<small>03</small></span>
                    <span class="news-item">"Динамо" или "Зенит"?</span>
                </a>
            </li>
            <li>
                <a data-slide-to='1' data-target='#carousel' href='#'>
                    <span class='date'>04/<small>03</small></span>
                    <span class="news-item">Руис - наш человек</span>
                </a>
            </li>
            <li>
                <a data-slide-to='1' data-target='#carousel' href='#'>
                    <span class='date'>04/<small>03</small></span>
                    <span class="news-item">Матч звезд. Итоги голосования</span>
                </a>
            </li>
            <li>
                <a data-slide-to='1' data-target='#carousel' href='#'>
                    <span class='date'>04/<small>03</small></span>
                    <span class="news-item">Маричев прервал суперсерию</span>
                </a>
            </li>
            <li>
                <a data-slide-to='1' data-target='#carousel' href='#'>
                    <span class='date'>04/<small>03</small></span>
                    <span class="news-item">"Динамо" или "Зенит"?</span>
                </a>
            </li>
            <li>
                <a data-slide-to='1' data-target='#carousel' href='#'>
                    <span class='date'>04/<small>03</small></span>
                    <span class="news-item">Руис - наш человек</span>
                </a>
            </li>
        </ul>
        <div class="scroller__track"><!-- Track is optional -->
            <div class="scroller__bar"></div>
        </div>
    </div>
    <div class='carousel slide col-md-8' id='carousel'>
        <div class='carousel-inner'>
            <div class='item active'>
                <img src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/slider/slide1.png'>
                        <span>
                          1
                          <div class='carousel-caption'>
                              <h1>Кто будет спонсором</h1>
                              Всероссийская федерация волейбола проводит конкурс на звание титульного спонсора Матча Звезд 2013 мужского Чемпионата России.
                              <a href="#"><i class="fa fa-angle-right"></i>Подробнее</a>
                          </div>
                        </span>
            </div>
            <div class='item'>
                <img src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/slider/slide2.jpg'>
                        <span>
                          2
                          <div class='carousel-caption'></div>
                        </span>
            </div>
            <div class='item'>
                <img src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/slider/slide2.jpg'>
                        <span>
                          3
                        </span>
            </div>
        </div>
        <a class='left carousel-control' data-slide='prev' href='#carousel'>
            <i class='fa fa-angle-left'></i>
        </a>
        <a class='right carousel-control' data-slide='next' href='#carousel'>
            <i class='fa fa-angle-right'></i>
        </a>
        <ol class='carousel-indicators'>
            <li class='active' data-slide-to='0' data-target='#carousel'></li>
            <li data-slide-to='1' data-target='#carousel'></li>
            <li data-slide-to='2' data-target='#carousel'></li>
        </ol>
    </div>
</div>
<div class="space"></div>
<?php  defined( '_JEXEC' ) or die; ?>
<div class='container' id='top-nav'>
    <nav class='navbar navbar-default' role='navigation'>
        <div class='navbar-header'>
            <button class='navbar-toggle' data-target='.navbar-ex1-collapse' data-toggle='collapse' type='button'>
                <span class='sr-only'>Навигация по сайту</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
            </button>
        </div>
        <div class='collapse navbar-collapse navbar-ex1-collapse'>
            <ul class="nav navbar-nav">
                <li class="item-101 current active first"><a href="/" ><span>О федерации</span></a></li>
                <li class="item-102"><a href="/sbornye" ><span>Сборные</span></a></li>
                <li class="item-103"><a href="/kluby" ><span> Клубы</span></a></li>
                <li class="item-104"><a href="/sorevnovaniya" ><span> Соревнования</span></a></li>
                <li class="item-105 last"><a href="/2013-11-07-16-58-15" ><span>Медиа</span></a></li>
            </ul>

            <ul class='social-links nav navbar-nav navbar-right'>
                <li>
                    <a href='#'>
                        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/social/rss.png" alt=""/>
                    </a>
                </li>
                <li>
                    <a href='#'>
                        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/social/facebook.png" alt=""/>
                    </a>
                </li>
                <li>
                    <a href='#'>
                        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/social/twitter.png" alt=""/>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
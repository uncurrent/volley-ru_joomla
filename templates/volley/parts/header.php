<?php  defined( '_JEXEC' ) or die; ?>
<div id='header'>
    <div class='container'>
        <a class='logo' href='/'>
            <div class='col-md-1'>
                <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/logo.png" />
            </div>
            <div class='col-md-4'>
                <h3>
                    Всероссийская
                    <br>
                    Федерация Волейбола
                </h3>
            </div>
        </a>
        <div class='col-md-7'>
            <div class='top-links'>
                <a href='#'>
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/header/home.png" alt=""/>
                </a>
                <a href='#'>
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/header/sitemap.png" alt=""/>
                </a>
                <a href='#'>
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/header/mail.png" alt=""/>
                </a>
            </div>
            <form class='form-inline form-search' role='form'>
                <div class='form-group'>
                    <input class='form-control' name='search' placeholder='Поиск по сайту' type='text'>
                </div>
                <input class='btn btn-default' type='submit' value='Искать'>
            </form>

        </div>
    </div>
</div>
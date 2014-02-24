<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;?>
<!doctype html>
<!--[if IEMobile]><html class="iemobile" lang="ru-ru"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="ru-ru"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="ru-ru"> <!--<![endif]-->
<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/fa.css">
    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/perfect-scrollbar.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/styles.css">
    <!--[if lte IE 8]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<?php include_once JPATH_THEMES.'/'.$this->template.'/parts/header.php'; ?>
<?php include_once JPATH_THEMES.'/'.$this->template.'/parts/topnav.php'; ?>
<?php
if ($active == $homepage) {
    include_once JPATH_THEMES.'/'.$this->template.'/parts/slider.php';
    include_once JPATH_THEMES.'/'.$this->template.'/parts/content-index.php';
    include_once JPATH_THEMES.'/'.$this->template.'/parts/advertising.php';
} else {
    include_once JPATH_THEMES.'/'.$this->template.'/parts/content.php';
} ?>
test!!!!
<?php include_once JPATH_THEMES.'/'.$this->template.'/parts/footer.php'; ?>

<jdoc:include type="modules" name="debug" />
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/perfect-scrollbar-0.4.8.with-mousewheel.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/perfect-scrollbar-0.4.8.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/app.js" type="text/javascript"></script>
</body>
</html>
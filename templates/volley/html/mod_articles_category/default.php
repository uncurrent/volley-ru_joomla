<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<ul class="category-module<?php echo $moduleclass_sfx; ?>">
	<?php foreach ($list as $item) : ?>
		<li>
            <a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
                <span class="date"><?php echo JText::sprintf( JHtml::_('date', $item->publish_up, JText::_('m'))); ?>/<small><?php echo JText::sprintf( JHtml::_('date', $item->publish_up, JText::_('m'))); ?></small></span>
                <span class="news-item"><?php echo $item->title; ?></span>
            </a>
		</li>
	<?php endforeach; ?>
</ul>

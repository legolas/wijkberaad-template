<?php
/**
 * @copyright	Copyright (C) 2009-2012 ACYBA SARL - All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 */
defined('_JEXEC') or die('Restricted access');
?>
<div class="acymailing_module<?php echo $params->get('moduleclass_sfx')?>" id="acymailing_module_<?php echo $formName; ?>">
<?php
	$app = JFactory::getApplication();
	$templateDir = JURI::base() . 'templates/' . $app->getTemplate();
?>
	<div>
		<?php
		 	$link = "rel=\"{handler: 'iframe', size: {x: ".$params->get('boxwidth',250).", y: ".$params->get('boxheight',200)."}}\" ";
		 	$href=acymailing_completeLink('sub&task=display&formid='.$module->id,true);
		?>
	<p>
		<a <?php echo $link; ?> href="<?php echo $href; ?>"><img src="<?php echo $templateDir; ?>/images/icon_mail.png" alt="Email Icon" height="28" width="28" style="vertical-align: middle;">Nieuwsbrief</a><br/>
		<a href="https://twitter.com/houtwijk070" target="_blank"><img src="<?php echo $templateDir; ?>/images/icon_twitter.png" alt="Twitter Icon" height="28" width="28" style="vertical-align: middle;">Twitter</a><br/>
		<a href="https://www.facebook.com/Houtwijkinfo" target="_blank"><img src="<?php echo $templateDir; ?>/images/icon_facebook.png" alt="Facebook Icon" height="28" width="28" style="vertical-align: middle;">Facebook</a>
	</p>
	<hr/>
	<p>
		<a <?php echo $link; ?> id="acymailing_togglemodule_<?php echo $formName; ?>" href="<?php echo $href; ?>"><img src="<?php echo $templateDir; ?>/images/icon_mail.png" alt="Email Icon" height="28" width="28" style="vertical-align: middle;"/></a><a href="https://twitter.com/houtwijk070" target="_blank"><img src="<?php echo $templateDir; ?>/images/icon_twitter.png" alt="Twitter Icon" height="28" width="28" style="vertical-align: middle;"/></a><a href="https://www.facebook.com/Houtwijkinfo" target="_blank"><img src="<?php echo $templateDir; ?>/images/icon_facebook.png" alt="Facebook Icon" height="28" width="28" style="vertical-align: middle;"/></a>
	</p>
	</div>
</div>

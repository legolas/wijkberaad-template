<?php
/**
 * @copyright	Copyright (C) 2009-2012 ACYBA SARL - All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 */
defined('_JEXEC') or die('Restricted access');
?>
<div class="acymailing_module<?php echo $params->get('moduleclass_sfx')?>" id="acymailing_module_<?php echo $formName; ?>">
<?php
	if(!empty($mootoolsIntro)) echo '<p class="acymailing_mootoolsintro">'.$mootoolsIntro.'</p>'; ?>
	<div class="acymailing_mootoolsbutton">
		<?php
		 	$link = "rel=\"{handler: 'iframe', size: {x: ".$params->get('boxwidth',250).", y: ".$params->get('boxheight',200)."}}\" class=\"modal acymailing_togglemodule\"";
		 	$href=acymailing_completeLink('sub&task=display&formid='.$module->id,true);
		?>
	<p>
		<a rel="{handler: 'iframe', size: {x: 250, y: 200}}" class="modal" id="acymailing_togglemodule_formAcymailing1" href="http://test.wijkberaadhoutwijk.nl/component/acymailing/sub/display/formid-48/tmpl-component.html"><img src="index_files/imagesicon_mail.png" alt="Email Icon" height="28" width="28" style="vertical-align: middle;">Nieuwsbrief</a><br/>
		<a href="https://twitter.com/houtwijk070" target="_blank"><img src="index_files/icon_twitter.png" alt="Twitter Icon" height="28" width="28" style="vertical-align: middle;">Twitter</a><br/>
		<a href="https://www.facebook.com/Houtwijkinfo" target="_blank"><img src="index_files/Facebook%2520icon.png" alt="Facebook Icon" height="28" width="28" style="vertical-align: middle;">Facebook</a>
	</p>
	<hr/>
	<p>
		<a rel="{handler: 'iframe', size: {x: 250, y: 200}}" class="modal" id="acymailing_togglemodule_formAcymailing1" href="http://test.wijkberaadhoutwijk.nl/component/acymailing/sub/display/formid-48/tmpl-component.html"><img src="index_files/imagesicon_mail.png" alt="Email Icon" height="28" width="28" style="vertical-align: middle;"/></a><a href="https://twitter.com/houtwijk070" target="_blank"><img src="index_files/icon_twitter.png" alt="Twitter Icon" height="28" width="28" style="vertical-align: middle;"/></a><a href="https://www.facebook.com/Houtwijkinfo" target="_blank"><img src="index_files/Facebook%2520icon.png" alt="Facebook Icon" height="28" width="28" style="vertical-align: middle;"/></a>
	</p>
	</div>
</div>
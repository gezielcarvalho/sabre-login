<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_login
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *  * commit from borwser
 */

defined('_JEXEC') or die;

JLoader::register('UsersHelperRoute', JPATH_SITE . '/components/com_users/helpers/route.php');

JHtml::_('behavior.keepalive');
JHtml::_('bootstrap.tooltip');

?>
<div style="text-align: center;">
	<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure', 0)); ?>" method="post" id="login-form" class="form-inline">
		<div class="center  card" style="display:inline-block; margin:10px;">
			<div class="card-header">LOGIN</div>
			<div class="card-body">
				<div class="userdata">
					<div id="form-login-username" class="control-group">
						<div class="control-group">
							<div class="control-label">
								<label for="modlgn-username"><?php echo JText::_('JGLOBAL_USERNAME'); ?>*</label>
							</div>
							<div class="controls">
								<input id="modlgn-username" type="text" name="username" class="input-small form-control" tabindex="0" size="18" />
							</div>
						</div>
					</div>
					<div id="form-login-password" class="control-group">
						<div class="controls">
							<label for="modlgn-passwd"><?php echo JText::_('JGLOBAL_PASSWORD'); ?></label>
							<input id="modlgn-passwd" type="password" name="password" class="input-small form-control" tabindex="0" size="18" />
						</div>
					</div>
					<br>
					<div id="form-login-submit" class="control-group">
						<div class="controls">
							<button type="submit" tabindex="0" name="Submit" class="btn btn-primary login-button"><?php echo JText::_('JLOGIN'); ?></button>
						</div>
					</div>
					<br>
				</div>
			</div>
			<div class="card-footer">
				<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
					Esqueceu sua senha?
				</a>
			</div>
			<div class="card-footer">
				<a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>">
					Esqueceu seu usuário?
				</a>
			</div>
			<?php $usersConfig = JComponentHelper::getParams('com_users'); ?>
			<?php if ($usersConfig->get('allowUserRegistration')) : ?>
			<div class="card-footer">
				<a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
					Não possui uma conta? 
				</a>
			</div>
			<?php endif; ?>
			<input type="hidden" name="option" value="com_users" />
			<input type="hidden" name="task" value="user.login" />
			<input type="hidden" name="return" value="<?php echo $return; ?>" />
			<?php echo JHtml::_('form.token'); ?>
		</div>
	</form>
</div>

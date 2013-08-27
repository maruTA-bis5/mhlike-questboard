<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<?php
		echo $this->Html->meta('icon');


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

		echo $this->Html->css('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css');
		echo $this->Html->script('//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js');
		echo $this->Html->script('//code.jquery.com/jquery-2.0.3.js');
	?>
<?php 
echo $this->Html->script('https://github.com/trentrichardson/jQuery-Timepicker-Addon/raw/master/dist/jquery-ui-sliderAccess.js');	
echo $this->Html->script('http://code.jquery.com/ui/1.10.3/jquery-ui.js');
echo $this->Html->css('http://code.jquery.com/ui/1.10.3/themes/black-tie/jquery-ui.css');
echo $this->Html->css('https://github.com/trentrichardson/jQuery-Timepicker-Addon/raw/master/dist/jquery-ui-timepicker-addon.css');
echo $this->Html->script('https://github.com/trentrichardson/jQuery-Timepicker-Addon/raw/master/dist/jquery-ui-timepicker-addon.js');
?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content" class="row">
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
				<?php echo $this->Session->flash(); ?>
			</div>
			<div class="col-lg-10 col-md-10 col-xs-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-xs-offset-1 col-sm-offset-1 row">
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>

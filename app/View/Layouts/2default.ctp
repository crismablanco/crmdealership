<?php
/**
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

$cakeDescription = __d('cake_dev', 'CRM');
$cakeVersion = __d('cake_dev', ' %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('style.css','cake.generic','bootstrap.min','bootstrap-theme.min','sb-admina','morris'));
        echo $this->Html->script(array('bootstrap.min','jquery'));


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body>
	
 <div id="wrapper">

        <?php echo $this->element('menu'); ?>

        <div id="page-wrapper">

            <div class="container">
				<p>&nbsp;</p><p>&nbsp;</p>
				<?php echo $this->Flash->render(); ?>

				<?php echo $this->fetch('content'); ?>

			</div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="http://crismablanco.com/cliadminboot/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://crismablanco.com/cliadminboot/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="http://crismablanco.com/cliadminboot/js/plugins/morris/raphael.min.js"></script>
    <script src="http://crismablanco.com/cliadminboot/js/plugins/morris/morris.min.js"></script>
    <script src="http://crismablanco.com/cliadminboot/js/plugins/morris/morris-data.js"></script>




</body>
</html>

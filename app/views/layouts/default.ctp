<?php
/* SVN FILE: $Id$ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php echo $html->charset(); ?>
    <title>
        Mitzvah Day 2011
        <?php echo $title_for_layout; ?>
    </title>
    <?php
        echo $html->meta('icon');

        echo $html->css('reset', null, array('media'=>'screen'));
        echo $html->css('global', null, array('media'=>'screen'));
        echo $html->meta('js/jquery');
        echo $scripts_for_layout;
    ?>
    <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/ie.css"><![endif]-->
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="/">
                <?php echo $html->image('got_mitzvah_blue.png', array('class'=>'got_mitzvah', 'alt'=>"Got Mitzvah?")); ?>
            </a>
            <a href="/">
                <?php echo $html->image('mitzvah-day-2011.png', array('class'=>'logo', 'alt'=>"Mitzvah Day 2011")); ?>
            </a>
        </div>
        <div class="content">
            <?php $session->flash(); ?>
            <?php echo $content_for_layout; ?>
        </div>
        <div class="footer">
                <p class="copyright">© 2011 Mitzvah-Day.org. All Rights Reserved.</p>
        </div>
      </div>
    <?php echo $cakeDebug; ?>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15806497-1");
pageTracker._setDomainName(".mitzvah-day.org");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>

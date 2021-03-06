<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  Template.hathor
 *
 * @copyright   (C) 2013 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$doTask = $displayData['doTask'];
$class  = $displayData['class'];
$text   = $displayData['text'];
$name   = $displayData['name'];
?>

<a onclick="<?php echo $doTask; ?>" class="modal toolbar" data-toggle="modal" data-target="#modal-<?php echo $name; ?>">
	<span class="<?php echo $class; ?>"></span>
	<?php echo $text; ?>
</a>

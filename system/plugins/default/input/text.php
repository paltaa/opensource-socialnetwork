<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

$class = 'ossn-text-input';
if(isset($params['class'])){
	$class = $class . $params['class'];
}
$defaults = array(
	'value' => '',
	'disabled' => false,
	'class' => $class,
	'type' => 'text'
);

$params = array_merge($defaults, $params);
$attributes = ossn_args($params);

echo "<input {$attributes} />";
<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2010, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace lithium\tests\mocks\template\helper;

class MockFormPost extends \lithium\data\Model {

	protected $_schema = array(
		'id' => array('type' => 'integer'),
		'author_id' => array('type' => 'integer'),
		'title' => array('type' => 'string'),
		'body' => array('type' => 'text'),
		'created' => array('type' => 'datetime'),
		'updated' => array('type' => 'datetime')
	);
}

?>
<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * tests for NodeFactory class and Node_Column class
 *
 * @package PhpMyAdmin-test
 */

require_once 'libraries/navigation/NodeFactory.class.php';
require_once 'libraries/Util.class.php';
require_once 'libraries/Theme.class.php';


class Node_Procedure_Container_Test extends PHPUnit_Framework_TestCase
{
    public function setup()
    {
        $GLOBALS['server'] = 0;
        $GLOBALS['token'] = 'token';
        $_SESSION['PMA_Theme'] = PMA_Theme::load('./themes/pmahomme');
    }

    public function testConstructor()
    {
        $parent = PMA_NodeFactory::getInstance('Node_Procedure_Container');
        $this->assertArrayHasKey(
            'text',
            $parent->links
        );
        $this->assertContains(
            'db_routines.php',
            $parent->links['text']
        );
        $this->assertEquals('procedures', $parent->real_name);
    }
}
?>
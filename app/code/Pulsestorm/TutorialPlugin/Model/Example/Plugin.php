<?php
/**
 * Created by PhpStorm.
 * User: zone8
 * Date: 21/03/17
 * Time: 15:40
 */

namespace Pulsestorm\TutorialPlugin\Model\Example;

class Plugin
{
	public function beforeGetMessage( $subject, $thing = 'World', $should_lc = false )
	{
		// Change the first parameter ($thing), but pass through the second one ($should_lc) unchanged
		return ['Changing the argument', $should_lc];
	}

//	public function afterGetMessage( $subject, $result )
//	{
//		return 'We are so tired of saying hello';
//	}
}
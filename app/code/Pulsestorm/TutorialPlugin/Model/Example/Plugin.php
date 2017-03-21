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
	public function afterGetMessage( $subject, $result )
	{
		echo "Calling ", __METHOD__ , "\n";
		return $result;
	}
}
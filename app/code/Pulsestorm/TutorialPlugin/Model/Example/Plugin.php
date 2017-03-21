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
	/**
	 * Call the plugin before the original target method has run
	 *
	 * @param \Pulsestorm\TutorialPlugin\Model\Example  $subject   The class which contains the original target method
	 * @param string                                    $thing     First parameter to the original target method
	 * @param bool                                      $should_lc Second parameter to the original target method
	 *
	 * @return array
	 */
//	public function beforeGetMessage( $subject, $thing = 'World', $should_lc = false )
//	{
		// Change the first parameter ($thing), but pass through the second one ($should_lc) unchanged
//		return ['Changing the argument', $should_lc];
//	}

	/**
	 * Call the plugin after the original target method has run
	 *
	 * @param \Pulsestorm\TutorialPlugin\Model\Example  $subject   The class which contains the original target method
	 * @param string                                    $result
	 *
	 * @return string
	 */
//	public function afterGetMessage( $subject, $result )
//	{
//		return 'We are so tired of saying hello';
//	}

	/**
	 * Call the function before and after the target method
	 *
	 * @param \Pulsestorm\TutorialPlugin\Model\Example  $subject   The class which contains the original target method
	 * @param callback                                  $proceed   Callback which executes the original target method
	 * @param string                                    $thing     First parameter to the original target method
	 * @param bool                                      $should_lc Second parameter to the original target method
	 *
	 * @return mixed
	 */
//	public function aroundGetMessage( $subject, $proceed, $thing = 'World', $should_lc = false )
//	{
//		echo 'Calling' . __METHOD__ . ' before', "\n";
//		$result = $proceed();
//		echo 'Calling' . __METHOD__ . ' after', "\n";
//
//		return $result;
//	}

	/**
	 * Bypass the original target method and return a custom value
	 *
	 * @param \Pulsestorm\TutorialPlugin\Model\Example  $subject   The class which contains the original target method
	 * @param callback                                  $proceed   Callback which executes the original target method
	 * @param string                                    $thing     First parameter to the original target method
	 * @param bool                                      $should_lc Second parameter to the original target method
	 *
	 * @return mixed
	 */
	public function aroundGetMessage( $subject, $proceed, $thing = 'World', $should_lc = false )
	{
		echo 'Calling' . __METHOD__ . ' before', "\n";
//		$result = $proceed();
		echo 'Calling' . __METHOD__ . ' after', "\n";

		return 'New return value';
	}
}
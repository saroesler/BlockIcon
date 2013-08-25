<?php
/**
 * This is the User controller class providing navigation and interaction functionality.
 */
class BlockIcon_Api_Admin extends Zikula_AbstractApi
{
	/**
	 * @brief Get available admin panel links
	 *
	 * @return array array of admin links
	 */
	public function getlinks()
	{
		$links = array();
		if (SecurityUtil::checkPermission('Help::', '::', ACCESS_READ)) {
			$links[] = array(
				'url'=> ModUtil::url('Blocks', 'admin', 'view'),
				'text'  => $this->__('Main'),
				'title' => $this->__('Main'),
				'class' => 'z-icon-es-config',
			);
		}
		
		return $links;
	}
	
}

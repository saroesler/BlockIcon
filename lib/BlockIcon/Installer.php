<?php
/**
 * Installer.
 */
class BlockIcon_Installer extends Zikula_AbstractInstaller
{

	/**
	 * @brief Provides an array containing default values for module variables (settings).
	 * @return array An array indexed by variable name containing the default values for those variables.
	 *
	 * @author Sascha Rösler
	 */
	protected function getDefaultModVars()
	{
		return array();
	}

	/**
	 * Install the BlockIcon module.
	 *
	 * This function is only ever called once during the lifetime of a particular
	 * module instance.
	 *
	 * @return boolean True on success, false otherwise.
	 */
	public function install()
	{
		$this->setVars($this->getDefaultModVars());
		return true;
	}


	/**
	 * Upgrade the BlockIcon module from an old version
	 *
	 * This function must consider all the released versions of the module!
	 * If the upgrade fails at some point, it returns the last upgraded version.
	 *
	 * @param  string $oldVersion   version number string to upgrade from
	 *
	 * @return mixed  true on success, last valid version string or false if fails
	 */
	public function upgrade($oldversion)
	{
		switch($oldversion)
		{
			default:
				break;
		}
		return true;
	}


	/**
	 * Uninstall the module.
	 *
	 * This function is only ever called once during the lifetime of a particular
	 * module instance.
	 *
	 * @return bool True on success, false otherwise.
	 */
	public function uninstall()
	{
		return true;
	}

}

<?php

/**
 * This is the admin controller class providing navigation and interaction functionality.
 */
class BlockIcon_Controller_Admin extends Zikula_AbstractController
{
    /**
     * @brief Main function.
     * @throws Zikula_Forbidden If not ACCESS_ADMIN
     * @return template Admin/Main.tpl
     * 
     * @author Sascha Rösler
     */
    public function main()
    {
    	$this->throwForbiddenUnless(SecurityUtil::checkPermission('Blocks::', '::', ACCESS_EDIT));
    	
        return $this->redirect(ModUtil::URL('Blocks','admin','view'));
    }
}


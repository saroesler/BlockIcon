<?php
/**
 * Datasheete.
 *
 * @copyright Sascha Rösler (SR)
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @package BlockIcon
 * @author Sascha Rösler <i-loko@t-online.de>.
 * @link http://github.com/sarom5
 * @link http://zikula.org
 */

/**
 * Account api class.
 */
class BlockIcon_Api_Account extends Zikula_AbstractApi
{
    /**
     * Return an array of items to show in the your account panel.
     *
     * @param array $args List of arguments.
     *
     * @return array List of collected account items
     */
    public function getall(array $args = array())
    {
        // collect items in an array
        $items = array();
        $permission=0;
        if (SecurityUtil::checkPermission('Blocks::', '::', ACCESS_EDIT)) {
            $items[] = array(
                'url'   => ModUtil::url('Blocks', 'admin', 'view'),
                'title' => $this->__('Blocks'),
                'icon'   => 'admin.png',
                'module' => 'BlockIcon'
            );
        }
    
        // return the items
        return $items;
    }
}

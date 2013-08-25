<?php
/**
 * Version.
 */
class BlockIcon_Version extends Zikula_AbstractVersion
{
    /**
     * Module meta data.
     *
     * @return array Module metadata.
     */
    public function getMetaData()
    {
        $meta = array();
        $meta['displayname']    = $this->__('BlockIcon');
        $meta['description']    = $this->__("create an Icon for Blocks in the Useraccount"); ///@todo description
        $meta['url']            = $this->__('BlockIcon');
        $meta['version']        = '1.0.0';
        $meta['official']       = 0;
        $meta['author']         = 'Sascha Rösler';
        $meta['contact']        = 'sa-roelser@t-online.de';
        $meta['admin']          = 1;
        $meta['user']           = 1;
        $meta['securityschema'] = array(); ///@todo Security schema
        $meta['core_min'] = '1.3.0';
        $meta['core_max'] = '1.3.99';
        
        return $meta;
    }
}

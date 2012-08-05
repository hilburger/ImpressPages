<?php
/**
 * @package ImpressPages
 * @copyright   Copyright (C) 2011 ImpressPages LTD.
 * @license see ip_license.html
 */

namespace Modules\developer\inline_value;


class Service
{
    private $module;
    private $dao;
    /**
     * @param string $module
     */
    public function __construct($module)
    {
        $this->module = $module;
        $this->dao = new Dao($this->module);
    }

    // GET
    public function getValue($key, $languageId, $zoneName, $pageId)
    {
        return $this->dao->getValue($key, $languageId, $zoneName, $pageId);
    }

    public function getPageValue($key, $zoneName, $pageId)
    {
        return $this->dao->getPageValue($key, $zoneName, $pageId);
    }

    public function getLanguageValue($key, $languageId)
    {
        return $this->dao->getLanguageValue($key, $languageId);
    }

    public function getGlobalValue($key)
    {
        return $this->dao->getGlobalValue($key);
    }

    /**
     * Last get operation scope
     * @return int
     */
    public function getLastOperationScope()
    {
        return $this->dao->lastValueScope();
    }

    // SET
    public function setPageValue($key, $zoneName, $pageId, $value)
    {
        return $this->dao->setPageValue($key, $zoneName, $pageId, $value);
    }


    public function setLanguageValue($key, $languageId, $value)
    {
        return $this->dao->setLanguageValue($key, $languageId, $value);
    }

    public function setGlobalValue($key, $value)
    {
        return $this->dao->setGlobalValue($key, $value);
    }

    // DELETE
    public function deletePageValue($key, $zoneName, $pageId)
    {
        $this->dao->deletePageValue($key, $zoneName, $pageId);
    }

    public function deleteLanguageValue($key, $languageId)
    {
        $this->dao->deleteLanguageValue($key, $languageId);
    }

    public function deleteGlobalValue($key)
    {
        $this->dao->deleteGlobalValue($key);
    }

}
<?php
namespace Mgrid\Jobs\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'mgrid_careers_jobs';

    protected $_cacheTag = 'mgrid_careers_jobs';

    protected $_eventPrefix = 'mgrid_careers_jobs';

    protected function _construct()
    {
        $this->_init('Mgrid\Jobs\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}

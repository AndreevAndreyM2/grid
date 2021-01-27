<?php
namespace Mageplaza\HelloWorld\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'mgrid_careers_jobs_collection';
    protected $_eventObject = 'jobs_collection';


    protected function _construct()
    {
        $this->_init('Mgrid\Jobs\Model\Post', 'Mgrid\Jobs\Model\ResourceModel\Post');
    }

}


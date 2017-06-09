<?php
namespace Kwf\Queue;
class ModelProvider extends \Kwf_Model_Provider_Abstract
{
    public function findModels()
    {
        $ret = array();
        self::_findAllInstancesProcessModel($ret, \Kwf_Model_Abstract::getInstance('Kwf\Queue\QueueModel'));
        return $ret;
    }
}

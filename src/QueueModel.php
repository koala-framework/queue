<?php
namespace Kwf\Queue;
class QueueModel extends Kwf_Model_Db
{
    protected $_table = 'kwf_queue';
    protected $_rowClass = 'QueueRow';

    protected function _init()
    {
        parent::_init();
    }

    public function addJob($class, $payload)
    {
        $row = $this->createRow();
        $row->class = $class;
        $row->payload = $payload;
        $row->status = 'queued';
        $row->created = date('Y-m-d H:i:s');
        $row->save();

        \Kwf_Cache_Simple::add('kwf-queue-has-workload', '1');
    }
}

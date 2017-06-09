<?php
namespace Kwf\Queue;
class QueueRow extends Kwf_Model_Db_Row
{
    public function run()
    {
        $className = $this->class;
        $job = new $className();
        $job->run($this);
    }
}

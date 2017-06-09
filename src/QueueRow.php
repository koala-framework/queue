<?php
namespace Kwf\Queue;
class QueueRow extends \Kwf_Model_Db_Row
{
    public function run()
    {
        $className = $this->class;
        $job = new $className();
        $result = $job->run(json_decode($this->payload));
        $this->result = json_encode($result);
        $this->save();
    }
}

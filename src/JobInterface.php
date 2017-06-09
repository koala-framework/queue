<?php
namespace Kwf\Queue;
interface Job
{
    public function run(QueueRow $job);
}

<?php
namespace Kwf\Queue;
interface JobInterface
{
    public function run($payload);
}

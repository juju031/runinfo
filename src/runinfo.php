<?php
namespace juju\Runinfo;

use Yii;

class Runinfo
{
	public $start_time;
	public $end_time;
	public $start_mem;
	public $end_mem;

	public function start()
	{
		$this->start_mem = memory_get_usage();
        $this->start_time = microtime(true);
	}

	public function end()
	{
		$this->end_time = microtime(true);
        $this->end_mem = memory_get_usage();

        if(($this->end_time - $this->start_time) < 1000)
        {
            $data['run_time'] = round(($this->end_time - $this->start_time) * 1000,1).'毫秒';
        }else{
            $data['run_time'] = round($this->end_time - $this->start_time,3).'秒';
        }
        
        if(($this->end_mem - $this->start_mem) < 1024)
        {
            $data['run_mem'] = round(($this->end_mem - $this->start_mem) ,3).'Bit';
        }
        else if(($end_mem - $start_mem) < 1048573)
        {
            $data['run_mem'] = round(($this->end_mem - $this->start_mem)/1024 ,3).'K';
        }
        else
        {
            $data['run_mem'] = round(($this->end_mem - $this->start_mem)/1048573 ,3).'M';
        }
        return $data;
	}
}
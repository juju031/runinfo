## 运行信息

##安装

```
composer require "juju/runinfo:dev-master"

"juju/runinfo": "~dev-master"
```

##控制器顶部
```
use \juju\runinfo\Runinfo;
```

##控制器调用
```
$runinfo = new Runinfo();
$runinfo->start();		//开始点，统计内存占用和时间点

$rundata = $runinfo->end();		//结束时间点返回结果数组
print_r($rundata);
exit();
```

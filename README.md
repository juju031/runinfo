## 运行信息

##安装

```
composer require "juju/runinfo:1.0"

"juju/runinfo": "~1.0.0"
```

```
方法begin无返回
```

##convert控制器顶部
```
use \juju\runinfo\Runinfo;
```

##end控制器调用
```
$number = 99999999999;
$rundata (new Runinfo())->end();
print_r($rundata);
exit();
```

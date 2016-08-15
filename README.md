## 数值转人民币
```
方法convert
```

##安装

```
composer require "juju/number2rmb:1.0"

"juju/curl": "~1.0.0"
```

##convert控制器顶部
```
use \juju\curl\Number2rmb;
```

##GET控制器调用
```
$number = 9999;
$curl = new Number2rmb();
$info = $Number2rmb->convert($number);
echo $info;
exit();
```

# Che Shi Ben Push PHP SDK


## 简介
车事本消息推送PHP SDK，主要用于向车事本用户推送系统消息。所有接口都已做单元测试，具体参考`tests`目录文件。

## 安装扩展

### 使用[composer](https://getcomposer.org/)
> composer 是php的包管理工具， 通过composer.json里的配置管理依赖的包，同时可以在使用类时自动加载对应的包, 在你的composer.json中添加如下依赖

执行
```
composer require bravist/cnvex
```

使用 Composer 的 autoload 引入
```php
require_once('vendor/autoload.php');
```

### 手动引入
``` php
require_once('/path/to/cnvex/api.php');
```

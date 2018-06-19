## 项目概述

* 产品名称：Laravel初始项目包
* 项目代码：laravel-starter-kit

[Laravel 5.5](https://laravel-china.org/docs/laravel/5.5) 版本。

## 运行环境

- Nginx 1.8+
- PHP 7.1+
- Mysql 5.7+
- Redis 3.0+

## 开发环境部署/安装

本项目代码使用 PHP 框架 [Laravel 5.5](http://laravel-china.org/docs/5.5/) 开发，本地开发环境使用 [Docker](http://www.docker.com)。

### 基础安装

#### 1. 克隆源代码

克隆源代码到本地：

    > git clone https://github.com/ikerlin/laravel-starter-kit.git

#### 2. 生成配置文件

    > cp .env.example .env

### 前端工具集安装

> 代码里自带编译后的前端代码，如果你不想开发前端样式的话，你是不需要配置前端工具集的，可直接跳过直达 `链接入口` 部分。

1). 安装 node.js

直接去官网 [https://nodejs.org/en/](https://nodejs.org/en/) 下载安装最新版本。

2). 安装 Gulp

```shell
npm install --global gulp
```

3). 安装 Laravel Elixir

```shell
npm install
```

4). 直接 Gulp 编译前端内容

```shell
gulp
```

5). 监控修改并自动编译

```shell
gulp watch
```

### 链接入口

> 请修改 `.env` 文件为 `APP_ENV=local` 和 `APP_DEBUG=true` 。

* 首页地址：http://example.test/
* 管理后台：http://example.test/admin

至此, 安装完成。

## 扩展包描述

| 扩展包 | 一句话描述 | 在本项目中的使用案例 |  
| --- | --- | --- |   
| [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper.git) | IDE帮助工具 | 生成相应代码提示 |
| [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) | Laravel Debugbar | Laravel Debugbar |
| [guzzlehttp/guzzle](http://guzzle-cn.readthedocs.io/zh_CN/latest/overview.html) | http请求封装 | 请求外部API |
| [doctrine/dbal](https://github.com/doctrine/dbal) | 数据库抽象层 | 对已存在的数据表作更改 |

## 自定义 Artisan 命令列表

| 命令 | 说明 |
| --- | --- |
无

## 计划任务

此项目的计划任务都以 Laravel 的 [任务调度](https://laravel-china.org/docs/laravel/5.5/scheduling) 方式执行。

| 命令 | 说明 | 调用 |
| --- | --- | --- |
无

## License

> 

在遵守以上规则的情况下，你可以享受等同于 MIT 协议的授权。
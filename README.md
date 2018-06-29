# DatabaseDesign

数据库课程设计

github项目地址: https://github.com/JunhuaiYang/DatabaseDesign


## About

华中科技大学 计算机科学与技术 物联网工程 2018 年春季数据库系统原理课程设计

## 题目：租车管理系统

<b> 开发架构： </b> B/S

<b> 开发语言： </b> HTML/CSS + JS + PHP

<b> 运行环境： </b> Ubuntu16.04 LTS + MySQL + Apache

## 演示

该系统所有功能暂时放在我的服务器上

可到
http://www.gryphon.top/
演示使用

***

## 环境及数据库配置

    本实验使用的是MySQL数据库，在数据库使用前，因新建立一个数据库用户
    账号：rental  密码：66778899
    权限：car_rental 数据库全部权限
    然后使用mysql的数据导入命令导入位于SQL_file文件夹下的dump.sql文件
    该文件中包含所有表的结构、视图结构和有一定规模的数据量
    完成后设置服务器工作目录就可以运行。

## 依赖库

    本项目使用到Smarty模板引擎
    依赖文件在目录 admin/smarty/libs
    工作目录 admin/templates

## 使用帮助

    可在实验报告中4.6节 程序测试中查看


## 实验文件说明

### html_file 

    该文件夹存放修改完成的静态html模板

### http 

    该文件夹用于存放服务器运行的所有代码，即服务器的工作目录。
    所有前端后台代码都在里面。

    admin文件夹是后台管理员运行目录
    用户运行目录就在根目录


### Requrement
 
    该目录是前端原始模板

### SQL_file 

    该目录保存SQL备份文件和表机视图创建文件

***

## 实现

* 功能基本实现
* 前端后端分别为两个界面
* 自动切换状态
* 对所有页面做了权限控制

## 前端模板来源

模板之家：
http://www.cssmoban.com/tags.asp?n=html5
## 简介

PublicModel 是继承ThinkPHP的Model类二次封装的数据库操作类，基本满足增删改查业务。PublicModel类方法基本抛弃了ThinkPHP中的大多数方法，大多数业务情况下都是需要原生sql语句进行操作

## 查操作

查操作主要是用了find，select，count，query方法

*  think_select_one 基于ThinkPHP的find方法封装的简单查询
*  think_select_all 基于ThinkPHP的selcet方法封装的简单查询
*  think_count 基于ThinkPHP的count方法封装的查询，用于简单的统计查询
*  native_select_one 基于ThinkPHP的query方法封装的查询，用于复杂的查询操作
*  native_select_all 基于ThinkPHP的query方法封装的查询，用于复杂的查询操作

## 增删改操作

执行类操作主要是用了save，add，delete方法

*  think_update 基于ThinkPHP的save方法封装的简单的更新操作
*  think_insert 基于ThinkPHP的add方法封装的简单的插入操作
*  think_delete 基于ThinkPHP的delete方法封装的简单的删除操作
*  native_execute 基于ThinkPHP的execute方法封装的方法，用于复杂的增删改

## 说明
重要！重要！重要！使用PublicModel类的方法，必须不依赖于数据库的主键自增，所有数据的新增，主键id都是由单独的表sequence来维护，，所以使用PublicModel类方法得先执行sequence.sql文件中的所有SQL语句

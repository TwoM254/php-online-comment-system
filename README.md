

PROJECT NAME:PHP ONLINE COMMENT SYSTEM
--------------------------------------

hey, our project is being developed using codeigninet 4 is a PHP MVC framework used for developing web applications rapidly
   
this project deals on how students can get information for php at time 

problems this project is their to solve

-improve perfornmance of student becouse of it is not possible to asked question during attend the class
  due to few hour of learning
- this system allow the teacher to know the problems of students in order to start on it at next class

The Pre-Requisite For Codeigniter 4
===========================================

-System must have php 7.2+.
-The composer must have installed into the system.
-The php internationalize package(php_intl.dll) must be enabled.

-I am using xampp to install and configure codeigniter, You can check php version using below command –

C:\xampp\htdocs\codeigniter-blog>php -v
-PHP 7.3.8 (cli) (built: Jul 30 2019 12:44:06) ( ZTS MSVC15 (Visual C++ 2017) x64 )
-Copyright (c) 1997-2018 The PHP Group



-C:\xampp\htdocs\codeigniter-blog>php -v
-PHP 7.3.8 (cli) (built: Jul 30 2019 12:44:06) ( ZTS MSVC15 (Visual C++ 2017) x64 )
-Copyright (c) 1997-2018 The PHP Group
-Zend Engine v3.3.8, Copyright (c) 1998-2018 Zend Technologies

Install CodeIgniter In Xampp
--------------------------------

-I am using composer to install package. Open the window command window and run below command –

-composer create-project codeigniter4/php online comment system codeigniter-blog -s rc

-codeigniter-blog is a your codeigniter project name.

-I am creating skeleton app of codeigniter 4, The CodeIgniter 4 app starter repository holds a skeleton application, with a composer dependency on the latest released version of the framework.

-Now, We will update dependency using below command. Whenever there is a new release, then from the command line in your project root:

-composer update


How to run PHP ONLINE COMMENT SYSTEM
=====================================
-install xampp, composer
-downoan project(php online comment system) on github and coppy&paste to xampp/htdocs
-create database called "arv"
-open project in IDE and edit file called ".env" uncomment CI_ENVIRONMENT = development 
go down and database.default.hostname=localhost
	    database.default.database=arv
	    database.default.username=root
            database.default.password= 

- import table from project xampp/htdocs/php online comment system/DB/arv.sql
-before run project you must test codeingiter by using php spark serve on you terminal(visual studio),
and  add url localhost:8080/welcome/index1.
-if you're student click on student button ,sign in if  you have an account 
esle click on link called "i don't have an account" create account after  back to sign in.
-click on post comment on left handside and fill requerement click Post Now and logout.



-if u are lecture click lecture button,
     there are 2 registered acount of recture by admin are: 1.iradukunda@gmail.com   pass:12345
							    2.muh3@gmai.com          pass:12345

-look the student made comment read and logout.

-if you are admin you must register another lecture 
by  write in url localhost:8080/admin
    there two account registered : 1.username:Fabio	pass:fabio123
				   2.username:Moses     pass:Moses123
-admin could add new lecture and delelete comment.

 



authors
=======
this mini project is being built by NIYITANGA moise and KWIZERA eric

structure of project
====================
our projects has three main parts (mvc) model controller

models
=======
1.admin_model.php
2.commentModel.php
3.userModel.php
4.lectModel.php

 views 
========
dashboard
--------
1.addcomment.php
2.index.php
3.indexx.php

pocsviews
---------
1.admin_login.php
2.deletecomment.php
3.lect_login.php
4.lect_register.php
5.login.php
6.main_view.php
7.register.php

controler
=========
1.admin.php
2.Dashboard.php
3.lectcontroller.php
4.main.php
5.pocscontroller
6.tablecontroller.php
7.welcome.php







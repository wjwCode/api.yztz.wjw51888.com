<?php
return [
	//前台
    '/'				=> ['index/Index/index',['method' =>'get|post']],//首页
    'test'				=> ['index/Test/index',['method' =>'get|post']],//test

    //后台
    '[admin]' =>[
    	'index3' =>['admin/Index/index3'],
    	'index1' =>['admin/Index/index1'],
    ],
    ['method' =>'get|post'] //通配方法
];

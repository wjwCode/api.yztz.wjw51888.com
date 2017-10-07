<?php
return [
    'title' => "王金伟的API接口文档管理系统",  //文档title
    'version'=>'1.0.0', //文档版本
    'copyright'=>'Powered By 王金伟', //版权信息
    'controller' => [
        //需要生成文档的类
         'app\\index\\controller\\Index',//首页
         'app\\index\\controller\\Test',//test
         'app\\admin\\controller\\Index',//test
    ],
    'filter_method' => [
        //过滤 不解析的方法名称
        '_empty'
    ],
    'return_format' => [
        //数据格式
        'status' => "200/300/301/302",
        'message' => "提示信息",
    ],
    'public_header' => [
        //全局公共头部参数
        //如：['name'=>'version', 'require'=>1, 'default'=>'', 'desc'=>'版本号(全局)']
    ],
    'public_param' => [
        //全局公共请求参数，设置了所以的接口会自动增加次参数
        //如：['name'=>'token', 'type'=>'string', 'require'=>1, 'default'=>'', 'other'=>'' ,'desc'=>'验证（全局）')']
    ],
];

<?php
namespace app\index\controller;
use app\index\model\User;

/**
 * @title index
 * @description 接口说明
 * @header name:key require:1 default: desc:秘钥(区别设置)
 * @param name:public type:int require:1 default:1 other: desc:公共参数(区别设置)
 */
class Index extends \think\Controller
{
	 /**
     * @title index
     * @url /
     * @description 接口说明
     * @author 开发者
     * 
     * @method GET
     *
     * @header name:device require:1 default: desc:设备号
     *
     * @param name:id type:int require:1 default:1 other: desc:唯一ID
     *
     * @return name:名称
     * @return mobile:手机号
     * @return list_messages:消息列表@
     * @list_messages message_id:消息ID content:消息内容
     * @return object:对象信息@!
     * @object attribute1:对象属性1 attribute2:对象属性2
     * @return array:数组值#
     * @return list_user:用户列表@
     * @list_user name:名称 mobile:手机号 list_follow:关注列表@
     * @list_follow user_id:用户id name:名称
     */
	public function index()
	{
		$User = new User();

		// $name = 'this is name';
		// $name2 = $User -> $name;
		return $this->fetch('../application/index/view/Index.tpl',[
			'name' => $User->name,
			'name2' => $User->name2,
			'name3' => $User->name3,
			'name4' => $User->name4,
		]);
	}
      /**
     * @title index1
     * @url /
     * @description 接口说明
     * @author 开发者
     * 
     * @method GET
     *
     * @header name:device require:1 default: desc:设备号
     *
     * @param name:id type:int require:1 default:1 other: desc:唯一ID
     *
     * @return name:名称
     * @return mobile:手机号
     * @return list_messages:消息列表@
     * @list_messages message_id:消息ID content:消息内容
     * @return object:对象信息@!
     * @object attribute1:对象属性1 attribute2:对象属性2
     * @return array:数组值#
     * @return list_user:用户列表@
     * @list_user name:名称 mobile:手机号 list_follow:关注列表@
     * @list_follow user_id:用户id name:名称
     */
     public function index1()
     {
          return 'index1';
     }
	public function index2()
     {
          return 'index2';
     }
     public function index3()
	{
		return 'index3';
	}
}

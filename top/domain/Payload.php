<?php

/**
 * payload
 * @author auto create
 */
class Payload
{
	
	/** 
	 * 设备信息列表
	 **/
	public $device_info_list;
	
	/** 
	 * 云云对接的技能id
	 **/
	public $skill_id;
	
	/** 
	 * 用户token，云云接入设备必填
	 **/
	public $token;
	
	/** 
	 * 设备接入类型，1: 表示零配  2：表示 云云
	 **/
	public $type;	
}
?>
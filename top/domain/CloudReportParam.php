<?php

/**
 * 上报总入参
 * @author auto create
 */
class CloudReportParam
{
	
	/** 
	 * 账号类型（1：token 2：openUserId）
	 **/
	public $account_type;
	
	/** 
	 * 设备id
	 **/
	public $device_id;
	
	/** 
	 * 保留业务字段
	 **/
	public $extension;
	
	/** 
	 * 消息id，问题定位用
	 **/
	public $message_id;
	
	/** 
	 * 天猫精灵授权给厂商的userId
	 **/
	public $open_user_id;
	
	/** 
	 * 设备状态或者事件Map组成的Json字符串
	 **/
	public $payload;
	
	/** 
	 * 协议版本（原有协议版本为1，新版协议为2）
	 **/
	public $payload_version;
	
	/** 
	 * 上报类型，1：属性上报 2：在离线上报 3：事件上报
	 **/
	public $report_type;
	
	/** 
	 * 技能id
	 **/
	public $skill_id;
	
	/** 
	 * 上报时间戳(毫秒)
	 **/
	public $time_stamp;
	
	/** 
	 * 用户accessToken
	 **/
	public $user_access_token;	
}
?>
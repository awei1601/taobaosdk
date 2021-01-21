<?php

/**
 * 接口返回model
 * @author auto create
 */
class Result
{
	
	/** 
	 * 附加信息
	 **/
	public $message;
	
	/** 
	 * 设备列表更新通知是否成功
	 **/
	public $result;
	
	/** 
	 * 请求响应码，200代表成功
	 **/
	public $status_code;	
}
?>
<?php
/**
 * TOP API: alibaba.ailabs.iot.device.list.update.notify request
 * 
 * @author auto create
 * @since 1.0, 2020.06.18
 */
class AlibabaAilabsIotDeviceListUpdateNotifyRequest
{
	/** 
	 * 厂商在天猫精灵开放平台申请的技能id
	 **/
	private $skillId;
	
	/** 
	 * 用户OAuth授权后的token
	 **/
	private $token;
	
	/** 
	 * 更新类型 1：设备更新 2：场景更新
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setSkillId($skillId)
	{
		$this->skillId = $skillId;
		$this->apiParas["skill_id"] = $skillId;
	}

	public function getSkillId()
	{
		return $this->skillId;
	}

	public function setToken($token)
	{
		$this->token = $token;
		$this->apiParas["token"] = $token;
	}

	public function getToken()
	{
		return $this->token;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "alibaba.ailabs.iot.device.list.update.notify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->skillId,"skillId");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

<?php
/**
 * TOP API: alibaba.ailabs.iot.device.status.update request
 * 
 * @author auto create
 * @since 1.0, 2019.12.03
 */
class AlibabaAilabsIotDeviceStatusUpdateRequest
{
	/** 
	 * 入参设备信息
	 **/
	private $deviceStatusDTO;
	
	private $apiParas = array();
	
	public function setDeviceStatusDTO($deviceStatusDTO)
	{
		$this->deviceStatusDTO = $deviceStatusDTO;
		$this->apiParas["device_status_d_t_o"] = $deviceStatusDTO;
	}

	public function getDeviceStatusDTO()
	{
		return $this->deviceStatusDTO;
	}

	public function getApiMethodName()
	{
		return "alibaba.ailabs.iot.device.status.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

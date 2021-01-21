<?php
/**
 * TOP API: alibaba.ailabs.iot.cloud.device.report request
 * 
 * @author auto create
 * @since 1.0, 2020.04.07
 */
class AlibabaAilabsIotCloudDeviceReportRequest
{
	/** 
	 * 上报总入参
	 **/
	private $cloudReportParam;
	
	private $apiParas = array();
	
	public function setCloudReportParam($cloudReportParam)
	{
		$this->cloudReportParam = $cloudReportParam;
		$this->apiParas["cloud_report_param"] = $cloudReportParam;
	}

	public function getCloudReportParam()
	{
		return $this->cloudReportParam;
	}

	public function getApiMethodName()
	{
		return "alibaba.ailabs.iot.cloud.device.report";
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

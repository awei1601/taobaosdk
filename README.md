## TOP-SDK使用说明
    淘宝开放平台SDK提供了API的请求封装、摘要签名、响应解释、消息监听等功能，使用SDK可以轻松完成API的调用、API结果的获取、消息的实时监听。
## 环境依赖
```
    PHP SDK 需要依赖 PHP 5及以上
```
## 使用场景
```
    ①：百川基础：提供数据分析、推送、地图、IM、图片服务等基础能力，为移动app保驾护航
    ②：用于天猫精灵云云对接的设备状态上报及设备列表更新通知权限
    ③：百川SDK网关专用，提供SDK各个功能的访问权限
    ④：提供系统时间查询、地址区域查询等系统API。
```
## 使用示例
### 百川基础能力（新）[文档地址](https://open.taobao.com/api.htm?docId=23431&docType=2&scopeId=11773)
```php
    // taobao.mtop.upload.token.get( 获取文件上传授权 )
    $appkey = ".........";
    $secret = ".........";
    $c = new TopClient;
    $c->appkey = $appkey;
    $c->secretKey = $secret;
    $req = new MtopUploadTokenGetRequest;
    $param_upload_token_request = new UploadTokenRequestV;
    $param_upload_token_request->file_size="1024";
    $param_upload_token_request->private_data="{\"appkey\": \"1234\"}";
    $param_upload_token_request->upload_type="resumable";
    $param_upload_token_request->crc="12345678";
    $param_upload_token_request->client_net_type="wifi";
    $param_upload_token_request->file_name="/tmp/image.jpg";
    $param_upload_token_request->biz_code="mtopupload";
    $req->setParamUploadTokenRequest(json_encode($param_upload_token_request));
    $resp = $c->execute($req);
```
### 百川网关基础权限包[文档地址](https://open.taobao.com/api.htm?docId=25116&docType=2&scopeId=11741)
```php
    //taobao.baichuan.user.login( 百川H5登录 )
    $appkey = ".........";
    $secret = ".........";
    $c = new TopClient;
    $c->appkey = $appkey;
    $c->secretKey = $secret;
    $req = new BaichuanUserLoginRequest;
    $req->setName("name");
    $resp = $c->execute($req);
```
### 提供系统时间查询、地址区域查询等系统API[文档地址](https://open.taobao.com/api.htm?docId=120&docType=2&scopeId=381)
```php
    //taobao.time.get( 获取淘宝系统当前时间 )
    $appkey = ".........";
    $secret = ".........";
    $c = new TopClient;
    $c->appkey = $appkey;
    $c->secretKey = $secret;
    $req = new TimeGetRequest;
    $resp = $c->execute($req);
```
### 天猫精灵云云对接设备状态上报及设备列表更新通知[文档地址](https://open.taobao.com/api.htm?docId=42174&docType=2&scopeId=16015)
```php
    $appkey = ".........";
    $secret = ".........";
    //alibaba.ailabs.iot.device.status.update( ailabs iot 设备状态更新 )
    $c = new TopClient;
    $c->appkey = $appkey;
    $c->secretKey = $secret;
    $req = new AlibabaAilabsIotDeviceStatusUpdateRequest;
    $device_status_d_t_o = new DeviceStatusDto;
    $payload = new Payload;
    $payload->token="e5d0220c162e4a43a4b2b9435e35273d";
    $device_info_list = new DeviceInfo;
    $device_info_list->dev_id="780f77814dc5";
    $status = new Status;
    $status->powerstate="on";
    $status->mode="cold";
    $status->temperature="25";
    $status->brightness="50";
    $status->windspeed="2";
    $device_info_list->status = $status;
    $payload->device_info_list = $device_info_list;
    $payload->skill_id="123";
    $payload->type="1";
    $device_status_d_t_o->payload = $payload;
    $header = new IotCommonHeader;
    $header->pay_load_version="1";
    $header->name="Update";
    $header->message_id="xxxx";
    $header->namespace="AliGenie.Iot.Device.Status";
    $device_status_d_t_o->header = $header;
    $req->setDeviceStatusDTO(json_encode($device_status_d_t_o));
    $resp = $c->execute($req);
    
    // alibaba.ailabs.iot.device.list.update.notify( 设备列表更新通知 )
    $c = new TopClient;
    $c->appkey = $appkey;
    $c->secretKey = $secret;
    $req = new AlibabaAilabsIotDeviceListUpdateNotifyRequest;
    $req->setToken("xxx");
    $req->setSkillId("xxx");
    $req->setType("1");
    $resp = $c->execute($req);

    // alibaba.ailabs.iot.cloud.device.report( 天猫精灵云云接入设备状态、事件上报接口 )
    $c = new TopClient;
    $c->appkey = $appkey;
    $c->secretKey = $secret;
    $req = new AlibabaAilabsIotCloudDeviceReportRequest;
    $cloud_report_param = new CloudReportParam;
    $cloud_report_param->payload="{     \"onlinestate\": 1   }";
    $cloud_report_param->device_id="devId_1233";
    $cloud_report_param->user_access_token="token_123";
    $cloud_report_param->open_user_id="1234561232";
    $cloud_report_param->account_type="1";
    $cloud_report_param->skill_id="513";
    $cloud_report_param->time_stamp="4325435435";
    $cloud_report_param->message_id="messageId_123";
    $cloud_report_param->payload_version="2";
    $cloud_report_param->report_type="1";
    $req->setCloudReportParam(json_encode($cloud_report_param));
    $resp = $c->execute($req);
```
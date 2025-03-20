<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNetworkFirewallPolicyYamlDetail返回参数结构体
 *
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 * @method string getPolicyName() 获取策略名
 * @method void setPolicyName(string $PolicyName) 设置策略名
 * @method string getYaml() 获取base64编码的yaml字符串
 * @method void setYaml(string $Yaml) 设置base64编码的yaml字符串
 * @method string getDescription() 获取策略描述
 * @method void setDescription(string $Description) 设置策略描述
 * @method string getPolicyCreateTime() 获取策略创建时间
 * @method void setPolicyCreateTime(string $PolicyCreateTime) 设置策略创建时间
 * @method string getPolicySourceType() 获取策略源类型，分为System和Manual，分别代表手动和系统添加
 * @method void setPolicySourceType(string $PolicySourceType) 设置策略源类型，分为System和Manual，分别代表手动和系统添加
 * @method string getNetworkPolicyPlugin() 获取网络策略对应的网络插件
 * @method void setNetworkPolicyPlugin(string $NetworkPolicyPlugin) 设置网络策略对应的网络插件
 * @method string getPublishStatus() 获取网络策略状态
 * @method void setPublishStatus(string $PublishStatus) 设置网络策略状态
 * @method string getPublishResult() 获取网络发布结果
 * @method void setPublishResult(string $PublishResult) 设置网络发布结果
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNetworkFirewallPolicyYamlDetailResponse extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @var string 策略名
     */
    public $PolicyName;

    /**
     * @var string base64编码的yaml字符串
     */
    public $Yaml;

    /**
     * @var string 策略描述
     */
    public $Description;

    /**
     * @var string 策略创建时间
     */
    public $PolicyCreateTime;

    /**
     * @var string 策略源类型，分为System和Manual，分别代表手动和系统添加
     */
    public $PolicySourceType;

    /**
     * @var string 网络策略对应的网络插件
     */
    public $NetworkPolicyPlugin;

    /**
     * @var string 网络策略状态
     */
    public $PublishStatus;

    /**
     * @var string 网络发布结果
     */
    public $PublishResult;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClusterId 集群Id
     * @param string $PolicyName 策略名
     * @param string $Yaml base64编码的yaml字符串
     * @param string $Description 策略描述
     * @param string $PolicyCreateTime 策略创建时间
     * @param string $PolicySourceType 策略源类型，分为System和Manual，分别代表手动和系统添加
     * @param string $NetworkPolicyPlugin 网络策略对应的网络插件
     * @param string $PublishStatus 网络策略状态
     * @param string $PublishResult 网络发布结果
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PolicyCreateTime",$param) and $param["PolicyCreateTime"] !== null) {
            $this->PolicyCreateTime = $param["PolicyCreateTime"];
        }

        if (array_key_exists("PolicySourceType",$param) and $param["PolicySourceType"] !== null) {
            $this->PolicySourceType = $param["PolicySourceType"];
        }

        if (array_key_exists("NetworkPolicyPlugin",$param) and $param["NetworkPolicyPlugin"] !== null) {
            $this->NetworkPolicyPlugin = $param["NetworkPolicyPlugin"];
        }

        if (array_key_exists("PublishStatus",$param) and $param["PublishStatus"] !== null) {
            $this->PublishStatus = $param["PublishStatus"];
        }

        if (array_key_exists("PublishResult",$param) and $param["PublishResult"] !== null) {
            $this->PublishResult = $param["PublishResult"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * 集群列表Item
 *
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getStatus() 获取集群状态
CSR_RUNNING: 运行中
CSR_EXCEPTION:异常
CSR_DEL:已经删除
 * @method void setStatus(string $Status) 设置集群状态
CSR_RUNNING: 运行中
CSR_EXCEPTION:异常
CSR_DEL:已经删除
 * @method string getBindRuleName() 获取绑定规则名称
 * @method void setBindRuleName(string $BindRuleName) 设置绑定规则名称
 * @method string getClusterType() 获取集群类型:
CT_TKE:TKE集群;
CT_USER_CREATE:用户自建集群;
CT_TKE_SERVERLESS:TKE Serverless集群;
 * @method void setClusterType(string $ClusterType) 设置集群类型:
CT_TKE:TKE集群;
CT_USER_CREATE:用户自建集群;
CT_TKE_SERVERLESS:TKE Serverless集群;
 * @method string getClusterVersion() 获取集群版本
 * @method void setClusterVersion(string $ClusterVersion) 设置集群版本
 * @method integer getMemLimit() 获取内存量
 * @method void setMemLimit(integer $MemLimit) 设置内存量
 * @method integer getCpuLimit() 获取cpu
 * @method void setCpuLimit(integer $CpuLimit) 设置cpu
 */
class AssetClusterListItem extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群状态
CSR_RUNNING: 运行中
CSR_EXCEPTION:异常
CSR_DEL:已经删除
     */
    public $Status;

    /**
     * @var string 绑定规则名称
     */
    public $BindRuleName;

    /**
     * @var string 集群类型:
CT_TKE:TKE集群;
CT_USER_CREATE:用户自建集群;
CT_TKE_SERVERLESS:TKE Serverless集群;
     */
    public $ClusterType;

    /**
     * @var string 集群版本
     */
    public $ClusterVersion;

    /**
     * @var integer 内存量
     */
    public $MemLimit;

    /**
     * @var integer cpu
     */
    public $CpuLimit;

    /**
     * @param string $ClusterID 集群ID
     * @param string $ClusterName 集群名称
     * @param string $Status 集群状态
CSR_RUNNING: 运行中
CSR_EXCEPTION:异常
CSR_DEL:已经删除
     * @param string $BindRuleName 绑定规则名称
     * @param string $ClusterType 集群类型:
CT_TKE:TKE集群;
CT_USER_CREATE:用户自建集群;
CT_TKE_SERVERLESS:TKE Serverless集群;
     * @param string $ClusterVersion 集群版本
     * @param integer $MemLimit 内存量
     * @param integer $CpuLimit cpu
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BindRuleName",$param) and $param["BindRuleName"] !== null) {
            $this->BindRuleName = $param["BindRuleName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("MemLimit",$param) and $param["MemLimit"] !== null) {
            $this->MemLimit = $param["MemLimit"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }
    }
}

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
 * DescribeComplianceTaskPolicyItemSummaryList返回参数结构体
 *
 * @method integer getTaskId() 获取返回最近一次合规检查任务的ID。这个任务为本次所展示数据的来源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(integer $TaskId) 设置返回最近一次合规检查任务的ID。这个任务为本次所展示数据的来源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取返回检测项的总数。
 * @method void setTotalCount(integer $TotalCount) 设置返回检测项的总数。
 * @method array getPolicyItemSummaryList() 获取返回各检测项对应的汇总信息的列表。
 * @method void setPolicyItemSummaryList(array $PolicyItemSummaryList) 设置返回各检测项对应的汇总信息的列表。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeComplianceTaskPolicyItemSummaryListResponse extends AbstractModel
{
    /**
     * @var integer 返回最近一次合规检查任务的ID。这个任务为本次所展示数据的来源。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var integer 返回检测项的总数。
     */
    public $TotalCount;

    /**
     * @var array 返回各检测项对应的汇总信息的列表。
     */
    public $PolicyItemSummaryList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TaskId 返回最近一次合规检查任务的ID。这个任务为本次所展示数据的来源。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 返回检测项的总数。
     * @param array $PolicyItemSummaryList 返回各检测项对应的汇总信息的列表。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("PolicyItemSummaryList",$param) and $param["PolicyItemSummaryList"] !== null) {
            $this->PolicyItemSummaryList = [];
            foreach ($param["PolicyItemSummaryList"] as $key => $value){
                $obj = new CompliancePolicyItemSummary();
                $obj->deserialize($value);
                array_push($this->PolicyItemSummaryList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

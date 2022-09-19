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
namespace TencentCloud\Cloudstudio\V20210524\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecoverWorkspace请求参数结构体
 *
 * @method string getCloudStudioSessionTeam() 获取无
 * @method void setCloudStudioSessionTeam(string $CloudStudioSessionTeam) 设置无
 * @method string getSpaceKey() 获取无
 * @method void setSpaceKey(string $SpaceKey) 设置无
 */
class RecoverWorkspaceRequest extends AbstractModel
{
    /**
     * @var string 无
     */
    public $CloudStudioSessionTeam;

    /**
     * @var string 无
     */
    public $SpaceKey;

    /**
     * @param string $CloudStudioSessionTeam 无
     * @param string $SpaceKey 无
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
        if (array_key_exists("CloudStudioSessionTeam",$param) and $param["CloudStudioSessionTeam"] !== null) {
            $this->CloudStudioSessionTeam = $param["CloudStudioSessionTeam"];
        }

        if (array_key_exists("SpaceKey",$param) and $param["SpaceKey"] !== null) {
            $this->SpaceKey = $param["SpaceKey"];
        }
    }
}

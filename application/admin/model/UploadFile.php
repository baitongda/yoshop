<?php

namespace app\admin\model;

use app\common\model\UploadFile as UploadFileModel;

/**
 * 文件库模型
 * Class UploadFile
 * @package app\admin\model
 */
class UploadFile extends UploadFileModel
{
    /**
     * 添加新记录
     * @param $data
     * @return false|int
     */
    public function add($data)
    {
        return $this->save($data);
    }

}

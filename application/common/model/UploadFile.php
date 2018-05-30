<?php

namespace app\common\model;

/**
 * 文件库模型
 * Class UploadFile
 * @package app\common\model
 */
class UploadFile extends BaseModel
{
    protected $name = 'upload_file';
    protected $updateTime = false;

    public function getFileNameAttr($value, $data)
    {
        if ($data['storage'] === 'local') {
            $file_path = self::$base_url . 'uploads' . DS . $data['file_name'];
        } else {
            $file_path = $value . DS . $data['file_name'];
        }
        return compact('file_path', 'value');
    }

    /**
     * 根据文件名查询文件id
     * @param $fileName
     * @return mixed
     */
    public function getFildIdByName($fileName)
    {
        return $this->where(['file_name' => $fileName])->value('file_id');
    }

    /**
     * 查询文件id
     * @param $fileId
     * @return mixed
     */
    public function getFileName($fileId)
    {
        return $this->where(['file_id' => $fileId])->value('file_name');
    }

}

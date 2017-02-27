<?php

namespace Yuecode\Image;


class YouTu
{
    /**
     * 上传图片文件
     * @param  string $filePath 本地文件路径
     * @param  integer $userid 用户自定义分类
     * @param  string $magicContext 自定义回调参数
     * @param  array $params 参数数组
     * @return [type]                [description]
     */
    public static function uploadImage($filePath, $fileid = '', $userid = 0, $magicContext = '', $params = array())
    {
        $bucket = config('image.BUCKET');
        return ImageV2::upload($filePath, $bucket, $fileid, $userid, $magicContext, $params);
    }

    /**
     * 查询图片
     * @param  string $fileid 文件名
     * @param  string $userid [description]
     * @return array           返回信息
     */
    public static function statImage($fileid, $userid = 0)
    {
        $bucket = config('image.BUCKET');
        return ImageV2::stat($bucket, $fileid, $userid);
    }

    /**
     * 复制图片
     * @param string $fileid 文件名
     * @param string $userid [description]
     * @return array
     */
    public static function copyImage($fileid, $userid = 0)
    {
        $bucket = config('image.BUCKET');
        return ImageV2::copy($bucket, $fileid, $userid);
    }

    /**
     * 删除图片
     * @param string $fileid 文件名
     * @param string $userid [description]
     * @return array
     */
    public static function delImage($fileid, $userid = 0)
    {
        $bucket = config('image.BUCKET');
        return ImageV2::del($bucket, $fileid, $userid);
    }

    /**
     * 上传文件
     * @param  string  $filePath     本地文件路径
     * @param  integer $userid       用户自定义分类
     * @param  string  $magicContext 自定义回调参数
     * @param  array   $params       参数数组
     * @return [type]                [description]
     */
    public static function uploadImageV1($filePath, $userid = 0, $magicContext = '', $params = array()){
        return Image::upload($filePath,$userid,$magicContext,$params);
    }

    /**
     * 查看文件信息
     * @param $fileid
     * @param int $userid
     * @return array
     */
    public static function statImageV1($fileid, $userid = 0) {
        return Image::stat($fileid,$userid);
    }

    /**
     * 复制文件
     * @param $fileid
     * @param int $userid
     */
    public static function copyImageV1($fileid, $userid = 0){
        return Image::copy($fileid,$userid);
    }

    /**
     * 删除图片
     * @param $fileid
     * @param int $userid
     * @return array
     */
    public static function delImageV1($fileid, $userid = 0){
        return Image::del($fileid,$userid);
    }


    /**
     * 上传文件
     * @param  string  $filePath     本地文件路径
     * @param  integer $userid       用户自定义分类
     * @param  string  $title        视频标题
     * @param  string  $desc         视频描述
     * @param  string  $magicContext 自定义回调参数
     * @return [type]                [description]
     */
    public static function uploadVideo($filePath, $userid = 0,$title = '', $desc = '', $magicContext = '') {
        return Video::upload($filePath,$userid,$title,$desc,$magicContext);
    }

    /**
     * 查看视频状态
     * @param $fileid
     * @param int $userid
     */
    public static function statVideo($fileid, $userid = 0) {

        return Video::stat($fileid,$userid);

    }

    /**
     * 查看文件ID
     * @param $fileid
     * @param int $userid
     * @return array
     */
    public static function delVideo($fileid, $userid = 0){
        return Video::del($fileid,$userid);
    }

    /**
     * 智能鉴黄URL
     * @param $pronDetectUrl
     * @return array|string
     */
    public static function pornDetect($pronDetectUrl){
        return ImageProcess::pornDetectUrl($pronDetectUrl);
    }

    /**
     * 智能鉴黄-Urls
     * @param  string  $pornUrl     要进行黄图检测的图片url列表,JSON格式
     */
    public static function pornDetectUrl($pornUrl){
        return ImageProcess::pornDetectUrl($pornUrl);
    }

    /**
     * 智能鉴黄-Files
     * @param  string  $pornFile     要进行黄图检测的图片File列表
     */
    public static function pornDetectFile($pornFile){
        return ImageProcess::pornDetectFile($pornFile);
    }

}
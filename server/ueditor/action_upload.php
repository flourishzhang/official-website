<?php
/**
 * 上传附件和上传视频
 * User: Jinqn
 * Date: 14-04-09
 * Time: 上午10:17
 */
include "Uploader.class.php";

/* 上传配置 */
$base64 = "upload";
switch (htmlspecialchars($_GET['action'])) {
    case 'uploadimage':
        $c = array(
            "pathFormat" => $ueditor_config['imagePathFormat'],
            "maxSize" => $ueditor_config['imageMaxSize'],
            "allowFiles" => $ueditor_config['imageAllowFiles']
        );
        $fieldName = $ueditor_config['imageFieldName'];
        break;
    case 'uploadscrawl':
        $c = array(
            "pathFormat" => $ueditor_config['scrawlPathFormat'],
            "maxSize" => $ueditor_config['scrawlMaxSize'],
            "allowFiles" => $ueditor_config['scrawlAllowFiles'],
            "oriName" => "scrawl.png"
        );
        $fieldName = $ueditor_config['scrawlFieldName'];
        $base64 = "base64";
        break;
    case 'uploadvideo':
        $c = array(
            "pathFormat" => $ueditor_config['videoPathFormat'],
            "maxSize" => $ueditor_config['videoMaxSize'],
            "allowFiles" => $ueditor_config['videoAllowFiles']
        );
        $fieldName = $ueditor_config['videoFieldName'];
        break;
    case 'uploadfile':
    default:
        $c = array(
            "pathFormat" => $ueditor_config['filePathFormat'],
            "maxSize" => $ueditor_config['fileMaxSize'],
            "allowFiles" => $ueditor_config['fileAllowFiles']
        );
        $fieldName = $ueditor_config['fileFieldName'];
        break;
}

/* 生成上传实例对象并完成上传 */
$up = new Uploader($fieldName, $c, $base64);

/**
 * 得到上传文件所对应的各个参数,数组结构
 * array(
 *     "state" => "",          //上传状态，上传成功时必须返回"SUCCESS"
 *     "url" => "",            //返回的地址
 *     "title" => "",          //新文件名
 *     "original" => "",       //原始文件名
 *     "type" => ""            //文件类型
 *     "size" => "",           //文件大小
 * )
 */

/* 返回数据 */
return json_encode($up->getFileInfo());

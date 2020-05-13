<?php
function wf_scandir ( $dir, $wasteimages ) {
    $arrs = scandir ( $dir );
    foreach ( $arrs as $arr ) {
        if($arr === "." || $arr === ".." || $arr === ".gitkeep") {
            continue;
        }
        $filepath = $dir . "/" . $arr;
        if( is_dir ( $filepath ) ) {
            $wasteimages = wf_scandir( $filepath, $wasteimages );
            continue;
        }
        if ( ImgUse ( $filepath ) ) {
            continue;
        }
        array_push ( $wasteimages, $filepath );
    }
    return $wasteimages;
}

$wasteimages = wf_scandir("uploads", array());
// 如果想删除无用的图片，可以启动下面的代码
if ( isset($_GET["rm"]) && $_GET["rm"] == 1 ) {
    foreach ( $wasteimages as $wasteimage ) {
        unlink ($wasteimage);
    }
}
header("Content-Type: text/plain; charset=UTF-8");
echo "如果想直接删除，请直接在网页链接添加\$rm=1\n\n";
echo json_encode ($wasteimages, JSON_UNESCAPED_UNICODE);
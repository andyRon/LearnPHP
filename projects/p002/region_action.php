<?php
header("Content-type:text/html;charset=utf-8");
include './mysqli.php';
global $mysqli;

$type = isset($_GET['type']) ? $_GET['type'] : '';
$parent_id = isset($_GET['parent_id']) ? $_GET['parent_id'] : '';

if ($type == '' || $parent_id == '') {
    exit(json_encode(array('flag' => false, 'msg' => '查询类型错误')));
} else {
//    $sql = "select * from global_region where parent_id=$parent_id and region_type=$type";
    $sql="select *from global_region where parent_id=$parent_id AND region_type=$type";
    $res = $mysqli->query($sql);
    if ($res->num_rows > 0) {
        $arr = [];
        while ($row = $res->fetch_assoc()) {
            $arr[$row['region_id']]['region_id'] = $row['region_id'];
            $arr[$row['region_id']]['region_name'] = $row['region_name'];
        }
    }
    $provinces_json = json_encode($arr);
    exit($provinces_json);
}

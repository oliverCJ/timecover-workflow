<?php
require_once('workflows.php');
$query = "{query}";
$wx = new Workflows();
if (ctype_digit($query) && strlen($query) >= 10) {
    $date = date('Y-m-d H:i:s', $query);
    $wx->result(0, $date, $date, '回车复制到剪贴板' ,'icno.ico');
    echo $wx->toxml();
} else {
    $time = strtotime($query);
    if (!empty($time)) {
        $wx->result(0, $time, $time, '回车复制到剪贴板' ,'icno.ico');
    } else {
        $wx->result(0, '', '转换失败', '非法的入参' ,'icno.ico');
    }
    echo $wx->toxml();
}


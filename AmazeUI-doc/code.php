<?php
//php通过API连接：https://api.1080zyku.com/inc/api_mac10.php 获取分页。"page": 1, 当前页数，"pagecount": 2963, 总页数，"limit": 20, 每页条数，"total": 59260, 总条数。获取分页后，例如： https://api.1080zyku.com/inc/api_mac10.php?ac=list&pg=2 分列表数据第2页。列表接收参数：ac=list，t=类别ID，pg=页码，wd=搜索关键字，h=几小时内的数据。然后循环获取视频数据入库sqlite3。
$apiurl = "https://api.1080zyku.com/inc/api_mac10.php";
//通过$apiurl采集视频数据
$api = file_get_contents($apiurl);
echo $api;




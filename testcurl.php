<?php
/*curl实例
*/
$num=20122110090223;
//$UP = 'user=jwc&pass=jwc';
$data = 'StuID='.urlencode($num);
//$preurl = 'http://jwc.ecjtu.jx.cn/mis_o/login.php'; 
$mainurl ='http://jwc.ecjtu.jx.cn/mis_o/query.php';
$curl = curl_init();
 //
// 设置你需要抓取的URL
curl_setopt($curl, CURLOPT_URL, $mainurl);
 
// 设置header
curl_setopt($curl, CURLOPT_HEADER, 0);
 
// 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_COOKIE,'PHPSESSID=54mptmt4d8rn2jgnpvj0ds6780');


// 运行cURL，请求网页
$data = curl_exec($curl);
if($data === false){
    echo curl_error($curl);	exit;
}
$info = curl_getinfo($curl);
// 关闭URL请求
curl_close($curl);
// 显示获得的数据
//var_dump($info);
echo $data;
$ttime=$info['total_time']+$info['namelookup_time']+$info['connect_time']+$info['pretransfer_time'];
echo 'total time waste:'.$ttime.'s';
////////////////the end of php curl
////////////////power by homker
<?php 
	// 建立CURL連線
	$ch = curl_init();

	// 設定擷取的URL網址
	curl_setopt($ch, CURLOPT_URL, "https://intense-heat-1747.firebaseio.com/users.json");
	//curl_setopt($ch, CURLOPT_URL, "http://www.ncut.edu.tw");
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	//將curl_exec()獲取的訊息以文件流的形式返回，而不是直接輸出。
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

	// 執行
	$temp=curl_exec($ch);
	//echo "test curl";
	echo $temp;

	// 關閉CURL連線
	curl_close($ch)

?>

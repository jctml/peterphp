# 使用方法：

1、引入autoload.php文
例如：
```
	require './vendor/autoload.php';
	
	$data = [
		"name"=>'peter',
		"email"=>"370237804@qq.com"
	];
	
	//返回JSON格式的数据
	\peterphp\Json::ext_json_encode($data);
	
	//解析JSON格式的数据
	Json::ext_json_decode
```	
> 此方法解决JSON键无引号的问题;返回JSON格式的数据，直接带头application/json;charset=utf-8

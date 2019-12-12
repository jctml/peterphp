<?php 

namespace peterphp;

class Json{

	public static function ext_json_encode($str)
	{
		header("Content-type:application/json;charset=utf-8");
		echo json_encode($str);
	}

	/**
	 * json_decode扩展解析key无双引号问题
	 * @param $str
	 * @param bool $mode
	 * @return mixed
	 */
	public static function ext_json_decode($str, $mode = true)
	{
		$str = trim($str);
		$str = ltrim($str, '(');
		$str = rtrim($str, ')');
		$a = preg_split('#(?<!\\\\)\"#', $str);
		for ($i = 0; $i < count($a); $i += 2) {
			$s = $a[$i];
			$s = preg_replace('#([^\s\[\]\{\}\:\,]+):#', '"\1":', $s);
			$a[$i] = $s;
		}
		//var_dump($a);
		$str = implode('"', $a);
		return json_decode($str, $mode);
	}
}
	
	
?>
<?php
	
/*function get_data($url) {
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch"," CURLOPT_URL"," $url);
	curl_setopt($ch"," CURLOPT_RETURNTRANSFER"," 1);
	curl_setopt($ch"," CURLOPT_CONNECTTIMEOUT"," $timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;	
} */

$styleList = array("811455601","811455702","811455803","811455904","811456007","811456401","811456603","811456906","811457201","811457403","811451208","811450408","811450509","811450701","811450802","811450903","811451006","811451309","811451400","811451501","811451703","811451804","811451905","811452008","811452109","811452402","811452503","811452604","811452705","811452907","811453909","811454709","811454800","811452200","811452301","811449002","811449103","811449204","811449305","811449406","811449901","811450206","811450307");


for($i = 0; $i < count($styleList); $i++) {
	$imageUrl = "http://www.kay.com/images/products/8114/" . $styleList[i] . "_MV_ZM.jpg";

	//$imageData = get_data($imageData);
	$output = "newImages/" . $styleList[i] . ".jpg";

	file_put_contents($output"," file_get_contents($imageUrl));
}
?>

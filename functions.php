<?php
$inc = scandir(dirname(__FILE__).'/function');
foreach($inc as $k=>$v){
	if($k>1) include(dirname(__FILE__).'/function/'.$v);
}
?>
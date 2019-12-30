<?php
class Site{
	/*成员变量*/
	var $url;
	var $title;

	/*成员函数*/
	function setUrl($par){
		$this->url = $par;
	}
	
	function getUrl(){
		echo $this->url.PHP_EOL;
	}
	
	function setTitle($par){
		$this->title = $par;
	}

	function getTitle(){
		echo $this->title.PHP_EOL;
	}
}
$xiaobing = new Site();
$xiaobing2 = new Site();
$xiaobing3 = new Site();

$xiaobing->setTitle("我是小兵");
$xiaobing2->setTitle("我是小兵2");
$xiaobing3->setTitle("我是小兵3");

$xiaobing->setUrl("www.xiaobing.com");
$xiaobing2->setUrl("www.xiaobing2.com");
$xiaobing3->setUrl("www.xiaobing3.com");

//调用成员函数，获取标题和URL
$xiaobing->getTitle();
$xiaobing2->getTitle();
$xiaobing3->getTitle();

$xiaobing->getUrl();
$xiaobing2->getUrl();
$xiaobing3->getUrl();
?>

<?php
class code{
	public $letter="abcdegABCDEFH";
	public $letterNum=4;
	public $width=200;
	public $height=80;
	public $lineNum=9;
	public $pixelNum=50;
	public $imgType="png";
	public $img;
	public $curLet;
	public $fontsize=array("min"=>15,"max"=>20);
	public $fonturl="static/font/aa.ttf";//外可改
	
	public function getColor(){//处理颜色
		$arr[0]=mt_rand(0,128);
		$arr[1]=mt_rand(0,128);
		$arr[2]=mt_rand(0,128);
		return $arr;
	}
	public function getFColor(){//处理颜色
		$arr[0]=mt_rand(129,255);
		$arr[1]=mt_rand(129,255);
		$arr[2]=mt_rand(129,255);
		return $arr;
	}
	public function output(){
		header("Content-type:image/".$this->imgType);
		$out="image".$this->imgType;
		//创建画布，填充颜色
		$this->create();
		//文字，随机，颜色
		$this->createText();
		//干扰线，随机，颜色
		$this->createLine();
		//输出	
		$out($this->img);
		imagedestroy($this->img);
	}
	private function create(){
		$this->img=imagecreatetruecolor($this->width,$this->height);
		$this->bgarr=$this->getColor();
		$bgcolor=imagecolorallocate($this->img,$this->bgarr[0],$this->bgarr[1],$this->bgarr[2]);
		imagefill($this->img,0,0,$bgcolor);
	}
	private function createText(){
		$this->curLet=$this->getStr();
		$x=$this->width/$this->letterNum;//平均每个的宽
		for($i=0;$i<$this->letterNum;$i++){
			$farr=$this->getFColor();
			$fcolor=imagecolorallocate($this->img,$farr[0],$farr[1],$farr[2]);
			$fontsize=mt_rand($this->fontsize["min"],$this->fontsize["max"]);
			$rect=imagettfbbox($fontsize,0,$this->fonturl,$this->curLet[$i]);
			$y=mt_rand(($rect[1]-$rect[5]),$this->height);//高度【自身高度，盒子高度】
			$thex=10+($x*$i)+mt_rand(-10,10);//宽度，给定个区间，在自身宽度加上区间数范围内活动变化
			//echo 10+($x*$i)+mt_rand(-10,10),"|";	
			$angle=mt_rand(-15,15);//角度
			imagettftext($this->img,$fontsize,$angle,$thex,$y,$fcolor,$this->fonturl,$this->curLet[$i]);
		}
		
	}
	
	private function getStr(){//截取每次从字符串拿一个
		$str="";
		while(strlen($str)<$this->letterNum){//只要长度小于指定长度，就一直从字符串中取字符,老师做的是for循环
			$ind=mt_rand(0,strlen($this->letter)-1);//从字符串里随便取一个下标
			$str.=$this->letter[$ind];
		}
		return $str;
	}
	private function createLine(){
		for($i=0;$i<$this->lineNum;$i++){
			$this->bgarr=$this->getColor();
			$lcolor=imagecolorallocate($this->img,$this->bgarr[0],$this->bgarr[1],$this->bgarr[2]);
			$posarr=$this->getPos();
			imageline($this->img,$posarr[0],$posarr[1],$posarr[2],$posarr[3],$lcolor);
		}	
		for($q=0;$q<$this->pixelNum;$q++){
			$this->bgarr=$this->getColor();
			$lcolor=imagecolorallocate($this->img,$this->bgarr[0],$this->bgarr[1],$this->bgarr[2]);
			$posarr=$this->getPos();
			imagesetpixel($this->img,$posarr[0],$posarr[1],$lcolor);
		}	
	}
	private function getPos(){
		$arr[0]=mt_rand(0,$this->width);
		$arr[1]=mt_rand(0,$this->height);
		$arr[2]=mt_rand(0,$this->width);
		$arr[3]=mt_rand(0,$this->height);
		return $arr;
	}
}
?>

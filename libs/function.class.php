<?php
class infinite{
	function __construct(){
		$this->str="";
		//和函数同名相当于构造函数，或者__construct[两个下划线]
	}
	function tree($pid,$flag,$db,$table,$current=null){
		$flag=$flag+1; //flag第几层，数字
		if($current){
			$sql1="select * from $table where scid=".$current;//查找子元素的父元素，要让默认选中
			$result1=$db->query($sql1);
			$currentPid=$result1->fetch_assoc()["spid"];
		}
		$sql="select * from $table where spid=".$pid;
		$result=$db->query($sql);
		
		while($row=$result->fetch_assoc()){	
			$str=str_repeat('--',$flag);//表示字符串重复指定的函数 
			$cid=$row["scid"];
			$cname=$row["scname"];
			if($current){
				if($cid==$currentPid){//判断如果这个子的父元素等于当前的cid,让执行选中
					$this->str.="<option value='$cid' selected='selected'>{$str}{$cname}</option>";
					$this->tree($cid,$flag,$db,$table);	
				}else{
					$this->str.="<option value='$cid'>{$str}{$cname}</option>";	
					$this->tree($cid,$flag,$db,$table,$current);
				}
			}else{
				$this->str.="<option value='$cid'>{$str}{$cname}</option>";	
				$this->tree($cid,$flag,$db,$table);	
			}
		}
		return $this->str;
	}
	function table($pid,$fla,$db,$table){ 
		$fla=$fla+1; 
		$sql="select * from $table where spid=".$pid;
		$result=$db->query($sql);	
		while($row=$result->fetch_assoc()){
			$str=str_repeat('--',$fla);
			$cid=$row["scid"];
			$cname=$str.$row["scname"];
			$pid=$row["spid"];
			$cimgurl=$row["cimgurl"];
			$this->str.="<tr><td>{$cid}</td><td>{$cname}</td><td>{$pid}</td><td>{$cimgurl}</td><td><a href='del.php?id=$cid'>删除</a><a href='edit.php?id=$cid'>编辑</a></td></tr>";		
			$this->table($cid,$fla,$db,$table);
		}
		return $this->str;
	}
	//查找当前得id让默认选中：
	function treeid($pid,$flag,$db,$table,$current){
		$flag=$flag+1; //flag第几层，数字
		$sql="select * from $table where spid=".$pid;
		$result=$db->query($sql);
		while($row=$result->fetch_assoc()){	
			$str=str_repeat('--',$flag);//表示字符串重复指定的函数 
			$cid=$row["scid"];
			$cname=$row["scname"];
			if($cid==$current){
				$this->str.="<option value='$cid' selected='selected'>{$str}{$cname}</option>";
				$this->treeid($cid,$flag,$db,$table,$current);	
			}else{
				$this->str.="<option value='$cid'>{$str}{$cname}</option>";	
				$this->treeid($cid,$flag,$db,$table,$current);
			}
		}
		return $this->str;
	}	
}
?>
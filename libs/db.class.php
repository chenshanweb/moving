<?php
//	类文件  数据库处理类 核心类
class db{
	//public $aa="ab";
	//公开的，在外部可以访问到
	//private $bb="bb";
	//私有的,外部无法访问，没有报错改ini，输出所有报错
	//protected $cc="cc";
	//受保护的，无法访问
	
	//定义地址，数据库名称，用户名，密码   ：公共/私有/
	public $hostname="localhost";//公共外可修改操作，这个在构造函数上不可改
	public $dbname="moving";
	public $tablename="";
	private $username="root";
	private $password="";
	public $connect;
	public $fileds;
	
	//连接数据库，定义语言，数组形式定义保存传进来的信息
	function __construct($tablename){
		if(empty($tablename)){
			echo "请输入数据库名称！";
		}
//		$this->tablename=empty($tablename)?"demo":$tablename;
		$this->tablename=$tablename;
		$this->config();
	}
	
	//连接数据库，判断是否连接上
	public function config(){
		//$this->connect=new mysqli($this->hostname,$this->username,$this->password,$this->dbname);两种都可以
		$this->connect=mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);//最底层的方法 mysql_connect();
		//静态方法，构造函数的方法	
		//这里如果实际应用的话，需要关闭php.ini里的报错，呈现在客户端只有如下报错
		if(mysqli_connect_errno($this->connect)){
			echo "连接mysql失败！";
			$this->connect->close();
			//关闭数据库，释放内存
			exit;
			//退出
		}
		$this->connect->query("set names utf8");		
		//数据库语言的变量初始化，数组，保存一些数据
		//$this->fileds["filed"]=$this->fileds["filed"]?$this->fileds["filed"]:"*";
		$this->fileds["filed"]="*";
		$this->fileds["where"]=$this->fileds["order"]=$this->fileds["limit"]="";
	}

	//查找的字段,不传参默认为*，传参有;分割成（键，键）values(值，值)，传参有,正确格式不做改变
	public function filed($opt="",$type=""){
		$str=empty($opt)?"*":$opt;	
		//针对insert的处理：当传参为("aa='bb';cc='dd'")||("aa='cc'")
		if(strpos($str,";")&&$type==="insert"){	
			$arr=explode(";",$str);
			//分割的数组：
			//array (size=2)
			//0 => string 'aa='bb'' (length=7)
			//1 => string 'cc='bb'' (length=7)
			$keys=$values="";
			foreach($arr as $k=>$v){
				$newarr=explode("=",$v);  
				$keys.=$newarr[0].",";
				$values.=$newarr[1].",";
			}
			$str="(".substr($keys,0,-1).") values (".substr($values,0,-1).")";
		}else if(strpos($str,"=")&&$type==="insert"){
			$srr=explode("=",$str);
			$keys=$srr[0];
			$values=$srr[1];
			$str="(".$keys.") values (".$values.")";
		}
		$this->fileds["filed"]=$str;
		return $this;
		//链式调用
	}
	//where 
	public function where($opt=""){	
		$str=empty($opt)?"":"where ".$opt;
		$this->fileds["where"]=$str;
		return $this;
	}
	//order(字段  asc正序/desc倒序;)
	public function order($opt=""){	
		$str=empty($opt)?"":"order by ".$opt;
		$this->fileds["order"]=$str;
		return $this;
	}
	public function limit($opt=""){	
	//截取 “0从下标开始，2截取的长度”
		$str=empty($opt)?"":"limit ".$opt;
		$this->fileds["limit"]=$str;
		return $this;
	}	
	
	//查找  可不传参，默认*，传参只传字段，或传参传整句 
	public function select($opt=""){
		if(strpos($opt,"select")===0){
			$sql=$opt;
		}else{
			$this->filed($opt); 
			$sql="select ".$this->fileds["filed"]." from ".$this->tablename." ".$this->fileds["where"]." ".$this->fileds["order"]." ".$this->fileds["limit"];	
		}
		$result=$this->connect->query($sql);
		$array=array();//php不用这句也可以执行，但涉及到后期，如果没有这句话，没有查找结果，返回null，后期数据无法处理
		while($row=$result->fetch_assoc()){
			$array[]=$row;
		}
		return $array;
	}

	//修改
	public function update($opt=""){
		if(empty($opt)){
			$sql="update ".$this->tablename." set ".$this->fileds["filed"]." ".$this->fileds["where"];
		}else if(strpos($opt,"update")===0){
			$sql=$opt;
		}else{
			$this->filed($opt); 
			$sql="update ".$this->tablename." set ".$this->fileds["filed"]." ".$this->fileds["where"];	
		}
		$this->connect->query($sql);
		return $this->connect->affected_rows;
	}
	
	//删除
	public function delete($opt=""){
		if(strpos($opt,"delete")===0){
			$sql=$opt;
		}else{
			$sql="delete from ".$this->tablename." ".$this->fileds["where"];	
		}
		$this->connect->query($sql);
		return $this->connect->affected_rows;
	}

	//添加[可传参链式，整句，键值对形式]
	public function insert($opt=""){
		if(empty($opt)){
			$sql="insert into ".$this->tablename." ".$this->fileds["filed"];
		}else{
			if(strpos($opt,"insert")===0){
				$sql=$opt;
			}else{
				$type="insert";
				$this->filed($opt,$type);
				$sql="insert into ".$this->tablename." ".$this->fileds["filed"];
			}
	}
		$this->connect->query($sql);
		return $this->connect->affected_rows;	
	}	
}

//$db=new db("student");
//var_dump($db->order("id asc")->limit("0,2")->select("name,age"));
//var_dump($db->select("select * from student"));
//var_dump($db->filed("name")->order("id asc")->limit("0,2")->select());
//echo $db->filed("name='true',age='444'")->where("id=62")->update();
//$db->update("update student set name='true',age='20' where id=59");
//echo $db->filed("(num,name,age) values (19,'peng',30)")->insert();
//echo $db->insert("num='20'");
//echo $db->delete("delete from student where id=71");
?>
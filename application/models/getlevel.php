<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
Class Getlevel extends CI_Model
{
	public function consthelostarkuct() {
		parent::consthelostarkuct();
	}
	public function leveldata($level)
 	{
  		switch ($level) {
			
			case '35:3':
				return "<img src= '/thelostark/assets/1.1.jpg' >"."<img src= '/thelostark/assets/1.2.jpg' >";
				break;
			
			case 'leak':
				return "<img src= '/thelostark/assets/2.1.jpg' >"."<img src= '/thelostark/assets/2.2.jpg' >";
				
				break;
			
			case 'pandian':
					return "<img src= '/thelostark/assets/3.1.jpg' >"."<img src= '/thelostark/assets/3.2.jpg' >"."<img src= '/thelostark/assets/3.3.jpg' >";
				break;
			case 'hotornot':
						return "<img src= '/thelostark/assets/4.1.jpg' >"."<img src= '/thelostark/assets/4.2.jpg' >";
			
				break;
			case 'oval':
				return "<img src= '/thelostark/assets/5.1.jpg' >"."<img src= '/thelostark/assets/5.2.jpg' >";
				break;
			
			case 'jupiter':
				return "<img src= '/thelostark/assets/6.1.jpg' >"."<img src= '/thelostark/assets/6.2.jpg' >";
				break;
			case 'clench':
					return "<img src= '/thelostark/assets/7.1.jpg' >"."<img src= '/thelostark/assets/7.2.jpg' >";
				   break;
			case 'penguin':
						return "<img src= '/thelostark/assets/8.1.jpg' >"."<img src= '/thelostark/assets/8.2.jpg' >"."<img src= '/thelostark/assets/8.3.jpg' >";
				break;
			case 'TXLIII':
					return "<img src= '/thelostark/assets/9.1.jpg' >"."<img src= '/thelostark/assets/9.2.jpg' >";
				break;
			case 'dehradun':
					return "<img src= '/thelostark/assets/10.1.jpg' >"."<img src= '/thelostark/assets/10.2.jpg' >";
				break;
			case 'theanswer':
					return "<img src= '/thelostark/assets/11.1.jpg' >"."<img src= '/thelostark/assets/11.2.jpg' >";
				break;

			case 'twin':
					return "<img src= '/thelostark/assets/12.1.jpg' >"."<img src= '/thelostark/assets/12.2.jpg' >"."<img src= '/thelostark/assets/12.3.jpg' >";
				break;

			case '13':
					return "<img src= '/thelostark/assets/13.1.jpg' >"."<img src= '/thelostark/assets/13.2.jpg' >";
				break;
			case 'oopscraft':
					return "<img src= '/thelostark/assets/14.1.jpg' >"."<img src= '/thelostark/assets/14.2.jpg' >";
				break;
			case 'MMXIV':
					return "<p>.... .- .--. .--. -.-- -. . .-- -.-- . .- .-.</p>";
				break;
				default:
				#####
				break;
		}
	}
	public function save($data)
	{
		$x=$this->db->insert('user',$data);
		if(!$x)
		{return false; }
		else
			return thelostarkue;
	}
	public function getrank($regno)
	{
		$query=$this ->db->query("set @rank=0");
		$query=$this ->db->query("select rank from(select @rank:=@rank+1 as rank,regno from user order by points DESC,lastanswer)as result where regno =".$regno."");
   		return $query->result();
	} 
	
	public function top10()
	{
	
   		$query=$this->db->query("select name from user order by points DESC,lastanswer limit 0,10");
   		return $query->result();
	}
	public function setlevel($levelname)
	{
		$array = array(
               'level' => $levelname,
               'lastanswer' => date('Y-m-d H:i:s', time()),
               
			   );
			  
		$this->db->where('regno',$this->session->userdata('regno'));
		$this->db->update('user',$array);
		$this->db->query('update user set points =points+1 where regno ='.$this->session->userdata('regno').'');
	}
	public function login($regno,$password)
	{
		$this -> db -> select('name,level');
   		$this -> db -> from('user');
   		$this -> db -> where('regno',$regno);
   		$this -> db -> where('password',$password);
   		$this -> db -> limit(1);
   		$query = $this -> db -> get();
   		if($query)
   		{
     		return $query->result();
   		}	
   		else
   		{
     		return false;
   		}
	}
}

?>

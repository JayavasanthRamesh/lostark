<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();
class Lostark extends CI_Controller {

	   public function __construct()
       {
            parent::__construct();
            $this->load->library('javascript');
           	$this->load->model('getlevel');
       }

	public function index()
	{
		if($this->session->userdata('regno')=='0')
		{
			$this->load->view('home');
		}
		else 
		{
				redirect("lostark/level/".$this->session->userdata('level'));
		}
	}
	public function level($levelname)
	{

		if($this->session->userdata('regno')=='0')
		{
			$this->load->view('home');
		}
		else
		{
				//echo $this->session->userdata('level');
				if($levelname!=$this->session->userdata('level'))
						redirect("lostark/level/".$this->session->userdata('level'));
				if($this->session->userdata('level')=="end")
				{
					$data['message']="Congratulations !!! End of journey ... ";
					$this->load->view('err',$data);
				}	
				else
				{	
					$this->load->model('getlevel');
					$data['dlevel']=$this->getlevel->leveldata($levelname);
					$this->load->view('question',$data);
				}
		}
	}

	public function rank()
	{
		$result=$this->getlevel->getrank($this->session->userdata('regno'));
		$data['rank']=$result;
		$data['top10']=$this->getlevel->top10();
		$this->load->view('rank',$data);
	}

	public function answer()
	{
		if($this->session->userdata('regno')=='0')
		{
			$this->load->view('home');
		}
		else
		{
			switch ($this->session->userdata('level')) 
			{
				case '35:3':
					if($this->input->post('answer')=='thelostark'||$this->input->post('answer')=='lostark')
					{	
						$this->getlevel->setlevel('leak');
						$this->session->set_userdata('level','leak');
						redirect('lostark/level/leak');
					}
					break;

				case 'leak':
					if($this->input->post('answer')=='edwardsnowden')
					{
						$this->getlevel->setlevel('pandian');
						$this->session->set_userdata('level','pandian');
						redirect('lostark/level/pandian');
					}
					break;
				case 'pandian':
					if($this->input->post('answer')=='rajnikanth')
					{
						$this->getlevel->setlevel('hotornot');
						$this->session->set_userdata('level','hotornot');
						redirect('lostark/level/hotornot');
					}
					break;
				case 'hotornot':
					if($this->input->post('answer')=='facebook')
					{
						$this->getlevel->setlevel('kia');
						$this->session->set_userdata('level','kia');
						redirect('lostark/level/kia');
					}
					break;
				case 'kia':
						if($this->input->post('answer')=='ashes'||$this->input->post('answer')=='theashes')
					{
						$this->getlevel->setlevel('jupiter');
						$this->session->set_userdata('level','jupiter');
						redirect('lostark/level/jupiter');
					}
						break;
					
				case 'jupiter':
						if($this->input->post('answer')=='thirteendays')
					{
						$this->getlevel->setlevel('clench');
						$this->session->set_userdata('level','clench');
						redirect('lostark/level/clench');
					}
					break;
				case 'clench':
				if($this->input->post('answer')=='batman')
					{
						$this->getlevel->setlevel('penguin');
						$this->session->set_userdata('level','penguin');
						redirect('lostark/level/penguin');
					}
						break;
				case 'penguin':
					if($this->input->post('answer')=='ubuntu')
					{
						$this->getlevel->setlevel('TXLIII');
						$this->session->set_userdata('level','TXLIII');
						redirect('lostark/level/TXLIII');
					}
						break;
				case 'TXLIII':
						if($this->input->post('answer')=='oscarpistorius')
					{
						$this->getlevel->setlevel('dehradun');
						$this->session->set_userdata('level','dehradun');
						redirect('lostark/level/dehradun');
					}
						break;
				case 'dehradun':
						if($this->input->post('answer')=='ruskinbond')
					{
						$this->getlevel->setlevel('theanswer');
						$this->session->set_userdata('level','theanswer');
						redirect('lostark/level/theanswer');
					}
						break;
				case 'theanswer':
						if($this->input->post('answer')=="you smile like you have something to hide.every laugh is rehearsed.every handshake's a lie")
					{
						$this->getlevel->setlevel('twin');
						$this->session->set_userdata('level','twin');
						redirect('lostark/level/twin');
					}
					break;
				case 'twin':
						if($this->input->post('answer')=='mario')
					{
						$this->getlevel->setlevel('13');
						$this->session->set_userdata('level','13');
						redirect('lostark/level/13');
					}
					break;
				case '13':
						if($this->input->post('answer')=='sachin')
					{
						$this->getlevel->setlevel('oopscraft');
						$this->session->set_userdata('level','oopscraft');
						redirect('lostark/level/oopscraft');
					}
					break;
				case 'oopscraft':
					if($this->input->post('answer')=='angelinajolie')
					{
						$this->getlevel->setlevel('End');
						$this->session->set_userdata('level','MMXIV');
						redirect('lostark/level/MMXIV');
					}
					break;
				case 'MMXIV':
					if($this->input->post('answer')=='happynewyear2014')
					{
						$this->getlevel->setlevel('End');
						$this->session->set_userdata('level','end');
						redirect('lostark/level/end');
					}
					break;
				default:
					# code...
					break;
			}
			$this->load->view('error');
		}
	}
	public function register()
	{
		

		
		$data = array(
	          'regno'=>$this->input->post('regno'),
	          'name'=>$this->input->post('name'),
			  'password'=> $this->encrypt->sha1($this->input->post('password')),
	        );
			$x=$this->getlevel->save($data);
			echo $x;
			if(!$x)
				$data['message']="Oh snap !! You have already registered ..." ;
			else
				$data['message']="Registration success !!! go to login" ;
			$this->load->view('err',$data);
		//redirect('lostark/');
			
	}
	public function login()
	{
		$hash=$this->encrypt->sha1($this->input->post('password'));
		$result=$this->getlevel->login($this->input->post('regno'),$hash);
		if($result)
		{
			foreach($result as $row)
			{
				$this->session->set_userdata('regno',$this->input->post('regno'));
				$this->session->set_userdata('level',$row->level);
				$this->session->set_userdata('name',$row->name);
				if($this->input->post('remember'))
						$this->sess_expiration = (60*60*24*4);
				else
						$this->sess_expiration = (60*60);
			}
			redirect('lostark/level/'.$this->session->userdata('level'));
		}
		else
		{
				$data['message']="Incorrect Register No or password ... Please try again ";
				$this->load->view('err',$data);
		}	
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('lostark');
	}
	public function error()
	{
		$this->load->view('error');
	}
}
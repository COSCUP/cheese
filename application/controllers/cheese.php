<?php

class Cheese extends CI_Controller {
	
	public  function index(){
		$data["assignPhoto"] = false;
		$this->load->library('session');
		$this->load->library('user_agent');
		$this->load->helper("url");
		
		$lang = $this->session->userdata('lang');
		
		if ($this->agent->is_browser('MSIE')){
			$this->load->view("error/error");
			return;
		}
		
		if($lang != FALSE){
				$this->load->view($lang."/cheese", $data);
		}else{
			
			if($this->agent->accept_lang('zh-tw')){
				$this->session->set_userdata('lang', 'zh-tw');
				$this->load->view("zh-tw/cheese", $data);
			}else if($this->agent->accept_lang('zh-cn')){
				$this->session->set_userdata('lang', 'zh-cn');
				$this->load->view("zh-cn/cheese", $data);
			}else{
				$this->session->set_userdata('lang', 'en');
				$this->load->view("en/cheese", $data);
			}
		}
	}
	
	public function view($assignPhotoID){
		$data["assignPhotoID"] = $assignPhotoID;
		$data["assignPhoto"] = true;
		$this->load->library('session');
		$this->load->helper("url");
		$lang = $this->session->userdata('lang');
		$this->load->library('user_agent');
		
		if ($this->agent->is_browser('MSIE')){
			$this->load->view("error/error");
			return;
		}
		
		if($lang != FALSE){
				$this->load->view($lang."/cheese", $data);
		}else{
			$this->load->library('user_agent');
			if($this->agent->accept_lang('zh-tw')){
				$this->session->set_userdata('lang', 'zh-tw');
				$this->load->view("zh-tw/cheese", $data);
			}else if($this->agent->accept_lang('zh-cn')){
				$this->session->set_userdata('lang', 'zh-cn');
				$this->load->view("zh-cn/cheese", $data);
			}else{
				$this->session->set_userdata('lang', 'en');
				$this->load->view("en/cheese", $data);
			}
		}
	}
	
	public function lang($lang){
		$data["assignPhoto"] = false;
		$this->load->library('session');
		$this->load->helper("url");
		$this->load->library('user_agent');
		
		if ($this->agent->is_browser('MSIE')){
			$this->load->view("error/error");
			return;
		}
		
		if($lang == 'zh-tw'){
			$this->session->set_userdata('lang', 'zh-tw');
			$this->load->view("zh-tw/cheese", $data);
		}else if($lang == 'zh-cn'){
			 $this->session->set_userdata('lang', 'zh-cn');
			$this->load->view("zh-cn/cheese", $data);
		}else{
			$this->session->set_userdata('lang', 'en');
			$this->load->view("en/cheese", $data);
		}
	}
}

?>
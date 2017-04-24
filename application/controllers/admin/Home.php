<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
	//home default
	public function index(){
		$data['title']='Admin Home';
		$data['pointer']="index";
		$data['classicon']="fa fa-home";
		$data['main_bread']="Home";
		$data['sub_bread']="Dashboard";
		$data['desc']="Overview";
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$tmp['content']=$this->load->view('admin/home',$data, TRUE);
		$this->load->view('admin/layout',$tmp);
	}
}
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class content extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view('login');
	}

	public function loginProses(){
		$username = $this->input->post('username');
		$pass =  $this->input->post('password');
		$this->load->database();
		$data = $this->db->get_where('user', ['username' => $username , 'password' => $pass]);
		
		$userdata ;
		$userstatus ;
		foreach ($data->result() as $nilai){
			$userdata = $nilai->username;
			$userstatus = $nilai->status;

		}
		$this->load->library('session');
		$this->session->set_userdata('status',$userstatus);
		$this->session->set_userdata('username',$userdata);

		redirect('index.php/content/view');
	}
	public function register(){
		$this->load->view('register');

	}

	public function view(){
		$this->load->library('session');
		$session = $this->session->userdata('username') ;
		if($session == 'admin' ){
			$this->load->database();
			$data['data'] = $this->db->query('select * from artikel') ;
			$this->load->view('view', $data);
		}else if($session == 'user1' ){
			$this->load->database();
			$data['data'] = $this->db->query("select * from artikel WHERE status = 'User 1'") ;
			$this->load->view('view', $data);
		}else if($session == 'user2' ){
			$this->load->database();
			$data['data'] = $this->db->query("select * from artikel WHERE status = 'User 2'") ;
			$this->load->view('view', $data);
		}
		else{
			redirect('index.php/content');
		}
	}

	public function delete($nilai){
		$this->load->database();
		$data = $this->db->get_where('artikel', ['id' => $nilai]) ;
	
		foreach ($data->result() as $row) {
			$userstatus = $row->status;
		}

		$this->load->library('session');
		$session = $this->session->userdata('status');
		if($session == "Administrator"){
			$this->db->delete('artikel', array('id' => $nilai) );
			redirect('index.php/content/view');
		}else if($session != 'Administrator' ){
			echo "Maaf tidak dapat dihapus ";
			redirect('index.php/content/view');
		}else{
			
			$this->db->delete('artikel', array('id' => $nilai) );
		
			redirect('index.php/content/viwe');
		}
	}

	public function data(){
		$this->load->library('session');
		$session = $this->session->userdata('status');
		if($session == 'Administrator'){
			$this->load->view('tambah');
		}else if($session == 'User 1'){
			$this->load->view('tambah');
		}else if($session == 'User 2'){
			$this->load->view('tambah');
		}else{
		redirect('index.php/content/view');
		}
	}

	public function addData(){
		$data = $this->input->post('deskripsi') ;
		$data2 = $this->input->post('status') ;
		$this->load->database();
		$this->db->insert('artikel', ['deskripsi' => $data , 'status' => $data2]) ;

		redirect('index.php/content/view');
	}
	

	public function update($nilai){
		$this->load->library('session');
		$session = $this->session->userdata('status');
		if($session == 'Administrator'){
			$data['nilai'] = $nilai;
			$this->load->view('update', $data);
		}else if($session == 'User 1'){
				$data['nilai'] = $nilai;
				$this->load->view('update', $data);
		}else if($session == 'User 2'){
			$data['nilai'] = $nilai;
			$this->load->view('update', $data);
		}else{
			redirect('index.php/content/view');
		}
		
	}

	public function updateData(){

		$data = $this->input->post('deskripsi');
		$nilai = $this->input->post('nilai');
		$status = $this->input->post('status') ;

		$this->load->database();
		$this->db->replace('artikel' , ['id' => $nilai , 'deskripsi' => $data , 'status' => $status]) ;

		redirect('index.php/content/view');	
	}

	public function logout(){
		$this->load->library('session');
		 $this->session->unset_userdata('username');
		
		$this->session->unset_userdata('status');

	redirect('index.php/content/');	
	}
}
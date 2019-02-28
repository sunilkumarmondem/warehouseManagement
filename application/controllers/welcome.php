<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/*$this->load->library('pagination');
		$config['base_url']="http://192.168.0.136/warehouse_Management/index.php/welcome/index";
		$config['per_page']=10;
		$config['num_links']=5;
		$config['total_rows']=$this->db->get('brands')->num_rows();
		$this->pagination->initialize($config);*/
		$data['query']=$this->db->get('brands');
		$this->load->view('welcome_message',$data);
	}
	public function createBrand(){
		$this->load->view('add_brand');
	}
	public function saveBrand(){
		$this->form_validation->set_rules('BrandName', 'BrandName', 'required');
		if ($this->form_validation->run())
		{
			$data =$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->addBrand($data)){
				$this->session->set_flashdata('msg','Brand Added Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('welcome/index');
		}
		else
		{
			$this->load->view('add_brand');
		}
	}
	public function updateBrand($id){
		$this->load->model('queries');
		$posts=$this->queries->get_single_brand($id);
		$this->load->view('update_brand',['post'=>$posts]);
	}
	public function changeBrand($id){
		$this->form_validation->set_rules('BrandName', 'BrandName', 'required');
		if ($this->form_validation->run())
		{
			$data =$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->updateBrand($data,$id)){
				$this->session->set_flashdata('msg','Brand Updated Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('welcome/index');
		}
		else
		{
			$this->load->view('add_brand');
		}
	}
	public function viewBrand($id){
		$this->load->model('queries');
		$posts=$this->queries->get_single_brand($id);
		$this->load->view('view_brand',['post'=>$posts]);
	}
	public function deleteBrand($id){
		try{
			$this->load->model('queries');
		if($this->queries->delete_brand($id)){
			$this->session->set_flashdata('msg','Brand Deleted Successfully');
		}
		else{
			$this->session->set_flashdata('msg','Something Went Wrong');
		}
		return redirect('welcome/index');
		}
		
		catch(Exception $e){
			$this->session->set_flashdata('msg',$e->getMessage());
		}
		
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
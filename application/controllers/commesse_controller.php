<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class commesse_controller extends CI_Controller {
	public function index(){
		/*$this->load->model('queries');
		$posts=$this->queries->getCommesse();
		$this->load->view('display_commesse',['posts'=>$posts]);*/
		/*$this->load->library('pagination');
		$config['base_url']="http://localhost/warehouse_Mangement/index.php/commesse_controller/index";
		$config['per_page']=20;
		$config['num_links']=10;
		$config['total_rows']=$this->db->get('commesse')->num_rows();
		$this->pagination->initialize($config);*/
		$data['query']=$this->db->select('*')
		->join('plants', 'plants.PlantID = commesse.PlantID')
		->join('customers', 'plants.CustomerID = customers.CustomerID')
		->order_by("year","desc")
		->get('commesse');
		$this->load->view('display_commesse',$data);
	}
	public function viewCommesse($id){
		$this->load->model('queries');
		$posts=$this->queries->get_single_commesse($id);
		$this->load->view('view_commesse',['post'=>$posts]);
	}
	public function addCommesse(){
		$this->load->model('queries');
		$posts=$this->queries->displayPlants();
		$this->load->view('add_commesse',['posts'=>$posts]);
	}
	public function saveCommesse(){
		$this->form_validation->set_rules('year', 'year', 'required');
		$this->form_validation->set_rules('code', 'code', 'required');
		$this->form_validation->set_rules('name_en', 'CommeseeName', 'required');
		$this->form_validation->set_rules('PlantID', 'PlantName', 'required');
		if ($this->form_validation->run())
		{
			$data =$this->input->post();
			$today=date('Y-m-d H:i:s');
			$data['creation_date']=$today;
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->addCommesse($data)){
				$this->session->set_flashdata('msg','Commesse Added Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('commesse_controller/index');
		}
		else
		{
			$this->load->view('add_commesse');
		}
	}
	public function deleteCommesse($id){
		try{
			$this->load->model('queries');
		if($this->queries->delete_commesse($id)){
			$this->session->set_flashdata('msg','Commesse Deleted Successfully');
		}
		else{
			$this->session->set_flashdata('msg','You cant delete this commesse');
		}
		return redirect('commesse_controller/index');
		}
		catch(Exception $e){
			$this->session->set_flashdata('msg',$e->getMessage());
		}
	}
	public function updateCommesse($id){
		$this->load->model('queries');
		$data['post']=$this->queries->get_single_commesse($id);
		$data['plants']=$this->queries->displayPlants();
		$this->load->view('update_commesse',$data);
	}
	public function changeCommesse($id){
		$this->form_validation->set_rules('PlantID', 'PlantName', 'required');
		$this->form_validation->set_rules('year', 'year', 'required');
		$this->form_validation->set_rules('code', 'code', 'required');
		$this->form_validation->set_rules('name_en', 'CommesseName', 'required');
		if ($this->form_validation->run())
		{
			$data =$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->updateCommesse($data,$id)){
				$this->session->set_flashdata('msg','Commesse Updated Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('commesse_controller/index');
		}
		else
		{
			$this->load->view('add_commesse');
		}
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
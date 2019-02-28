<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class plant_controller extends CI_Controller {
	public function index(){
		/*$this->load->library('pagination');
		$config['base_url']="http://192.168.0.136/warehouse_Management/index.php/plant_controller/index";
		$config['per_page']=30;
		$config['num_links']=20;
		$config['total_rows']=$this->db->get('plants')->num_rows();
		$this->pagination->initialize($config);*/
		$data['query']=$this->db->select('*')
		->join('customers', 'plants.CustomerID = customers.CustomerID')
		->join('countries', 'plants.CountryID = countries.CountryID')
		->get('plants');
		$this->load->view('display_plants',$data);
	}
	public function addPlant(){
		$this->load->model('queries');
		$data['customers']=$this->queries->displayCustomers();
		$data['countries']=$this->queries->getCountries();
		$this->load->view('add_plant',$data);
	}
	public function viewPlant($id){
		$this->load->model('queries');
		$posts=$this->queries->get_single_plant($id);
		$this->load->view('view_plant',['post'=>$posts]);
	}
	public function savePlant(){
		$this->form_validation->set_rules('CustomerID', 'CustomerName', 'required');
		$this->form_validation->set_rules('CountryID', 'CountryName', 'required');
		//$this->form_validation->set_rules('PlantName', 'PlantName', 'required');
		//$this->form_validation->set_rules('legal_name', 'LegalName', 'required');
		if ($this->form_validation->run())
		{
			$data =$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->addingPlant($data)){
				$this->session->set_flashdata('msg','Plant Added Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('plant_controller/index');
		}
		else
		{
			$this->load->view('add_plant');
		}
	}
	public function deletePlant($id){
		try{
			$this->load->model('queries');
		if($this->queries->delete_plant($id)){
			$this->session->set_flashdata('msg','Plant Deleted Successfully');
		}
		else{
			$this->session->set_flashdata('msg','You cant delete this plant');
		}
		return redirect('plant_controller/index');
		}
		catch(Exception $e){
			$this->session->set_flashdata('msg',$e->getMessage());
		}
	}
	public function updatePlant($id){
		$this->load->model('queries');
		$data['post']=$this->queries->get_single_plant($id);
		$data['customers']=$this->queries->displayCustomers();
		$data['countries']=$this->queries->getCountries();
		$this->load->view('update_plant',$data);
	}
	public function changePlant($id){
		$this->form_validation->set_rules('CustomerID', 'customerName', 'required');
		$this->form_validation->set_rules('CountryID', 'countryName', 'required');
		//$this->form_validation->set_rules('PlantName', 'PlantName', 'required');
		//$this->form_validation->set_rules('address', 'address', 'required');
		if ($this->form_validation->run())
		{
			$data =$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->updatePlant($data,$id)){
				$this->session->set_flashdata('msg','Plant Updated Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('plant_controller/index');
		}
		else
		{
			$this->load->view('add_plant');
		}
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
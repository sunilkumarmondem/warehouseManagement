<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class country_controller extends CI_Controller {
	public function index(){
		/*$this->load->model('queries');
		$posts=$this->queries->getCountries();
		$this->load->view('display_countries',['posts'=>$posts]);*/
		/*$this->load->library('pagination');
		$config['base_url']="http://192.168.0.136/warehouse_Management/index.php/country_controller/index";
		$config['per_page']=30;
		$config['num_links']=5;
		$config['total_rows']=$this->db->get('countries')->num_rows();
		$this->pagination->initialize($config);*/
		$data['query']=$this->db->get('countries');
		$this->load->view('display_countries',$data);
	}
	public function saveCountry(){
		$this->load->view('add_country');
	}
	public function addCountry(){
		$this->form_validation->set_rules('name_en', 'CountryName in English', 'required');
		$this->form_validation->set_rules('name_it', 'CountryName in Italian', 'required');
		$this->form_validation->set_rules('name_pl', 'CountryName in Polish', 'required');
		$this->form_validation->set_rules('code', 'Country Code', 'required');
		if ($this->form_validation->run())
		{
			$data =$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->add_country($data)){
				$this->session->set_flashdata('msg','Country Added Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('country_controller/index');
		}
		else
		{
			$this->load->view('add_country');
		}
	}
	public function viewCountry($id){
		$this->load->model('queries');
		$posts=$this->queries->get_single_country($id);
		$this->load->view('view_country',['post'=>$posts]);
	}
	public function deleteCountry($id){
		try{
			$this->load->model('queries');
		if($this->queries->delete_country($id)){
			$this->session->set_flashdata('msg','Country Deleted Successfully');
		}
		else{
			$this->session->set_flashdata('msg','You cant delete this country');
		}
		return redirect('country_controller/index');
		}
		catch(Exception $e){
			$this->session->set_flashdata('msg',$e->getMessage());
		}
	}
	public function updateCountry($id){
		$this->load->model('queries');
		$posts=$this->queries->get_single_country($id);
		$this->load->view('update_country',['post'=>$posts]);
	}
	public function changeCountry($id){
		$this->form_validation->set_rules('name_en', 'CountryName (en)', 'required');
		$this->form_validation->set_rules('name_it', 'CountryName (it)', 'required');
		$this->form_validation->set_rules('name_pl', 'CountryName (pl)', 'required');
		$this->form_validation->set_rules('code', 'CountryCode', 'required');
		if ($this->form_validation->run())
		{
			$data =$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->updateCountry($data,$id)){
				$this->session->set_flashdata('msg','Country Updated Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('country_controller/index');
		}
		else
		{
			$this->load->view('add_country');
		}
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
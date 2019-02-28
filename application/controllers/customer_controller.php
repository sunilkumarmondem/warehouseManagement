<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class customer_controller extends CI_Controller {
	public function index(){
		/*$this->load->library('pagination');
		$config['base_url']="http://192.168.0.136/warehouse_Management/index.php/customer_controller/index";
		$config['per_page']=30;
		$config['num_links']=5;
		$config['total_rows']=$this->db->get('customers')->num_rows();
		$this->pagination->initialize($config);*/
		$data['query']=$this->db->get('customers');
		$this->load->view('display_customers',$data);
	}
	public function createCustomer(){
		$this->load->model('queries');
		$posts=$this->queries->displayCustomers();
		$this->load->view('add_customer',['posts'=>$posts]);
	}
	public function saveCustomer(){
		$this->form_validation->set_rules('CustomerName', 'CustomerName', 'required');
		$this->form_validation->set_rules('website', 'Website', 'required');
		if ($this->form_validation->run())
		{
			$data =$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->addingCustomer($data)){
				$this->session->set_flashdata('msg','Customer Added Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('customer_controller/index');
		}
		else
		{
			$this->load->view('add_customer');
		}
	}
	public function viewCustomer($id){
		$this->load->model('queries');
		$posts=$this->queries->get_single_customer($id);
		$this->load->view('view_customer',['post'=>$posts]);
	}
	public function deleteCustomer($id){
		try{
			$this->load->model('queries');
		if($this->queries->delete_customer($id)){
			$this->session->set_flashdata('msg','Customer Deleted Successfully');
		}
		else{
			$this->session->set_flashdata('msg','You cant delete this customer');
		}
		return redirect('customer_controller/index');
		}
		catch(Exception $e){
			$this->session->set_flashdata('msg',$e->getMessage());
		}
	}
	public function updateCustomer($id){
		$this->load->model('queries');
		$posts=$this->queries->get_single_customer($id);
		$this->load->view('update_customer',['post'=>$posts]);
	}
	public function changeCustomer($id){
		$this->form_validation->set_rules('CustomerName', 'CustomerName', 'required');
		$this->form_validation->set_rules('website', 'Website', 'required');
		if ($this->form_validation->run())
		{
			$data =$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->updateCustomer($data,$id)){
				$this->session->set_flashdata('msg','Customer Updated Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('customer_controller/index');
		}
		else
		{
			$this->load->view('add_product');
		}
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
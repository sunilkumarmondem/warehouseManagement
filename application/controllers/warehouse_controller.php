<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class warehouse_controller extends CI_Controller {
	public function index(){
		/*$this->load->library('pagination');
		$config['base_url']="http://192.168.0.136/warehouse_Management/index.php/warehouse_controller/index";
		$config['per_page']=30;
		$config['num_links']=5;
		$config['total_rows']=$this->db->get('ware_house')->num_rows();*/
		$data['query']=$this->db->select('*')
		->join('products', 'ware_house.ProductID = products.ProductID')
		->join('commesse', 'ware_house.CommesseID = commesse.CommesseID')
		->join('brands','products.BrandID=brands.BrandID')
		->get('ware_house');
		//$this->pagination->initialize($config);
		$this->load->view('display_warehouse',$data);
	}
	public function addWarehouse(){
		$this->load->model('queries');
		$data['products']=$this->queries->displayProducts();
		$data['commesses']=$this->queries->displayCommesse();
		$this->load->view('add_warehouse',$data);
	}
	public function saveWarehouse(){
		//$this->form_validation->set_rules('ProductID', 'Product Barcode', 'required');
		//$this->form_validation->set_rules('CommesseID', 'Commesse Code', 'required');
		$this->form_validation->set_rules('Qty', 'Quantity', 'required');
		if ($this->form_validation->run())
		{
			$data =$this->input->post();
			$today=date('Y-m-d H:i:s');
			$data['EntryDateTime']=$today;
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->addWarehouse($data)){
				$this->session->set_flashdata('msg','Warehouse Added Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('warehouse_controller/index');
		}
		else
		{
			$this->load->view('add_warehouse');
		}
	}
	public function viewWarehouse($id){
		$this->load->model('queries');
		$posts=$this->queries->get_single_warehouse($id);
		$this->load->view('view_warehouse',['post'=>$posts]);
	}
	public function deleteWarehouse($id){
		try{
			$this->load->model('queries');
		if($this->queries->delete_warehouse($id)){
			$this->session->set_flashdata('msg',' Item Deleted Successfully');
		}
		else{
			$this->session->set_flashdata('msg','You cant delete this warehouse Item');
		}
		return redirect('warehouse_controller/index');
		}
		catch(Exception $e){
			$this->session->set_flashdata('msg',$e->getMessage());
		}
	}
	public function updateWarehouse($id){
		$this->load->model('queries');
		$data['post']=$this->queries->get_single_warehouse($id);
		$data['products']=$this->queries->displayProducts();
		$data['commesses']=$this->queries->displayCommesse();
		$this->load->view('update_warehouse',$data);
	}
	public function changeWarehouse($id){
			$data =$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->updateWarehouse($data,$id)){
				$this->session->set_flashdata('msg','item Updated Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('warehouse_controller/index');
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
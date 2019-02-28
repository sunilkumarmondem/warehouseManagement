<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class product_controller extends CI_Controller {
	public function index(){
		/*$this->load->library('pagination');
		$config['base_url']="http://192.168.0.136/warehouse_Management/index.php/product_controller/index";
		$config['per_page']=30;
		$config['num_links']=20;
		$config['total_rows']=$this->db->get('products')->num_rows();*/
		$data['query']=$this->db->select('*')
		->join('positions', 'products.PositionID = positions.PositionID')
		->join('brands', 'products.BrandID = brands.BrandID')
		->get('products');
		//$this->pagination->initialize($config);
		$this->load->view('products_display',$data);
	}
	public function createProduct(){
		$this->load->model('queries');
		$data['posts']=$this->queries->displayBrands();
		$data['positions']=$this->queries->displayPositions();
		$this->load->view('add_product',$data);
	}
	public function saveProduct(){
		$this->form_validation->set_rules('BrandID', 'Brand', 'required');
		$this->form_validation->set_rules('ProductName', 'ProductName', 'required');
		$this->form_validation->set_rules('Barcode', 'Barcode', 'required');
		if ($this->form_validation->run())
		{
			$data =$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->addProduct($data)){
				$this->session->set_flashdata('msg','Product Added Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('product_controller/index');
		}
		else
		{
			$this->load->view('add_product');
		}
	}
	public function viewProduct($id){
		$this->load->model('queries');
		$posts=$this->queries->get_single_product($id);
		$this->load->view('view_product',['post'=>$posts]);
	}
	public function deleteProduct($id){
		$this->load->model('queries');
		if($this->queries->delete_product($id)){
			$this->session->set_flashdata('msg','Product Deleted Successfully');
		}
		else{
			$this->session->set_flashdata('msg','Something Went Wrong');
		}
		return redirect('product_controller/index');
	}
	public function updateProduct($id){
		$this->load->model('queries');
		$data['post']=$this->queries->get_single_product($id);
		$data['brands']=$this->queries->get_brands();
		$this->load->view('update_product',$data);
	}
	public function changeProduct($id){
		$this->form_validation->set_rules('BrandID', 'BrandName', 'required');
		$this->form_validation->set_rules('ProductName', 'ProductName', 'required');
		$this->form_validation->set_rules('Barcode', 'Barcode', 'required');
		if ($this->form_validation->run())
		{
			$data =$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->updateProduct($data,$id)){
				$this->session->set_flashdata('msg','Product Updated Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('product_controller/index');
		}
		else
		{
			$this->load->view('add_brand');
		}
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class position_controller extends CI_Controller {
	public function index(){
		$data['query']=$this->db->get('positions');
		$this->load->view('display_positions',$data);
	}
	public function savePosition(){
		$this->load->view('add_position');
	}
	public function addPosition(){
	$this->form_validation->set_rules('PositionName', 'PositionName', 'required');
		if ($this->form_validation->run())
		{
			$data =$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->addPosition($data)){
				$this->session->set_flashdata('msg','PositionName Added Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('position_controller/index');
		}
		else
		{
			$this->load->view('add_position');
		}
	}
	public function viewPosition($id){
		$this->load->model('queries');
		$posts=$this->queries->get_single_position($id);
		$this->load->view('view_position',['post'=>$posts]);
	}
	public function deletePosition($id){
		try{
			$this->load->model('queries');
		if($this->queries->delete_position($id)){
			$this->session->set_flashdata('msg','Position Deleted Successfully');
		}
		else{
			$this->session->set_flashdata('msg','You cant delete this position');
		}
		return redirect('position_controller/index');
		}
		catch(Exception $e){
			 $this->session->set_flashdata('msg','Somewhere you used the position');
		}
	}
	public function updatePosition($id){
		$this->load->model('queries');
		$posts=$this->queries->get_single_position($id);
		$this->load->view('update_position',['post'=>$posts]);
	}
	public function changePosition($id){
		$this->form_validation->set_rules('PositionName', 'PositionName', 'required');
		if ($this->form_validation->run())
		{
			$data =$this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->updateposition($data,$id)){
				$this->session->set_flashdata('msg','PositionName Updated Successfully');
			}
			else{
				$this->session->set_flashdata('msg','Something Went Wrong');
			}
			return redirect('position_controller/index');
		}
		else
		{
			$this->load->view('add_position');
		}
	}
	}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
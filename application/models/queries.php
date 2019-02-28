<?php
class queries extends CI_MODEL{
	public function get_brands(){
		$query=$this->db->get('brands');
		if($query->num_rows()>0){
			return $query->result();
		}
	}
	public function addBrand($data){
		return $this->db->insert('brands',$data);
	}
	public function get_single_brand($id){
		$query=$this->db->get_where('brands',array('BrandID'=>$id));
		if($query->num_rows()>0){
			return $query->row();
		}
	}
	public function updateBrand($data,$id){
		return $this->db->where('BrandID',$id)
						->update('brands',$data);
	}
	public function delete_brand($id){
		return $this->db->delete('brands',['BrandID'=>$id]);
	}
	public function displayBrands(){
		$query=$this->db->get('brands');
		if($query->num_rows()>0){
			return $query->result();
		}
	}
	public function addProduct($data){
		return $this->db->insert('products',$data);
	}
	public function displayProducts(){
		$query = $this->db->select('products.ProductID,products.BrandID,brands.BrandName,products.ProductName,products.Barcode,products.Description')
                  ->from('products')
                  ->join('brands', 'brands.BrandID = products.BrandID')
                  ->get();
		if($query->num_rows()>0){
			return $query->result();
		}
	}
	public function displayProducts1($limit,$offset){
		$query = $this->db->select('products.ProductID,products.BrandID,brands.BrandName,products.ProductName,products.Barcode,products.Description')
                  ->from('products')
                  ->join('brands', 'brands.BrandID = products.BrandID')
                  ->get($limit,$offset);
		if($query->num_rows()>0){
			return $query->result();
		}
	}
	public function get_single_product($id){
		$query = $this->db->select('*')
                  ->from('brands')
                  ->join('products','products.BrandID=brands.BrandID')
                  ->join ('positions','products.PositionID=positions.PositionID')
                  ->where('products.ProductID',$id)
                  ->get();
		if($query->num_rows()>0){
			return $query->row();
		}
	}
	public function delete_product($id){
		return $this->db->delete('products',['ProductID'=>$id]);
	}
	public function updateProduct($data,$id){
		return $this->db->where('ProductID',$id)
						->update('products',$data);
	}
	public function displayCustomers(){
		$query=$this->db->get('customers');
		if($query->num_rows()>0){
			return $query->result();
		}
	}
	public function addingCustomer($data){
		return $this->db->insert('customers',$data);
	}
	public function get_single_customer($id){
		$query=$this->db->get_where('customers',array('CustomerID'=>$id));
		if($query->num_rows()>0){
			return $query->row();
		}
	}
	public function delete_customer($id){
		return $this->db->delete('customers',['CustomerID'=>$id]);
	}
	public function updateCustomer($data,$id){
		return $this->db->where('CustomerID',$id)
						->update('customers',$data);
	}
	public function getCountries(){
		$query=$this->db->get('countries');
		if($query->num_rows()>0){
			return $query->result();
		}
	}
	public function add_country($data){
		return $this->db->insert('countries',$data);
	}
	public function get_single_country($id){
		$query=$this->db->get_where('countries',array('CountryID'=>$id));
		if($query->num_rows()>0){
			return $query->row();
		}
	}
	public function delete_country($id){
		return $this->db->delete('countries',['CountryID'=>$id]);
	}
	public function updateCountry($data,$id){
		return $this->db->where('CountryID',$id)
						->update('countries',$data);
	}
	public function getPlants(){
		$query = $this->db->select('*')
                  ->from('plants')
                  ->join('customers', 'plants.CustomerID = customers.CustomerID')
                  ->join('countries', 'plants.CountryID = countries.CountryID')
                  ->get();
		if($query->num_rows()>0){
			return $query->result();
		}
	}
	public function get_single_plant($id){
		$query = $this->db->select('*')
                  ->from('plants')
                  ->join('customers', 'plants.CustomerID = customers.CustomerID')
                  ->join('countries', 'plants.CountryID = countries.CountryID')
                   ->where('PlantID',$id)
                  ->get();
		if($query->num_rows()>0){
			return $query->row();
		}
	}
	public function addingPlant($data){
		return $this->db->insert('plants',$data);
	}
	public function delete_plant($id){
		return $this->db->delete('plants',['PlantID'=>$id]);
	}
	public function updatePlant($data,$id){
		return $this->db->where('PlantID',$id)
						->update('plants',$data);
	}
	public function getCommesse(){
		$query = $this->db->select('*')
                  ->from('commesse')
                  ->join('plants', 'commesse.PlantID = plants.PlantID')
                  ->get();
		if($query->num_rows()>0){
			return $query->result();
		}
	}
	public function displayCommesse(){
		$query = $this->db->select('*')
                  ->from('commesse')
                  ->order_by("code","desc")
                  ->get();
		if($query->num_rows()>0){
			return $query->result();
		}
	}
	public function display_brands(){
		$query = $this->db->select('*')
                  ->from('brands')
                  ->order_by("BrandName","asc")
                  ->get();
		if($query->num_rows()>0){
			return $query->result();
		}
	}
	public function display_positions(){
		$query = $this->db->select('*')
                  ->from('positions')
                  ->order_by("PositionName","asc")
                  ->get();
		if($query->num_rows()>0){
			return $query->result();
		}
	}
	public function get_single_commesse($id){
		$query = $this->db->select('*')
                  ->from('commesse')
                  ->join('plants','commesse.PlantID=plants.PlantID')
                  ->where('CommesseID',$id)
                  ->get();
		if($query->num_rows()>0){
			return $query->row();
		}
	}
	public function displayPlants(){
		$query=$this->db->get('plants');
		if($query->num_rows()>0){
			return $query->result();
		}
	}
	public function addCommesse($data){
		return $this->db->insert('commesse',$data);
	}
	public function delete_commesse($id){
		return $this->db->delete('commesse',['CommesseID'=>$id]);
	}
	public function updateCommesse($data,$id){
		return $this->db->where('CommesseID',$id)
						->update('commesse',$data);
	}
	public function addWarehouse($data){
		return $this->db->insert('ware_house',$data);
	}
	public function get_single_warehouse($id){
		$query = $this->db->select('*')
                  ->from('ware_house')
                  ->join('products', 'ware_house.ProductID = products.ProductID')
                  ->join('commesse', 'ware_house.CommesseID = commesse.CommesseID')
                   ->where('WarehouseID',$id)
                  ->get();
		if($query->num_rows()>0){
			return $query->row();
		}
	}
	public function delete_warehouse($id){
		return $this->db->delete('ware_house',['WarehouseID'=>$id]);
	}
	public function updateWarehouse($data,$id){
		return $this->db->where('WarehouseID',$id)
						->update('ware_house',$data);
	}
	public function getWarehouse(){
		$query = $this->db->select('*')
                  ->from('ware_house')
                  ->join('products', 'ware_house.ProductID = products.ProductID')
                  ->join('commesse', 'ware_house.CommesseID = commesse.CommesseID')
                  ->get();
		if($query->num_rows()>0){
			return $query->result();
		}
	}
	public function addPosition($data){
		return $this->db->insert('positions',$data);
	}
	public function get_single_position($id){
		$query=$this->db->get_where('positions',array('PositionID'=>$id));
		if($query->num_rows()>0){
			return $query->row();
		}
	}
	public function delete_position($id){
		return $this->db->delete('positions',['PositionID'=>$id]);
	}
	public function updateposition($data,$id){
		return $this->db->where('PositionID',$id)
						->update('positions',$data);
	}
	public function displayPositions(){
		$query=$this->db->get('positions');
		if($query->num_rows()>0){
			return $query->result();
		}
	}
}
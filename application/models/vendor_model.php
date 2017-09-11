<?php

class vendor_model extends CI_Model
{

  function __construct()
  {
     parent::__construct();
  }

  public function get_all_vendor_type()
  {
    $query = $this->db->query("SELECT * from vendor_type");
    $result_array = $query->result_array();
    return $result_array;
  }

  public function get_all_vendor_by_type_city($vendor_type,$vendor_city)
  {
    $query = $this->db->query("SELECT * from vendors where Vendor_type = ".$vendor_type." and City = '".$vendor_city."' ");
    $result_array = $query->result_array();
    return $result_array;
  }

  public function get_all_vendor_by_type($vendor_type)
  {
    $query = $this->db->query("SELECT * from vendors where Vendor_type = ".$vendor_type." ");
    $result_array = $query->result_array();
    return $result_array;
  }

  public function get_vendor_by_id($vendor_id)
  {
    $vendor_id = $this->db->escape($vendor_id);
    $query = $this->db->query("SELECT * from vendors where vendor_id = ".$vendor_id."");
    $result_array = $query->row_array();
    return $result_array;
  }

  public function get_vendor_services($vendor_type)
  {
    $query = $this->db->query("SELECT * FROM service where Vendor_type_id = ".$vendor_type." ");
    $result_array = $query->result_array();
    return $result_array;
  }
}


?>

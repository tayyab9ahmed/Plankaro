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
    $query = $this->db->query("SELECT *,(SELECT Vendor_picture_path FROM vendor_pictures vp WHERE vp.Vendor_id = v.Vendor_id LIMIT 1)AS Vendor_picture_path FROM vendors v WHERE v.Vendor_type = ".$vendor_type." and v.City like '%".$vendor_city."%' ");
    $result_array = $query->result_array();
    return $result_array;
  }

  public function get_all_vendor_by_type($vendor_type)
  {
    $query = $this->db->query("SELECT * ,(SELECT Vendor_picture_path FROM vendor_pictures vp WHERE vp.Vendor_id = v.Vendor_id LIMIT 1)AS Vendor_picture_path FROM vendors v where Vendor_type = ".$vendor_type." ");
    $result_array = $query->result_array();
    return $result_array;
  }

  public function get_vendor_by_id($vendor_id)
  {
    $vendor_id = $this->db->escape($vendor_id);
    $query = $this->db->query("SELECT *,(SELECT Vendor_picture_path FROM vendor_pictures vp WHERE vp.Vendor_id = v.Vendor_id LIMIT 1)AS Vendor_picture_path from vendors v where v.vendor_id = ".$vendor_id."");
    $result_array = $query->row_array();
    return $result_array;
  }

  public function get_vendor_services($vendor_type)
  {
    $query = $this->db->query("SELECT * FROM service where Vendor_type_id = ".$vendor_type." ");
    $result_array = $query->result_array();
    return $result_array;
  }

  public function get_all_vendor_services($vendor_id)
  {
    $query = $this->db->query("SELECT *,(SELECT s.Service_title FROM service s WHERE s.Service_id = vs.Service_id)AS title FROM vendor_service vs WHERE vs.vendor_id = ".$vendor_id."");
    $result_array = $query->result_array();
    return $result_array;
  }
}


?>

<?php
class Htmlopdf_model extends CI_Controller
{
 function fetch()
 {
 	$this->db->order_by('CustomerID', 'DESC');
 	return $this->db->get('tbl_customer');
 }
 funtion fetch_single_details($customer_id){
 	$this->db->where($CustomerID, $customer_id);
 	$data = $this->db->get('tbl_customer');
 	$output = '<table width="100%" cellspacing="5" cellspacing="5">';
 	foreach($data->result() as $row)
 	{

 	}
 }
}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model {


    // Constructor
    public function __construct()
    {
        parent::__construct();
        // Load the database library
        $this->load->database();
    }

    public function get_all_projects()
    {
        // Query the 'users' table where 'flag' is 1
        $query = $this->db->get_where('tbl_projects', array('status' => 1));
        // Return the result as an associative array
        return $query->result_array();
    }


    public function get_project_details($name)
    {
        // Query the 'users' table where 'flag' is 1
        $query = $this->db->get_where('tbl_projects', array('status' => 1, 'url' => $name));
        // Return the result as an associative array
        return $query->result_array();
    }




    public function get_images($name)
    {
          // Use query builder to join the tables
          $this->db->select('*'); // Select all columns from tbl_images
          $this->db->from('tbl_images'); // From tbl_images, with alias 'i'
          $this->db->join('tbl_projects', 'tbl_images.p_id = tbl_projects.id'); // Join with tbl_projects on facility_id = id
          $this->db->where('tbl_projects.url', $name); // Filter by facility name
          $this->db->where('tbl_images.status', '1'); // Filter by facility name
          $query = $this->db->get(); // Execute the query

          // Check if any rows are returned
          if ($query->num_rows() > 0) {
              return $query->result(); // Return the result as an array of images
          } else {
              return false; // No images found for the given facility name
          }
    }
 





	public function insert_contact_information($data)  
		{  

				$this->db->insert("tbl_enquiries", $data); 
				if ($this->db->affected_rows() == '1')
			{
				$result["result"] = "success";
				return $result;
			}
			else
			{
				$result["result"] = "fail";
				return $result;
			}
		}


}
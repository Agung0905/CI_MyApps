<?php 

/**
  * 
  */
 class Blog extends CI_controller {

 	public function index()
 	{

 		$this->load->database();

        $query=$this->db->get("blog");
        $data['blogs']= $query->result_array();

        $this->load->view('blog',$data);
 	}

 	public function detail($url)
 	{
 		$this->load->database();
 		$query = $this->db->query ('SELECT * FROM blog WHERE url = "'.$url.'" ');
 		$data['blog'] = $query->row_array();

 		print_r($data);
 	}
} 

?>

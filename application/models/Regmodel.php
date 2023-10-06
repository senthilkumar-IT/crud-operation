<?php

class Regmodel extends CI_model {
    public function updateData($data,$id) {
       $this->load->database();
       $this->db->where('id',$id);
        return $this->db->update($data,'employeereg');

 
    }
    public function editData($id) {
        $this->load->database();
        $this->db->where('id',$id);
       return $this->db->get('employeereg')->result();
        
    }

    public function insertData($data) {
        print_r($data);

        $this->load->database();

        return $this->db->insert('employeereg', $data);
    }

    public function getRecord() {
        $this->load->database();
       return $result = $this->db->get('employeereg')->result();

    
        // echo 'you have accessed getRecord method from  Regmodel';
    }

    //return$this->db->get('employeereg')->result();
    /*  echo'<pre>';
      print_r($result);
      echo'</pre>';
     * 
     */
}

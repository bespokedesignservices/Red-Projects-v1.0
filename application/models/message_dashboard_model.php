<?php

class message_dashboard_model extends CI_Model {
        
    function count_inbox(){
        $id = $this->session->userdata('id');
        $q = "select * from messages where user_to=$id";
        $rs = $this->db->query($q);
        return $rs->num_rows();
    }
    
    function count_sent(){
        $id = $this->session->userdata('user_id');
        $q = "select * from messages_sent where user_from=$id";
        $rs = $this->db->query($q);
        return $rs->num_rows();
    }
    
    function count_messages(){
            $id = $this->session->userdata('user_id');
            $data['inbox'] = $this->db
                    ->where('user_to',$id)
                    ->count_all_results('messages');
            $data['sent'] = $this->db
                    ->where('user_from',$id)
                    ->count_all_results('messages_sent');            
            return $data;
        }
    
    function count_inserted($date){
            $id = $this->session->userdata('user_id');
            $data['inbox'] = $this->db
                   ->where('user_to',$id)
                    ->like('date',$date,'both')
                    ->count_all_results('messages');
            
            $data['sent'] = $this->db
                    ->where('user_from',$id)
                    ->like('date',$date,'both')
                    ->count_all_results('messages_sent');

            return $data;
        }
}   
?>
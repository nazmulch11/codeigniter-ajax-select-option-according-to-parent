//this is model file 

public function get_brand_by_vendor($vendor_id)
        {
            $this->db->select('*');
            $this->db->from('tbl_brand');
            $this->db->where('vendor_id',$vendor_id);
            $query_result = $this->db->get();
            $result       = $query_result->result();
            return $result;
        }

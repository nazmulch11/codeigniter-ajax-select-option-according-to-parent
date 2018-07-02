
//this function recieved ajax request

public function vendor_ajax_brand()
        {
            $vendor_id = $this->input->post('vendor_id');
            $brand = $this->Vendor_model->get_brand_by_vendor($vendor_id);

            echo json_encode($brand);

        }

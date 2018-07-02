
        public function __construct()
        {
            parent::__construct();
            if (!$this->session->userdata('admin_session')) {
                redirect('adminportal');
            }

            date_default_timezone_set('Asia/Dhaka');

            $this->load->model('model_name');
        }

//this function recieved ajax request

public function vendor_ajax_brand()
        {
            $vendor_id = $this->input->post('vendor_id');
            $brand = $this->model_name->get_brand_by_vendor($vendor_id);

            echo json_encode($brand);

        }

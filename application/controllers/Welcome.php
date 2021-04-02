<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{
	public $data = array();
    public $userid;
	
	
	function __construct()
	{
		parent::__construct();
		$this->data['isregist'] = $this->session->userdata('verified');
		$this->data['userloggedin'] = $this->session->userdata('verified');
		$this->load->model('auth_model');	
	}

	function index() 
	{

		$this->data['title'] = 'S-26 | Playgame';
		$this->load->view('frontend/home/home', $this->data);

		// if ($this->validregist()) {
		// 	$this->data['title'] = 'S-26 | Play Game';
		// 	$this->load->view('frontend/home/home', $this->data);
		// } else {
		// 	$this->data['title'] = 'S-26 | Register';
		// 	$this->load->view('frontend/auth/register', $this->data);
		// }
	}

	function feedback(){
		$this->data['title'] = 'S-26 | Play Game';
		$this->data['url'] = $this->uri->segment(1);
		$this->load->view('frontend/home/feedback', $this->data);
	}

	function save(){

		$data = [
            'player_id' => $this->input->post('id', TRUE),
			'fb_1' => $this->input->post('fb_1', TRUE),
			'fb_2' => $this->input->post('fb_2', TRUE),
			'fb_3' => $this->input->post('fb_3', TRUE),
			'fb_4' => $this->input->post('saran', TRUE)
        ];
        $result = $this->Auth_model->saveFeed($data);
        echo json_encode($result);
		
	}

	public function download(){				
		force_download('assets/images/flayer.pdf',NULL);
		

	}

	function register() {


        if ($this->input->is_ajax_request()) {

			$this->form_validation->set_rules('name', 'Nama Lengkap', 'required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('phone', 'Nomor Telepon', 'required');

            if ($this->form_validation->run() == FALSE) {

                $result = array("status" => false, "msg" => validation_errors(), "url" => "");
            } else {

				$ip 	= $this->input->ip_address();
				$name 	= $this->input->post('name');
				$email 	= $this->input->post('email');
				$phone 	= $this->input->post('phone');
				$token_id = random_string('alnum', 8); 
				//insert new ip
				$data = array(
		
					'account_name' 		=> $name,
					'account_email' 	=> $email,
					'account_phone' 	=> $phone,
					'account_token' 	=> $token_id,
					'account_ip' 		=> $ip,
					'account_date' 		=> date('Y-m-d'),
		
				);
                $login = $this->Auth_model->signup($data);
                if ($login) {
                    $prevurl = $this->session->userdata('prevURL');
                    if (!empty($prevurl)) {
                        $url = $prevurl;
                    } else {
						$this->session->set_userdata('verified', $data);
                        $url = base_url() . 'welcome';
                    }

                    $result = array("status" => true, "msg" => "", "url" => $url);
                } else {
                    $result = array("status" => false, "msg" => "Invalid Credentials", "url" => "");

                }

            }
            echo json_encode($result);

        }
    }


	function validregist() {

        if (!empty($this->data['isregist'])) {
            return true;
        } else {
            return false;
        }
	}

	function leadboard(){
		$this->data['title'] = 'S-26 | Leadboard';
		$this->load->view('frontend/home/leadboard', $this->data);

	}

	function get_score(){
        $data = $this->Auth_model->get_score()->result();
        echo json_encode($data);
    }

	
}

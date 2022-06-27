<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	public $data = array();
    public $userid;
	
	
	function __construct()
	{
		parent::__construct();
		$this->data['isadmin'] = $this->session->userdata('id');
		
		$this->load->model('auth_model');	
	}

	function index() 
	{

		if ($this->validadmin()) {
			$this->data['title'] = 'S-26 | Dashboard';
			$this->layout->display('backend/DashboardV', $this->data);
		} else {
			$this->data['title'] = 'S-26 | Login';
			$this->load->view('auth/login', $this->data);
		}
	}


    function validadmin() {

        if (!empty($this->data['isadmin'])) {
            return true;
        } else {
            return false;
        }
    }

    function login() {

        $username = $this->input->post('email');
        $password = $this->input->post('password');
        if ($this->input->is_ajax_request()) {

            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {

                $result = array("status" => false, "msg" => validation_errors(), "url" => "");
            } else {

                $login = $this->Auth_model->login_admin($username, $password);
                if ($login) {
                    $prevurl = $this->session->userdata('prevURL');
                    if (!empty($prevurl)) {
                        $url = $prevurl;
                    } else {
                        $url = base_url() . 'dashboard';
                    }

                    $result = array("status" => true, "msg" => "", "url" => $url);
                } else {
                    $result = array("status" => false, "msg" => "Upps ada yang salah...", "url" => "");

                }

            }
            echo json_encode($result);

        }
    }

    public function logout()
	{
	 $this->session->unset_userdata('id');
	 $this->session->unset_userdata('nama');
	 redirect('/dashboard');
	}

	public function account_login()
    {
        $list = $this->AccountM->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $account) {
            $no++;
            $row = array();
            $row[] = $account->account_name;
            $row[] = $account->account_phone;
			$row[] = date('d M Y - H:i:s', strtotime($account->account_date));
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->AccountM->count_all(),
                        "recordsFiltered" => $this->AccountM->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }

	public function leadboard()
    {
        $list = $this->LeadM->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $account) {
            $no++;
            $row = array();
			
            $row[] = $account->account_name;
            $row[] = $account->account_phone;
			$row[] = $account->account_score;
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->LeadM->count_all(),
                        "recordsFiltered" => $this->LeadM->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }


	public function feedback()
    {
        $list = $this->FeedbackM->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $fb) {
            $no++;
            $row = array();
			
            $row[] = $fb->account_name;
			if($fb->fb_1 == '1'){
                $row[] = "Bagus";
            }elseif($fb->fb_1 == 2) {
                $row[] = 'Biasa Saja';
            }elseif($fb->fb_1 == 3){
				$row[] = 'Kurang Bagus';
			}

			if($fb->fb_2 == '1'){
                $row[] = "Bagus";
            }elseif($fb->fb_2 == 2) {
                $row[] = 'Biasa Saja';
            }elseif($fb->fb_2 == 3){
				$row[] = 'Kurang Bagus';
			}

			if($fb->fb_3 == '1'){
                $row[] = "Menarik";
            }elseif($fb->fb_3 == 2) {
                $row[] = 'Biasa Saja';
            }elseif($fb->fb_3 == 3){
				$row[] = 'Kurang Menarik';
			}
			$row[] = $fb->fb_4;



            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->FeedbackM->count_all(),
                        "recordsFiltered" => $this->FeedbackM->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }


	public function reset_all()
		{
			$this->FeedbackM->reset_db();
			redirect('dashboard');
		}

	
}
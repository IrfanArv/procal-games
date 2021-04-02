<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
/**
 * @package  : API
 */
class Api extends CI_Controller {

    public function __construct() {

        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
            die();
        }
        parent::__construct();

        $this->load->library('user_agent');
        
        //
        $this->config->set_item('csrf_protection', TRUE);
        //

        //variable session
        $this->player = $this->session->userdata('is_game');
        
        //
        $this->config->set_item('csrf_protection', TRUE);
    
    }

    public function reqToken()
    {
        header('Access-Control-Allow-Origin: *');
        $data = (array)json_decode(file_get_contents('php://input'), true);
        $tokenID        = random_string('alnum', 8); 
        $ip 	        = $this->input->ip_address();
        $palyerName     = $data['palyerName'];
        $playerPhone    = $data['playerPhone'];

            $data = array(
                'account_token'     => $tokenID,
                'account_name'      => $palyerName,
                'account_phone'     => $playerPhone,
                'account_ip'        => $ip
                

            );

            $this->Auth_model->signup($data);
            $response['status'] = '200 OK';
            $response['message'] = 'Entry Player Success';
            $response['token_id'] = $tokenID;
            $response['player_name'] = $palyerName;
            $response['player_phone'] = $playerPhone;
            header('Content-Type: application/json');
            echo json_encode($response,TRUE);

    }


    public function endGame()
    {
        header('Access-Control-Allow-Origin: *');
        $data = (array)json_decode(file_get_contents('php://input'), true);
        $tokenID = $data['tokenID'];
        $gameID = $data['gameID'];
        $score = $data['score'];

       

            $data = array(
 
                // 'account_token'     => $tokenID,
                // 'account_id'        => $gameID,
                'account_score'     => $score

            );

                $this->Auth_model->game_update_score($tokenID, $data);

                $response['status'] = '200 OK';
                $response['message'] = 'Entry Score';
                $response['token_id'] = $tokenID; 
                $response['game_id'] = $gameID;
                $response['score'] = $score;
                header('Content-Type: application/json');
                echo json_encode($response,TRUE);

                require_once(APPPATH.'../vendor/autoload.php');

                $options = array(
                    'cluster' => 'ap1',
                    'useTLS' => true
                );
                $pusher = new Pusher\Pusher(
                    '6883481843fb618042f2', 
                    '49c5366d6aa2b496c3b3', 
                    '1179730', 
                    $options
                );
                 
                $data['message'] = 'success';
                $pusher->trigger('my-channel', 'my-event', $data);

                


    }

}
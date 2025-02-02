<?php

class Auth extends CI_controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_auth');
    }

    function index(){
        $data['title'] = 'Login';
        $this->load->view('auth/login');
    }

    public function login(){

        echo "string";
        $user = $this->input->post('user_name');
        $pass = $this->input->post('password');
        

        
        $queryUser = $this->M_auth->userLogin($user, $pass);
        
        $data_session = array(
                'id' => $queryUser['id'],
                'user_name' => $user,
                'name' => $queryUser['name'],
                'access_level' => $queryUser['access_level'],
                'zone_code' => $queryUser['zone_code'],
                'status' => "login"
                );
 
        $this->session->set_userdata($data_session);

        if($queryUser){
            $arrayAccessAdminSales = [
                'Masters'=>
                    [
                        'Customers','Zones'
                    ],
                    'Transaction'=>
                    [
                        'Request','Receive'
                    ],
                'Report' => ['Pending','Finish'],
                'Access'=>[1]
            ];

            $arrayAccessSales = [
                'Masters' => [0],
                'Transaction'=>
                [
                    'Approves'
                ],
                'Report' => [0],
                'Access'=>[0],
            ];

            $arrayAccessSalesHead = [
                'Masters' => [0],
                'Transaction' => [0],
                'Report' => ['Pending','Finish'],
                'Access'=>[0],
            ];

            $arrayAccessEngDrawing = [
                'Masters' => [0],
                'Transaction' => ['Drawing'],
                'Report' => [0],
                'Access'=>[0],
            ];

            $arrayAccessEngPackaging = [
                'Masters' => [0],
                'Transaction' => ['Packaging'],
                'Report' => [0],
                'Access'=>[0],
            ];

            $arrayAccessEngBom = [
                'Masters' => [
                    'Manufactures', 'Brands', 'Warehouses'
                ],
                'Transaction' => ['Bom'],
                'Report' => ['Pending','Finish']
            ];

            $arrayAccessEngHead = [
                'Masters' => [0],
                'Transaction' => [0],
                'Report' => ['Pending','Finish'],
                'Access' =>[0]
            ];

            $arrayAccessSistemAdmin = [
                'Masters' => [
                    'Users','Manufactures','Brands','Warehouses','Customers','Zones'
                ],
                'Transaction' => [
                    'Request', 'approves','Drawing','Packaging','Bom','Receive'
                ],
                'Report' => ['Pending','Finish'],
                'Access' => [1],

            ];
            
            if ($queryUser['access_level'] == 1) {
                $data = [
                    'user'=> $queryUser["user_name"],
                    'access' => $arrayAccessAdminSales
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');

            }elseif ($queryUser['access_level'] == 2){
                $data = [
                    'user' =>$queryUser["user_name"],
                    'access' => $arrayAccessSales 
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');

            }elseif ($queryUser['access_level'] == 3) {
                $data = [
                    'user' =>$queryUser["user_name"],
                    'access' => $arrayAccessSalesHead 
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');

            }elseif ($queryUser['access_level'] == 4) {
                $data = [
                    'user' =>$queryUser["user_name"],
                    'access' => $arrayAccessEngDrawing 
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');

            }elseif ($queryUser['access_level'] == 5) {
                $data = [
                    'user' =>$queryUser["user_name"],
                    'access' => $arrayAccessEngPackaging 
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');

            }elseif ($queryUser['access_level'] == 6) {
                $data = [
                    'user' =>$queryUser["user_name"],
                    'access' => $arrayAccessEngBom 
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            }elseif ($queryUser['access_level'] == 7) {
                $data = [
                    'user' =>$queryUser["user_name"],
                    'access' => $arrayAccessEngHead
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');

            }elseif ($queryUser['access_level'] == 8) {
                $data = [
                    'user' =>$queryUser["user_name"],
                    'access' => $arrayAccessSistemAdmin
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            }
            
        }else{
            $this->session->set_flashdata("msg","<div class='alert alert-danger' role='alert'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Login Failed!</strong><br> Check your username & password. 
            </div>");
            redirect('auth');
        }
        
    }

    public function logout(){
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('access');

        $this->session->sess_destroy();

        redirect('auth');
    }

    public function updatePassword()
    {
      
        $user = $this->M_auth;
        $res = $user->updatePassword();

        redirect('dashboard');

    }


}

?>

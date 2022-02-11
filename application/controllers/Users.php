<?php class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('auth/login');
    }
    public function register()
    {
        $this->load->view('auth/register');
    }
    public function register_post()
    {
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[5]|max_length[45]');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[5]|max_length[45]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/register');
        } else {
            $data['fname'] = $this->input->post('fname');
            $data['lname'] = $this->input->post('lname');
            $data['email'] = $this->input->post('email');
            $data['password'] = sha1($this->input->post('password'));
            $sql = $this->user->insert_user($data);
            if ($sql == TRUE) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully Registered! Please login to access your Profile!</div>');
                redirect("annuaires/index", "refresh");
            } else {
                redirect("users/register", "refresh");
            }
        }
    }
    public function login()
    {        
        $email = $this->input->post('email');
        $password = sha1($this->input->post('password'));

        $this->form_validation->set_rules("email", "email", "trim|required|valid_email");
        $this->form_validation->set_rules("password", "password", "trim|required|min_length[8]");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            $login = $this->user->get_user($email, $password);
            if (count($login) > 0) {
                $session_data = array(
                    'login' => TRUE,
                    'email' => $email,
                    'password' => $password,
                    'id' => $login[0]->id
                );
                $this->session->set_userdata($session_data);
                redirect("annuaires/manage", "refresh");
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center"> Invalid Email or Password !</div>');
                redirect("users/index", "refresh");
            }
        }
    }
    public function logout()
    {
        $session_data = array(
            'login' => TRUE,
            'email' => '',
            'password' => '',
            'id' => ''
        );
        $this->session->unset_userdata($session_data);
        $this->session->sess_destroy();
        redirect("annuaires/index", "refresh");
    }
}

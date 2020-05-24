<?php

class Admins extends Controller
{
    public function __construct()
    {
        $this->adminModel = $this->model('AdminModel');
    }

    public function index(){
        check_adminSession();


        $data = [
            'name' => '',
            'title'=>'Proteam | Admin'
        ];

        $data['name'] = ucfirst($this->adminModel->get_name($_SESSION['user_id'])->name);

        return $this->view('admins/index' ,$data);
    }

    public function login()
    {

        $data = [
            'title' => 'Admins Login'
        ];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => 'Admins Login',
                'uname' => $_POST['uname'],
                'pword' => $_POST['pword'],
                'remember' => $_POST['remember']
            ];


            $verify = $this->adminModel->admin_login($data['uname']);

            $pw_verify = password_verify($data['pword'], $verify[0]->password);

            if ($pw_verify == true || $pw_verify == 1) {
                if ($data['remember'] = 'on' && $data['remember'] != null) {
                    setcookie('admin_uname', $data['uname'], time() + (10 * 365 * 24 * 60 * 60));
                    setcookie('admin_pword', $data['pword'], time() + (10 * 365 * 24 * 60 * 60));
                } else {
                    if (isset($_COOKIE['admin_uname'])) {
                        setcookie("admin_uname", "");
                    }
                    if (isset($_COOKIE['admin_pword'])) {
                        setcookie("admin_pword", "");
                    }
                }

                $user = [
                    'id' => $verify[0]->id,
                    'username' => $verify[0]->username,
                    'name' => $verify[0]->name
                ];
                create_admin_session($user);
                $_SESSION['login'] = "Login Successfully";

                redirect('admins');


            } else {
                redirect('admins/login?failed');
            }
        }

        return $this->view('admins/login', $data);
    }

    public function form(){
        $form_data = $this->adminModel->get_form_table();

        $data = [
            'title' => 'Form',
            'form' => $form_data
        ];

        return $this->view('admins/form', $data);


    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);


        redirect('admins/login');

    }

    public function change_password(){
        check_adminSession();

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'reset_pw' => $_POST['pword']
            ];

            $update_pw = password_hash($data['reset_pw'], PASSWORD_DEFAULT);

            $result = $this->adminModel->change_pw($_SESSION['user_id'], $update_pw);


            redirect('admins/change_password?success=Password Changed Successfuully');
        }

        $data = [
            'title' => 'Admin'
        ];
        return $this->view('admins/change-password', $data);
    }

    public function deleteform(){

        $formid = $_POST['formid'];

        $deleteForm = $this->adminModel->delete_form($formid);

        if($deleteForm > 0){
            echo "Success";
        }
    }
}
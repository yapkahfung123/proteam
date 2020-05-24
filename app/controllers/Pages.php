<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->formModel = $this->model('Form');
        $this->title = 'ProTeam-Marketing';
    }

    public function index(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => $this->title,
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'company' => $_POST['company'],
                'phone' => $_POST['phone'],
                'description' => $_POST['description'],
                'service' => $_POST['services']
            ];

            foreach ($data as $v){
                if($v == null || empty($v)){
                    $this->view('pages/index', $data);
                }
            }

            $this->formModel->insertData($data);

            $_SESSION['success'] = "Messenge send successfully";
            redirect('');

        }

        $script = null;
        if(isset($_SESSION['success'])){
            $script = '<script>alert("Message send successfuly. We will contact you as soon as possible")</script>';
        }

        $data = [
            'script' => $script,
            'title' => $this->title
        ];

        $this->view('pages/index', $data);
    }
}
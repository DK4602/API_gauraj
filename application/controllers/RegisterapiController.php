<?php

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;

defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterapiController extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('RegisterapiModel');
    }

    public function insert_post()
    {
        $model = new RegisterapiModel();
        $data = $this->input->post();
        $fname = $data['fname'];
        $lname = $data['lname'];
        $data['uname']=$fname.$lname;
        $pass = md5($data['password']);
        $data['password'] = $pass;
        $result = $model->insert($data);
        if($result == 1)
        {
            $this->response(['status' => true,'message' => 'inserted successfully'], RestController::HTTP_OK);
        }
        else if ($result == 'email')
        {
            $this->response(['status' => false,'message' => 'email already exists'], RestController::HTTP_BAD_REQUEST);
        }
        else
        {
            $this->response(['status' => false,'message' => 'insertion failed'], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function country_get()
    {
        $model = new RegisterapiModel();
        $result = $model->country();
        if($result == false)
        {
            $this->response(['status' => false, 'message' => 'country not found'], RestController::HTTP_NOT_FOUND);
        }
        else
        {
            $this->response(['status' => true,'message' => 'country found','result' => $result], RestController::HTTP_OK);
        }
    }

    public function login_post()
    {
        $jwt = new JWT();
        $data = $this->input->post();
        $model = new RegisterapiModel();
        $pass = md5($data['password']);
        $data['password'] = $pass;
        // $this->response($data);
        // die();
        $result = $model->login($data);
        if($result == false)
        {
            $this->response(['status'=> false, 'message' => 'user not found'], RestController::HTTP_NOT_FOUND);
        }
        else
        {
            $jwtsecretmsg ="gauraj"; 
            $token = $jwt->encode($result, $jwtsecretmsg, 'HS256');
            $this->response(['status' => true , 'message' => 'Login Successfully', 'token' => $token],RestController ::HTTP_OK);
        }
    }

    public function enc_get()
    {
        $data = md5(("abc@123"));
        $this->response($data);
    }

}
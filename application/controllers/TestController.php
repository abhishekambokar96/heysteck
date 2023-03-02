<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TestController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function fetchJson()
    {
        return json_decode(file_get_contents('assets/data.json'), true);
    }

    public function index()
    {
        $jsonArray = $this->fetchJson();
        $data['jsonData'] = $jsonArray;
        $this->load->view('jsonView', $data);
    }
}

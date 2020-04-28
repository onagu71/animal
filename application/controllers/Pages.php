<?php

class Pages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Pages_model');
    }

    private function view($page = 'home', $data = null)
    {
        if(!file_exists(APPPATH.'views/pages/' . $page . '.php'))
        {
            show_404();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'. $page, $data);
        $this->load->view('templates/footer', $data);
    }

    public function table($page = 'insect')
    {
        $data['fishes'] = $this->Pages_model->getFishes();
        $data['title'] = '도감';
        $data['scripts'][0] = 'sortButton';
        $this->view($page, $data);
    }

    public function aa($page = 'getMonthCode')
    {
        $data['title'] = '도감';
        $data['scripts'][0] = 'getMonth';
        $this->view($page, $data);
    }
}
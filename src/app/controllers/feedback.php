<?php
class feedback extends DController {
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->list_feedback();
    }

    public function list_feedback()
    {
        $feedbackmodel = $this->load->model('categorymodel');
        $table = "feedback";
        $data['feedback'] = $feedbackmodel->selectallItem($table);
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/feedback', $data);
        $this->load->view('cpanel/footer');
    }
}

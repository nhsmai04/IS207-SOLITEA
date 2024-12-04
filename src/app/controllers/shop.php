
<?php
class shop extends DController
{

    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index()
    {
        $homemodel = $this->load->model('homemodel');
        $table = 'SELECT * FROM drinks';
        $data['fruits'] = $homemodel->selectallItem($table);
        $this->load->view('', $data);
    }
}
?>
<?php
 Class MY_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->sqlsrv = $this->load->database('sqlsrv', TRUE);
        $this->mysql = $this->load->database('mysql', TRUE);
        set_time_limit(12000);

    }
 }

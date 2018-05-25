<?php defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        # Set India Timezone
        date_default_timezone_set('Asia/Kolkata');
    }
}

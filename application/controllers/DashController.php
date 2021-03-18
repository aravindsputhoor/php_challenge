<?php
require APPPATH . '/libraries/simplehtmldom/simple_html_dom.php';

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class DashController extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->model('AdminManager');
			$this->load->model('AdminModel');

        if (!$this->AdminManager->is_user_in()) {
            $this->session->set_flashdata('redir_url', current_url());
            redirect(base_url('admin'));
            die();
        }

		}
		
	public function index() 
	{
		$data['nse']=$this->AdminModel->get_datas();
		if($data['nse'] == NULL) 
		{
				$html = file_get_html('https://www.samco.in/knowledge-center/articles/nse-listed-companies/');

			$table = $html->find('.search_table2',0);
			
			$rowData = array();

			foreach($table->find('tr') as $row) {
			    $flight = array();
			    foreach($row->find('td') as $cell) {
			        $flight[] = $cell->plaintext;
			    }
			    $rowData[] = $flight;
			}

			$l1 = count($rowData);
			
			$result = array();

			for($i=0; $i<$l1;$i++)
			{
				if($i != 0)
				{
					$l2 =count($rowData[$i]);

					$result= array(
								'c_name' => $rowData[$i][0],
								'market_cap' => $rowData[$i][3],
								'market_price' => $rowData[$i][6],
								'eps' => $rowData[$i][4],
								'pe' => $rowData[$i][5],
								
							);
					$this->AdminModel->add_data($result);
					
				}
			}

			$data['nse']=$this->AdminModel->get_datas();
			$this->load->view('table',$data);
		}
		else
		{
			 $this->load->view('table',$data);
		}

    }

    
	
	
	
	
	
		
}

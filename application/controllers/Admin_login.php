<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// //Do your magic here
		// $this->load->helper('basic');
		$this->load->model('Admin_Model', 'admin_model');
	}

	public function index()
	{
		$data = array();
		$this->template->load_login($data);
	}

	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->admin_model->login_check($username, md5($password));
			// var_dump($result);die;
			if ($result) {
				if (trim($result[0]->profile_picture) == '')
					$result[0]->profile_picture = 'default.jpg';
				$this->session->set_userdata('logged_in', $result[0]); //(array)
				$this->session->set_flashdata('login_success', 'Admin logged in successfully.');
				redirect(base_url() . 'admin/dashboard');
			} else {
				$this->session->set_flashdata('login_error', 'Incorrect username/password combination being used.');
				redirect(base_url() . 'admin/login');
			}
		} else {
			$this->session->set_flashdata('login_error', 'Incorrect username/password combination being used.');
			redirect(base_url() . 'admin/login');
		}
	}


	function logout()
	{
		$this->session->unset_userdata('logged_in', array());
		$this->session->set_flashdata('login_success_message', 'You Have Successfully Logged Out Of Your Account.');
		redirect(base_url() . 'admin/login');
	}

	public function test_csv()
	{
		$file = fopen(base_url() . 'upload/restaurant_tags.csv', 'r');
		while (($line = fgetcsv($file)) !== FALSE) {
			//$line is an array of the csv elements
			// dd($line);
			foreach ($line as $key => $value) {

				$new_arr[] = explode(",", $value);
				// echo $value.'<br>';
			}
		}

		fclose($file);
		$arr = array_map("unserialize", array_unique(array_map("serialize", $new_arr)));
		$child = [];
		foreach ($arr as $key_ => $arr_val) {

			// dd($arr_val);
			foreach ($arr_val as $arr_val_key2 => $arr_val_value2) {

				if (!in_array($arr_val_value2, $child)) {

					$child[] = trim($arr_val_value2);
				}
			}
		}
		$child = array_unique($child);
		// dd($child);
		foreach ($child as $child_key => $child_value) {
			echo $child_value . '<br>';
		}
	}

	// public function test_images()
	// {
	// 	ini_set('MAX_EXECUTION_TIME', '-1');
	// 	$this->load->helper('file_finder');

	// 	// $file = fopen(base_url() . 'upload/shop_id_name_list.csv', 'r');

	// 	// while (($line = fgetcsv($file)) !== FALSE) {
	// 	// 	//$line is an array of the csv elements
	// 	// 	// dd($line);
	// 	// 	foreach ($line as $key => $value) {

	// 	// 		$new_arr[] = explode(",", $value);
	// 	// 		// echo $value.'<br>';
	// 	// 	}
	// 	// }

	// 	// fclose($file);
	// 	// $arr = array_map("unserialize", array_unique(array_map("serialize", $new_arr)));
	// 	$start_row = 5; //define start row
	// 	$i = 1; //define row count flag
	// 	$file = fopen(base_url() . 'upload/shop_id_name_list_Sheet1.csv', "r");
	// 	while (($row = fgetcsv($file)) !== FALSE) {
	// 		if ($i >= $start_row) {
	// 			// print_r($row);
	// 			$all_rows[] = $row;
	// 			//do your stuff
	// 		}
	// 		$i++;
	// 	}

	// 	// close file
	// 	fclose($file);
	// 	// dd($all_rows);
	// 	// $row = 1;
	// 	// if (($handle = fopen(base_url() . 'upload/shop_id_name_list_Sheet1.csv', "r")) !== FALSE) {
	// 	// 	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	// 	// 		$num = count($data);
	// 	// 		echo "<p> $num fields in line $row: <br /></p>\n";
	// 	// 		$row++;
	// 	// 		for ($c = 0; $c < $num; $c++) {
	// 	// 			echo $data[$c] . "<br />\n";
	// 	// 		}
	// 	// 	}
	// 	// 	fclose($handle);
	// 	// }


	// 	$countFile = 0;
	// 	foreach ($all_rows as $all_rows_key => $all_rows_value) {
	// 		// dd($all_rows_value[0]);
	// 		// $fi = new FilesystemIterator(FCPATH . 'upload/image-downloads/' . $all_rows_value[0], FilesystemIterator::SKIP_DOTS);
	// 		// echo iterator_count($fi);
	// 		$folderPath = FCPATH . 'upload/image-downloads/' . $all_rows_value[0];
	// 		// echo '<br>';
	// 		// die;
	// 		$file = glob($folderPath . '*');
	// 		$output_str = '';
	// 		if ($file != false) {
	// 			// $files1 = scandir($folderPath);
	// 			// echo '------';
	// 			// echo (count(scandir($folderPath)) - 2);
	// 			// echo '------';
	// 			// print_r($files1);
	// 			// echo $countFile = count($file);
	// 			$countFile = (count(scandir($folderPath)) - 2);
	// 			// echo '<br>';

	// 			// dd('-----');
	// 			echo $output_str = 'Folder Name: ' . $all_rows_value[0] . ' | Image Count: ' . $countFile . ' | Resturant: ' . $all_rows_value[1] . '<br>';
	// 			// $output[] = array(
	// 			// 	'Folder Name' => $all_rows_value[0],
	// 			// 	'Image Count' => $countFile,
	// 			// 	'Resturant' => $all_rows_value[1],
	// 			// );
	// 			// dd('dd');
	// 		}
	// 		// print_r($countFile);
	// 		// echo '<br>';

	// 		// if ($fi) {

	// 		// 	printf("There were %d Files", iterator_count($fi));
	// 		// }
	// 	}

	// 	// dd($output);
		
	// 	// start finding files (maximum depth is one folder down) 
	// 	$count = $bytes = 0;
	// 	FileFinder::find(FCPATH . 'upload/image-downloads', function ($file) use (&$count, &$bytes) {
	// 		// the closure updates count and bytes so far
	// 		++$count;
	// 		$bytes += filesize($file);
	// 	}, 1);

	// 	echo "Nr files: $count; bytes used: $bytes\n";
	// 	echo 'ddd';
	// }


	public function test_cat_tag_csv()
	{
		$file = fopen(base_url() . 'upload/working_first_column_cat_tag_file.csv', 'r');

		 

		while (($line = fgetcsv($file)) !== FALSE) {		 
			$rows[] = $line;
		}

		fclose($file);
		foreach ($rows as $rows_key => $rows_value) {

			if($rows_key > 0){

				$data_arr = [];
				foreach ($rows_value as $rows_value_key => $value) {					

					if($rows_value_key == 0){

						$tag = trim($rows_value[0]);
						$this->db->select('id');
						$this->db->like('tag_name', $tag, 'BOTH');
						$tag_id_row = $this->db->get('tags')->row_array();
						$data_arr['tag_id'] = $tag_id_row['id'];

					}
					elseif($rows_value_key == 1){
						if(!empty($rows_value[1])){

							$category = trim($rows_value[1]);
							$this->db->select('id');
							$this->db->like('category_name', $category, 'BOTH');
							$category_id_row = $this->db->get('categories')->row_array();
							$data_arr['category_id'] = $category_id_row['id'];
						} 
					}

					// elseif($rows_value_key == 2){
					// 	$category = '';
					// 	if(!empty($rows_value[2])){

					// 		$category = trim($rows_value[2]);
					// 		$this->db->select('id');
					// 		$this->db->like('category_name', $category, 'BOTH');
					// 		$category_id_row = $this->db->get('categories')->row_array();
					// 		if(empty($category_id_row)){
					// 			$data_arr = [];
					// 		}else{

					// 			$data_arr['category_id'] = $category_id_row['id'];
					// 		}
					// 	} 
					// }
					 
					// elseif($rows_value_key == 3){
					// 	$category = '';
					// 	if(!empty($rows_value[3])){

					// 		$category = trim($rows_value[3]);
					// 		$this->db->select('id');
					// 		$this->db->like('category_name', $category, 'BOTH');
					// 		$category_id_row = $this->db->get('categories')->row_array();
					// 		if(empty($category_id_row)){
					// 			$data_arr = [];
					// 		}else{

					// 			$data_arr['category_id'] = $category_id_row['id'];
					// 		}
					// 	} 
					// }
				}
				if(isset($data_arr['category_id']) && !empty($data_arr['category_id'])){

					echo '<pre>';
					print_r($data_arr);
					echo '</pre>';
					// $this->db->insert('tag_categories', $data_arr);

				}
			}

		}
		
		 
	}
}

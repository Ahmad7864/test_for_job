<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();
		// //Do your magic here
		// $this->load->helper('basic');
		$this->load->model('Admin_Model', 'admin_model');
	}
    public function test_file()
	{
        //get all products
        $all_products['products'] = $this->db->get("products")->result_array();

        //count all active users
        $this->db->select("COUNT(user.id) all_users");
        $this->db->where("user.status","active");
        $all_products['total_users'] = $this->db->get("user")->row_array();

        //Count of active and verified users who have attached active products
        $this->db->select("COUNT(user.id) users");
        $this->db->join("user_products","user_products.user_id = user.id");
        $this->db->join("products","products.id = user_products.product_id");
        $this->db->where("user.status","active");
        $this->db->where("products.status","active");
        $all_products['total_active'] = $this->db->get("user")->row_array();

        //Count of all active products (just from products table)
        $this->db->select("COUNT(products.id) all_products");
        $this->db->where("products.status","active");
        $all_products['total_products'] = $this->db->get("products")->row_array();

        //Amount of all active attached products.
        $this->db->select("SUM(products.amount) amount");
        $this->db->join("user_products","user_products.user_id = user.id");
        $this->db->join("products","products.id = user_products.product_id");
        $this->db->where("products.status","active");
        $all_products['t_amount'] = $this->db->get("user")->row_array();

        //Count of active products which don't belong to any user
        $this->db->select("COUNT(products.id) products");
        $this->db->join("user_products","user_products.product_id = products.id");
        $this->db->join("user","user.id = user_products.user_id");
        $this->db->where("user_products.user_id","");
        $all_products['b_products'] = $this->db->get("products")->row_array();

        //ummarized price of all active attached products
        $this->db->select("SUM(products.amount * products.value) amount,products.title  title,products.amount single_amount,products.value value");
        $this->db->join("user_products","user_products.user_id = user.id");
        $this->db->join("products","products.id = user_products.product_id");
        $this->db->where("products.status","active");
        $this->db->group_by("products.title");
        $all_products['summarized'] = $this->db->get("user")->result_array();

        // Summarized prices of all active products per use
        $this->db->select("SUM(products.amount * user_products.qty) all_amount,user.name,products.title,products.amount single_amount,user_products.qty qty");
        $this->db->join("user_products","user_products.user_id = user.id");
        $this->db->join("products","products.id = user_products.product_id");
        $this->db->where("products.status","active");
        $this->db->group_by("products.title");
        $all_products['summarizedPrices'] = $this->db->get("user")->result_array();

       //The exchange rates for USD based on Euro
       $curl = curl_init();

       curl_setopt_array($curl, array(
         CURLOPT_URL => "https://api.apilayer.com/exchangerates_data/convert?to=EUR&from=USD&amount=56",
         CURLOPT_HTTPHEADER => array(
           "Content-Type: text/plain",
           "apikey: NpOiyARm0RQ3ujdgvDr84YjOiKChyabX"
         ),
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 0,
         CURLOPT_FOLLOWLOCATION => true,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "GET"
       ));
       
       $response = curl_exec($curl);
       
       curl_close($curl);
       $all_products['USD_to_EUR'] = $response;

        //The exchange rates for RON based on Euro
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.apilayer.com/exchangerates_data/convert?to=EUR&from=RON&amount=56",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: text/plain",
            "apikey: NpOiyARm0RQ3ujdgvDr84YjOiKChyabX"
          ),
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET"
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
       $all_products['RON_to_EUR'] = $response;

        $this->load->view("test",$all_products);
	}

}
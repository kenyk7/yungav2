<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public $base_service = "http://www.creatipro.com/apps/apiyunga/api/";
	public $base_service_likes = "http://www.creatipro.com/apps/apiyunga/api/add_to_like/";
	// public $base_service = "http://localhost/apiyunga/api/";
	// public $base_service_likes = "http://localhost/apiyunga/api/add_to_like/";

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$urlS = $this->base_service."url_service";
		$JSON = file_get_contents($urlS);
		$result = json_decode($JSON);
		$data['url_service'] = $result->url_service;
		$data['url_service_small'] = $result->url_service_small;

		// get images
		$dataservice = $this->base_service."images";
		$JSONDATA = file_get_contents($dataservice);
		$data_ser = json_decode($JSONDATA);
		$data['data_ser'] = $data_ser;

		$this->layout->view('home_view',$data);
	}

	public function photo($id)
	{
		if(!$id){
			redirect(base_url(),301);
		}

		$urlS = $this->base_service."url_service";
		$JSON = file_get_contents($urlS);
		$result = json_decode($JSON);
		$data['url_service'] = $result->url_service;
		$data['url_service_small'] = $result->url_service_small;

		// get image
		$dataservice = $this->base_service."image/".$id;
		$photo = file_get_contents($dataservice);
		$data_photo = json_decode($photo);

		$data['data_photo'] = $data_photo;

		if(count($data['data_photo']) == 0){
			redirect(base_url(),301);
		}

		$this->layout->setImage($data['url_service_small'].$data_photo->imageName);

		$this->layout->view('photo_view',$data);
	}
	public function favoritas()
	{
		$urlS = $this->base_service."url_service";
		$JSON = file_get_contents($urlS);
		$result = json_decode($JSON);
		$data['url_service'] = $result->url_service;
		$data['url_service_small'] = $result->url_service_small;

		// get images
		$dataservice = $this->base_service."images_maslikes";
		$JSONDATA = file_get_contents($dataservice);
		$data_ser = json_decode($JSONDATA);
		$data['results'] = $data_ser;
		$data['titlepag'] = 'Favoritas';

		$this->layout->setTitle('Favoritas: Fotos con más likes'); 
		$this->layout->view('search_view',$data);
	}

	public function search($keys=NULL)
	{
		
		if ($this->input->post("keyValue")) {

			$key_clean = url_title($this->input->post("keyValue"));
            redirect(base_url().'search/'.$key_clean,301);
        }

        if (strlen($this->uri->segment(2)) > 2) {

            $url_data = $this->base_service."search/".url_title($keys);
			$data_service = file_get_contents($url_data);
			$data_results = json_decode($data_service);
			$data['results'] = $data_results;

        }else{
            $data['results'] = array();
        }

        if ($this->uri->segment(2)) {
            $this->layout->setTitle(ucfirst(str_replace("-"," ",$this->uri->segment(2))));

            $data['titlepag'] = ucfirst(str_replace("-"," ",$this->uri->segment(2)));

        }else{
            $this->layout->setTitle('Search');
            $data['titlepag'] = 'Search';

            $url_data = $this->base_service."search/";
			$data_service = file_get_contents($url_data);
			$data_results = json_decode($data_service);
			$data['results'] = $data_results;
        }

        $urlS = $this->base_service."url_service";
		$JSON = file_get_contents($urlS);
		$result = json_decode($JSON);
		$data['url_service'] = $result->url_service;
		$data['url_service_small'] = $result->url_service_small;

		$this->layout->view('search_view',$data);
	}

	public function submit()
	{
		$this->layout->setTitle('Enviar una Foto');
		$this->layout->view('submit_view');
	}
	public function proyecto()
	{
		$this->layout->setTitle('Sobre el Proyecto'); 
		$this->layout->view('proyecto_view');
	}
	public function historia()
	{
		$this->layout->setTitle('Historia'); 
		$this->layout->view('historia_view');
	}
	

}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('MainModel');

	}

	public function index()
	{        
		$data['projects'] = $this->MainModel->get_all_projects();

		$this->load->view('index', $data);
	}
	public function ourcompany()
	{        

		$this->load->view('ourcompany');
	}

	public function services()
	{        

		$this->load->view('services');
	}

	public function contact()
	{        

		$this->load->view('contact');
	}

	public function projects()
	{        
		$data['projects'] = $this->MainModel->get_all_projects();
		$this->load->view('projects', $data);
	}
	
	public function project($name)
	{
		$data['image'] = $this->MainModel->get_images($name);
		$data['project'] = $this->MainModel->get_project_details($name);
		if( $this->MainModel->get_project_details($name)){
			$this->load->view('project', $data);
		}else{
			$this->load->view('errorpage');
		}
	}
	
	public function errorpage()
	{        
		$this->load->view('errorpage');
	}
	

	

	function send_mail()  
	{  
		$this->load->helper(array('form','url'));
		 $this->load->library('form_validation');  
		 $this->form_validation->set_rules('form_name', 'form_name', 'required');  
		 $this->form_validation->set_rules('form_email', 'form_email', 'required'); 
		 $this->form_validation->set_rules('form_phone', 'form_phone', 'required'); 

		 if($this->form_validation->run()){
			


			$name = $this->input->post('form_name');  
			$email = $this->input->post('form_email');  
			$city = $this->input->post('form_city');
			$phone_number = $this->input->post('form_phone');
			$form_message = $this->input->post('form_message');

					$to = 'jayarajvmu@gmail.com';
					$subject = 'Enquery Data';
					$message = "Enquery Details from customer \r\n \r\n";
					$message .= "Name : ".$name . "\r\n";
					$message .= "Email Id : ".$email."\r\n";			
					$message .= "City : ".$city."\r\n";
					$message .= "Contact Number : ".$phone_number."\r\n";
					$message .= "Messsage : ".$form_message."\r\n";

        $headers = 'From: praveenmech00005@gmail.com' . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

				   $data = array(
					'name' => $name,
					'email' => $email,
					'city' => $city,
					'phone_number' => $phone_number,
					'form_message' => $form_message,
				);
		
				$result = $this->MainModel->insert_contact_information($data);
        if (mail($to, $subject, $message, $headers) && $result['result'] == 'success') {
			$this->session->set_flashdata('emailsucess', 'Mail send suucessfully');
			redirect(base_url("/contact"));
        } else {
			$this->session->set_flashdata('emailerror', 'Can not able to send mail');
			redirect(base_url("/contact"));
        }
		}
    }

}
<?php

class Student extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->not_logged_in();
		
		$this->data['page_title'] = 'Student';
		$this->load->model('model_student');

	}

	// List all your items
	public function index()
	{
        $this->render_template('Student/index', $this->data);
	}

	public function create()
	{
		
		$response = array();

		$this->form_validation->set_rules('stduent_name', 'Stduent name', 'trim|required');
		$this->form_validation->set_rules('active', 'Active', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'name' => $this->input->post('stduent_name'),
        		'active' => $this->input->post('active'),	
        	);

        	$create = $this->model_student->create($data);
        	if($create == true) {
        		$response['success'] = true;
        		$response['messages'] = 'Succesfully created';
        	}
        	else {
        		$response['success'] = false;
        		$response['messages'] = 'Error in the database while creating the brand information';			
        	}
        }
        else {
        	$response['success'] = false;
        	foreach ($_POST as $key => $value) {
        		$response['messages'][$key] = form_error($key);
        	}
        }

        echo json_encode($response);
	}

	public function fetchStudentDataById($id = null)
	{
		if($id) {
			$data = $this->model_student->getStudentData($id);
			echo json_encode($data);
		}
		
	}

	//Update one item
	public function update($id)
	{
		
		$response = array();

		if($id) {
			$this->form_validation->set_rules('edit_student_name', 'Student name', 'trim|required');
			$this->form_validation->set_rules('edit_active', 'Active', 'trim|required');

			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

	        if ($this->form_validation->run() == TRUE) {
	        	$data = array(
	        		'name' => $this->input->post('edit_student_name'),
        			'active' => $this->input->post('edit_active'),	
	        	);

	        	$update = $this->model_stores->update($id, $data);
	        	if($update == true) {
	        		$response['success'] = true;
	        		$response['messages'] = 'Succesfully updated';
	        	}
	        	else {
	        		$response['success'] = false;
	        		$response['messages'] = 'Error in the database while updated the brand information';			
	        	}
	        }
	        else {
	        	$response['success'] = false;
	        	foreach ($_POST as $key => $value) {
	        		$response['messages'][$key] = form_error($key);
	        	}
	        }
		}
		else {
			$response['success'] = false;
    		$response['messages'] = 'Error please refresh the page again!!';
		}

		echo json_encode($response);
	}

	//Delete one item
	public function remove()
	{
		
		
		$std_id = $this->input->post('std_id');

		$response = array();
		if($std_id) {
			$delete = $this->model_student->remove($std_id);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = "Successfully removed";	
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Error in the database while removing the brand information";
			}
		}
		else {
			$response['success'] = false;
			$response['messages'] = "Refersh the page again!!";
		}

		echo json_encode($response);
	}

	
}

/* End of file Student.php */
/* Location: ./application/controllers/Student.php */

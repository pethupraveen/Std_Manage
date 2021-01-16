<?php

class Student extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		//$this->not_logged_in();
		
		$this->data['page_title'] = 'Store';
		$this->load->model('model_student');

	}

	// List all your items
	public function index()
	{
	 if(!in_array('viewStudent', $this->permission)) {
         redirect('dashboard', 'refresh');
       }
      // $this->data['js'] = 'application/views/stores/index-js.php';
        $this->render_template('Student/index', $this->data);
	}

	public function fetchCategoryData()
	{
		if(!in_array('viewStudent', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

		$result = array('data' => array());

		$data = $this->model_student->getStudentData();

		foreach ($data as $key => $value) {
			// button
			$buttons = '';

			if(in_array('updateStudent', $this->permission)) {
				$buttons = '<button type="button" class="btn btn-default" onclick="editFunc('.$value['id'].')" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>';
			}

			if(in_array('deleteStudent', $this->permission)) {
				$buttons .= ' <button type="button" class="btn btn-default" onclick="removeFunc('.$value['id'].')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
			}

			$status = ($value['active'] == 1) ? '<span class="label label-success">Active</span>' : '<span class="label label-warning">Inactive</span>';

			$result['data'][$key] = array(
				$value['name'],
				$status,
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}

	// Add a new item
	public function create()
	{
		if(!in_array('createStudent', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$response = array();

		$this->form_validation->set_rules('stduent_name', 'Stduent name', 'trim|required');
		$this->form_validation->set_rules('active', 'Active', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'name' => $this->input->post('stduent_name'),
        		'active' => $this->input->post('active'),	
        	);

        	$create = $this->model_stores->create($data);
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
			$data = $this->model_student->getStduentData($id);
			echo json_encode($data);
		}
		
	}

	//Update one item
	public function update($id)
	{
		if(!in_array('updateStudent', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

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
		if(!in_array('deleteStudent', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		
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

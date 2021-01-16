<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_student extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getStudentData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM student WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM student ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function create($data = array())
	{
		if($data) {
			$create = $this->db->insert('student', $data);
			return ($create == true) ? true : false;
		}
	}

	public function update($id = null, $data = array())
	{
		if($id && $data) {
			$this->db->where('id', $id);
			$update = $this->db->update('student', $data);
			return ($update == true) ? true : false;
		}
	}

	public function remove($id = null)
	{
		if($id) {
			$this->db->where('id', $id);
			$delete = $this->db->delete('student');
			return ($delete == true) ? true : false;
		}

		return false;
	}

	public function getActiveStudent()
	{
		$sql = "SELECT * FROM student WHERE active = ?";
		$query = $this->db->query($sql, array(1));
		return $query->result_array();
	}

	public function countTotalStudent()
	{
		$sql = "SELECT * FROM student WHERE active = ?";
		$query = $this->db->query($sql, array(1));
		return $query->num_rows();
	}	

}

/* End of file Model_student.php */
/* Location: ./application/models/Model_student.php */
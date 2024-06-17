<?php

class Upload_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function upload_image($fieldName)
    {
        $config['upload_path']   = './img/res_img/';
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        // Check if the file was successfully uploaded
        if ($this->upload->do_upload($fieldName)) {
            return $this->upload->data(); // Return the uploaded file data
        } else {
            $error = $this->upload->display_errors(); // Get the upload error message
            return array('error' => $error); // Return the error message as an array
        }
    }

    public function upload_m_image($fieldName)
    {
        $config['upload_path']   = './img/res_img/';
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        // Check if the file was successfully uploaded
        if ($this->upload->do_upload($fieldName)) {
            return $this->upload->data(); // Return the uploaded file data
        } else {
            $error = $this->upload->display_errors(); // Get the upload error message
            return array('error' => $error); // Return the error message as an array
        }
    }
}

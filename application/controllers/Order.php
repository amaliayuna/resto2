<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
		$data['konten']="v_order";
		$this->load->model('Order_model');
		$data['data_order']=$this->Order_model->get_order();
		$this->load->view('template2', $data, FALSE);
	}
	public function get_detail_order($id_order='')
	{
		$this->load->model('Order_model');
		$data_detail=$this->Order_model->detail_order($id_order);
		echo json_encode($data_detail);
	}
	public function update_order()
	{
		$this->form_validation->set_rules('status_order', 'status_order', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/Order','refresh'));
		} else{
			$this->load->model('Order_model');
			$proses_update=$this->Order_model->update_order();
			if ($proses_update) {
				$this->session->set_flashdata('pesan', 'sukses update');
			} else{
				$this->session->set_flashdata('pesan', 'gagal update');
			}
			redirect(base_url('index.php/Order'),'refresh');
		}
	}
	public function hapus_order($id_order)
	{
		$this->load->model('Order_model');
		$this->Order_model->hapus_order($id_order);
		redirect(base_url('index.php/Order'),'refresh');
	}

	public function Cetak($id_order)
	{
		$this->load->model('Order_model');
		$data['data_order'] = $this->Order_model->Cetak($id_order);
		$this->load->view('nota', $data);
	}


}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */

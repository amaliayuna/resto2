<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {

	public function get_order()
	{
		return $this->db->join('pelanggan','pelanggan.id_pelanggan=order.id_pelanggan')->get('order')->result();
	}
	public function detail_order($id_order='')
	{
		return $this->db->where('id_order', $id_order)->get('order')->row();
	}
	public function update_order()
	{
		$dt_up_order=array(
			'status_order' => $this->input->post('status_order'));
		return $this->db->where('id_order', $this->input->post('id_order'))->update('Order', $dt_up_order);
	}
	public function hapus_order($id_order)
	{
		$this->db->where('id_order', $id_order);
		return $this->db->delete('order');
	}

	public function Cetak($id_order)
	{
		$data = $this->db
				->join('pelanggan', 'pelanggan.id_pelanggan=order.id_pelanggan')
				->where('order.id_order', $id_order)
				->join('detail_order', 'detail_order.id_order=order.id_order')
				->join('masakan', 'masakan.id_masakan=detail_order.id_masakan')
				->get('order')
				->result();
		return $data;
	}


}

/* End of file Order_model.php */
/* Location: ./application/models/Order_model.php */

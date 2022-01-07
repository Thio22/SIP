<?php

Class MUmum extends CI_Model {
	public function ambilDataUmum() {
		return $this->db->get("tb_umum");
	}
}
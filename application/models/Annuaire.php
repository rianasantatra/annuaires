<?php

class Annuaire extends CI_Model {
	
	protected $annuaire = 'annuaire';

	/*
	 * return all Annuaires.
	 * created by your name
	 * created at 06-09-21.
	 */
	public function getAll () {
		return $this->db->get ( $this->annuaire )->result ();
	}
	/*
	 * function for create Annuaire.
	 * return Annuaire inserted id.
	 * created by your name
	 * created at 06-09-21.
	 */
	public function insert ( $data ) {
		$this->db->insert ( $this->annuaire, $data );
		return $this->db->insert_id ();
	}
	/*
	 * return Annuaire by id.
	 * created by your name
	 * created at 06-09-21.
	 */
	public function getDataById ( $id ) {
		$this->db->where ( 'id', $id );
		return $this->db->get ( $this->annuaire )->result ();
	}
	/*
	 * function for update Annuaire.
	 * return true.
	 * created by your name
	 * created at 06-09-21.
	 */
	public function update ( $id, $data ) {
		$this->db->where ( 'id', $id );
		$this->db->update ( $this->annuaire, $data );
		return true;
	}
	/*
	 * function for delete Annuaire.
	 * return true.
	 * created by your name
	 * created at 06-09-21.
	 */
	public function delete ( $id ) {
		$this->db->where ( 'id', $id );
		$this->db->delete ( $this->annuaire );
		return true;
	}
}

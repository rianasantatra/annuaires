<?php class Annuaires extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['annuaire'] = $this->annuaire->getAll();
        $this->load->view('welcome', $data);
    }

    public function manage()
    {
        $data['annuaire'] = $this->annuaire->getAll();
        $this->load->view('annuaire/manage-annuaire', $data);
    }

    public function addAnnuaire()
    {
        $this->load->view('annuaire/add-annuaire');
    }

    public function addAnnuairePost()
    {
        $data['nom']      = $this->input->post('nom');
        $data['fonction'] = $this->input->post('fonction');
        $data['num']      = $this->input->post('num');
        $this->annuaire->insert($data);
        $this->session->set_flashdata('success', 'Ligne ajouter');
        redirect('annuaires/manage');
    }

    /*
     * lien edition
     */
    public function editAnnuaire($annuaire_id)
    {
        $data['annuaire_id'] = $annuaire_id;
        $data['annuaire']    = $this->annuaire->getDataById($annuaire_id);
        $this->load->view('annuaire/edit-annuaire', $data);
    }

    /*
     * edition
     */
    public function editAnnuairePost()
    {
        $annuaire_id = $this->input->post('annuaire_id');
        $data['nom']       = $this->input->post('nom');
        $data['fonction']  = $this->input->post('fonction');
        $data['num']       = $this->input->post('num');
        $edit        = $this->annuaire->update($annuaire_id, $data);
        if ($edit) {
            $this->session->set_flashdata('success', 'Ligne mis à jour');
            redirect('annuaires/manage','refresh');
        }
    }

    /*
     * supprimer
     */
    public function deleteAnnuaire($annuaire_id)
    {
        $this->annuaire->delete($annuaire_id);
        $this->session->set_flashdata('success', 'Ligne supprimer');
        redirect('annuaires/manage', 'refresh');
    }
}

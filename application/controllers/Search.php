<?php 

class Search extends CI_Controller
{
//     public function speech()
//     {
//         $datas_encoded = $_POST['words'];
//         $datas_decode = json_decode($datas);
        
//         $this->search($datas_decode);
//     }
    
    public function search()
    {
       $this->load->library('form_validation');
       
       $this->form_validation->set_rules('type','Type','required',xss_clean);
       $this->form_validation->set_rules('genre','Genre',xss_clean);
       $this->form_validation->set_rules('couleur','Couleur',xss_clean);
       $this->form_validation->set_rules('manche','Manche',xss_clean);
       $this->form_validation->set_rules('taille','Taille',xss_clean);
       $this->form_validation->set_rules('col','Col',xss_clean);
       $this->form_validation->set_rules('motif','Motif',xss_clean);
       $this->form_validation->set_rules('marque','Marque',xss_clean);
       $this->form_validation->set_rules('coupe','Coupe',xss_clean);
       $this->form_validation->set_rules('modele','Modele',xss_clean);
       
       if ($this->form_validation->run()) {
       	$datas = Array(
       		'type' => $this->input->post('type'),
       	    'genre' => $this->input->post('genre'),
       	    'couleur' => $this->input->post('couleur'),
       	    'manche' => $this->input->post('manche'),
       	    'taille' => $this->input->post('taille'),
       	    'col' => $this->input->post('col'),
       	    'motif' => $this->input->post('motif'),
       	    'marque' => $this->input->post('marque'),
       	    'coupe' => $this->input->post('coupe'),
       	    'modele' => $this->input->post('modele'),
       	);
       	$this->load->model('product_model');
       	$this->load->product_model->get_by_tag($datas);
       	$this->load->view('index');
       }
       else{
           $this->load->view('futurview');
       }
       
       
    }
}
?>
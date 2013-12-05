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
       
       $this->form_validation->set_rules('type','Type','required');
       $this->form_validation->set_rules('couleur','Couleur');
       $this->form_validation->set_rules('taille','Taille');
       
    }
}
?>
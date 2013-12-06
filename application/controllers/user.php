<?php

class User extends CI_Controller
{

    public function index()
    {
        $this->template->content->view('user/index', array());
        $this->template->publish();
    }

    public function register()
    {
        // Load form library
        $this->load->library('form_validation');
        // Load user model
        $this->load->model('user_model');

        // Rules for form
        $this->form_validation->set_error_delimiters('<span class="help-inline">', '</span>');
        $this->form_validation->set_rules('username', '"Nom d\'utilisateur"', 'required|is_unique[user.username]|min_length[4]|max_length[16]|alpha_dash|xss_clean|encode_php_tags');
        $this->form_validation->set_rules('email', '"Email"', 'required|is_unique[user.email]|max_length[32]|valid_email|xss_clean|prep_for_form|encode_php_tags');
        $this->form_validation->set_rules('password', '"Mot de passe"', 'required|matches[password_confirm]|min_length[8]|max_length[32]|xss_clean|prep_for_form|encode_php_tags');
        $this->form_validation->set_rules('password_confirm', '"Vérification du mot de passe"', 'required|min_length[8]|max_length[32]|xss_clean|prep_for_form|encode_php_tags');

        // Validation form
        if ($this->form_validation->run()) {
            $user = array();
            $user['username'] = $this->input->post('username');
            $user['password'] = hash('sha256', $this->input->post('password'));
            $user['email'] = $this->input->post('email');
            $this->user_model->insert($user);
            $this->session->set_flashdata('user', '<div class="alert-message success">Votre compte a été crée avec succès !<button type="button" class="close" data-dismiss="alert">×</button></div>');
            redirect("//");
        }

        $this->template->content->view('user/index');
        $this->template->publish();
    }

    public function login()
    {
        // Check online
        if ($this->auth->loggedin()) {
            redirect();
        }

        // Form submitted
        if ($this->input->post('username') && $this->input->post('password')) {

            // get user from database
            $this->load->model('user_model');
            $user = $this->user_model->get($this->input->post('username'));

            if ($user) {
                // compare password
                if (hash('sha256', $this->input->post('password')) == $user['password']) {
                    // mark user as logged in
                    $this->auth->login($user['username'], FALSE);
                    $this->session->set_flashdata('user', '<div class="alert-message success">Bonjour ' . $user['username'] . ', vous êtes maintenant connecté !<button type="button" class="close" data-dismiss="alert">×</button></div>');
                } else {
                    $this->session->set_flashdata('user', '<div class="alert-message error">Le mot de passe que vous avez saisie est incorrect !<button type="button" class="close" data-dismiss="alert">×</button></div>');
                }
            } else {
                $this->session->set_flashdata('user', '<div class="alert-message error">Aucun compte n\'est associé à ce nom d\'utilisateur !<button type="button" class="close" data-dismiss="alert">×</button></div>');
            }
        }
        redirect();
    }

    public function logout() {
        $this->auth->logout();
        redirect();
    }

} 
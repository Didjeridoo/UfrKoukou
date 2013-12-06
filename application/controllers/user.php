<?php

/**
 * Class User
 */
class User extends CI_Controller
{

    /**
     * Page by default
     */
    public function index()
    {
        if (!$this->auth->loggedin()) {
            $this->template->set_template('layout/home');
            $this->template->content->view('user/index', array());
        } else {
            $this->template->content->view('user/connected', array());
        }
        $this->template->publish();
    }

    /**
     * Draw page
     */
    public function draw()
    {
        $this->template->content->view(
            'user/draw'
        );
        $this->template->publish();
    }

    /**
     * Choice page
     */
    public function choice()
    {
        $this->template->content->view(
            'user/choice'
        );
        $this->template->publish();
    }

    /**
     * Search page
     */
    public function search()
    {
        $this->template->content->view(
            'user/search'
        );
        $this->template->publish();
    }

    /**
     * Register page
     */
    public function register()
    {
        // Load form library
        $this->load->library('form_validation');
        // Load user model
        $this->load->model('user_model');

        // Rules for form
        $this->form_validation->set_error_delimiters('<span class="help-inline">', '</span>');
        $this->form_validation->set_rules(
            'username',
            '"Nom d\'utilisateur"',
            'required|is_unique[user.username]|min_length[4]|max_length[16]|alpha_dash|xss_clean|encode_php_tags'
        );
        $this->form_validation->set_rules(
            'email',
            '"Email"',
            'required|is_unique[user.email]|max_length[32]|valid_email|xss_clean|prep_for_form|encode_php_tags'
        );
        $this->form_validation->set_rules(
            'password',
            '"Mot de passe"',
            'required|matches[password_confirm]|min_length[8]|max_length[32]|xss_clean|prep_for_form|encode_php_tags'
        );
        $this->form_validation->set_rules(
            'password_confirm',
            '"Vérification du mot de passe"',
            'required|min_length[8]|max_length[32]|xss_clean|prep_for_form|encode_php_tags'
        );

        // Validation form
        if ($this->form_validation->run()) {
            $user = array();
            $user['username'] = $this->input->post('username');
            $user['password'] = hash('sha256', $this->input->post('password'));
            $user['email'] = $this->input->post('email');
            $this->user_model->insert($user);
            $this->session->set_flashdata(
                'user',
                '<div class="alert-message success">Votre compte a été crée avec succès !<button type="button" class="close" data-dismiss="alert">×</button></div>'
            );
            redirect("//");
        }

        $this->template->content->view('user/index');
        $this->template->publish();
    }

    /**
     * Handle login form
     */
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
                    $this->auth->login($user['username'], false);
                    $this->session->set_flashdata(
                        'user',
                        '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bonjour ' . $user['username'] . ', vous êtes maintenant connecté !</div>'
                    );
                } else {
                    $this->session->set_flashdata(
                        'user',
                        '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Le mot de passe que vous avez saisie est incorrect !</div>'
                    );
                }
            } else {
                $this->session->set_flashdata(
                    'user',
                    '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Aucun compte n\'est associé à ce nom d\'utilisateur !</div>'
                );
            }
        }
        redirect();
    }

    /**
     * Page account & Handle update
     */
    public function account()
    {
        // Check online
        if (!$this->auth->loggedin()) {
            redirect();
        }

        // Load form library
        $this->load->library('form_validation');
        // Load user model
        $this->load->model('user_model');

        $data = $this->user_model->get($this->auth->userid());

        // Rules for form
        $this->form_validation->set_error_delimiters('<span class="help-inline">', '</span>');

        if ($this->input->post('password')) {
            $this->form_validation->set_rules(
                'password',
                '"Mot de passe"',
                'min_length[8]|max_length[32]|xss_clean|prep_for_form|encode_php_tags'
            );
        }

        if ($this->input->post('address')) {
            $this->form_validation->set_rules(
                'address',
                '"Adresse"',
                'min_length[16]|max_length[128]|xss_clean|prep_for_form|encode_php_tags'
            );
        }

        if ($this->input->post('age')) {
            $this->form_validation->set_rules(
                'age',
                '"Age"',
                'is_int|xss_clean|prep_for_form|encode_php_tags'
            );
        }

        if ($this->input->post('firstname')) {
            $this->form_validation->set_rules(
                'firstname',
                '"Nom"',
                'min_length[4]|xss_clean|prep_for_form|encode_php_tags'
            );
        }

        if ($this->input->post('lastname')) {
            $this->form_validation->set_rules(
                'lastname',
                '"Prénom"',
                'min_length[4]|xss_clean|prep_for_form|encode_php_tags'
            );
        }

        // Validation form
        if ($this->form_validation->run()) {
            $data = array();
            if ($this->input->post('password')) {
                $data['password'] = $this->input->post('password');
            }
            if ($this->input->post('address')) {
                $data['address'] = $this->input->post('address');
            }
            if ($this->input->post('age')) {
                $data['age'] = $this->input->post('age');
            }
            if ($this->input->post('firstname')) {
                $data['firstname'] = $this->input->post('firstname');
            }
            if ($this->input->post('lastname')) {
                $data['lastname'] = $this->input->post('lastname');
            }
            $this->user_model->update($this->auth->userid(), $data);
            $this->session->set_flashdata(
                'user',
                '<div class="alert-message success">Votre compte a mis à jour avec succès !<button type="button" class="close" data-dismiss="alert">×</button></div>'
            );
            redirect();
        }

        $this->template->content->view(
            'user/account',
            array(
                'userdata' => $data
            )
        );
        $this->template->publish();
    }

    /**
     * Handle logout
     */
    public function logout()
    {
        $this->auth->logout();
        redirect();
    }

} 
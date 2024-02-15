<?php

    $config = array(
        'register' => array(    
        array(
                'field' => 'fname',
                'label' => 'First Name',
                'rules' => 'required|alpha|trim',
                'errors' => array(
                'required' => 'You must provide a %s.',
                'alpha' => 'Only Alphabetical Characters are allowed.',
                ),
        ),
        array(
                'field' => 'lname',
                'label' => 'Last Name',
                'rules' => 'required|alpha|trim',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                    'alpha' => 'Only Alphabetical Characters are allowed.',
                    ),
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|valid_email',
            'errors' => array(
                'required' => 'You must provide a %s.',
                'alpha' => 'Only Alphabetical Characters are allowed.',
                ),
            ),

        array(
            'field' => 'addres',
            'label' => 'Address',
            'rules' => 'required|trim',
            'errors' => array(
                'required' => 'You must provide a %s.',
                    ),
        ),

        array(
            'field' => 'gender',
            'label' => 'Gender',
            'rules' => 'required|trim',
            'errors' => array(
                'required' => 'You must provide a %s.',
                    ),
        ),

        array(
            'field' => 'dob',
            'label' => 'Date of Birth',
            'rules' => 'required|trim',
            'errors' => array(
                'required' => 'You must provide a %s.',
                    ),
        ),
        
        array(
            'field' => 'pnumber',
            'label' => 'Phone Number',
            'rules' => 'required|trim|numeric',
            'errors' => array(
                'required' => 'You must provide a %s.',
                'numeric' => 'Only Numbers are allowed.',
                    ),
        ),
        array(
            'field' => 'city',
            'label' => 'City',
            'rules' => 'required|trim',
            'errors' => array(
                'required' => 'You must provide a %s.',
                    ),
        ),

        array(
            'field' => 'uname',
            'label' => 'Username',
            'rules' => 'required|trim|alpha_dash',
            'errors' => array(
                'required' => 'You must provide a %s.',
                'alpha_dash' => 'Only Alphanumeric Characters,underscore and dash are allowed.',
                    ),
        ),

        array(
            'field' => 'pass',
            'label' => 'Password',
            'rules' => 'required|trim|alpha_dash|min_length[8]|max_length[16]',
            'errors' => array(
                'required' => 'You must provide a %s.',
                'alpha_dash' => 'Only Alphanumeric Characters ,underscore and dash are allowed.',
                'min_length' => 'Password must be at least 8 characters in length.',
                'max_length' => 'Password must be at most 16 characters in length.',
                    ),
        ),

        array(
            'field' => 'cpass',
            'label' => 'Confirm Password',
            'rules' => 'required|trim|matches[pass]',
            'errors' => array(
                'required' => 'You must provide a %s.',
                'matches' => 'Passwords do not match.',
                    ),
        )
                ),

        'login' => array(
            array(
                'field' => 'uname',
                'label' => 'Username',
                'rules' => 'required|trim|alpha_dash',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                    'alpha_dash' => 'Only Alphanumeric Characters,underscore and dash are allowed.',
                        ),
            ),
            
            array(
                'field' => 'pass',
                'label' => 'Password',
                'rules' => 'required|trim|alpha_dash|min_length[8]|max_length[16]',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                    'alpha_dash' => 'Only Alphanumeric Characters ,underscore and dash are allowed.',
                    'min_length' => 'Password must be at least 8 characters in length.',
                    'max_length' => 'Password must be at most 16 characters in length.',
                        ),
            ),
        ),

        'product'=>array(
          array(
            'field' => 'name',
            'label' => 'Product Name',
            'rules' => 'required|trim|alpha_numeric_spaces',
            'errors' => array(
                'required' => 'You must provide a %s.',
                'alpha_numeric_spaces_dash' => 'Only Alphabetica Characters,spaces and dash are allowed in %s.',
                    ),
                ),
         array(
            'field' => 'description',
            'label' => 'Product description',
            'rules' => 'required|trim|alpha_numeric_spaces',
            'errors' => array(
                'required' => 'You must provide a %s.',
                'alpha_numeric_spaces_dash' => 'Only Alphabetica Characters,spaces and dash are allowed in %s.',
                    ),
                ),
         array(
             'field' => 'price',
             'label' => 'Product price',
             'rules' => 'required|trim|numeric',
             'errors' => array(
                 'required' => 'You must provide a %s.',
                 'numeric' => 'Only Numbers are allowed.',
                     ),
                ),  
        )
    );

    $config['error_prefix'] = '<div class="text-danger text-capitalize">';
    $config['error_suffix'] = '</div>';
?>
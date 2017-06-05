<?php

$config = array(

		'insert_image'=>array(

						array(
						'field' => 'img_title',
                		'label' => 'Title',
                		'rules' => 'trim|required|min_length[3]'
						),
						array(
						'field' => 'img_category',
                		'label' => 'Select Category',
                		'rules' => 'required|callback_select_category'
						),
						array(
						'field' => 'description',
                		'label' => 'Description',
                		'rules' => 'trim|required|min_length[10]'	
						)
		), // end of insert_image

		'admin_login'=>array(

						array(
						'field' => 'user_name',
                		'label' => 'Username',
                		'rules' => 'trim|required|min_length[5]'
						),
						array(
						'field' => 'pass_word',
                		'label' => 'Password',
                		'rules' => 'trim|required|min_length[6]'
						)
		),// end of admin login

		'forgot_password'=>array(

						array(
						'field' => 'mobile',
                		'label' => 'Mobile',
                		'rules' => 'required|numeric|trim'
        				),
						array(
						'field' => 'email',
                		'label' => 'Email',
                		'rules' => 'required|valid_email'
        				),
						array(
                        'field' => 'pass',
                		'label' => 'Password',
                		'rules' => 'trim|required|min_length[6]'
						),
						array(
						'field' => 'conpass',
                		'label' => 'Confirm Password',
                		'rules' => 'trim|required|min_length[6]|matches[pass]'
										)
		),// end of forgot password

    'contacts'=>array(

                    array(
				        'field' => 'inputname',
                		'label' => 'Name',
                		'rules' => 'required|min_length[3]|trim|alpha'
										),
                    array(
				        'field' => 'inputemail',
                		'label' => 'Email',
                		'rules' => 'trim|required|valid_email'
										),
                    array(
				        'field' => 'inputsubject',
                		'label' => 'Subject',
                		'rules' => 'trim|required|min_length[10]'
					),
                    
    ), // end of contact

   
	); // end of config


?>
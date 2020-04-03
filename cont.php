<?php

$form=[
	'firstname'=>['text',
				  'Firstname',
				  '[a-z]).{2,}[A-Z]'
				],
	'lastname'=>['test',
				 'Last name',
				 '[a-z]).{2,}[A-Z]'
				],
	'company'=>['text',
				'Company name',
				'[a-z]).{2,}[A-Z].[0-9]'
				],
	'adresse'=>['text',
				"Company adresse",
				'[a-z]).{2,}[A-Z]'
				],
	'mail'=>['email',
					 '@',
					 '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$'

				]
	
];
$select=['--- Your function in the company ---','HR_Depatement','HR_Manager','Secretary','Employment_agency'];
		
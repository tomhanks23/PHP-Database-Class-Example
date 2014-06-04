<?php

// Include Database Class
include('db.php');

// Start Database Object
$db = new DB();

// Insert Values
$sql_values = [
	'first_name' => 'Jon',
	'email' => 'example@email.com',
	'facial_hair' => 1
];

// Execute SQL Statement
$db->insert('user', $sql_values);

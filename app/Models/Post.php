<?php

namespace App\Models;

use Blaze\Database\Database;
use Blaze\Encryption\Encrypt;
use Blaze\Database\DatabaseObject;

/**
* Post Model Class
*/
class Post extends DatabaseObject
{
	/**
	* Database Table Name
	* @var string $tableName
	*/
	protected static $tableName			= 'post';
	
	/**
	* Database Columns
	* @var array $databaseFields
	*/
	protected static $databaseFields 	= ['id', 'title', 'post', 'date'];

    public function newPost (\stdClass $userObject) : bool
	{
		// $this->id 		= $userObject->id;
		$this->title 		= $userObject->title;
		$this->post 		= $userObject->post;
		$this->date 		= date("Y-m-d H:i:s"); 
		return $this->save() ? TRUE : FALSE;
	}
}
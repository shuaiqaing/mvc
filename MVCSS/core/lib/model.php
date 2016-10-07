<?php
namespace core\lib;
use core\lib\conf;
/**
* 
*/
class model extends \medoo{
	
	function __construct()
	{
		$database=conf::database('database');
		parent::__construct($database);
		// $database=conf::database('database');
		// try {
		// 	parent::__construct($database['dsn'],$database['username'],$database['pwd']);
		// } catch (\PDOException $e) {
		// 	p($e->getMessage());
		// }
	}
}
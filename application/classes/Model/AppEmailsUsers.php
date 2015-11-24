<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_AppEmailsUsers extends Model
{
    protected $_tableEmailUser = 'app_emails';
	
    public function get_all()
    {
        $sql = "SELECT * FROM ". $this->_tableEmailUser;
 
        return DB::query(Database::SELECT, $sql)
                   ->execute();
    }
}
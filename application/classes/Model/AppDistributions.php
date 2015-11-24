<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_AppDistributions extends Model
{
    protected $_tableEmail = 'app_distributions';
	
    public function get_all()
    {
        $sql = "SELECT * FROM ". $this->_tableEmail;
 
        return DB::query(Database::SELECT, $sql)
                   ->execute();
    }
}
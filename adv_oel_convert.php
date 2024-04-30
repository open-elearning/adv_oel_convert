<?php
/* For licensing terms, see /license.txt */
/* adv_oel_convert.php */

class adv_oel_convert extends Plugin
{
    
    protected function __construct()
    {
        parent::__construct(
            '1.0',
            'Damien RENOU',
            array(
                'enable_plugin_adv_oel_convert' => 'boolean'
            )
        );
    }
	
    // @return adv_oel_convert |null
    public static function create()
    {
        static $result = null;
        return $result ? $result : $result = new self();
    }
	
    public function install()
	{

        $sql = "CREATE TABLE IF NOT EXISTS plugin_adv_oel_convert(
            id INT NOT NULL AUTO_INCREMENT,
            user_id INT,
            file_name VARCHAR(1080) NOT NULL,
            event_date INT(11),
            process INT,
            PRIMARY KEY (id));";
        Database::query($sql);
        
    }
	
    public function uninstall()
    {

    }

}

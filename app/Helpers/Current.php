<?php

namespace App\Helpers;

class Current
{
    private static $instance;
    public static function getInstance(): Current
    {
        if(empty(self::$instance))
        self::$instance = new Current();

        return self::$instance;
    }
    
    private function __construct()
    {
        $this->format();
    }

    private array $data;

    public function format()
    {
        $this->data = array(
        'home' => 'welcome',
        'about' => 'about',
        'projects' => 'projects'
        );
    }

    public function get($page)
    {
        $current = array();
        foreach($this->data as $key => $value)
            $current[$key] = $page == $value;

        return $current;
    }
}

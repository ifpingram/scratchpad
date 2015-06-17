<?php

namespace Stats;

class Report
{
    private $click_count;

    public function __construct()
    {
        $this->click_count = (int)file_get_contents('/home/vagrant/code/laravel/websites/scratchpad/click_count.txt');
    }

    public function view_clicks()
    {
        echo "<br /><br /><br /><br /><b>Total Number of clicks:</b> " . file_get_contents('/home/vagrant/code/laravel/websites/scratchpad/click_count.txt');
    }

}


<?php

namespace Stats;

class Log
{
    private $click_count;

    public function __construct()
    {
        $this->click_count = (int)file_get_contents('/home/vagrant/code/laravel/websites/scratchpad/click_count.txt');
    }

    public function log_click()
    {
        $this->click_count++;
        file_put_contents('/home/vagrant/code/laravel/websites/scratchpad/click_count.txt', $this->click_count);
    }
}

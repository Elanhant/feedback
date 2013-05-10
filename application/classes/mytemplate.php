<?php defined('SYSPATH') or die('No direct script access.');

class Mytemplate extends Controller_Template {
    public $template = 'template';
    public function action_before()
    {
        parent::before();
    }
}
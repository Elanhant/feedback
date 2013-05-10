<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Thankyou extends Mytemplate {

    public function action_index()
    {
        $view= '<meta http-equiv="refresh" content="5; url=http://www.vk.com">
        Спасибо за участие в опросе! <br> Сейчас мы сами вас направим, куда вам нужно';
        $this->template->content = $view;
    }
}
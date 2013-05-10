<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Choice extends Mytemplate {

    public function action_index()
    {
        $view = View::factory('choice');
        $view->professors = $this->get_prof();
        $view->render();
        $this->template->content = $view;
    }

    function get_prof()
    {
        $prof = DB::select()
            ->from("professors")
            ->order_by('fio')
            ->execute()
            ->as_array();

        $array = array();
        foreach($prof as $row)
        {
            if($row['type']==1)
            {
                $array['lec'][] = $row;
            }
            elseif($row['type']==2)
            {
                $array['pr'][] = $row;
            }
        }
        return $array;
    }
}
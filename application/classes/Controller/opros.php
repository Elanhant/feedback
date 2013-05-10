<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Opros extends Mytemplate {

    public function action_index()
    {
        if(isset($_POST['lec']) && isset($_POST['pr']))
        {
            $view= View::factory('opros');
            $view->lector = $_POST['lec'];
            $view->practik = $_POST['pr'];
            $view->questions = $this->get_questions(8);
            $view->controller = $this;
            $view->render();
            $this->template->content = $view;
        }
        elseif(isset($_POST['mark']))
        {
            $lector = $_POST['l'];
            $practic = $_POST['p'];
            $mark = $_POST['mark'];
            $questions = DB::select()
                        ->from('questions')
                        ->execute()
                        ->as_array();
            foreach($questions as $row)
            {
                $num_quest = $row['id'];
                if(isset($_POST[$num_quest."_l"]))
                {
                    $ans = htmlspecialchars($_POST[$num_quest."_l"], ENT_QUOTES);
                    $this->add_statistic($num_quest,$ans,$lector,$mark);
                }

                if(isset($_POST[$num_quest."_p"]))
                {
                    $ans = htmlspecialchars($_POST[$num_quest."_p"], ENT_QUOTES);
                    $this->add_statistic($num_quest,$ans,$practic,$mark);
                }
                if(isset($_POST[$num_quest]))
                {
                    $ans = htmlspecialchars($_POST[$num_quest], ENT_QUOTES);
                    $this->add_statistic($num_quest,$ans,0,$mark);
                }
            }
            if(isset($_POST['com_l']) && $_POST['com_l']!='')
            {
                $ans = htmlspecialchars($_POST['com_l'], ENT_QUOTES);
                $this->add_comments($lector,$ans);
            }
            if(isset($_POST['com_p']) && $_POST['com_p']!='')
            {
                $ans = htmlspecialchars($_POST['com_p'], ENT_QUOTES);
                $this->add_comments($practic,$ans);
            }
            HTTP::redirect('/thankyou');
        }
        else
        {
            HTTP::redirect('/choice');
        }
    }

    function get_question($num)
    {
        $questions = DB::select()
            ->from("questions")
            ->where('number','=',$num)
            ->execute()
            ->as_array();
        $answers = DB::select()
            ->from("answers")
            ->where('num_ques','=',$num)
            ->execute()
            ->as_array();
        foreach($questions as $row)
        {
            $array['quest'][] = $row;
        }
        foreach($answers as $row)
        {
            $array['ans'][] = $row;
        }
        return $array;
    }

    public function radio_vopros($questions,$i)
    {
        foreach($questions[$i]['quest'] as $quest)
        {

            echo "<span class='quest-text'>";
            echo $i+1;
            echo ".".$quest['text']."</span>";
            foreach($questions[$i]['ans'] as $ans)
            {
                $whom = 0+$quest['whom'];
                if($whom==1)
                    $whom='_l';
                elseif($whom==2)
                    $whom='_p';
                else
                    $whom='';
                echo "<label class=radio>";
                echo "<input value='".$ans['id']."' type=radio name='".$quest['id'].$whom."' checked>   ".$ans['ans_text']."</input><br>";
                echo "</label>";
            }
        }
    }

    public function get_questions($count)
    {
        for($i=0;$i<$count;$i++)
        {
            $array[$i] = $this->get_question($i+1);
        }
        return $array;
    }

    public function add_statistic($num_quest,$ans,$prepod,$mark)
    {
        $statistic = new Model_Statistic;
        $statistic->st_num_quest = $num_quest;
        $statistic->st_ans = $ans;
        $statistic->st_prof = $prepod;
        $statistic->mark = $mark;
        $statistic->save();
    }

    public function add_comments($pr,$text)
    {
        $comments = new Model_Comment();
        $comments->id_pr=$pr;
        $comments->comm=$text;
        $comments->save();
    }

}
?>
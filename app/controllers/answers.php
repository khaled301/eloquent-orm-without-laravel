<?php

namespace Controllers;

use Models\Answer;

class Answers {

    public static function add_answer($answer, $user_id, $question_id) {

        $answer = Answer::create(['answer'=>$answer, 'user_id'=>$user_id, 'question_id'=> $question_id]);
        return $answer;

    }

}

?>
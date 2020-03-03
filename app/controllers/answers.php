<?php

namespace Controllers;

use Models\Answer;

class Answers {

    public static function add_answer($answer, $user_id, $question_id) {
        $answer = Answer::create(['answer'=>$answer, 'user_id'=>$user_id, 'question_id'=> $question_id]);
        return $answer;
    }

    public static function update_answer($answer_id, $new_answer) {
        $answer = Answer::find($answer_id);
        $answer->answer = $new_answer;
        $updated_answer = $answer->save();
        return $updated_answer;
    }

}

?>
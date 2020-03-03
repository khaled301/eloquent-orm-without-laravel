<?php

namespace Controllers;

use Models\Question;

class Questions {

    public static function create_question($question, $user_id) {

        $question = Question::create(['question'=>$question, 'user_id'=>$user_id]);
        return $question;

    }

}

?>
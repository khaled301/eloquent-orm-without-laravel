<?php

namespace Controllers;

use Models\Upvote;

class Upvotes {

    public static function upvote_answer($answer_id, $user_id) {

        $upvote = Upvote::create(['answer_id'=>$answer_id, 'user_id'=>$user_id]);
        return $upvote;

    }

}

?>
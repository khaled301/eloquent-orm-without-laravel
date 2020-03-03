<?php

require 'start.php';

use Controllers\Users;
use Controllers\Questions;
use Controllers\Answers;
use Controllers\Upvotes;

/*
// Import user controller
$user = Users::create_user("Khaled", "khaled@example.com","password");

//Import question controller
$question = Questions::create_question("Is this your first time doing Eloquent ORM?", 1);

//Import answer controller
$answers = Answers::add_answer("This is the first answer!", 1, 1);

//Import upvote controller
//$answers = Upvotes::upvote_answer(1, 1);

//Retrieves the Questions with their corresponding answers
$all_questions_with_answers = Questions::get_questions_with_answer();
print_r($all_questions_with_answers);

//Retrieve question with user
$all_questions_with_user = Questions::get_questions_with_users();
print_r($all_questions_with_user);

// Get One Question With Answers and Upvotes
$one_question = Questions::get_question_answers_upvotes(1);
print_r($one_question);

// Count All Questions by a Particular User
$user_question_count = Users::question_count(1);
print_r($user_question_count);

//Update Answer by User
$update_answer = Answers::update_answer(1,"This is an updated answer");
*/

//Delete a Question (Soft Delete)
$delete_question = Questions::delete_question(2);
<?php
/**
 *    Index Controller
 */

    require_once 'models/team6.php';
    $toPrint = '';

    $topics = getTopics();

    if(isset($_POST['book'])) {
      $book = filter_input(INPUT_POST, 'book', FILTER_SANITIZE_STRING);
      $chapter = filter_input(INPUT_POST, 'chapter', FILTER_SANITIZE_STRING);
      $verse = filter_input(INPUT_POST, 'verse', FILTER_SANITIZE_STRING);
      $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
      $faith = filter_input(INPUT_POST, 'Faith', FILTER_SANITIZE_NUMBER_INT);
      $sacrifice = filter_input(INPUT_POST, 'Sacrifice', FILTER_SANITIZE_NUMBER_INT);
      $charity = filter_input(INPUT_POST, 'Charity', FILTER_SANITIZE_NUMBER_INT);
      $userCheckbox = filter_input(INPUT_POST, 'UserCheckbox', FILTER_SANITIZE_NUMBER_INT);
      $userText = filter_input(INPUT_POST, 'UserText', FILTER_SANITIZE_STRING);

      team6($book, $chapter, $verse, $content, $faith, $sacrifice, $charity, $userCheckbox, $userText);
  
    }

    include 'views/team6/index.php';
    break;

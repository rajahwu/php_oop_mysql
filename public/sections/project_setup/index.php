<?php include_once '../../../private/initialize.php'; 
      include(SHARED_PATH . '/public_header.php'); 
      include(SHARED_PATH . '/public_backlink.php');


foreach(get_section_notes() as $note) {render_lesson_card($note);} 

     include(SHARED_PATH . '/public_footer.php'); ?>
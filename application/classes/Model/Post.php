<?php

class Model_Post extends ORM {

  protected $_table_name  = 'kohana_posts';
  protected $_table_columns = array(
    'id' => NULL,
    'author' => NULL,
    'body' => NULL,
  ); 

}

?>
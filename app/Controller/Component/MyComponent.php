<?php

/**
*
*/
class MyComponent extends Component
{

  public function implode_variable($comma_separated_text)
  {
    if(!empty($comma_separated_text)){
        return explode(",", $comma_separated_text);
      } else {
        return "";
      }
  }
}
 ?>
<?php
  function validate_request()
  {
    if (empty($_POST)) return false;
    return true;
  }

  function empty_or_null($param)
  {
    if(!isset($_POST[$param]) || "" == trim($_POST[$param])) return true;
    return false;
  }

  function validate_attributes()
  {
    if (empty_or_null('Name') || empty_or_null('Description') || empty_or_null('Price') ) return false;
    return true;
  }

  function validate_price_type()
  {
    if (!is_numeric($_POST['Price'])) return false;
    return true;
  }

?>

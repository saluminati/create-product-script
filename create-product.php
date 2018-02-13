<?php
  include ('request-validator.php');
  include ('persistance.php');
  include ('ProductVO.php');

  // Validating request and form attributes
  if (!validate_request() || !validate_attributes() || !validate_price_type())
  {
    echo "Something went wrong!. Possible errors:\n";
    echo "Please send request in a form input\n";
    echo "Name, Description and Price should be present and not empty\n";
    echo "Price should be a Number\n";
    http_response_code(400);
    exit;
  }

  // insert data via Value object
  (new Persistance())->create_product(new ProductVO($_POST['Name'],$_POST['Description'],$_POST['Price']));
  echo "Success: Product $_POST[Name] has been added";
  http_response_code(200);

?>

<?php
echo "How can you declare the array (all type) in PHP? Explain with example Covert a JSON string to array: <br><br>";
  // Array
  $Array = [
    [
      "Name"   => "Rajesh",
      "Gender" => "male",
      "Email" => "rajesh@gmail.com"
    ],
    [
      "Name"   => "manish",
      "Gender" => "male",
      "Email" => "manish@gmail.com"
    ],
    [
      "Name"   => "rohan",
      "Gmail" => "male",
      "Email" => "rohan_0125@gmail.com"
    ]
  ];

  // Convert Array to JSON String
  $data = json_encode($Array, JSON_PRETTY_PRINT);
  echo "<pre>";
  print_r ($data);
  echo "</pre>"
?>
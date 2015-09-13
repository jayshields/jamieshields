<?php

@mail(
  'jayshields@gmail.com', 
  'JamieShields.co.uk contact message', 
  "Name: ".$_POST['name']."\n\nEmail: ".$_POST['email']."\n\nMessage:\n\n".$_POST['message'], 
  "From: contact@jamieshields.co.uk"
);

echo json_encode(array('message' => 'Your message has been sent.', 'sendstatus' => 1));
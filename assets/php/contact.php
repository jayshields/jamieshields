<?php

@mail(
  'jamie@flauntdigital.com',
  'JamieShields.co.uk contact message', 
  "Name: ".$_POST['name']."\n\nEmail: ".$_POST['email']."\n\nMessage:\n\n".$_POST['message'], 
  "From: contact@jamieshields.flauntdigital.com"
);

echo json_encode(array('message' => 'Your message has been sent.', 'sendstatus' => 1));
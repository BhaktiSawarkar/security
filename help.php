<?php

include('inc/Services/Twilio.php');

function index(){
   $response = new Services_Twilio_Twiml();
   $response->sms("Enter your area :”);
   echo $response;
}
function jsq(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms(“Agent : Mr.Robert Fernandes Contact no.: +12014837934”); 
    echo $response;
}
function krny(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms(“Agent: Ms. Diana D’Silva Contact no.: +17563906779”); 
    echo $response;
}
function ny(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms(“Agent: Mr.Peter Rodriguez Contact no.: +17879023575”, “Agent: Mr. Roger D’costa  Contact no. : +14503748902”, “Agent: Ms.Angel Robert Contact no.: +12083764590”); 
    echo $response;
}
function hrsn(){ 
    $response = new Services_Twilio_Twiml();
    $response->sms(“Agent: Ms. Kim Oliver” Contact no.: +19078694752”); 
    echo $response;
}
function bayn(){
    $response = new Services_Twilio_Twiml();
    $response->sms(“Agent: Ms. Sebastiian D’souza Contact no: +12046746789"); 
    echo $response;
}

function hbkn(){
    $response = new Services_Twilio_Twiml();
    $response->sms(“Agent: Ms. Robert Jones Contact no: +12067849302”); 
    echo $response;
}
function nwpt(){
    $response = new Services_Twilio_Twiml();
    $response->sms(“Agent: Ms.Chelsea Nemis Contact no: +19778930280”); 
    echo $response;
} 
$body = $_REQUEST['Body'];  

$result = preg_replace("/[^A-Za-z0-9]/u", " ", $body); 
$result = trim($result); 
$result = strtolower($result); 

switch ($result) { 
    case ‘help:jsq’: 
        jsq(); 
        break; 
    case ‘help:krny’: 
        krny(); 
        break;
    case ‘help:ny’: 
        ny(); 
        break; 
   case ‘help:hrsn’: 
        hrsn(); 
        break; 
    case ‘help:bayn’’ 
        bayn(); 
        break;
  case ‘help:hbkn’
          hbkn();
      break;
    case ’help:nwpt’
       nwpt();
     break;
    default: 
        index();
}
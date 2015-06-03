<?php
/*
|--------------------------------------------------------------------------
| Image Preset Sizes
|--------------------------------------------------------------------------
|
| Specify the preset sizes you want to use in your code. Only these preset 
| will be accepted by the controller for security.
|
| Each preset exists of a width and height. If one of the dimensions are 
| equal to 0, it will automatically calculate a matching width or height 
| to maintain the original ratio.
|
| If both dimensions are specified it will automatically crop the 
| resulting image so that it fits those dimensions.
|
*/

$config["image_sizes"]["square"] = array(100, 100);
$config["image_sizes"]["long"]   = array(280, 600);
$config["image_sizes"]["wide"]   = array(600, 200);
$config["image_sizes"]["hero"]   = array(940, 320);
$config["image_sizes"]["slide"]   = array(1250, 420);
$config["image_sizes"]["slidefull"]   = array(1600, 580);

$config["image_sizes"]["small"]  = array(280, 0);
$config["image_sizes"]["medium"] = array(340, 0);
$config["image_sizes"]["large"]  = array(800, 0);

$config["image_sizes"]["thumb"]  = array(350, 350);
$config["image_sizes"]["thumbnail"]  = array(350, 260);
$config["image_sizes"]["imgproyect"]  = array(280, 360);

$config["image_sizes"]["logo"]  = array(240, 90);

$config["image_sizes"]["img300"]  = array(300, 300);
$config["image_sizes"]["img360"]  = array(360, 240);
$config["image_sizes"]["img400"]  = array(400, 250);
$config["image_sizes"]["img420"]  = array(420, 300);
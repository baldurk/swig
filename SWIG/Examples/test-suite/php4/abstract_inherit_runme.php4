<?php

require "tests.php4";
require "abstract_inherit.php";

check::classes("Spam");
// This constructor attempt should fail as there isn't one
$spam=new Spam();

check::equal(0,$spam->blah(),"spam object method");
check::equal(0,Spam::blah($spam),"spam class method");

check::done();
?>

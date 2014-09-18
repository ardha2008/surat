<?php 

$this->output('header');
$this->output('sidebar'); 

if($pages=='index')$this->output('konten/index');
if($pages=='login')$this->output('konten/login');

$this->output('footer') ?>
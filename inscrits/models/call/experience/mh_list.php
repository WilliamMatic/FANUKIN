<?php

require 'models/class/Candidat.php';
require 'models/class/CandidatHydrate.php';
require 'models/fonctions/db.php';

$db = db();

$manager = new CandidatHydrate($db);

$listAll = $manager->experiences();
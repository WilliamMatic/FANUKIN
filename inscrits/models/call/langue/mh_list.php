<?php

$db = db();

$manager = new CandidatHydrate($db);

$listAll = $manager->langues();
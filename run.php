#!/usr/bin/env php
<?php
include 'vendor/autoload.php';

$researchSquare = new ResearchSquare();
$researchSquare->setRangeStart(1);
$researchSquare->setRangeStop(100);
$researchSquare->setSubstitutions([3 => 'Research', 5 => 'Square']);

$result = $researchSquare->exec();

ResearchSquareCLIOutputer::print($result);

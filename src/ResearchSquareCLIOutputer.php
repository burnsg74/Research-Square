<?php


/**
 * Class ResearchSquareCLIOutputer
 */
class ResearchSquareCLIOutputer
{
    
    /**
     * Print
     * Prints results out to command line.
     *
     * @param array $researchSquareArray
     */
    static function print($researchSquareArray) {
    
        foreach ($researchSquareArray as $item) {
            echo $item . "\n";
        }
    }
}
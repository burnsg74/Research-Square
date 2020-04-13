<?php

/**
 * Class ResearchSquare
 * Please write a program that prints the numbers from 1 to 100.
 * But for multiples of three print “Research” instead of the number and for the multiples of five print “Square”.
 * For numbers which are multiples of both three and five print “Research Square” (note the space).*
 */
class ResearchSquare
{
    
    /**
     * @var int Range Start
     */
    private int $rangeStart = 1;
    
    /**
     * @var int Range Stop
     */
    private int $rangeStop = 100;
    
    /**
     * @var array Substitution Array (<mod> => <string>)
     */
    private array $substitutions = [];
    
    /**
     * @var array Array of Resulting strings
     */
    private array $results = [];
    
    /**
     * Execute Research Square with giving params.
     */
    public function exec()
    {
        for ($i = $this->rangeStart; $i <= $this->rangeStop; $i++) {
            
            if ($substitutionString = $this->getSubstitutionString($i)) {
                $this->results[] = $substitutionString;
                continue;
            }
            
            $this->results[] = strval($i);
        }
        
        return $this->results;
    }
    
    /**
     * Get Substitute String
     *
     * @param int $i
     * @return string|null
     */
    private function getSubstitutionString(int $i)
    {
        $substitutionString = FALSE;
        foreach ($this->substitutions as $mod => $string) {
            if ($i % $mod == 0) {
                if ($substitutionString) {
                    $substitutionString .= ' ';
                }
                
                $substitutionString .= $string;
            }
        }
        return $substitutionString;
    }
    
    /**
     * Range Start Setter
     *
     * @param int $rangeStart
     */
    public function setRangeStart(int $rangeStart): void
    {
        $this->rangeStart = $rangeStart;
    }
    
    /**
     * Range Stop Setter
     *
     * @param int $rangeStop
     */
    public function setRangeStop(int $rangeStop): void
    {
        $this->rangeStop = $rangeStop;
    }
    
    /**
     * Set Substitutions
     *
     * @param array $substitutions
     */
    public function setSubstitutions(array $substitutions): void
    {
        $this->substitutions = $substitutions;
    }
}

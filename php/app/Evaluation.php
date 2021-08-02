<?php

class Evaluation
{
    private float $score;

    public function __construct( $_score)
    {
        $this->score = $_score;
    }

    //getters
    public function getScore()
    {
        return $this->score;
    }


}
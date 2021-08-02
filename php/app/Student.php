<?php

include_once ('Evaluation.php');

class Student
{
    private string $name;
    private string $subject;
    private array $evaluations;
    private string $gender;

    public function __construct( $_name )
    {
        $this->name = $_name;
        $this->subject = "PHP";
        $this->gender = "";
        $this->evaluations = array();
    }

    // setter
    public function setGender($_gender) {
        $this->gender = $_gender;
    }

    public function addScore(Evaluation $evaluation) {
        array_push($this->evaluations, $evaluation->getScore());
    }

    public function calcAverage() {

        $count = count($this->evaluations);
        $sum = 0;
        for($i = 0; $i <= $count - 1; $i++) {
            $sum += $this->evaluations[$i];
        }
        return $sum/$count;
    }
}
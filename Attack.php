<?php

class Attack {
    public $Name;           // SlashAttack
    public $AttackPoints;   // TODO: implement https://bulbapedia.bulbagarden.net/wiki/Damage

    public function __construct($nme, $attack_points, $accuracy) {
        $this->Name = $nme;
        $this->AttackPoints = $attack_points;
        $this->Accuracy = $accuracy;
    }

    public function Execute1($target) {
        if ($target == null) {
            die('Cannot execute Attack; target is null');
        }

        $this->AttackPoints = $this->AttackPoints / 2;

        $target->DoDamage($this->AttackPoints);
    }

    public function Execute2($target) {
        if ($target == null) {
            die('Cannot execute Attack; target is null');
        }

        $this->AttackPoints = $this->AttackPoints * 2;

        $target->DoDamage($this->AttackPoints);
    }

    public function Execute3($target) {
        if ($target == null) {
            die('Cannot execute Attack; target is null');
        }
    }

    public function Execute4($target) {
        if ($target == null) {
            die('Cannot execute Attack; target is null');
        }

        $target->DoDamage($this->AttackPoints);
    }
}
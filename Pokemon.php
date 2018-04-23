<?php

class Pokemon {
    public $Name;
    public $CurrentHealth;
    public $MaxHealth;
    public $Type;
    public $Weakness;
    public $Defense;    // this will be substracted from any attack

    public $Attacks;    // array


    public function __construct($nm, $def, $maxhealth, $type) {
        $this->Name = $nm;
        $this->Defense = $def;
        $this->MaxHealth = $maxhealth;
        $this->Type = $type;
        $this->CurrentHealth = $this->MaxHealth;
        $this->Attacks = [];
 		$this->Weakness = [];
    }

    public function DoDamage($dmg) {
        $calculatedDamage = $dmg; /* - $this->Defense*/
        if( $calculatedDamage > 0) {
            $this->CurrentHealth = $this->CurrentHealth - $calculatedDamage;
        }
        var_dump($this->CurrentHealth);
    }
}	
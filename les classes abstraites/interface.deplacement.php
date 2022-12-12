<?php
interface Deplacement
{
    public function seDeplacer()
    {
        echo "{$this->nom} avance avec son {$this->arme}\n";
    }
}

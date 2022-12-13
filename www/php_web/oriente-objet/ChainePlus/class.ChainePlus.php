<?php class ChainePlus
{
    private $chaine;

    public function __construct($chaine)
    {
        $this->chaine = $chaine;
    }

    public function gras()
    {
        return "<strong>" . $this->chaine . "</strong>";
    }

    public function italique()
    {
        return "<em>" . $this->chaine . "</em>";
    }

    public function souligne()
    {
        return "<u>" . $this->chaine . "</u>";
    }

    public function majuscules()
    {
        return strtoupper($this->chaine);
    }
}

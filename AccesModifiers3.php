<?php

class voertuig
{
    protected $aantalWielen;
    protected $aantalDeuren;
    protected $bouwjaar;
    protected $aandrijving;

    public function getAantalWielen()
    {
        return $this->aantalWielen;
    }

    public function setAantalWielen($aantalWielen)
    {
        $this->aantalWielen = $aantalWielen;
    }

    public function getAantalDeuren()
    {
        return $this->aantalDeuren;
    }

    public function setAantalDeuren($aantalDeuren)
    {
        $this->aantalDeuren = $aantalDeuren;
    }

    public function getBouwjaar()
    {
        return $this->bouwjaar;
    }

    public function setBouwjaar($bouwjaar)
    {
        $this->bouwjaar = $bouwjaar;
    }

    public function getAandrijving()
    {
        return $this->aandrijving;
    }

    public function setAandrijving($aandrijving)
    {
        $this->aandrijving = $aandrijving;
    }
}
class auto extends voertuig
{
    protected $aantalWielen;
    protected $aantalDeuren;
    protected $bouwjaar;
    protected $aandrijving;
    private $merk;
    private $model;
    private $type;

    public function auto($aantalWielen, $aantalDeuren, $bouwjaar, $aandrijving, $merk, $model, $type)
    {
        $this->aantalWielen = $aantalWielen;
        $this->aantalDeuren = $aantalDeuren;
        $this->bouwjaar = $bouwjaar;
        $this->aandrijving = $aandrijving;
        $this->merk = $merk;
        $this->model = $model;
        $this->type = $type;
    }

    public function getAantalDeuren()
    {
        return $this->aantalDeuren;
    }

    public function setAantalDeuren($aantalDeuren)
    {
        $this->aantalDeuren = $aantalDeuren;
    }

    public function getBouwjaar()
    {
        return $this->bouwjaar;
    }

    public function setBouwjaar($bouwjaar)
    {
        $this->bouwjaar = $bouwjaar;
    }

    public function getAandrijving()
    {
        return $this->aandrijving;
    }

    public function setAandrijving($aandrijving)
    {
        $this->aandrijving = $aandrijving;
    }
}
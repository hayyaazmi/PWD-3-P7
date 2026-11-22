<?php

class Hewan{
    private $namaHewan, $umurHewan;

    function SetNama($nama){
        $this->namaHewan = $nama;
    }
    function SetUmur($umur){
        $this->umurHewan = $umur;
    }

    function GetNama(){
        return $this->namaHewan;
    }
    function GetUmur(){
        return $this->umurHewan;
    }
}

class Kucing extends Hewan{
    function GetJenis(){
        return "Kucing";
    }
    function GetSuara(){
        return "Meow :3 Meow :3 Meow :3";
    }
}

class Anjing extends Hewan{
    function GetJenis(){
        return "Anjing";
    }
    function GetSuara(){
        return "Guk! Guk! Guk!";
    }
}
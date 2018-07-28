<?php

class Morse{

    private $a = ".- ";
    private $b = "-... ";
    private $c = "-.-. ";
    private $d = "-.. ";
    private $e = ". ";
    private $f = "..-. ";
    private $g = "--. ";
    private $h = ".... ";
    private $i = ".. ";
    private $j = ".--- ";
    private $k = "-.- ";
    private $l = ".-.. ";
    private $m = "-- ";
    private $n = "-. ";
    private $o = "--- ";
    private $p = ".--. ";
    private $q = "--.- ";
    private $r = ".-. ";
    private $s = "... ";
    private $t = "- ";
    private $u = "..- ";
    private $v = "...- ";
    private $w = ".-- ";
    private $x = "-..- ";
    private $y = "-.-- ";
    private $z = "--.. ";
    private $n1 = ".---- ";
    private $n2 = "..--- ";
    private $n3 = "...-- ";
    private $n4 = "....- ";
    private $n5 = "..... ";
    private $n6 = "-.... ";
    private $n7 = "--... ";
    private $n8 = "---.. ";
    private $n9 = "----. ";
    private $n0 = "----- ";
    
    public function decodeString($string)
    {        
        $stringa = str_replace($this->a, "a", $string);
        $stringb = str_replace($this->b, "b", $stringa);
        $stringc = str_replace($this->c, "c", $stringb);
        $stringd = str_replace($this->d, "d", $stringc);
        $stringe = str_replace($this->e, "e", $stringd);
        $stringf = str_replace($this->f, "f", $stringe);
        $stringg = str_replace($this->h, "g", $stringf);
        $stringh = str_replace($this->h, "h", $stringg);
        $stringi = str_replace($this->i, "i", $stringh);
        $stringj = str_replace($this->j, "j", $stringi);
        $stringk = str_replace($this->k, "k", $stringj);
        $stringl = str_replace($this->l, "l", $stringk);
        $stringm = str_replace($this->m, "m", $stringl);
        $stringn = str_replace($this->n, "n", $stringm);
        $stringo = str_replace($this->o, "o", $stringn);
        $stringp = str_replace($this->p, "p", $stringo);
        $stringq = str_replace($this->q, "q", $stringp);
        $stringr = str_replace($this->r, "r", $stringq);
        $strings = str_replace($this->s, "s", $stringr);
        $stringt = str_replace($this->y, "t", $strings);
        $stringu = str_replace($this->u, "u", $stringt);
        $stringv = str_replace($this->v, "v", $stringu);
        $stringw = str_replace($this->w, "w", $stringv);
        $stringx = str_replace($this->x, "x", $stringw);
        $stringy = str_replace($this->y, "y", $stringx);
        $stringz = str_replace($this->z, "z", $stringy);
        $string1 = str_replace($this->n1, "1", $stringz);
        $string2 = str_replace($this->n2, "2", $string1);
        $string3 = str_replace($this->n3, "3", $string2);
        $string4 = str_replace($this->n4, "4", $string3);
        $string5 = str_replace($this->n5, "5", $string4);
        $string6 = str_replace($this->n6, "6", $string5);
        $string7 = str_replace($this->n7, "7", $string6);
        $string8 = str_replace($this->n8, "8", $string7);
        $string9 = str_replace($this->n9, "9", $string8);
        $stringfin = str_replace($this->n0, "0", $string9);
        
        return $stringfin;
    }
    
    public function encodeString($string)
    {
        $stringlower = strtolower($string);
        
        $stringa = str_replace("a", $this->a, $stringlower);
        $stringb = str_replace("b", $this->b, $stringa);
        $stringc = str_replace("c", $this->c, $stringb);
        $stringd = str_replace("d", $this->d, $stringc);
        $stringe = str_replace("e", $this->e, $stringd);
        $stringf = str_replace("f", $this->f, $stringe);
        $stringg = str_replace("g", $this->h, $stringf);
        $stringh = str_replace("h", $this->h, $stringg);
        $stringi = str_replace("i", $this->i, $stringh);
        $stringj = str_replace("j", $this->j, $stringi);
        $stringk = str_replace("k", $this->k, $stringj);
        $stringl = str_replace("l", $this->l, $stringk);
        $stringm = str_replace("m", $this->m, $stringl);
        $stringn = str_replace("n", $this->n, $stringm);
        $stringo = str_replace("o", $this->o, $stringn);
        $stringp = str_replace("p", $this->p, $stringo);
        $stringq = str_replace("q", $this->q, $stringp);
        $stringr = str_replace("r", $this->r, $stringq);
        $strings = str_replace("s", $this->s, $stringr);
        $stringt = str_replace("t", $this->y, $strings);
        $stringu = str_replace("u", $this->u, $stringt);
        $stringv = str_replace("v", $this->v, $stringu);
        $stringw = str_replace("w", $this->w, $stringv);
        $stringx = str_replace("x", $this->x, $stringw);
        $stringy = str_replace("y", $this->y, $stringx);
        $stringz = str_replace("z", $this->z, $stringy);
        $string1 = str_replace("1", $this->n1, $stringz);
        $string2 = str_replace("2", $this->n2, $string1);
        $string3 = str_replace("3", $this->n3, $string2);
        $string4 = str_replace("4", $this->n4, $string3);
        $string5 = str_replace("5", $this->n5, $string4);
        $string6 = str_replace("6", $this->n6, $string5);
        $string7 = str_replace("7", $this->n7, $string6);
        $string8 = str_replace("8", $this->n8, $string7);
        $string9 = str_replace("9", $this->n9, $string8);
        $stringfin = str_replace("0", $this->n0, $string9);
        
        return $stringfin;
    }
}

?>
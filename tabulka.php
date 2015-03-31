<?php

/**
 * Třída kterúá umožňuje generaci tabulky bez nutnosti psaní HTML.
 *
 * @author Ondřej Kříž <ondrej.kriz@yahoo.com>
 * @version 1.0
 * @package SI a WAP
 */
class tabulka {

    /**
     * Proměná pro uložení nadpiů jednotlivých sloupců.
     * @var array 
     */
    private $nadpisy = array();

    /**
     * Zde jsou uloženy jednotlivé řádky tabulky
     * @var array 
     */
    private $data = array();

    /**
     * Zde se ukládá hlavní nýzev tabulky
     * @var string 
     */
    private $nazev;

    /**
     * Konstruktor třídy.
     * @param string $nazev Při tvorbě třídy musíte zadat název který bude zobrazen nad tabulkou.
     */
    function __construct($nazev) {
        $this->nazev = $nazev;
    }

    /**
     * Metoda pro přidání dat do tabulky.
     * @param array $data Zadáme pole s udaji co budou v řádku.
     */
    function pridej($data) {
        $this->data[] = $data;
    }

    /**
     * Nastavení nadpisů pro jednotlivé sloupce.
     * @param array $data Zde zadejte pole s nadpisy.
     */
    function nadpisy($data) {
        $this->nadpisy = $data;
    }

    /**
     * Vygeneruje tabulku
     * @return string Vrátí vygenerovanou tabulku.
     */
    function __toString() {
        $vratit = "<table>";
        $vratit .= "<caption>";
        $vratit .= $this->nazev;
        $vratit .= "</caption>";
        $vratit .= "<tr>";
        foreach ($this->nadpisy as $nadpis) {
            $vratit .= "<th>";
            $vratit .= $nadpis;
            $vratit .= "</th>";
        }
        $vratit .= "</tr>";
        foreach ($this->data as $radek) {
            $vratit .= "<tr>";
            foreach ($radek as $data) {
                $vratit .= "<td>";
                $vratit .= $data;
                $vratit .= "</td>";
            }
            $vratit .= "</tr>";
        }
        $vratit .= "</table>";
        return $vratit;
    }

}

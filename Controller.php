<?php

require_once "ShipModel.php";


class Controller
{

    public function factoryMethod() : ShipModel
    {
        return $matrix = new ShipModel();
    }


    public function showEmptyTable()
    {
        $matrix = $this->factoryMethod();
        return $matrix->emptyTable();
    }

    public function showShipsTable()
    {
        $matrix = $this->factoryMethod();
        return $matrix->makeOneShips()->makeTwoShips()->makeThreeShips()->makeFourShips();
    }

}
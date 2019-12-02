<?php


class ShipModel
{
    public $matrix;

    public function __construct()
    {
        $this->matrix = array();
        for ($i=1; $i<11; $i++) {
            for ($c=1; $c<11; $c++) {

                $this->matrix[$i][$c] = 0;

            }
        }
        return $this->matrix;
    }

    public function emptyTable()
    {
        return $this->matrix;
    }

   public function makeOneShips()
   {
       $x1 = rand(2,8);
       $y1 = rand(3,8);
       $x2 = rand(2,8);
       $y2 = rand(3,8);
       $x3 = rand(2,8);
       $y3 = rand(3,8);
       $x4 = rand(2,8);
       $y4 = rand(3,8);
       if($this->matrix[$x1][$y1] == 0) {
           $this->matrix[$x1][$y1] = 1;
           $this->matrix[$x1][++$y1] = 2;
           $this->matrix[--$x1][$y1] = 2;
           $this->matrix[$x1][--$y1] = 2;
           $this->matrix[$x1][--$y1] = 2;
           $this->matrix[++$x1][$y1] = 2;
           $this->matrix[++$x1][$y1] = 2;
           $this->matrix[$x1][++$y1] = 2;
           $this->matrix[$x1][++$y1] = 2;
       }

       if($this->matrix[$x2][$y2] == 0) {
           $this->matrix[$x2][$y2] = 1;
           $this->matrix[$x2][++$y2] = 2;
           $this->matrix[--$x2][$y2] = 2;
           $this->matrix[$x2][--$y2] = 2;
           $this->matrix[$x2][--$y2] = 2;
           $this->matrix[++$x2][$y2] = 2;
           $this->matrix[++$x2][$y2] = 2;
           $this->matrix[$x2][++$y2] = 2;
           $this->matrix[$x2][++$y2] = 2;
       }

       if($this->matrix[$x3][$y3] == 0) {
           $this->matrix[$x3][$y3] = 1;
           $this->matrix[$x3][++$y3] = 2;
           $this->matrix[--$x3][$y3] = 2;
           $this->matrix[$x3][--$y3] = 2;
           $this->matrix[$x3][--$y3] = 2;
           $this->matrix[++$x3][$y3] = 2;
           $this->matrix[++$x3][$y3] = 2;
           $this->matrix[$x3][++$y3] = 2;
           $this->matrix[$x3][++$y3] = 2;
       }

       if($this->matrix[$x4][$y4] == 0) {
           $this->matrix[$x4][$y4] = 1;
           $this->matrix[$x4][++$y4] = 2;
           $this->matrix[--$x4][$y4] = 2;
           $this->matrix[$x4][--$y4] = 2;
           $this->matrix[$x4][--$y4] = 2;
           $this->matrix[++$x4][$y4] = 2;
           $this->matrix[++$x4][$y4] = 2;
           $this->matrix[$x4][++$y4] = 2;
           $this->matrix[$x4][++$y4] = 2;
       }
       return $this;
   }

    public function makeTwoShips()
    {
        $x1 = rand(3,8);
        $y1 = rand(3,7);
        $x2 = rand(3,8);
        $y2 = rand(3,7);
        $x3 = rand(3,8);
        $y3 = rand(3,7);

        if($this->matrix[$x1][$y1] == 0) {
            $this->matrix[$x1][$y1] = 1;
            $this->matrix[$x1][++$y1] = 1;
            $this->matrix[--$x1][$y1] = 2;
            $this->matrix[$x1][--$y1] = 2;
            $this->matrix[$x1][--$y1] = 2;
            $this->matrix[++$x1][$y1] = 2;
            $this->matrix[++$x1][$y1] = 2;
            $this->matrix[$x1][++$y1] = 2;
            $this->matrix[$x1][++$y1] = 2;
            $this->matrix[$x1][++$y1] = 2;
            $this->matrix[--$x1][$y1] = 2;
            $this->matrix[--$x1][$y1] = 2;
        }
        if($this->matrix[$x2][$y2] == 0) {
            $this->matrix[$x2][$y2] = 1;
            $this->matrix[$x2][++$y2] = 1;
            $this->matrix[--$x2][$y2] = 2;
            $this->matrix[$x2][--$y2] = 2;
            $this->matrix[$x2][--$y2] = 2;
            $this->matrix[++$x2][$y2] = 2;
            $this->matrix[++$x2][$y2] = 2;
            $this->matrix[$x2][++$y2] = 2;
            $this->matrix[$x2][++$y2] = 2;
            $this->matrix[$x1][++$y2] = 2;
            $this->matrix[--$x2][$y2] = 2;
            $this->matrix[--$x2][$y2] = 2;
        }

        if($this->matrix[$x3][$y3] == 0) {
            $this->matrix[$x3][$y3] = 1;
            $this->matrix[$x3][++$y3] = 1;
            $this->matrix[--$x3][$y3] = 2;
            $this->matrix[$x3][--$y3] = 2;
            $this->matrix[$x3][--$y3] = 2;
            $this->matrix[++$x3][$y3] = 2;
            $this->matrix[++$x3][$y3] = 2;
            $this->matrix[$x3][++$y3] = 2;
            $this->matrix[$x3][++$y3] = 2;
            $this->matrix[$x3][++$y3] = 2;
            $this->matrix[--$x3][$y3] = 2;
            $this->matrix[--$x3][$y3] = 2;
        }
        return $this;
    }

    public function makeThreeShips()
    {
        $x1 = rand(3,8);
        $y1 = rand(4,6);
        $x2 = rand(3,8);
        $y2 = rand(4,6);

        if($this->matrix[$x1][$y1] == 0) {
            $this->matrix[$x1][$y1] = 1;
            $this->matrix[$x1][++$y1] = 1;
            $this->matrix[$x1][++$y1] = 1;
            $this->matrix[--$x1][$y1] = 2;
            $this->matrix[$x1][--$y1] = 2;
            $this->matrix[$x1][--$y1] = 2;
            $this->matrix[$x1][--$y1] = 2;
            $this->matrix[++$x1][$y1] = 2;
            $this->matrix[++$x1][$y1] = 2;
            $this->matrix[$x1][++$y1] = 2;
            $this->matrix[$x1][++$y1] = 2;
            $this->matrix[$x1][++$y1] = 2;
            $this->matrix[$x1][++$y1] = 2;
            $this->matrix[--$x1][$y1] = 2;
            $this->matrix[--$x1][$y1] = 2;
        }

        if($this->matrix[$x2][$y2] == 0) {
            $this->matrix[$x2][$y2] = 1;
            $this->matrix[$x2][++$y2] = 1;
            $this->matrix[$x2][++$y2] = 1;
            $this->matrix[--$x2][$y2] = 2;
            $this->matrix[$x2][--$y2] = 2;
            $this->matrix[$x2][--$y2] = 2;
            $this->matrix[$x2][--$y2] = 2;
            $this->matrix[++$x2][$y2] = 2;
            $this->matrix[++$x2][$y2] = 2;
            $this->matrix[$x2][++$y2] = 2;
            $this->matrix[$x2][++$y2] = 2;
            $this->matrix[$x2][++$y2] = 2;
            $this->matrix[$x2][++$y2] = 2;
            $this->matrix[--$x2][$y2] = 2;
            $this->matrix[--$x2][$y2] = 2;
        }

        return $this;
    }

    public function makeFourShips()
    {
        $x = rand(3,8);
        $y = rand(5,5);
        if($this->matrix[$x][$y] == 0){
            $this->matrix[$x][$y] = 1;
            $this->matrix[$x][++$y] = 1;
            $this->matrix[$x][++$y] = 1;
            $this->matrix[$x][++$y] = 1;
            $this->matrix[--$x][$y] = 2;
            $this->matrix[$x][--$y] = 2;
            $this->matrix[$x][--$y] = 2;
            $this->matrix[$x][--$y] = 2;
            $this->matrix[$x][--$y] = 2;
            $this->matrix[++$x][$y] = 2;
            $this->matrix[++$x][$y] = 2;
            $this->matrix[$x][++$y] = 2;
            $this->matrix[$x][++$y] = 2;
            $this->matrix[$x][++$y] = 2;
            $this->matrix[$x][++$y] = 2;
            $this->matrix[$x][++$y] = 2;
            $this->matrix[--$x][$y] = 2;
            $this->matrix[--$x][$y] = 2;
        }

        return $this->matrix;
    }


}
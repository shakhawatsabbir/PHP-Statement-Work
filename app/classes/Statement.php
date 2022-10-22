<?php

namespace App\classes;

class Statement
{
    public $x, $y , $z;
    public function __construct()
    {
        $this->x = 10;
        $this->y = 20;
        $this->z = 30;
    }




    public function index()
    {


        //<---------- switch statement working ------------>//
//
//        switch ($this->x = 20)
//        {
//            case 10:
//                echo "Hello World";
//                break;
//            case 20:
//                echo "Hello PHP";
//                break;
//            default :
//                echo "Nothing";
//
//        }

        //<---------- ifelseif statement working ------------>//

//        if ($this->x > $this->y)
//        {
//            echo "hello King";
//        }
//        elseif ($this->y < $this->z)
//        {
//            echo "Hello World";
//        }
//        elseif ($this->x < $this->z)
//        {
//            echo "Hello Bangladesh";
//        }
//        else
//        {
//            echo "Nothing";
//        }

        //<---------- ifelse statement working ------------>//

//        if ($this->x > $this->y)
//        {
//            echo "hello World";
//        }
//        else
//        {
//            echo "Nothing";
//        }


        //<---------- if statement working ------------>//

//        if ($this->x < $this->y)
//        {
//            echo "hello World";
//        }

        //<---------- dowhile statement working ------------>//



//        $this->x = 100;
//         do
//         {
//             echo $this->x. "   ";
//             $this->x++;
//
//         }while($this->x < 120);


        //<---------- while statement working ------------>//

//        $this->x = 10;
//        while ($this->x < 10004)
//        {
//            echo $this->x. "  ";
//            $this->x++;
//        }


        //<---------- For statement working ------------>//



//        for ($this->z = 10; $this->z < 14; $this->z++)
//            {
//                echo $this->z. "  ";
//            }
    }
}
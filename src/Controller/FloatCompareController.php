<?php
// src/Controller/FloatCompareController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FloatCompareController extends AbstractController
{
    /**
      * @Route("/float-compare/compare")
      */
    public function compare(): Response
    {

        $a = 0.1;
        $b = 0.9;
        $c = 1;

        // 參考(https://codertw.com/%E7%A8%8B%E5%BC%8F%E8%AA%9E%E8%A8%80/208665/)
        // 使用round方法處理後再比較
        $one = var_dump(($c-$b)==$a); // false
        $two = var_dump(round(($c-$b),1)==round($a,1)); // true
        // 使用高精度運算方法
        $three = var_dump(($c-$b)==$a); // false
        $four = var_dump(bcsub($c, $b, 1)==$a); // true

        return $this->render('float-compare/floatCompare.html.twig', [
            'one' => $one,
            'two' => $two,
            'three' => $three,
            'four' => $four
        ]);
    }
}

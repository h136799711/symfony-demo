<?php
/**
 * Created by PhpStorm.
 * User: itboye
 * Date: 2018/7/7
 * Time: 10:57
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    /**
     * @Route()
     * @return Response
     * @throws \Exception
     */
    public function number()
    {
        $number = random_int(0, 1000);

        return new Response(
            '<html><body>Lucky Number:'.$number.' </body></html>'
        );
    }
}
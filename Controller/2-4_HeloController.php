<?php
namespace App\Controller;

use App\Controller\AppController;

class HeloController extends AppController
{
    public function index($a = '', $b = '')
    {
        $this->autoRender = false;

        echo "<html><head><title>title</title></head><body>";
        echo "<h1>Hello!</h1>";
        echo "<p>これは、サンプルで作成したページです。</p><p>";
        if ($a != '') {
            echo "　パラメータA：" . $a;
        } else {
            echo "　パラメータA：空文字";
        }
        if ($b != '') {
            echo "　パラメータB：" . $b;
        } else {
            echo "　パラメータB：空文字";
        }
        echo "</p></body></html>";
    }
}

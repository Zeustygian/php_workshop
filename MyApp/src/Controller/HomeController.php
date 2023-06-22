<?php
    namespace App\Controller;

    class HomeController extends AppController
    {

        public function index()
        {
            $this->viewBuilder()->setLayout('myLayout');
            $test = "test";
            $bob = "bob";
            $var1 = 1;
            $var2 = 1;
            $res = $var1 + $var2;
            $var = NULL;
            $var3 = 3;
            $var1 = $var3;
            $var3 = $var2;
            $data = [1, 2, 3, 4];
            $this->set(compact(['test', 'bob', 'res', 'var', 'var1', 'var3', 'data']));
        }

        public function page2()
        {
            $this->viewBuilder()->setLayout('myLayout');
        }
    }
?>
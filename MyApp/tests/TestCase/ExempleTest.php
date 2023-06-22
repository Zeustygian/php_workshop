<?php
    declare(strict_types=1);
    namespace App\Test\TestCase\Controller;
    use App\Controller\HomeController;
    use Cake\TestSuite\IntegrationTestTrait;
    use Cake\TestSuite\TestCase;

    class HomeControllerTest extends TestCase
    {
        use IntegrationTestTrait;

        public function testIndex()
        {
            $this->get('/home/index');
            $this->assertResponseOk();
            $this->assertEquals('test', $this->viewVariable('test'));
            $this->assertEquals('bob', $this->viewVariable('bob'));

            $this->assertEquals(2, $this->viewVariable('res'));
            $this->assertEquals(NULL, $this->viewVariable('var'));
            $this->assertEquals(3, $this->viewVariable('var1'));
            $this->assertEquals(1, $this->viewVariable('var3'));
            $this->assertContains(3, $this->viewVariable('data'));
            $this->assertNotContains(6, $this->viewVariable('data'));
        }
}
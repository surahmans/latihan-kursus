<?php

class ExampleTest extends TestCase
{
    /**
     * @test
     */
    public function create_variable()
    {
        /**
         * Buat sebuah variabel $name
         */

        //--- Put your code below ---

        //--- End of your code ---

        $this->assertEquals(true, isset($name));
    }

    /**
     * @test
     */
    public function create_array()
    {
        /**
         * Buat sebuah array $names
         */

        //--- Put your code below ---

        //--- End of your code ---

        $this->assertEquals(true, isset($names));
        $this->assertEquals(true, is_array($names));
    }
}

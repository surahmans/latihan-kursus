<?php

use Acme\Demo\Models\Post;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SecondTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     */
    public function create_has_one_relation()
    {
        /**
         * Buat sebuah relasi one-to-one antara model user dan address
         * Pada acme.demo
         */

        $this->assertEquals(
            true,
            \Acme\Demo\Models\User::address() instanceof \October\Rain\Database\Relations\HasOne
        );
        $this->assertEquals(
            true,
            \Acme\Demo\Models\Address::user() instanceof \October\Rain\Database\Relations\HasOne
        );
    }

    /**
     * @test
     */
    public function save_has_one_relation()
    {
        /**
         * Buat sebuah record user dan address kemudian hubungkan keduanya
         * sehingga menjadi sebuah relasi
         */

        //--- Complete the following code---
        $user = 

        $address = 
        //--- End of your code ---

        $this->assertEquals(
            true,
            $user->address instanceof \Acme\Demo\Models\Address
        );
        $this->assertEquals(
            true,
            $address->user instanceof \Acme\Demo\Models\User
        );
    }

    /**
     * @test
     */
    public function create_has_many_relation()
    {
        /**
         * Buat sebuah relasi one-to-many antara model user dan post
         * Pada acme.demo
         */

        $this->assertEquals(
            true,
            \Acme\Demo\Models\User::posts() instanceof \October\Rain\Database\Relations\HasMany
        );
        $this->assertEquals(
            true,
            \Acme\Demo\Models\Post::user() instanceof \October\Rain\Database\Relations\BelongsTo
        );
    }

    /**
     * @test
     */
    public function save_has_many_relation()
    {
        /**
         * Buat sebuah record user dan dan tiga post kemudian hubungkan keduanya
         * sehingga menjadi sebuah relasi (User memiliki tiga posts)
         */

        //--- Complete the following code---

        $user = 

        //--- End of your code ---

        $this->assertEquals(3, $user->posts->count());
    }

    /**
     * @test
     */
    public function create_many_to_many_relation()
    {
        /**
         * Buat sebuah relasi many-to-many antara model user dan hobby
         * Pada acme.demo
         */

        $this->assertEquals(
            true,
            \Acme\Demo\Models\User::hobbies() instanceof \October\Rain\Database\Relations\BelongsToMany
        );
        $this->assertEquals(
            true,
            \Acme\Demo\Models\Hobby::users() instanceof \October\Rain\Database\Relations\BelongsToMany
        );
    }

    /**
     * @test
     */
    public function save_many_to_many_relation()
    {
        /**
         * Buat record dengan ketentuan berikut:
         * - User 'John Doe' memiliki hobi berenang, memasak, dan makan
         * - Hobi memasak dimiliki oleh 'John Doe' dan 'Jane Doe'
         */

        //--- Put your code below ---


        //--- End of your code ---
        

        //--- Complete the following code ---

        // Instance of User model
        $johnDoe = 

        // Instance of Hobby model
        $cooking =

        //--- End of your code ---

        $this->assertEquals(3, $johnDoe->hobbies->count());
        $this->assertEquals(2, $cooking->users->count());
    }
}

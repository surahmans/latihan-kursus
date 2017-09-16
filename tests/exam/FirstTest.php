<?php

use Acme\Demo\Models\Post;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FirstTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     */
    public function create_plugin()
    {
        /**
         * Buatlah sebuah plugin dengan nama author Acme
         * dan nama plugin Demo
         */

        $this->assertEquals(
            true,
            file_exists(plugins_path() . '/acme/demo/Plugin.php')
        );
    }

    /**
     * @test
     */
    public function create_model_post()
    {
        /**
         * Buat sebuah model dengan nama Post
         **/

        $this->assertEquals(
            true,
            file_exists(plugins_path() . '/acme/demo/models/Post.php')
        );
    }

    /**
     * @test
     */
    public function create_posts_table()
    {
        /**
         * Buat migration dari tabel posts dengan fields
         * - title 
         * - slug  
         * - content
         * - published_at (tanggal)
         * - is_published (boolean)
         */

        $this->assertEquals(
            true, Schema::hasColumns('acme_demo_posts', [
                'title', 'slug', 'content', 'published_at', 'is_published'
            ])
        );
    }

    /**
     * @test
     */
    public function set_fillable()
    {
        /**
         * Jadikan kolom-kolom di bawah ini fillable pada model.
         * TERKECUALI KOLOM SLUG!
         *
         * - title
         * - content
         * - published_at
         * - is_published
         */

        $this->assertEquals([
            'title', 'content', 'published_at', 'is_published'
        ], Post::make()->getFillable());
        $this->assertEquals(false, in_array('slug', Post::make()->getFillable()));
    }

    /**
     * @test
     */
    public function add_three_data()
    {
        $this->assertEquals(0, Post::get()->count());

        /**
         * Tambahkan tiga data ke dalam table posts
         */

        //--- Put your code below ---


        //--- End of your code ---

        $this->assertEquals(3, Post::get()->count());
    }
}

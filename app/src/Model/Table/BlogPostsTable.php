<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class BlogPostsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('blog_posts');
        $this->hasMany('BlogPostsComments');
    }
}
<?php

/*
 * This file is part of WordPress XML-RPC PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\WordPressXmlRpc\Api;

use BrianFaust\WordPressXmlRpc\Base;

class Posts extends Base
{
    public function getPost($blog_id, $post_id, $fields = [])
    {
        return $this->post('wp.getPost', compact('blog_id', 'fields'));
    }

    public function getPosts($blog_id, $filter = [], $fields = [])
    {
        return $this->post('wp.getPosts', compact('blog_id', 'filter', 'fields'));
    }

    public function newPost($blog_id, $content)
    {
        return $this->post('wp.newPost', compact('blog_id', 'fields'));
    }

    public function editPost($blog_id, $post_id, $content)
    {
        return $this->post('wp.editPost', compact('blog_id', 'post_id', 'content'));
    }

    public function deletePost($blog_id, $post_id)
    {
        return $this->post('wp.deletePost', compact('blog_id', 'post_id'));
    }

    public function getPostType($blog_id, $post_type_name, $fields = [])
    {
        return $this->post('wp.getPostType', compact('blog_id', 'post_type_name', 'fields'));
    }

    public function getPostTypes($blog_id, $filter = [], $fields = [])
    {
        return $this->post('wp.getPostTypes', compact('blog_id', 'filter', 'fields'));
    }

    public function getPostFormats($blog_id, $filter = [])
    {
        return $this->post('wp.getPostFormats', compact('blog_id', 'filter'));
    }

    public function getPostStatusList($blog_id)
    {
        return $this->post('wp.getPostStatusList', compact('blog_id'));
    }

    public function getRevisions($blog_id, $post_id)
    {
        return $this->post('wp.getRevisions', compact('blog_id', 'post_id'));
    }

    public function restoreRevision($blog_id, $revision_id)
    {
        return $this->post('wp.restoreRevision', compact('blog_id', 'revision_id'));
    }
}

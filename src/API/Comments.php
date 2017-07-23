<?php

/*
 * This file is part of WordPress XML-RPC PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\WordPressXmlRpc\API;

use BrianFaust\Http\HttpResponse;

class Comments extends AbstractAPI
{
    public function getCommentCount($blog_id, $post_id): HttpResponse
    {
        return $this->client->post('wp.getCommentCount', compact('blog_id', 'post_id'));
    }

    public function getComment($blog_id, $comment_id): HttpResponse
    {
        return $this->client->post('wp.getComment', compact('blog_id', 'comment_id'));
    }

    public function getComments($blog_id, $filter = []): HttpResponse
    {
        return $this->client->post('wp.getComments', compact('blog_id', 'filter'));
    }

    public function newComment($blog_id, $post_id, $comment): HttpResponse
    {
        return $this->client->post('wp.newComment', compact('blog_id', 'post_id', 'comment'));
    }

    public function editComment($blog_id, $comment_id, $comment): HttpResponse
    {
        return $this->client->post('wp.editComment', compact('blog_id', 'comment_id', 'comment'));
    }

    public function deleteComment($blog_id, $comment_id): HttpResponse
    {
        return $this->client->post('wp.deleteComment', compact('blog_id', 'comment_id'));
    }

    public function getCommentStatusList($blog_id): HttpResponse
    {
        return $this->client->post('wp.getCommentStatusList', compact('blog_id'));
    }
}
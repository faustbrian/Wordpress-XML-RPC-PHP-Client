<?php

declare(strict_types=1);

/*
 * This file is part of WordPress XML-RPC PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\WordPressXmlRpc\API\Legacy;

use Plients\Http\HttpResponse;
use Plients\WordPressXmlRpc\API\AbstractAPI;

class Blogger extends AbstractAPI
{
    public function getUsersBlogs(): HttpResponse
    {
        return $this->post('blogger.getUsersBlogs');
    }

    public function getUserInfo(): HttpResponse
    {
        return $this->post('blogger.getUserInfo');
    }

    public function getPost($postid): HttpResponse
    {
        return $this->post('blogger.getPost', compact('postid'));
    }

    public function getRecentPosts($blogId, $numberOfPosts = 10): HttpResponse
    {
        return $this->post('blogger.getRecentPosts', compact('blogId', 'numberOfPosts'));
    }

    public function newPost($blogid, $content, $publish): HttpResponse
    {
        return $this->post('blogger.newPost', compact('blogid', 'content', 'publish'));
    }

    public function editPost($postid, $content, $publish): HttpResponse
    {
        return $this->post('blogger.editPost', compact('postid', 'content', 'publish'));
    }

    public function deletePost($postid): HttpResponse
    {
        return $this->post('blogger.deletePost', compact('postid'));
    }
}

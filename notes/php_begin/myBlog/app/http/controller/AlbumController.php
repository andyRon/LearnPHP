<?php

namespace App\Http\Controller;

use App\Model\Album;

/**
 * 处理专辑页请求
 */
class AlbumController extends Controller
{
    public function list(): void
    {
        $id = intval($this->request->get('id'));
        if (empty($id)) {
            echo '请指定要访问的专辑 ID';
            exit();
        }
        $album = Album::with('posts')->findOrFail($id)->toArray();
        $posts = $album['posts'];

        // TODO
        array_walk($posts, function (&$post) {
            $post['summary'] = empty($post['text']) ? '' : mb_substr(strip_tags($post['text']), 0, 81) . '...';
        });
        $pageTitle = $album['title'] . ' - ' . $this->siteName;
        $siteName = $this->siteName;
        $siteUrl = $this->container->resolve('app.url');
        $this->view->render('album.php', compact('album', 'posts', 'pageTitle', 'siteName', 'siteUrl'));
    }
}
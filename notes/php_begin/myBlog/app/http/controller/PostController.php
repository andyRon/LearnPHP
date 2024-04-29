<?php
namespace App\Http\controller;

use App\Model\Post;
use App\Printer\PrinterContract;

/**
 * 处理文章页请求
 */
class PostController extends Controller
{
    public function show(): void
    {
        $id = intval($this->request->get('id'));
        if (empty($id)) {
            echo '请指定要访问的文章 ID';
            exit();
        }
        $post = Post::with('album')->findOrFail($id)->toArray();
        $printer = $this->container->resolve(PrinterContract::class);
        if ($this->container->resolve('app.editor') == 'markdown') {
            $post['content'] = $printer->driver('markdown')->render($post['text']);
        } else {
            $post['content'] = $printer->render($post['html']);
        }
        $album = $post['album'];
        $pageTitle = $post['title'] . ' - ' . $this->siteName;
        $siteName = $this->siteName;
        $siteUrl = $this->container->resolve('app.url');

        $this->view->render('post.php', compact('post', 'album', 'pageTitle', 'siteUrl', 'siteName'));
    }
}
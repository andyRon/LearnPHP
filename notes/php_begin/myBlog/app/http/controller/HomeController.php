<?php

namespace App\Http\Controller;

use App\Http\Exception\ValidationException;
use App\Http\Response;
use App\Model\Album;
use App\Model\Message;
use Carbon\Carbon;

/**
 * 首页
 */
class HomeController extends Controller
{
    public function index(): void
    {
        $albums = Album::all()->toArray();

        $pageTitle = $siteName = $this->siteName;
        $siteUrl = $this->container->resolve('app.url');
        $siteDesc = $this->container->resolve('app.desc');


        $this->view->render('home.php', [
            'albums' => $albums,
            'pageTitle' => $pageTitle,
            'siteDesc' => $siteDesc,
            'siteName' => $siteName,
            'siteUrl' => $siteUrl,
        ]);
    }

    public function about(): void  // TODO
    {
        $this->view->render('about.php', [
            'pageTitle' => 'xxx',
//            'siteDesc' => $this->siteDesc,
            'siteName' => $this->siteName,
//            'siteUrl' => $this->siteUrl,
        ]);
    }

    /**
     * 联系表单页面
     * @throws ValidationException
     */
    public function contact(): void
    {
        if ($this->request->getMethod() == 'GET') {
            $pageTitle = '联系我 - ' . $this->container->resolve('app.name');
            $siteName = $this->container->resolve('app.name');
            $this->view->render('contact.php', compact('pageTitle', 'siteName'));
        } else {
            $name = $this->request->get('name');
            $email = $this->request->get('email');
            $phone = $this->request->get('phone');
            $content = $this->request->get('message');
            // 验证表单输入数据
            if (empty($name)) {
                throw new ValidationException('用户名不能为空');
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new ValidationException('请输入正确的邮箱地址');
            }
            if (!preg_match('/^1[34578]{1}\d{9}$/', $phone)) {
                throw new ValidationException('请输入正确的手机号码');
            }
            if (empty($content)) {
                throw new ValidationException('消息内容不能为空');
            }
            $message = new Message();
            $message->name = filter_var($name, FILTER_SANITIZE_STRING);
            $message->email = $email;
            $message->phone = $phone;
            $message->content = filter_var($content, FILTER_SANITIZE_STRING);
            $message->created_at = Carbon::now(); // TODO
            if ($message->save()) {
                (new Response('消息保存成功', 200))->send();
            }
            (new Response('保存消息失败，请重试！', 500))->send();
        }

    }
}
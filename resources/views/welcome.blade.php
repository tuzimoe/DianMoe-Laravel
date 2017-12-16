<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel=stylesheet href="/css/i.css">
        <title>Eloli-最萌的同人创作社交平台</title>
    </head>

        <div id=stage>
            <article class=step-1>
                <div class=step-1-in>
                    <div id=test>
                        <header>
                            <div class=layout>
                                <h1>Eloli</h1>
                                <nav>
                                    <a href="/" target=_blank>首页</a>
                                    <a href="about.html">关于</a>
                                    @if (Route::has('login'))
                                            @auth
                                                <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                                </nav>
                            </div>
                        </header>
                        <h2>
          <span class="line line-1">欢迎
            <span class="moji-1">最萌</span>的</span>
                            <span class="line line-2">同人创作社交平台</span></h2>
                        <i class="bg"></i>
                        <i class=hr></i>
                        <div class=shell-box>
                            <i class=shell-shadow></i>
                            <i class=shell>
                                <span></span>
                            </i>
                        </div>
                        <a class=link-reg href="{{ url('/home') }}">欢迎回家</a>
                            <i class=light></i>
                    </div>
                </div>
                                                @else
                                                <a href="{{ route('login') }}">登录</a>
                                </nav>
                            </div>
                        </header>
                        <h2>
          <span class="line line-1">欢迎
            <span class=moji-1>最萌</span>的</span>
                            <span class="line line-2">同人创作社交平台</span></h2>
                        <i class=bg></i>
                        <i class=hr></i>
                        <div class=shell-box>
                            <i class=shell-shadow></i>
                            <i class=shell>
                                <span></span>
                            </i>
                        </div>
    <a class=link-reg href="{{ route('register') }}">立刻注册</a>
                            <i class=light></i>
                    </div>
                </div>
                                                @endauth
                                    @endif
            </article>
            <span class="tip tip-1">向下滚动</span>
            <article class=step-2>
                <div class=htko>
                    <p>如果你是大触，投稿并建立你的应援团吧。
                </div>
            </article>
            <article class=step-3>
                <div class=htko>
                    <p>如果你会围观，简单的欣赏和点赞吧<br>或者从大触的绘画中学习并变成大触吧
                </div>
            </article>
            <article class=step-4>
                <div class=htko>
                    <p>下载我们的手机App
                </div>
            </article>
            <footer class=step-5>
                <div class=htko>
                    <p>萌啊萌，萌啊萌，哇萌死了(๑•ᴗ•๑)</div>
                <div class=layout>
                    <div class=l>
                        <a href=https://twitter.com/eloli_moe target=_blank>@Eloli娘</a>
                        <a href=//eloli.me target=_blank>Eloli工作室运营</a>
                        <a href=###>隶属于新西兰 Eloli Limited</a></div>
                    <div class=r>
                        <a href=http://www.miitbeian.gov.cn/ target=_blank>皖ICP备17019754号-1</a></div>
                </div>
            </footer>
        </div>
        <script src="/js/c.js"></script>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Morfolab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/slick-theme.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../css/style.min.css">
</head>
<body>
<header class="header">
    <div class="search">
        <div class="container-fluid">
            <div class="row">
                <div class="search__wrap">
                    <div class="ya-site-form ya-site-form_inited_no"
                         data-bem="{&quot;action&quot;:&quot;http://morfo24.site/&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:16,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rw&quot;,&quot;publicname&quot;:&quot;Поиск по сайту Morfolab&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_self&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:3,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2463014,&quot;input_fg&quot;:&quot;#4D4D4D&quot;,&quot;input_bg&quot;:&quot;#212121&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:&quot;Поиск&quot;,&quot;input_placeholderColor&quot;:&quot;#4D4D4D&quot;,&quot;input_borderColor&quot;:&quot;#212121&quot;}">
                        <form action="https://yandex.ru/search/site/" method="get" target="_self"
                              accept-charset="utf-8"><input type="hidden" name="searchid" value="2463014"/><input
                                    type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc"
                                                                                 value="utf-8"/><input type="search"
                                                                                                       name="text"
                                                                                                       value=""/><input
                                    type="submit" value="Найти"/></form>
                    </div>
                    <style type="text/css">.ya-page_js_yes .ya-site-form_inited_no {
                            display: none;
                        }</style>
                    <script type="text/javascript">(function (w, d, c) {
                            var s = d.createElement('script'), h = d.getElementsByTagName('script')[0],
                                e = d.documentElement;
                            if ((' ' + e.className + ' ').indexOf(' ya-page_js_yes ') === -1) {
                                e.className += ' ya-page_js_yes';
                            }
                            s.type = 'text/javascript';
                            s.async = true;
                            s.charset = 'utf-8';
                            s.src = (d.location.protocol === 'https:' ? 'https:' : 'http:') + '//site.yandex.net/v2.0/js/all.js';
                            h.parentNode.insertBefore(s, h);
                            (w[c] || (w[c] = [])).push(function () {
                                Ya.Site.Form.init()
                            })
                        })(window, document, 'yandex_site_callbacks');</script>
                    <div id="ya-site-results"
                         data-bem="{&quot;tld&quot;: &quot;ru&quot;,&quot;language&quot;: &quot;ru&quot;,&quot;encoding&quot;: &quot;utf-8&quot;,&quot;htmlcss&quot;: &quot;1.x&quot;,&quot;updatehash&quot;: false}"></div>
                    <script type="text/javascript">(function (w, d, c) {
                            var s = d.createElement('script'), h = d.getElementsByTagName('script')[0];
                            s.type = 'text/javascript';
                            s.async = true;
                            s.charset = 'utf-8';
                            s.src = (d.location.protocol === 'https:' ? 'https:' : 'http:') + '//site.yandex.net/v2.0/js/all.js';
                            h.parentNode.insertBefore(s, h);
                            (w[c] || (w[c] = [])).push(function () {
                                Ya.Site.Results.init();
                            })
                        })(window, document, 'yandex_site_callbacks');</script>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="header__logo_wrap">
                    <a href="index.php" class="header__logo">
                        <img class="header__big_logo d-none d-md-block" src="../assets/img/logo.svg" alt="Логотип">
                        <img class="header__small_logo d-md-none" src="../assets/img/logo_small.svg" alt="Логотип">
                    </a>
                    <div class="header__call">
                        <a class="header__location_link" href=""><img class="header__location"
                                                                      src="../assets/img/location.svg"
                                                                      alt="Geolocation"></a>
                        <div class="header__phone_link" href=""><img class="header__phone"
                                                                     src="../assets/img/telephone.svg"
                                                                     alt="Telephone"></div>
                        <div class="popup"><a href="tel:88009504444" class="phonelink">+78009504444</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav__wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav nav__list">
                                <li class="menu__item nav-item">
                                    <a id="a1" class="menu__link nav-link" href="index.php">Лаборатория</a>
                                </li>
                                <li class="menu__item nav-item">
                                    <a id="a2" class="menu__link nav-link" href="training.php">Обучение</a>
                                </li>
                                <li class="menu__item nav-item">
                                    <a id="a3" class="menu__link nav-link" href="page-login.php">Войти</a>
                                </li>
                                <li class="menu__item nav-item">
                                    <a id="a4" class="menu__link nav-link" href="#">Поиск</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
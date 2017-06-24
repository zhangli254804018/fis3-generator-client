<?php
    include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>fis3-client</title>
    <meta name="description" content="Mr. Zhang, Packaged web front-end architecture for PC terminals and so on. full vesion.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#157878">
    <?php if ($debug) {?>
    <link rel="stylesheet" type="text/css" href="assets/css/main.min.css?v=<?php echo $v; ?>">
    <?php } else {?>
     <link rel="stylesheet" type="text/css" href="assets/css/main.css?v=<?php echo $v; ?>">
    <?php }?>
</head>

<body>
    <section class="page-header">
        <h1 class="project-name">fis3-client</h1>
        <h2 class="project-tagline">Mr. Zhang, Packaged web front-end architecture for PC terminals and so on. full vesion.</h2>

        <a href="https://github.com/zhangli254804018/fis3-client" class="btn">View on GitHub</a>


    </section>

    <section class="main-content">
        <p>#fis3-client</p>

        <ul>
            <li>1、项目采用fis3开发结构项目</li>
            <li>2、支持common.js写法等 不依赖requirejs等</li>
            <li>3、支持es6语法等</li>
            <li>4、可以实行单页面和多页面的开发 要修改入口配置</li>
            <li>
                <p>5、原则上fis不针对文件做修改 编辑等</p>

                <p>但是为了启动单页面 更好的开发 我们需要在项目上做以下修改来适应开发。 a.新增解析hook-commonjs &amp; hook-amd 等插件兼容写法模块 b.新增解析parser-less 插件解析less文本文件</p>
            </li>
        </ul>

        <div class="highlighter-rouge"><pre class="highlight"><code>        "fis-parser-less": "^0.1.3",
        "fis-parser-utc": "^0.0.2",
        "fis3-hook-amd": "^0.2.0",
        "fis3-hook-commonjs": "^0.1.26",
        "fis3-hook-node_modules": "^2.2.8",
        "fis3-parser-client": "*",
        "fis3-postpackager-autoloader": "^1.0.2",
        "fis3-postpackager-loader": "^2.1.4",
        "fis3-postpackager-simple": "^0.0.27"
</code></pre>
        </div>
        <ul>
            <li>6、使用項目結構為
                <div class="highlighter-rouge"><pre class="highlight"><code>      依賴包：fis3-client
      參考文件結構為:
              -assets
                      -img
                      -less
                      -css
                      -pic
                      -swf
                      ……
              js
                      -api
                      -dist
                      -dev
                      index.js
                      ……
              lib
                      -jquery
                      ……
              fis-conf.js
              package.json
                      "fis3-client":"*"
</code></pre>
                </div>
            </li>
            <li>7、后期需要更多的优化兼容开发体验等</li>
        </ul>

        <div class="highlighter-rouge"><pre class="highlight"><code>        開發過程第一步為
        npm run dev
        開發訪問地址：your host+/dev?debug=1
        正式環境為
        npm run build
        正式訪問地址：your host+/dist
</code></pre>
        </div>

        <ul>
            <li><a href="https://github.com/zhangli254804018/fis3-client">架构源码参考</a></li>
            <li><a href="https://www.npmjs.com/package/fis3-parser-client">核心依賴插件-fis3-parser-client</a></li>
        </ul>



        <footer class="site-footer">

            <span class="site-footer-owner"><a href="https://github.com/zhangli254804018/fis3-client">fis3-client</a> is maintained by <a href="https://github.com/zhangli254804018">zhangli254804018</a>.</span>

            <span class="site-footer-credits">This page was generated by <a href="https://pages.github.com/">GitHub Pages</a>.</span>
        </footer>
    </section>




</body>
<?php if ($debug) {?>
<script type="text/javascript" src="js/bundle.js?v=<?php echo $v; ?>"></script>
<?php } else {?>
<script type="text/javascript" src="js/index.js?v=<?php echo $v; ?>"></script>
<?php }?>
</html>
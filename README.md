# fis3-generator-client
Create a fis3 project


- 1、使用項目結構為


```
        開發過程第一步為
        npm install fis3-generator-client -g
        第二步創建文件夾名稱
        fisc demoApp
        如需擴展：fisc -css stylus myapp
        ……
                .option('-a, --art', 'add art-template engine support (defaults to art)')
                .option('-e, --ejs', 'add ejs engine support')
                .option('    --hbs', 'add handlebars engine support')
                .option('-n, --nunjucks', 'add nunjucks engine support')
                .option('-H, --hogan', 'add hogan.js engine support')
                .option('-c, --css <engine>', 'add stylesheet <engine> support (less|stylus|compass|sass) (defaults to plain css)')
                .option('    --git', 'add .gitignore')
                .option('-f, --force', 'force on non-empty directory')
```
生成文件結構為

```
        依賴包：fis3-client
        參考文件結構為:
                -assets
                        -img
                        -css
                        ……
                js
                        index.js
                        ……
                lib
                        ……
                fis-conf.js
                package.json
                        "fis-parser-less": "^0.1.3",
                        "fis-parser-utc": "^0.0.2",
                        "fis3-hook-amd": "^0.2.0",
                        "fis3-hook-commonjs": "^0.1.26",
                        "fis3-hook-node_modules": "^2.2.8",
                        "fis3-parser-client": "^1.2.2",
                        "fis3-postpackager-loader": "^2.1.4"
```

   但是为了启动单页面 更好的开发 
   我们需要在项目上做以下修改来适应开发。
  
```
        "commander": "2.7.1",
        "mkdirp": "0.5.1",
        "sorted-object": "1.0.0"
```
![實例](http://orkx006h7.bkt.clouddn.com/fis3.png)

- 2、后期需要更多的优化兼容开发体验等
- 3、現部署項目的架構已經用於實踐，效果還不錯比之前gulp配置簡單快捷了很多，但是也是有部分問題後期需要解決。


* [架构源码参考](https://zhangli254804018.github.io/fis3-generator-client/)
* [核心依賴插件-fis3-parser-client](https://www.npmjs.com/package/fis3-parser-client)
* [技術支持](http://vc.changyou.com/)




















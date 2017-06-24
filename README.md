# fis3-generator-client
Create a fis3 project


- 1、使用項目結構為
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
                        "fis3-client":"*"
```

   但是为了启动单页面 更好的开发 
   我们需要在项目上做以下修改来适应开发。

```
        "commander": "2.7.1",
        "mkdirp": "0.5.1",
        "sorted-object": "1.0.0"
```


- 2、后期需要更多的优化兼容开发体验等

```
        開發過程第一步為
        npm install fis3-generator-client -g
        第二步創建文件夾名稱
        fis3-generator-client demoApp
```

* [架构源码参考](https://www.npmjs.com/package/fis3-client)
* [核心依賴插件-fis3-parser-client](https://www.npmjs.com/package/fis3-parser-client)
* [技術支持](http://vc.changyou.com/)




















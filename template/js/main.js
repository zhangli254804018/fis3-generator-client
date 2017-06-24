// 入口文件等
//const _ =  require('underscore');
function getIframeWindow(obj) {
    return obj.contentWindow || obj.contentDocument.parentWindow;
}

function getIframeHeight(obj) {
    var idoc = getIframeWindow(obj).document;
    var ibody = document.getElementsByTagName('html')[0];
    if (idoc.body) {
        return {
            height: Math.max(idoc.body.scrollHeight, idoc.body.offsetHeight, idoc.body.clientHeight, ibody.clientHeight)
        }

    } else if (idoc.documentElement) {
        return {
            height: Math.max(idoc.documentElement.scrollHeight, idoc.documentElement.offsetHeight, ibody.clientHeight)
        }
    }
}

function setHeight() {
    var myiframe = document.getElementById("myiframe");
    myiframe.height = getIframeHeight(myiframe)['height'];
}

setHeight()
var m_menuMobile;
var mobile = 0;

        try {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                mobile = 1;
            }
        }
        catch(e) {}


try {
    if (document.getElementById('gn-menu')) {
            m_menuMobile = new gnMenu(document.getElementById('gn-menu'));
    }
} catch (e) {}


/*  if (mobile === 0) {
                    var ele = document.querySelector("#gn-menu");
                    ele.parentNode.removeChild(ele);
                } else if (mobile === 1){
                        var menublur = document.getElementsByClassName("mask");
                        for (var i = 0; i < menublur.length; i++) {
                            menublur[i].parentNode.removeChild(menublur[i]);
                        }
                        var ele = document.querySelector("#BackgroundMenuPC");
                        ele.parentNode.removeChild(ele);
                        //document.querySelector("#fullcontent").style.top = "55px";
                        try {
                            if (document.getElementById('gn-menu')) {
                              m_menuMobile = new gnMenu(document.getElementById('gn-menu'));
                            }
                        }
                        catch (e) {
                        }
                }*/
				

function test() {
document.getElementById("BackgroundMenuPC");
}

function addEvent(evnt, elem, func) {
   if (elem.addEventListener) {  // W3C DOM
      elem.addEventListener(evnt,func,false);
   } else if (elem.attachEvent) { // IE DOM
      elem.attachEvent("on"+evnt, func);
   } else {
      elem[evnt] = func;
   }
}

//addEvent("scroll", document, test);
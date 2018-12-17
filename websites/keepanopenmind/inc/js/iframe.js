           window.onload = function() {

                var f = document.getElementById("mainframe");

                function resize() {

                    var h = "";

                    var w = "";

                    if (f.contentDocument) {

                        h = f.contentDocument.documentElement.offsetHeight + 20 + "px";

                        // can't find anything for Opera and Firefox that works for the width. OffetWidth doesn't work right either.(f.contentDocument.documentElement,"").getPropertyValue("width");

                    } else if (f.contentWindow) {

                        h = f.contentWindow.document.body.scrollHeight + 5 + "px";

                    } else {

                        return;

                    }

                    f.setAttribute("height",h);

                    f.parentNode.setAttribute("height",h);

                }

                if (window.addEventListener) {

                    f.onload = resize;

                } else if (f.attachEvent) {

                    f.attachEvent("onload", resize);

                } else {

                    return;

                }

                resize();

            }
                    
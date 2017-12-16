!function(a, b) {
        a.DeviceOrientationEvent && a.addEventListener("deviceorientation",
            function(a) {
                a.beta && a.gamma && (b.onmousemove = null);
                var d = (a.beta - 20) / 3,
                    e = -a.gamma / 3;
                d = Math.min(d, 20),
                    d = Math.max(d, -20),
                    e = Math.min(e, 20),
                    e = Math.max(e, -20),
                    c(d, e)
            },
            !1);
        var c = function(a, b) {
                test.style.cssText = "-webkit-transform:rotateX(" + a + "deg) rotateY(" + b + "deg);-ms-transform:rotateX(" + a + "deg) rotateY(" + b + "deg);transform:rotateX(" + a + "deg) rotateY(" + b + "deg);"
            },
            d = b.documentElement;
        BODY = b.body,
            b.onmousemove = function(a) {
                var b = a.clientX - BODY.offsetWidth / 2;
                b /= 100;
                var e = a.clientY - d.clientHeight / 2;
                e /= 100,
                    e = -e,
                    c(e, b)
            };
        var e = [0, 700, 2e3, 3100, 3800];
        setTimeout(function() {
                a.onscroll = function() {
                    for (var a, b = 0; b < e.length; b++) if (a = e[b], a > Math.max(d.scrollTop, BODY.scrollTop) + d.clientHeight / 2) return d.setAttribute("step", b)
                },
                    a.onscroll()
            },
            1e3),
            b.getElementById("toggle").addEventListener("change",
                function(a) {
                    1 == b.getElementById("toggle").checked ? (b.getElementById("span-1").style.fontSize = "1em", b.getElementById("span-2").style.fontSize = "1.05em", b.getElementById("price-1").innerHTML = "<big>0.09��/撠𤩺𧒄</big><small>��� 64��/���</small>", b.getElementById("price-2").innerHTML = "<big>0.18��/撠𤩺𧒄</big><small>��� 128��/���</small>", b.getElementById("price-3").innerHTML = "<big>0.36��/撠𤩺𧒄</big><small>��� 256��/���</small>", b.getElementById("price-4").innerHTML = "<big>0.72��/撠𤩺𧒄</big><small>��� 512��/���</small>", b.getElementById("price-note").innerHTML = "<p>�� �㺭�旿銝支遢���𧋦嚗𣬚㩞靽∟�娪�𡁶宏�𢆡銝厩�煾�㗛�毺凒餈痹�峕�𣂷�𥟇�� SATA �凒擃条� IOPS嚗屸������𤾸辣餈蠘�鞟�堒�见�𠉛鍂嚗������蝵穃�皞鞾�𨅯�讐�坔�𣳇��</p>") : (b.getElementById("span-1").style.fontSize = "1.05em", b.getElementById("span-2").style.fontSize = "1em", b.getElementById("price-1").innerHTML = "<big>0.05��/撠𤩺𧒄</big><small>��� 36��/���</small>", b.getElementById("price-2").innerHTML = "<big>0.11��/撠𤩺𧒄</big><small>��� 79��/���</small>", b.getElementById("price-3").innerHTML = "<big>0.24��/撠𤩺𧒄</big><small>��� 172��/���</small>", b.getElementById("price-4").innerHTML = "<big>0.52��/撠𤩺𧒄</big><small>��� 374��/���</small>", b.getElementById("price-note").innerHTML = "<p>�� �㺭�旿銝支遢���𧋦嚗𣬚�𤾸𤙴瘣𥟇�厩櫊�㩞靽∟�娪�𡁻�㗛�笔���𤑳凒餈痹��500M 頞�擃睃�祉�煾������睃蒂摰賡�瘙���摨𠉛鍂嚗������蝵烐�𣂷�𥕦�皞鞾�𨅯�讐�坔�𣳇��</p>")
                })
    } (this, document);
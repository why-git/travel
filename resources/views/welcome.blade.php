<?php
//include "../php/conn.php";
//$sql = "SELECT * FROM attractions";
//$result = mysql_query($sql);
//$records = mysql_num_rows($result);
//?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--手机模式下优化屏幕的宽度-->
    <title>安阳旅游指南</title>
    <link rel="icon" href="../img/favicon.ico" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/jquery.mobile-1.4.5.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.mobile-1.4.5.min.js"></script>
    <script src="../js/lunbo.js"></script>
</head>
<body>
<div data-role="page" data-theme="a">
    <!--header Start-->
    <div data-role="header" id="header" >
        <a style="display:none;"></a>
        <h1>安阳旅游指南</h1>
        <a href="#" class="ui-btn ui-icon-refresh ui-corner-all ui-btn-icon-notext" onclick="reloadNow()"></a>
    </div>
    <!--Header End-->
    <!--content Start-->
    <div data-role="content" style="background: #E5F8FC;padding: 0;">
        <!--轮播图 Start-->
        <div id="ad">
<!--            --><?php
//            if ($records)
//            {
//                while ($arr = mysql_fetch_assoc($result))
//                {
//                    echo '<a href="#attractions'.$arr["id"].'"data-transition="slidefade"><img src="../img/attractions/'.$arr["img"].'"/></a>';
//                };
//            }
//            ?>
        </div>
        <!--轮播图 End-->
        <!--导航栏 Start-->
        <div id="navbar" data-role="navbar">
            <ul>
                <!--#AAFEB0   #9096F4   #5CD5E1  #EEFE80  #FE9DA8   #FC94D9-->
                <li><a href="attractions.php?title=美景看台&target=4" data-ajax="false" data-role="button" style="background:#AAFEB0"><span>美景看台</span><br><img src="../img/nav-2.png" alt=""></a></li>
                <li><a href="hotel.php?title=温馨驿站&target=3" data-ajax="false" data-role="button" style="background:#9096F4"><span>温馨驿站</span><br><img src="../img/nav-3.png" alt=""></a></li>
                <li><a href="walkinto.php?title=走进安阳&target=2" data-ajax="false" data-role="button" style="background:#7EF6EF"><span>走进安阳</span><br> <img src="../img/nav-1.png" alt=""></a></li>
                <li><a href="snack.php" data-role="button" data-ajax="false" style="background:#FC94D9"><span>美食广场</span><br><img src="../img/nav-4.png" alt=""></a></li>
                <li><a href="messageBoard.php?title=旅客留言&target=5"  data-ajax="false" data-role="button" style="background:#FE9DA8"><span>旅客留言</span><br><img src="../img/nav-5.png" alt=""></a></li>
                <li><a href="more.php"  data-ajax="false" data-role="button" style="background:#EEFE80"><span>更多功能</span><br><img src="../img/nav-6.png" alt=""></a></li>
            </ul>
        </div>
        <!--导航栏 Start-->
        <!--返回顶部-->
        <div class="actGotop"><a href="javascript:;" title="返回顶部"></a></div>
    </div>
    <!--content End-->
<!--    --><?php //include "footer_nav.php";?>
</div>
</body>
</html>
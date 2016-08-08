<?php 
$res = mysql_query("select id,title,ctime from `tg_news` where ctype='toutiao' order by ctime desc limit 0,9");
$res1 = mysql_query("select id,title,ctime from `tg_news` where ctype='jiaodian' order by ctime desc limit 22");
$res2 = mysql_query("select id,title,ctime from `tg_news` where ctype='dalu' order by ctime desc limit 18");
$res3 = mysql_query("select id,title,ctime from `tg_news` where ctype='taiwan' order by ctime desc limit 18");
$res4 = mysql_query("select id,title,ctime from `tg_news` where ctype='junqing' order by ctime desc limit 18");
$res5 = mysql_query("select id,title,ctime from `tg_news` where ctype='tiyu' order by ctime desc limit 18");
$res6 = mysql_query("select id,title,pic from `tg_news` where ctype='toutiao' and is_pic=1 order by ctime desc limit 0,20");
?>
<div id="mainbox">
<div id="mainbg">
    <div id="column1">
      <!--头条新闻-->
      <table width="98%" border="0" cellspacing="1" cellpadding="0" bgcolor=#999999>
          <tr><td bgcolor=#ffffff align=right>

            <table width="100%" border="0" cellspacing="4" cellpadding="0" height="50">
              <tr>
                <td width="10%" align="center" valign="top">
                  <script type="text/javascript">
                    var swf_width=230;
                    var swf_height=190;
                    //-- 参数设置 -- 自动播放时间(秒)|文字颜色|文字背景色|文字背景透明度|按键数字颜色|当前按键颜色|普通按键色彩 --
                    var config='5|0xFFFFFF|0x000000|50|0xffffff|0xFF0000|0x000000';
                     
                    var files='http://cnpic.crntt.com/upload/201608/3/104336949.jpg|http://cnpic.crntt.com/upload/201608/3/104337112.jpg|http://cnpic.crntt.com/upload/201608/3/104336441.jpg|http://cnpic.crntt.com/upload/201608/3/104337151.jpg|http://cnpic.crntt.com/upload/201608/3/104336861.jpg|http://cnpic.crntt.com/upload/201608/3/104336881.jpg|http://cnpic.crntt.com/upload/201608/3/104336555.jpg|http://cnpic.crntt.com/upload/201608/3/104336654.jpg|http://cnpic.crntt.com/upload/201608/2/104335485.jpg|http://cnpic.crntt.com/upload/201608/3/104336789.JPG';
                    var links='/doc/182_0_104336940_1_0804010047.html|/doc/182_0_104337111_1_0804005746.html|/doc/182_0_104336408_1_0804005227.html|/doc/182_0_104337128_1_0804003155.html|/doc/182_0_104336851_1_0803161937.html|/doc/182_0_104336879_1_0803162204.html|/doc/182_0_104336521_1_0803145109.html|/doc/182_0_104336650_1_0803145557.html|/doc/182_0_104335484_1_0803145408.html|/doc/182_0_104336785_1_0803160317.html';
                    var texts='哈尔滨工业大学　校友孙运璇建设台湾|中评现场：原住民要送小娃　洪秀柱…|中评镜头：炎炎夏日到哈尔滨也能赏…|中评镜头：台东建和社区人人都是雕…|中评镜头：桃园客家义民嘉年华揭序曲|中评镜头：农历鬼月来了  张花冠…|原民府前批蔡道歉是假的　简直是朝…|施正锋挺抗争原民：蔡讲空话不用一…|蔡向原住民道歉　高金素梅：美化日…|台东果农忧释迦销陆通路　洪秀柱允…';

                    document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
                    document.write('<param name="movie" value="http://cnpic.crntt.com/resource/flexslider/flashslider.swf"><param name="quality" value="high">');
                    document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
                    document.write('<param name="FlashVars" value="config='+config+'&bcastr_flie='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'">');
                    document.write('<embed src="http://cnpic.crntt.com/resource/flexslider/flashslider.swf" wmode="opaque" FlashVars="config='+config+'&bcastr_flie='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'& menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>'); 
                  </script>
                </td>
                <td valign=top align=center bgcolor="#F7F7F7" style="border:#cccccc 1px solid;">
                    
                    <TABLE cellSpacing=3 cellPadding=0 width="96%" border=0>
                        <?php for($i=0;$i<8;$i++){$row=mysql_fetch_assoc($res); ?>
                        <TR>
                          <TD>
                            <font color='#000000' style='font-size: 7pt;font-family:黑体'>◆</font>&nbsp;<a href="./show.php?id=<?php echo $row['id'] ?>" target='_blank' class='indfont'><font color='#660000' style='font-size: 14px'><strong><?php echo $row['title'] ?></strong></font></a>
                          </TD>
                        </TR>
                        <?php } ?>
                        <TR>
                          <TD>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                  <?php $row=mysql_fetch_assoc($res); ?>
                                  <td width="99%"><font color=#000000 style='font-size: 7pt;font-family:黑体'>◆</font>&nbsp;<a href="./show.php?id=<?php echo $row['id'] ?>" target='_blank' class='indfont'><font color='#660000' style='font-size: 14px'><strong><?php echo $row['title'] ?></strong></font></a>
                                  </td>
                                  <td width="1%" valign="bottom" nowrap="nowrap"><a href="./list.php?type=toutiao" target='_blank'><font color="#990000">更多&gt;&gt;</font></a></td>
                              </tr>
                            </table>
                          </TD>
                        </TR>
                    </TABLE>
              </td></tr>
            </table>


            <table width="100%" border="0" cellspacing="0" cellpadding="0" height="1">
            <tr><td width="10%"></td><td width="80%" height="1" background="http://cnpic.crntt.com/resource/images/pub_012.gif"></td><td width="10%"></td></tr>
            </table>

            <table width="100%" border="0" cellspacing="4" cellpadding="0">
              <?php for($i=0;$i<10;$i++){ ?>
              <tr>
                <?php for($j=0;$j<2;$j++){ $row1 = mysql_fetch_assoc($res1);?>
                  <td width="50%">
                        <font color='#000000' style='font-size: 7pt;font-family:黑体'>◆</font>&nbsp;<a href='./show.php?id=<?php echo $row1['id'] ?>' target='_blank' class='indfont'><?php echo $row1['title'] ?></a>
                  </td>
                <?php } ?>
              </tr>
              <?php } ?>
              <tr>
                  <td width="50%">
                        <?php $row1 = mysql_fetch_assoc($res1); ?>
                        <font color=#000000 style='font-size: 7pt;font-family:黑体'>◆</font>&nbsp;<a href='./show.php?id=<?php echo $row1['id'] ?>' target='_blank' class='indfont'><?php echo $row1['title'] ?></a>

                  </td>

                  <td width="50%">

                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                    <td width="99%"><font color=#000000 style='font-size: 7pt;font-family:黑体'>◆</font>&nbsp;<a href='./show.php?id=<?php echo $row1['id'] ?>' target='_blank' class='indfont'><?php echo $row1['title'] ?></a></td>

                    <td width="1%" nowrap="nowrap" style="padding-right:10px;">&nbsp;<a href="./list.php?type=jiaodian"><font color="#990000" style="font-size:12px"><!--DicFactory.getDicColumn().getName(coluID)-->更多&gt;&gt;</font></a></td>
                    </tr>
                    </table>

                  </td>
              </tr>
            </table>
        
            </td>
          </tr>
      </table>
      <!--  中国大陆栏目开始-->

      <table width="98%" border="0" cellpadding="0" cellspacing="0">
        <TR>
          <td bgColor=#fdad00  height=20 width=105>
            <table width="100%" height="22" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td width="1%" valign="top"><img src="http://cnpic.crntt.com/resource/images/pub_102.gif" width="4" height="4"></td>
                <td width="98%" valign="bottom"><img src="http://cnpic.crntt.com/resource/images/dot5.gif" width="22" height="11">&nbsp;<a href="./list.php?type=dalu"><font color="#000000" style="font-size:16px;font-family:黑体">中国大陆</font></a></td>
                <td width="1%" align="right" valign="top"><img src="http://cnpic.crntt.com/resource/images/pub_103.gif" width="4" height="4"></td>
              </tr>
            </table>
          </td>
            <td align="right">
            <a href="./list.php?type=dalu"><font color="#990000">更多 &gt;&gt;</font></a>
            </td>
                  </tr>
            <TR><TD bgColor=#fd9500 colSpan=3 height=3></TD></TR>
            <TR><TD  colSpan=3 height=3></TD></TR>
      </table>
      <table width="100%" border="0" cellspacing="1" cellpadding="1">
        <?php for($i=0;$i<9;$i++){ ?>
        <tr>
          <?php $row2 = mysql_fetch_assoc($res2); ?>
          <td  width=50%  class="indfont" style="padding-left:5px;overflow:hidden;">
            <font color=#000000 style="font-size: 7pt;font-family:黑体">◆</font>&nbsp;<a href="./show.php?id=<?php echo $row2['id'] ?>" target="_blank"><?php echo mb_substr($row2['title'],0,20,'utf-8') ?></a>
          </td>
           <?php $row2 = mysql_fetch_assoc($res2); ?>
          <td  width=50%  class="indfont" style="padding-left:5px;overflow:hidden;">
            <font color=#000000 style="font-size: 7pt;font-family:黑体">◆</font>&nbsp;<a href="./show.php?id=<?php echo $row2['id'] ?>" target="_blank"><?php echo mb_substr($row2['title'],0,20,'utf-8') ?></a>
          </td>  
        </tr>
        <?php } ?>
        <tr>
          <td height="5" colspan=10></td>
        </tr>
      </table>
      <!--  中国大陆栏目结束-->

       <!--  中国台湾栏目开始-->
      <table width="98%" border="0" cellpadding="0" cellspacing="0">
        <TR>
          <td bgColor=#fdad00  height=20 width=105>
            <table width="100%" height="22" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td width="1%" valign="top"><img src="http://cnpic.crntt.com/resource/images/pub_102.gif" width="4" height="4"></td>
                <td width="98%" valign="bottom"><img src="http://cnpic.crntt.com/resource/images/dot5.gif" width="22" height="11">&nbsp;<a href="./list.php?type=taiwan"><font color="#000000" style="font-size:16px;font-family:黑体">中国台湾</font></a></td>
                <td width="1%" align="right" valign="top"><img src="http://cnpic.crntt.com/resource/images/pub_103.gif" width="4" height="4"></td>
              </tr>
            </table>
          </td>
            <td align="right">
            <a href="./list.php?type=taiwan"><font color="#990000">更多 &gt;&gt;</font></a>
            </td>
                  </tr>
            <TR><TD bgColor=#fd9500 colSpan=3 height=3></TD></TR>
            <TR><TD  colSpan=3 height=3></TD></TR>
      </table>
      <table width="100%" border="0" cellspacing="1" cellpadding="1">
        <?php for($i=0;$i<9;$i++){ ?>
        <tr>
          <?php $row2 = mysql_fetch_assoc($res3); ?>
          <td  width=50%  class="indfont" style="padding-left:5px;overflow:hidden;">
            <font color=#000000 style="font-size: 7pt;font-family:黑体">◆</font>&nbsp;<a href="./show.php?id=<?php echo $row2['id'] ?>" target="_blank"><?php echo mb_substr($row2['title'],0,20,'utf-8') ?></a>
          </td>
           <?php $row2 = mysql_fetch_assoc($res3); ?>
          <td  width=50%  class="indfont" style="padding-left:5px;overflow:hidden;">
            <font color=#000000 style="font-size: 7pt;font-family:黑体">◆</font>&nbsp;<a href="./show.php?id=<?php echo $row2['id'] ?>" target="_blank"><?php echo mb_substr($row2['title'],0,20,'utf-8') ?></a>
          </td>  
        </tr>
        <?php } ?>
        <tr>
          <td height="5" colspan=10></td>
        </tr>
      </table>
      <!--  中国台湾栏目结束-->

       <!--  中国军情栏目开始-->
      <table width="98%" border="0" cellpadding="0" cellspacing="0">
        <TR>
          <td bgColor=#fdad00  height=20 width=105>
            <table width="100%" height="22" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td width="1%" valign="top"><img src="http://cnpic.crntt.com/resource/images/pub_102.gif" width="4" height="4"></td>
                <td width="98%" valign="bottom"><img src="http://cnpic.crntt.com/resource/images/dot5.gif" width="22" height="11">&nbsp;<a href="./list.php?type=junqing"><font color="#000000" style="font-size:16px;font-family:黑体">军情</font></a></td>
                <td width="1%" align="right" valign="top"><img src="http://cnpic.crntt.com/resource/images/pub_103.gif" width="4" height="4"></td>
              </tr>
            </table>
          </td>
            <td align="right">
            <a href="./list.php?type=junqing"><font color="#990000">更多 &gt;&gt;</font></a>
            </td>
                  </tr>
            <TR><TD bgColor=#fd9500 colSpan=3 height=3></TD></TR>
            <TR><TD  colSpan=3 height=3></TD></TR>
      </table>
      <table width="100%" border="0" cellspacing="1" cellpadding="1">
        <?php for($i=0;$i<9;$i++){ ?>
        <tr>
          <?php $row2 = mysql_fetch_assoc($res4); ?>
          <td  width=50%  class="indfont" style="padding-left:5px;overflow:hidden;">
            <font color=#000000 style="font-size: 7pt;font-family:黑体">◆</font>&nbsp;<a href="./show.php?id=<?php echo $row2['id'] ?>" target="_blank"><?php echo mb_substr($row2['title'],0,20,'utf-8') ?></a>
          </td>
           <?php $row2 = mysql_fetch_assoc($res4); ?>
          <td  width=50%  class="indfont" style="padding-left:5px;overflow:hidden;">
            <font color=#000000 style="font-size: 7pt;font-family:黑体">◆</font>&nbsp;<a href="./show.php?id=<?php echo $row2['id'] ?>" target="_blank"><?php echo mb_substr($row2['title'],0,20,'utf-8') ?></a>
          </td>  
        </tr>
        <?php } ?>
        <tr>
          <td height="5" colspan=10></td>
        </tr>
      </table>
      <!--  中国军情栏目结束-->

       <!--  中国体育栏目开始-->
      <table width="98%" border="0" cellpadding="0" cellspacing="0">
        <TR>
          <td bgColor=#fdad00  height=20 width=105>
            <table width="100%" height="22" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td width="1%" valign="top"><img src="http://cnpic.crntt.com/resource/images/pub_102.gif" width="4" height="4"></td>
                <td width="98%" valign="bottom"><img src="http://cnpic.crntt.com/resource/images/dot5.gif" width="22" height="11">&nbsp;<a href="./list.php?type=tiyu"><font color="#000000" style="font-size:16px;font-family:黑体">中国体育</font></a></td>
                <td width="1%" align="right" valign="top"><img src="http://cnpic.crntt.com/resource/images/pub_103.gif" width="4" height="4"></td>
              </tr>
            </table>
          </td>
            <td align="right">
            <a href="./list.php?type=tiyu"><font color="#990000">更多 &gt;&gt;</font></a>
            </td>
                  </tr>
            <TR><TD bgColor=#fd9500 colSpan=3 height=3></TD></TR>
            <TR><TD  colSpan=3 height=3></TD></TR>
      </table>
      <table width="100%" border="0" cellspacing="1" cellpadding="1">
        <?php for($i=0;$i<9;$i++){ ?>
        <tr>
          <?php $row2 = mysql_fetch_assoc($res5); ?>
          <td  width=50%  class="indfont" style="padding-left:5px;overflow:hidden;">
            <font color=#000000 style="font-size: 7pt;font-family:黑体">◆</font>&nbsp;<a href="./show.php?id=<?php echo $row2['id'] ?>" target="_blank"><?php echo mb_substr($row2['title'],0,20,'utf-8') ?></a>
          </td>
           <?php $row2 = mysql_fetch_assoc($res5); ?>
          <td  width=50%  class="indfont" style="padding-left:5px;overflow:hidden;">
            <font color=#000000 style="font-size: 7pt;font-family:黑体">◆</font>&nbsp;<a href="./show.php?id=<?php echo $row2['id'] ?>" target="_blank"><?php echo mb_substr($row2['title'],0,20,'utf-8') ?></a>
          </td>  
        </tr>
        <?php } ?>
        <tr>
          <td height="5" colspan=10></td>
        </tr>
      </table>
      <!--  中国体育栏目结束-->
    </div>
    
    <div id="column2">

      <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align=center valign=top>
            <?php while($row6 = mysql_fetch_assoc($res6)){ ?>
              <a href="./show.php?id=<?php echo $row6['id'] ?>" target=_blank><img src="<?php echo $row6['pic'] ?>" border=0 width='165' height='70' style="padding-bottom:2px;"></a>
            <?php } ?>
            </td>
          </tr>
         
      </table>
    </div>
</div>
</div>

<?php 
include("./header.php"); 
$pagen = 15;
$type = !empty($_GET['type']) ? $_GET['type'] : '';
$pagen = $type=='toutiao'?15:35;
$cur_page = !empty($_GET['page'])&&is_numeric($_GET['page']) ? $_GET['page'] : 1;
$start = ($cur_page-1)*$pagen;
$res = '';
$pres = '';
if(!empty($type) && $type=='toutiao'){
    $res = mysql_query("select id,title,pic,content from `tg_news` where ctype='{$type}' and is_pic=1 order by ctime desc limit {$start},{$pagen}");
    $pres = mysql_query("select count(id) from `tg_news` where ctype='{$type}' and is_pic=1");
}else{
    $res = mysql_query("select id,title,ctime from `tg_news` where ctype='{$type}' order by ctime desc limit {$start},{$pagen}");
    $pres = mysql_query("select count(id) from `tg_news` where ctype='{$type}'");
}
$pages = mysql_fetch_row($pres);
$pages = ceil($pages[0]/$pagen);
?>
<table width="850" height="300" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr>
        <td width="150" align="center" valign="top" bgcolor="#EFEFEF"> 
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td style="PADDING-TOP: 4px" vAlign=top align=center bgColor=#fdad00  height=20 class=menu>
               <?php echo $ftype[$type] ?>
              </td>
            </tr>
            <TR><TD bgColor=#fd9500 colSpan=3 height=3></TD></TR>
          </table> 
          <table width="100" height="8" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td></td>
            </tr>
          </table>
        </td>
        <td width="1" background="http://cnpic.crntt.com/resource/images/pub_013.gif"></td>
        <td  align="right" valign="top"> <br> 
            <table width="98%" border="0" cellpadding="0" cellspacing="2">
              <tr> 
                <td> 
                  <table width="100%" border="0" cellpadding="0" cellspacing="0" >
                    <tr> 
                      <td height="20" class=menu>【<?php echo $ftype[$type] ?>】</td>
                    </tr>
                    <tr> 
                      <td height="3" align="right" bgcolor="#4FB94F"><img src="http://cnpic.crntt.com/resource/images/pub_024.jpg" width="250" height="3"></td>
                    </tr>
                  </table></td>
              </tr>
            </table>
            <table width="97%" border="0" cellspacing="0" cellpadding="5" >
              <?php while($row=mysql_fetch_assoc($res)){ ?>
              <tr>
                  <?php if(!empty($type) && $type=='toutiao'){ ?>
                  <td width='105' bgcolor='#ffffff'>
               		    <img border='0' src="<?php echo $row['pic'] ?>" width='100' height='75'>
                	</td>
                  <?php } ?>
                  <td valign='top' bgcolor='#ffffff' align='left' width='505'>
                      
                      <?php if(!empty($type) && $type=='toutiao'){ ?>
                      <a href="./show.php?id=<?php echo $row['id'] ?>" target="_blank">
                        <strong><font style="font-size: 14px;" color="#000000"><?php echo $row['title'] ?></font></strong>
                      </a><br>
                      <font style="font-size:14px"><?php echo mb_substr($row['content'],0,100,'utf-8') ?>...</font>
                      <?php }else{ ?>
                          <a href="./show.php?id=<?php echo $row['id'] ?>" target="_blank">
                          <font style="font-size:15px;">.&nbsp;<?php echo $row['title'] ?></font>
                          </a>
                          (<i><?php echo $row['ctime'] ?></i>)
                          <br>

                      <?php } ?>
                  </td>
              </tr>
              <?php } ?>
              <form method="get" action="./list.php">
                <tr>
                    <td colspan=10>
                        共<?php echo $pages.'页，第'.$cur_page.'/'.$pages.'页' ?>&nbsp;&nbsp;
        	              <?php 
                          if($cur_page == 1){
                              echo "首页&nbsp;&nbsp;上一页";
                          }else {
                        ?>
                            <a href="./list.php?type=<?php echo $type; ?>&page=1">首页</a>&nbsp;&nbsp;
                            <a href="./list.php?type=<?php echo $type; ?>&page=<?php echo $cur_page-1; ?>">上一页</a>&nbsp;&nbsp;
                        <?php } ?>
                        <?php if($cur_page == $pages){
                              echo '下一页&nbsp;&nbsp;尾页';
                          }else{
                        ?>
                            <a href="./list.php?type=<?php echo $type; ?>&page=<?php echo $cur_page+1; ?>">下一页</a>&nbsp;&nbsp;
                            <a href="./list.php?type=<?php echo $type; ?>&page=<?php echo $pages; ?>">尾页</a>&nbsp;&nbsp;
                        <?php  } ?>
        	              
        	              跳转至第 
                        <select name='page' >
                          <?php for($i=1;$i<=$pages;$i++){ ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                          <?php } ?>
                        </select>
                        页 
                        <input type="submit" value="go">
                        <input type="hidden" name="type" value="<?php echo $type?>">
                    </td>
                </tr>
              </form>
            </table> 
  		  </td>
    </tr>
</table>  

<?php include("./footer.php"); ?>
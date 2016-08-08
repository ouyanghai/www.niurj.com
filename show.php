<?php 
include("./header.php"); 
$id = !empty($_GET['id']) ? $_GET['id'] : 0;
$res = mysql_query("select * from `tg_news` where id={$id}");
$row = mysql_fetch_array($res);
?>
<!--   淘宝广告弹窗 start -->
<script type="text/javascript" src = "http://www.mjyule.com/skin/js/taobao.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.mjyule.com/skin/taobao.css">
<div id="poster">
    <div class="post-title">
        <span>淘宝热卖商品推荐</span>      
        <a href="javascript:;"></a>
    </div>
    <div>
        <script type="text/javascript" src="http://i.haodianpu.com/detail.php?aid=59&m=300%2A210"></script>  
    </div>
</div>
<!--   淘宝广告弹窗 end -->
<table width="850" height="300" border="0" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
    <tr> 
      <td align="center" valign="top" style="padding-top:15px;">
        <table width="738" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center" colspan=3>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="center" width="96%">
                        <font color="#000000" style="font-size: 22px">
                            <strong><?php echo $row['title'] ?></strong></font>
                        </td>
                      </tr>
                      <tr>
                          <td align="center">
                          <font style="font-size:14px">http://www.niurj.com</font>
                                       &nbsp;&nbsp;<?php echo $row['ctime']; ?>
                          </td>
                      </tr>
                    </table>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" height='200'>
            <?php echo $row['content'] ?>
        <br>
	    </td>
    </tr>
  </table>


<?php include("./footer.php"); ?>
<?php
$command = mysql_connect("23.248.162.241","debug","hdp@5C01") or die("mysql connect error!");
mysql_select_db("web",$command);
mysql_query("set names 'utf8'");
$ftype = array(
	'toutiao'=>'今日头条',
	'jiaodian'=>'今日焦点',
	'dalu'=>'大陆',
	'taiwan'=>'台湾',
	'gangao'=>'港澳动态',
	'guoji'=>'国际动态',
	'liangan'=>'两岸关系',
	'huaren'=>'国外华人',
	'jingji'=>'经济时评',
	'junqing'=>'军事新闻',
	'tiyu'=>'体育纵览',
	'shehui'=>'社会百态',
);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>中国评论新闻</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="http://bj.crntt.com/resource/css/main.css" rel="stylesheet" type="text/css">
<link rel="alternate" type="application/rss+xml" title="中评网-中评电讯" href="http://bj.crntt.com/crn-webapp/rss/rss_msg.jsp?coluid=7&kindid=0&v=rss_2.0" />
<link rel="icon" href="http://bj.crntt.com/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="http://bj.crntt.com/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="./css/niu.css">
<script type="text/javascript" src="http://www.mjyule.com/ks_inc/jquery.js"></script>
</head>

<body>

<div align="center">
﻿	<table width="850" height="105" border="0" cellpadding="0" cellspacing="0" 
		background="./css/logo.png">
      	<tr> 
	        <td align="right" valign="top"> 
	        	<table width="778" height="23" border="0" cellpadding="0" cellspacing="0">
		            <tr> 
		            	<td width="300" align="left" style="padding-top:2px;" nowrap></td>
		            	<td width="468" align="right" style="padding-right:10px;">
		              	</td>
		            </tr>
	            </table>
	          	<table width="100" height="11" border="0" cellpadding="0" cellspacing="0">
		            <tr>
		              <td></td>
		            </tr>
	          	</table> 
	          	<table width="460" height="60" border="0" cellpadding="0" cellspacing="0">
	            	<tr>
	            		<td rowspan="2">
	            			<a href="./index.php" class="linkTopNav">首页</a>
	            		</td>
	              		<td class="line150" align="left" style="padding-right:10px;">
							<a href="./list.php?type=toutiao" target="_blank" title="今日头条" class="linkTopNav">头条</a>|
							<a href="./list.php?type=jiaodian" target="_blank" title="今日焦点" class="linkTopNav">焦点</a>|
							<a href="./list.php?type=dalu" target="_blank" title="大陆新闻" class="linkTopNav">大陆</a>|
							<a href="./list.php?type=taiwan" target="_blank" title="台湾时政" class="linkTopNav">台湾</a>|
							<a href="./list.php?type=gangao" target="_blank" title="港澳新闻" class="linkTopNav">港澳</a>|
							<a href="./list.php?type=guoji" target="_blank" title="国际时事" class="linkTopNav">国际</a><br/>
							
						</td>
	            	</tr>
	            	<tr>
	            		<td>
							<a href="./list.php?type=liangan" target="_blank" title="两岸专区" class="linkTopNav">两岸</a>|
							<a href="./list.php?type=huaren" target="_blank" title="华人网络" class="linkTopNav">华人</a>|
							<a href="./list.php?type=jingji" target="_blank" title="经济时评" class="linkTopNav">经济</a>|
							<a href="./list.php?type=junqing" target="_blank" title="军情聚焦" class="linkTopNav">军情</a>|
							<a href="./list.php?type=tiyu" target="_blank" title="体育纵览" class="linkTopNav">体育</a>|
							<a href="./list.php?type=shehui" target="_blank" title="社会百态" class="linkTopNav">社会</a><br/>
						</td>
	            	</tr>
	          	</table>
	        </td>
      	</tr>
    </table>

	<table width="850" height="25" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    	<tr>
      		<td valign="bottom">
      			<table width="100%" border="0" cellspacing="3" cellpadding="0">
          			<tr> 
            			<td width="19%">&nbsp;&nbsp;
							<font color="#666666">
							<script language="JavaScript">
								<!--
								tmpDate = new Date();
								date = tmpDate.getDate();
								month= tmpDate.getMonth() + 1 ;
								year= tmpDate.getFullYear();
								document.write(year);
								document.write("年");
								document.write(month);
								document.write("月");
								document.write(date);
								document.write("日 ");
								myArray=new Array(6);
								myArray[0]="星期日"
								myArray[1]="星期一"
								myArray[2]="星期二"
								myArray[3]="星期三"
								myArray[4]="星期四"
								myArray[5]="星期五"
								myArray[6]="星期六"
								weekday=tmpDate.getDay();
								if (weekday==0 | weekday==6)
								{
								document.write(myArray[weekday])
								}
								else
								{
								document.write(myArray[weekday])
								};


								function getDomain()
								{
									var url = location.href;
									return url.substring(0, url.indexOf(".com") + 4);
								}

								function getDomainStr1()
								{
									var domain = getDomain();
									if(domain.indexOf("http://bj.") == 0)
									{
										return "大陆简体";
									}
									else if(domain.indexOf("http://hk.") == 0)
									{
										return "中文繁体";
									}
									else if(domain.indexOf("http://gb.") == 0)
									{
										return "海外简体";
									}
									else
									{
										return "中文";
									}
								}

								function getDomainStr2()
								{
									var domain = getDomain();
									if(domain.indexOf("http://bj.") == 0)
									{
										return "加入收藏";
									}
									else if(domain.indexOf("http://hk.") == 0)
									{
										return "加入最爱";
									}
									else if(domain.indexOf("http://gb.") == 0)
									{
										return "加入最爱";
									} 
									else
									{
										return "加入收藏";
									}
								}


								///////////////////////////////////////////////////////////////////
								
								// -->
							</script>
							</font>
						</td> 
         			</tr>
        		</table>
        	</td>
    	</tr>
  	</table>
  	<table width="778" height="1" border="0" cellpadding="0" cellspacing="0" background="http://cnpic.crntt.com/resource/images/pub_012.gif">
	    <tr>
	      <td></td>
	    </tr>
  	</table>

<?php
include('include.php');
$conn = connect();
$id = $_COOKIE['id'];
$sql = "select * from info where id = '$id'";
$ret = query($conn, $sql);
$row = mysqli_fetch_array($ret);
$build = $row['build'];
$area = $row['area'];
$dorm = $row['dorm'];
echo"
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'><head>
<title>喻家山订水系统</title> 
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<script type='text/javascript' src='js/jquery-1.9.0.min.js'></script>
<script src='http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js'></script>
<script type='text/javascript' src='js/login.js'></script>
<link href='css/login2.css' rel='stylesheet' type='text/css' />
</head>
<body>
<h1>瑜伽山泉登录系统<sup>V2017</sup></h1>
<div class='login' style='margin-top:50px;'>
";

echo"
<div class='header'>
        <div class='switch' id='switch'><a class='switch_btn_focus' id='switch_qlogin' href='javascript:void(0);' tabindex='7'>快速订水</a>
			<a class='switch_btn' id='switch_login' href='javascript:void(0);' tabindex='8'>地址修改</a>
			<div class='switch_bottom' id='switch_bottom' style='position: absolute; width: 64px; left: 0px;'></div>
        </div>
    </div> 
	
<div class='web_qr_login' id='web_qr_login' style='display: block; height: 235px;'>    
            <!--快速订水-->
            <div class='web_login' id='web_login'>
               
               
               <div class='login-box'>
    
            
			<div class='login_form'>
				<form action='order.php' name='orderform' accept-charset='utf-8' id='order_form' class='loginForm' method='post'><input type='hidden' name='did' value='0'/>
               <input type='hidden' name='to' value='log'/>
                <div class='uinArea' id='uinArea'>
                <label class='input-tips' for='u'>桶数：</label>
                <div class='inputOuter' id='uArea'>
                    <input type='number' id='cnt' name='cnt' class='inputstyle' required='required' min='1' max='10'/>
                </div>
                </div>
				
                <div class='pwdArea' id='pwdArea'>
               <label class='input-tips' for='p'>支付：</label> 
               <div class='inputOuter' id='pArea'>
                    <input type='radio' name='paytype' value='0' style='margin-top:6%;'>支付宝
					<input type='radio' name='paytype' value='1' checked>现金
                </div>
                </div>
               
                <div style='padding-left:50px;margin-top:20px;'><input type='submit' value='下 单' style='width:150px;' class='button_blue'/></div>
              </form>
           </div>
           
            	</div>
               
            </div>
            <!--快速订水end-->
  </div>
";
echo"
	<!--修改地址-->
	<div class='qlogin' id='qlogin' style='display: none;'>
	<div class='web_login' >
        <div class='login_form'>
				<form action='saveaddr.php' name='addrform' accept-charset='utf-8' id='addr_form' class='loginForm' method='post'><input type='hidden' name='did' value='0'/>
               <input type='hidden' name='to' value='log'/>		
				<input type='hidden' name='to' value='reg'/>
        <input type='hidden' name='did' value='0'/>
		<ul class='reg_form' id='reg-ul'>
";

echo"
<script language=\"javascript\" type=\"text/javascript\">  
function afterText(){

	var txt2=$(\"<select id='mySelect2'><option value='11'>one</option>  <option value='22' selected='selected'>two</option> <option value='33'>three</option>  </select>\");     // Ê¹ÓÃ jQuery ŽŽœšÔªËØ
	var txt3=document.createElement(\"big\");  
	txt3.innerHTML=\"jQuery!\";
	$('#befor_build').after(txt2);         
}

function addDong() {
    var txt=$(\" <li id='cur_build'>    \" + 
               \" <label for='addr' class='input-tips2'>楼栋号：</label>  \" + 
               \" <div class='inputOuter2'>\" +                
               \" <select type='text' id='build' name='build' maxlength='16' class='inputstyle2'>\" + 
               \"     <option value='东八舍'>东八舍</option>\" + 
               \"     <option value='东二舍'>东二舍</option>\" + 
               \"     <option value='东六舍'>东六舍</option>\" + 
               \"     <option value='东七舍'>东七舍</option>\" + 
               \"     <option value='东三舍'>东三舍</option>\" + 
               \"     <option value='东四舍'>东四舍</option>\" + 
               \"     <option value='东五舍'>东五舍</option>\" + 
               \"     <option value='东一舍'>东一舍</option>\" + 
               \"     <option value='附中主楼'>附中主楼</option>\" + 
               \"     <option value='教八舍'>教八舍</option>\" + 
               \"     <option value='教七舍'>教七舍</option>\" + 
               \"     <option value='南二舍'>南二舍</option>\" + 
               \"     <option value='南三舍'>南三舍</option>\" + 
               \"     <option value='南一舍'>南一舍</option>\" + 
               \"     <option value='沁苑东九舍'>沁苑东九舍</option>\" + 
               \"     <option value='沁苑东十二舍'>沁苑东十二舍</option>\" + 
               \"     <option value='沁苑东十三舍'>沁苑东十三舍</option>\" + 
               \"     <option value='沁苑东十舍'>沁苑东十舍</option>\" + 
               \"     <option value='沁苑东十一舍' selected='selected'>沁苑东十一舍</option>\" + 
               \" </select>\" + 
               \" </div>\" + 
               \" </li>\");
    $('#befor_build').after(txt);
}


function addLiu() {
    var txt=$(\" <li id='cur_build'> \" +
               \" <label for='addr' class='input-tips2'>楼栋号：</label> \" +
                \"<div class='inputOuter2'>               \" +
                \"<select type='text' id='build' name='build' maxlength='16' class='inputstyle2'> \" + 
                 \"   <option>友谊公寓</option> \" +
                \"</select> \" +
                \"</div> \" +
                \"</li>\");
    $('#befor_build').after(txt);
}

function addXi() {
    var txt=$(\" <li id='cur_build'>    \" + 
               \" <label for='addr' class='input-tips2'>楼栋号：</label>  \" + 
               \" <div class='inputOuter2'>\" +                
               \" <select type='text' id='build' name='build' maxlength='16' class='inputstyle2'>\" + 
               \"     <option value='西八舍'>西八舍</option> \" + 
               \"     <option value='西二舍'>西二舍</option> \" + 
               \"     <option value='西九舍'>西九舍</option> \" + 
               \"     <option value='西六舍'>西六舍</option> \" + 
               \"     <option value='西七舍'>西七舍</option> \" + 
               \"     <option value='西三舍'>西三舍</option> \" + 
               \"     <option value='西十二舍'>西十二舍</option> \" + 
               \"     <option value='西十六舍'>西十六舍</option>\" + 
               \"     <option value='西十七舍'>西十七舍</option> \" + 
               \"     <option value='西十三舍'>西十三舍</option>\" + 
               \"     <option value='西十四舍'>西十四舍</option>\" + 
               \"     <option value='西十五舍'>西十五舍</option>\" + 
               \"     <option value='西十一舍'>西十一舍</option>\" + 
               \"     <option value='西四舍'>西四舍</option>\" + 
               \"     <option value='西五舍'>西五舍</option>\" + 
               \"     <option value='西一舍'>西一舍</option>\" + 
               \" </select>\" + 
               \" </div>\" + 
               \" </li>\");
    $('#befor_build').after(txt);
}

function addYun1() {
    var txt=$(\" <li id='cur_build'>    \" + 
               \" <label for='addr' class='input-tips2'>楼栋号：</label>  \" + 
               \" <div class='inputOuter2'>\" +                
               \" <select type='text' id='build' name='build' maxlength='16' class='inputstyle2'>\" + 
               \"     <option value='韵苑13栋'>韵苑13栋</option>\" +
               \"     <option value='韵苑14栋'>韵苑14栋</option>\" +
               \"     <option value='韵苑15栋'>韵苑15栋</option>\" +
               \"     <option value='韵苑16栋'>韵苑16栋</option>\" +
               \"     <option value='韵苑17栋'>韵苑17栋</option>\" +
               \"     <option value='韵苑18栋'>韵苑18栋</option>\" +
               \"     <option value='韵苑19栋'>韵苑19栋</option>\" +
               \"     <option value='韵苑20栋'>韵苑20栋</option>\" +
               \"     <option value='韵苑21栋'>韵苑21栋</option>\" +
               \"     <option value='韵苑22栋'>韵苑22栋</option>\" +
               \"     <option value='韵苑23栋'>韵苑23栋</option>\" +
               \"     <option value='韵苑24栋'>韵苑24栋</option>\" +
               \"     <option value='韵苑25栋'>韵苑25栋</option>\" +
               \"     <option value='韵苑26栋'>韵苑26栋</option>\" +
               \" </select>\" + 
               \" </div>\" + 
               \" </li>\");
    $('#befor_build').after(txt);
}

function addYun2() {
    var txt=$(\" <li id='cur_build'>    \" + 
               \" <label for='addr' class='input-tips2'>楼栋号：</label>  \" + 
               \" <div class='inputOuter2'>\" +                
               \" <select type='text' id='build' name='build' maxlength='16' class='inputstyle2'>\" + 
               \"     <option value='学苑楼'>学苑楼</option>\" + 
               \"     <option value='韵苑10栋'>韵苑10栋</option>\" + 
               \"     <option value='韵苑11栋'>韵苑11栋</option>\" + 
               \"     <option value='韵苑12栋'>韵苑12栋</option>\" + 
               \"     <option value='韵苑1栋'>韵苑1栋</option>\" + 
               \"     <option value='韵苑27栋'>韵苑27栋</option>\" + 
               \"     <option value='韵苑2栋'>韵苑2栋</option>\" + 
               \"     <option value='韵苑3栋'>韵苑3栋</option>\" + 
               \"     <option value='韵苑4栋'>韵苑4栋</option>\" + 
               \"     <option value='韵苑5栋'>韵苑5栋</option>\" + 
               \"     <option value='韵苑6栋'>韵苑6栋</option>\" + 
               \"     <option value='韵苑7栋'>韵苑7栋</option>\" + 
               \"     <option value='韵苑8栋'>韵苑8栋</option>\" + 
               \"     <option value='韵苑9栋'>韵苑9栋</option>\" + 
               \" </select>\" + 
               \" </div>\" + 
               \" </li>\");
    $('#befor_build').after(txt);
}

function addZi() {
    var txt=$(\" <li id='cur_build'>    \" + 
               \" <label for='addr' class='input-tips2'>楼栋号：</label>  \" + 
               \" <div class='inputOuter2'>\" +                
               \" <select type='text' id='build' name='build' maxlength='16' class='inputstyle2'>\" + 
               \"     <option value='紫菘10栋'>紫菘10栋</option> \" +
               \"     <option value='紫菘11栋'>紫菘11栋</option> \" +
               \"     <option value='紫菘12栋'>紫菘12栋</option> \" +
               \"     <option value='紫菘13栋'>紫菘13栋</option> \" +
               \"     <option value='紫菘14栋'>紫菘14栋</option> \" +
               \"     <option value='紫菘1栋'>紫菘1栋</option> \" +
               \"     <option value='紫菘2栋'>紫菘2栋</option> \" +
               \"     <option value='紫菘3栋'>紫菘3栋</option> \" +
               \"     <option value='紫菘4栋'>紫菘4栋</option> \" +
               \"     <option value='紫菘5栋'>紫菘5栋</option> \" +
               \"     <option value='紫菘6栋'>紫菘6栋</option> \" +
               \"     <option value='紫菘7栋'>紫菘7栋</option> \" +
               \"     <option value='紫菘8栋'>紫菘8栋</option> \" +
               \"     <option value='紫菘9栋'>紫菘9栋</option> \" +
               \" </select>\" + 
               \" </div>\" + 
               \" </li>\");
    $('#befor_build').after(txt);
}


$(document).ready(function(){  
    $('#area').change(function(){  
        // alert($(this).children('option:selected').val());  
        $('#cur_build').remove();

        if ($(this).children('option:selected').val() == \"东区\") {
            addDong();
        } else if ($(this).children('option:selected').val() == \"留学生公寓\") { 
            addLiu();
        } else if ($(this).children('option:selected').val() == \"西区\") {
            addXi();
        } else if ($(this).children('option:selected').val() == \"韵苑二期\") {
            addYun1();
        } else if ($(this).children('option:selected').val() == \"韵苑一期\") {
            addYun2();
        } else if ($(this).children('option:selected').val() == \"紫崧\") {
            addZi();
        } else {
            addDong();
        }
    });
	$('#area').val('{$area}');
	$('#cur_build').remove();
	if ('$area' == \"东区\") {
		addDong();
	} else if ('$area' == \"留学生公寓\") { 
		addLiu();
	} else if ('$area' == \"西区\") {
		addXi();
	} else if ('$area' == \"韵苑二期\") {
		addYun1();
	} else if ('$area' == \"韵苑一期\") {
		addYun2();
	} else if ('$area' == \"紫崧\") {
		addZi();
	} else {
		addDong();
	}
	$('#build').val('{$build}');
})  


</script> 

";


echo"
                
                <li id='befor_build'>
                 <label for='area' class='input-tips2'>楼栋区域：</label>
                    <div class='inputOuter2'>
                    <select type='text' id='area' name='area' maxlength='16'  class='inputstyle2'>
                        <option value='东区' >东区</option>
                        <option value='留学生公寓'>留学生公寓</option>
                        <option value='西区'>西区</option>
                        <option value='韵苑二期'>韵苑二期</option>
                        <option value='韵苑一期'>韵苑一期</option>
                        <option value='紫崧'>紫崧</option>
                    </select>
                        <!-- input type='text' id='addr' name='addr' maxlength='10' class='inputstyle2' required='required'-->
                    </div>
                   
                </li>


                <li id='cur_build'>    
                <label for='addr' class='input-tips2'>楼栋号：</label>  
                <div class='inputOuter2'>               
                <select type='text' id='build' name='build' maxlength='16' class='inputstyle2'>
                    <option value='东八舍'>东八舍</option>
                    <option value='东二舍'>东二舍</option>
                    <option value='东六舍'>东六舍</option>
                    <option value='东七舍'>东七舍</option>
                    <option value='东三舍'>东三舍</option>
                    <option value='东四舍'>东四舍</option>
                    <option value='东五舍'>东五舍</option>
                    <option value='东一舍'>东一舍</option>
                    <option value='附中主楼'>附中主楼</option>
                    <option value='教八舍'>教八舍</option>
                    <option value='教七舍'>教七舍</option>
                    <option value='南二舍'>南二舍</option>
                    <option value='南三舍'>南三舍</option>
                    <option value='南一舍'>南一舍</option>
                    <option value='沁苑东九舍'>沁苑东九舍</option>
                    <option value='沁苑东十二舍'>沁苑东十二舍</option>
                    <option value='沁苑东十三舍'>沁苑东十三舍</option>
                    <option value='沁苑东十舍'>沁苑东十舍</option>
                    <option value='沁苑东十一舍' selected='selected'>沁苑东十一舍</option>
                    <!-- option selected='selected' value='-1'>-请选择-</option -->
                </select>
                </div>
                </li>


				<li>
                 <label for='addr' class='input-tips2'>宿舍号：</label>
                    <div class='inputOuter2'>
                        <input type='text' id='dorm' name='dorm' maxlength='10' class='inputstyle2' required='required' value='$dorm'-->
                    </div>
                   
                </li>
				
				<li>
                    <div class='inputArea'>
                    <input type='submit' value='保存地址' style='margin-top:10px;margin-left:85px;' class='button_blue'/>
                    </div>             
                </li><div class='cl'></div>
            </ul></form>

";



echo"               
        </div>      
    </div>
    </div>
    <!--修改地址end-->
";
echo "				
				</div>
			</div>
        </div>   
	</div>
";
    
	
	
echo"   
</div>
<div class='jianyi'>*推荐使用ie8或以上版本ie浏览器或Chrome内核浏览器访问本站</div>
</body></html>
";
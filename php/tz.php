<!--?php

error_reporting(0); //抑制所有错误信息
@header("content-Type: text/html; charset=utf-8"); //语言强制
ob_start();
date_default_timezone_set('Asia/Shanghai');//此句用于消除时间差
$title = 'PHP探针';
$version = "v0.4.7"; //版本号
define('HTTP_HOST', preg_replace('~^www\.~i', '', $_SERVER['HTTP_HOST']));
$time_start = microtime_float();
function memory_usage() 
{
	$memory	 = ( ! function_exists('memory_get_usage')) ? '0' : round(memory_get_usage()/1024/1024, 2).'MB';
	return $memory;
}
// 计时

function microtime_float() 
{

	$mtime = microtime();

	$mtime = explode(' ', $mtime);

	return $mtime[1] + $mtime[0];

}


//单位转换
function formatsize($size) 
{
	$danwei=array(' B ',' K ',' M ',' G ',' T ');
	$allsize=array();
	$i=0;

	for($i = 0; $i <5; $i++) 
	{
		if(floor($size/pow(1024,$i))==0){break;}
	}

	for($l = $i-1; $l -->
<html xmlns="http://www.w3.org/1999/xhtml">
 <head></head>
 <body>
  =0; $l--) { $allsize1[$l]=floor($size/pow(1024,$l)); $allsize[$l]=$allsize1[$l]-$allsize1[$l+1]*1024; } $len=count($allsize); for($j = $len-1; $j &gt;=0; $j--) { $fsize=$fsize.$allsize[$j].$danwei[$j]; } return $fsize; } function valid_email($str) { return ( ! preg_match(&quot;/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix&quot;, $str)) ? FALSE : TRUE; } //检测PHP设置参数 function show($varName) { switch($result = get_cfg_var($varName)) { case 0: return '
  <font color="red"><i class="fa fa-times"></i></font>'; break; case 1: return '
  <font color="green"><i class="fa fa-check"></i></font>'; break; default: return $result; break; } } //保留服务器性能测试结果 $valInt = isset($_POST['pInt']) ? $_POST['pInt'] : &quot;未测试&quot;; $valFloat = isset($_POST['pFloat']) ? $_POST['pFloat'] : &quot;未测试&quot;; $valIo = isset($_POST['pIo']) ? $_POST['pIo'] : &quot;未测试&quot;; if ($_GET['act'] == &quot;phpinfo&quot;) { phpinfo(); exit(); } elseif($_POST['act'] == &quot;整型测试&quot;) { $valInt = test_int(); } elseif($_POST['act'] == &quot;浮点测试&quot;) { $valFloat = test_float(); } elseif($_POST['act'] == &quot;IO测试&quot;) { $valIo = test_io(); } //网速测试-开始 elseif($_POST['act']==&quot;开始测试&quot;) { ?&gt; 
  <script language="javascript" type="text/javascript">
		var acd1;
		acd1 = new Date();
		acd1ok=acd1.getTime();
	</script> 
  <!--?php
	for($i=1;$i<=204800;$i++)
	{
		echo "<!--34567890#########0#########0#########0#########0#########0#########0#########0#########012345---->&quot;; } ?&gt; 
  <script language="javascript" type="text/javascript">
		var acd2;
		acd2 = new Date();
		acd2ok=acd2.getTime();
		window.location = '?speed=' +(acd2ok-acd1ok)+'#w_networkspeed';
	</script> 
  <!--?php
}
//网速测试-结束
elseif($_GET['act'] == "Function")
{
	$arr = get_defined_functions();
	Function php()
	{
	}
	echo "<pre-->&quot;; Echo &quot;这里显示系统所支持的所有函数,和自定义函数\n&quot;; print_r($arr); echo &quot;&quot;; exit(); }elseif($_GET['act'] == &quot;disable_functions&quot;) { $disFuns=get_cfg_var(&quot;disable_functions&quot;); if(empty($disFuns)) { $arr = '
  <font color="red"><i class="fa fa-times"></i></font>'; } else { $arr = $disFuns; } Function php() { } echo &quot;
  <pre>&quot;;
	Echo &quot;这里显示系统被禁用的函数\n&quot;;
	print_r($arr);
	echo &quot;</pre>&quot;; exit(); } //MySQL检测 if ($_POST['act'] == 'MySQL检测') { $host = isset($_POST['host']) ? trim($_POST['host']) : ''; $port = isset($_POST['port']) ? (int) $_POST['port'] : ''; $login = isset($_POST['login']) ? trim($_POST['login']) : ''; $password = isset($_POST['password']) ? trim($_POST['password']) : ''; $host = preg_match('~[^a-z0-9\-\.]+~i', $host) ? '' : $host; $port = intval($port) ? intval($port) : ''; $login = preg_match('~[^a-z0-9\_\-]+~i', $login) ? '' : htmlspecialchars($login); $password = is_string($password) ? htmlspecialchars($password) : ''; } elseif ($_POST['act'] == '函数检测') { $funRe = &quot;函数&quot;.$_POST['funName'].&quot;支持状况检测结果：&quot;.isfun1($_POST['funName']); } elseif ($_POST['act'] == '邮件检测') { $mailRe = &quot;邮件发送检测结果：发送&quot;; if($_SERVER['SERVER_PORT']==80){$mailContent = &quot;http://&quot;.$_SERVER['SERVER_NAME'].($_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME']);} else{$mailContent = &quot;http://&quot;.$_SERVER['SERVER_NAME'].&quot;:&quot;.$_SERVER['SERVER_PORT'].($_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME']);} $mailRe .= (false !== @mail($_POST[&quot;mailAdd&quot;], $mailContent, &quot;This is a test mail!&quot;)) ? &quot;完成&quot;:&quot;失败&quot;; } //网络速度测试 if(isset($_POST['speed'])) { $speed=round(100/($_POST['speed']/2048),2); } elseif($_GET['speed']==&quot;0&quot;) { $speed=6666.67; } elseif(isset($_GET['speed']) and $_GET['speed']&gt;0) { $speed=round(100/($_GET['speed']/2048),2); //下载速度：$speed kb/s } else { $speed=&quot;
  <font color="\&quot;red\&quot;">&nbsp;未探测&nbsp;</font>&quot;; } // 检测函数支持 function isfun($funName = '') { if (!$funName || trim($funName) == '' || preg_match('~[^a-z0-9\_]+~i', $funName, $tmp)) return '错误'; return (false !== function_exists($funName)) ? '
  <font color="green"><i class="fa fa-check"></i></font>' : '
  <font color="red"><i class="fa fa-times"></i></font>'; } function isfun1($funName = '') { if (!$funName || trim($funName) == '' || preg_match('~[^a-z0-9\_]+~i', $funName, $tmp)) return '错误'; return (false !== function_exists($funName)) ? '
  <i class="fa fa-check"></i>' : '
  <i class="fa fa-times"></i>'; } //整数运算能力测试 function test_int() { $timeStart = gettimeofday(); for($i = 0; $i &lt; 3000000; $i++) { $t = 1+1; } $timeEnd = gettimeofday(); $time = ($timeEnd[&quot;usec&quot;]-$timeStart[&quot;usec&quot;])/1000000+$timeEnd[&quot;sec&quot;]-$timeStart[&quot;sec&quot;]; $time = round($time, 3).&quot;秒&quot;; return $time; } //浮点运算能力测试 function test_float() { //得到圆周率值 $t = pi(); $timeStart = gettimeofday(); for($i = 0; $i &lt; 3000000; $i++) { //开平方 sqrt($t); } $timeEnd = gettimeofday(); $time = ($timeEnd[&quot;usec&quot;]-$timeStart[&quot;usec&quot;])/1000000+$timeEnd[&quot;sec&quot;]-$timeStart[&quot;sec&quot;]; $time = round($time, 3).&quot;秒&quot;; return $time; } //IO能力测试 function test_io() { $fp = @fopen(PHPSELF, &quot;r&quot;); $timeStart = gettimeofday(); for($i = 0; $i &lt; 10000; $i++) { @fread($fp, 10240); @rewind($fp); } $timeEnd = gettimeofday(); @fclose($fp); $time = ($timeEnd[&quot;usec&quot;]-$timeStart[&quot;usec&quot;])/1000000+$timeEnd[&quot;sec&quot;]-$timeStart[&quot;sec&quot;]; $time = round($time, 3).&quot;秒&quot;; return($time); } function GetCoreInformation() {$data = file('/proc/stat');$cores = array();foreach( $data as $line ) {if( preg_match('/^cpu[0-9]/', $line) ){$info = explode(' ', $line);$cores[]=array('user'=&gt;$info[1],'nice'=&gt;$info[2],'sys' =&gt; $info[3],'idle'=&gt;$info[4],'iowait'=&gt;$info[5],'irq' =&gt; $info[6],'softirq' =&gt; $info[7]);}}return $cores;} function GetCpuPercentages($stat1, $stat2) {if(count($stat1)!==count($stat2)){return;}$cpus=array();for( $i = 0, $l = count($stat1); $i &lt; $l; $i++) { $dif = array(); $dif['user'] = $stat2[$i]['user'] - $stat1[$i]['user'];$dif['nice'] = $stat2[$i]['nice'] - $stat1[$i]['nice']; $dif['sys'] = $stat2[$i]['sys'] - $stat1[$i]['sys'];$dif['idle'] = $stat2[$i]['idle'] - $stat1[$i]['idle'];$dif['iowait'] = $stat2[$i]['iowait'] - $stat1[$i]['iowait'];$dif['irq'] = $stat2[$i]['irq'] - $stat1[$i]['irq'];$dif['softirq'] = $stat2[$i]['softirq'] - $stat1[$i]['softirq'];$total = array_sum($dif);$cpu = array();foreach($dif as $x=&gt;$y) $cpu[$x] = round($y / $total * 100, 2);$cpus['cpu' . $i] = $cpu;}return $cpus;} $stat1 = GetCoreInformation();sleep(1);$stat2 = GetCoreInformation();$data = GetCpuPercentages($stat1, $stat2); $cpu_show = $data['cpu0']['user'].&quot;%us, &quot;.$data['cpu0']['sys'].&quot;%sy, &quot;.$data['cpu0']['nice'].&quot;%ni, &quot;.$data['cpu0']['idle'].&quot;%id, &quot;.$data['cpu0']['iowait'].&quot;%wa, &quot;.$data['cpu0']['irq'].&quot;%irq, &quot;.$data['cpu0']['softirq'].&quot;%softirq&quot;; function makeImageUrl($title, $data) {$api='http://api.yahei.net/tz/cpu_show.php?id=';$url.=$data['user'].',';$url.=$data['nice'].',';$url.=$data['sys'].',';$url.=$data['idle'].',';$url.=$data['iowait'];$url.='&amp;chdl=User|Nice|Sys|Idle|Iowait&amp;chdlp=b&amp;chl=';$url.=$data['user'].'%25|';$url.=$data['nice'].'%25|';$url.=$data['sys'].'%25|';$url.=$data['idle'].'%25|';$url.=$data['iowait'].'%25';$url.='&amp;chtt=Core+'.$title;return $api.base64_encode($url);} if($_GET['act'] == &quot;cpu_percentage&quot;){echo &quot;
  <center>
   <b><font face="Microsoft YaHei" color="#666666" size="3">图片加载慢，请耐心等待！</font></b>
   <br />
   <br />&quot;;foreach( $data as $k =&gt; $v ) {echo '
   <img src="' . makeImageUrl( $k, $v ) . '" style="width:360px;height:240px;border: #CCCCCC 1px solid;background: #FFFFFF;margin:5px;padding:5px;" />';}echo &quot;
  </center>&quot;;exit();} // 根据不同系统取得CPU相关信息 switch(PHP_OS) { case &quot;Linux&quot;: $sysReShow = (false !== ($sysInfo = sys_linux()))?&quot;show&quot;:&quot;none&quot;; break; case &quot;FreeBSD&quot;: $sysReShow = (false !== ($sysInfo = sys_freebsd()))?&quot;show&quot;:&quot;none&quot;; break; /* case &quot;WINNT&quot;: $sysReShow = (false !== ($sysInfo = sys_windows()))?&quot;show&quot;:&quot;none&quot;; break; */ default: break; } //linux系统探测 function sys_linux() { // CPU if (false === ($str = @file(&quot;/proc/cpuinfo&quot;))) return false; $str = implode(&quot;&quot;, $str); @preg_match_all(&quot;/model\s+name\s{0,}\:+\s{0,}([\w\s\)\(\@.-]+)([\r\n]+)/s&quot;, $str, $model); @preg_match_all(&quot;/cpu\s+MHz\s{0,}\:+\s{0,}([\d\.]+)[\r\n]+/&quot;, $str, $mhz); @preg_match_all(&quot;/cache\s+size\s{0,}\:+\s{0,}([\d\.]+\s{0,}[A-Z]+[\r\n]+)/&quot;, $str, $cache); @preg_match_all(&quot;/bogomips\s{0,}\:+\s{0,}([\d\.]+)[\r\n]+/&quot;, $str, $bogomips); if (false !== is_array($model[1])) { $res['cpu']['num'] = sizeof($model[1]); /* for($i = 0; $i &lt; $res['cpu']['num']; $i++) { $res['cpu']['model'][] = $model[1][$i].'&nbsp;('.$mhz[1][$i].')'; $res['cpu']['mhz'][] = $mhz[1][$i]; $res['cpu']['cache'][] = $cache[1][$i]; $res['cpu']['bogomips'][] = $bogomips[1][$i]; }*/ if($res['cpu']['num']==1) $x1 = ''; else $x1 = ' x'.$res['cpu']['num']; $mhz[1][0] = ' | 频率:'.$mhz[1][0]; $cache[1][0] = ' | 二级缓存:'.$cache[1][0]; $bogomips[1][0] = ' | Bogomips:'.$bogomips[1][0]; $res['cpu']['model'][] = $model[1][0].$mhz[1][0].$cache[1][0].$bogomips[1][0].$x1; if (false !== is_array($res['cpu']['model'])) $res['cpu']['model'] = implode(&quot;
  <br />&quot;, $res['cpu']['model']); if (false !== is_array($res['cpu']['mhz'])) $res['cpu']['mhz'] = implode(&quot;
  <br />&quot;, $res['cpu']['mhz']); if (false !== is_array($res['cpu']['cache'])) $res['cpu']['cache'] = implode(&quot;
  <br />&quot;, $res['cpu']['cache']); if (false !== is_array($res['cpu']['bogomips'])) $res['cpu']['bogomips'] = implode(&quot;
  <br />&quot;, $res['cpu']['bogomips']); } // NETWORK // UPTIME if (false === ($str = @file(&quot;/proc/uptime&quot;))) return false; $str = explode(&quot; &quot;, implode(&quot;&quot;, $str)); $str = trim($str[0]); $min = $str / 60; $hours = $min / 60; $days = floor($hours / 24); $hours = floor($hours - ($days * 24)); $min = floor($min - ($days * 60 * 24) - ($hours * 60)); if ($days !== 0) $res['uptime'] = $days.&quot;天&quot;; if ($hours !== 0) $res['uptime'] .= $hours.&quot;小时&quot;; $res['uptime'] .= $min.&quot;分钟&quot;; // MEMORY if (false === ($str = @file(&quot;/proc/meminfo&quot;))) return false; $str = implode(&quot;&quot;, $str); preg_match_all(&quot;/MemTotal\s{0,}\:+\s{0,}([\d\.]+).+?MemFree\s{0,}\:+\s{0,}([\d\.]+).+?Cached\s{0,}\:+\s{0,}([\d\.]+).+?SwapTotal\s{0,}\:+\s{0,}([\d\.]+).+?SwapFree\s{0,}\:+\s{0,}([\d\.]+)/s&quot;, $str, $buf); preg_match_all(&quot;/Buffers\s{0,}\:+\s{0,}([\d\.]+)/s&quot;, $str, $buffers); $res['memTotal'] = round($buf[1][0]/1024, 2); $res['memFree'] = round($buf[2][0]/1024, 2); $res['memBuffers'] = round($buffers[1][0]/1024, 2); $res['memCached'] = round($buf[3][0]/1024, 2); $res['memUsed'] = $res['memTotal']-$res['memFree']; $res['memPercent'] = (floatval($res['memTotal'])!=0)?round($res['memUsed']/$res['memTotal']*100,2):0; $res['memRealUsed'] = $res['memTotal'] - $res['memFree'] - $res['memCached'] - $res['memBuffers']; //真实内存使用 $res['memRealFree'] = $res['memTotal'] - $res['memRealUsed']; //真实空闲 $res['memRealPercent'] = (floatval($res['memTotal'])!=0)?round($res['memRealUsed']/$res['memTotal']*100,2):0; //真实内存使用率 $res['memCachedPercent'] = (floatval($res['memCached'])!=0)?round($res['memCached']/$res['memTotal']*100,2):0; //Cached内存使用率 $res['swapTotal'] = round($buf[4][0]/1024, 2); $res['swapFree'] = round($buf[5][0]/1024, 2); $res['swapUsed'] = round($res['swapTotal']-$res['swapFree'], 2); $res['swapPercent'] = (floatval($res['swapTotal'])!=0)?round($res['swapUsed']/$res['swapTotal']*100,2):0; // LOAD AVG if (false === ($str = @file(&quot;/proc/loadavg&quot;))) return false; $str = explode(&quot; &quot;, implode(&quot;&quot;, $str)); $str = array_chunk($str, 4); $res['loadAvg'] = implode(&quot; &quot;, $str[0]); return $res; } //FreeBSD系统探测 function sys_freebsd() { //CPU if (false === ($res['cpu']['num'] = get_key(&quot;hw.ncpu&quot;))) return false; $res['cpu']['model'] = get_key(&quot;hw.model&quot;); //LOAD AVG if (false === ($res['loadAvg'] = get_key(&quot;vm.loadavg&quot;))) return false; //UPTIME if (false === ($buf = get_key(&quot;kern.boottime&quot;))) return false; $buf = explode(' ', $buf); $sys_ticks = time() - intval($buf[3]); $min = $sys_ticks / 60; $hours = $min / 60; $days = floor($hours / 24); $hours = floor($hours - ($days * 24)); $min = floor($min - ($days * 60 * 24) - ($hours * 60)); if ($days !== 0) $res['uptime'] = $days.&quot;天&quot;; if ($hours !== 0) $res['uptime'] .= $hours.&quot;小时&quot;; $res['uptime'] .= $min.&quot;分钟&quot;; //MEMORY if (false === ($buf = get_key(&quot;hw.physmem&quot;))) return false; $res['memTotal'] = round($buf/1024/1024, 2); $str = get_key(&quot;vm.vmtotal&quot;); preg_match_all(&quot;/\nVirtual Memory[\:\s]*\(Total[\:\s]*([\d]+)K[\,\s]*Active[\:\s]*([\d]+)K\)\n/i&quot;, $str, $buff, PREG_SET_ORDER); preg_match_all(&quot;/\nReal Memory[\:\s]*\(Total[\:\s]*([\d]+)K[\,\s]*Active[\:\s]*([\d]+)K\)\n/i&quot;, $str, $buf, PREG_SET_ORDER); $res['memRealUsed'] = round($buf[0][2]/1024, 2); $res['memCached'] = round($buff[0][2]/1024, 2); $res['memUsed'] = round($buf[0][1]/1024, 2) + $res['memCached']; $res['memFree'] = $res['memTotal'] - $res['memUsed']; $res['memPercent'] = (floatval($res['memTotal'])!=0)?round($res['memUsed']/$res['memTotal']*100,2):0; $res['memRealPercent'] = (floatval($res['memTotal'])!=0)?round($res['memRealUsed']/$res['memTotal']*100,2):0; return $res; } //取得参数值 FreeBSD function get_key($keyName) { return do_command('sysctl', &quot;-n $keyName&quot;); } //确定执行文件位置 FreeBSD function find_command($commandName) { $path = array('/bin', '/sbin', '/usr/bin', '/usr/sbin', '/usr/local/bin', '/usr/local/sbin'); foreach($path as $p) { if (@is_executable(&quot;$p/$commandName&quot;)) return &quot;$p/$commandName&quot;; } return false; } //执行系统命令 FreeBSD function do_command($commandName, $args) { $buffer = &quot;&quot;; if (false === ($command = find_command($commandName))) return false; if ($fp = @popen(&quot;$command $args&quot;, 'r')) { while (!@feof($fp)) { $buffer .= @fgets($fp, 4096); } return trim($buffer); } return false; } //windows系统探测 function sys_windows() { if (PHP_VERSION &gt;= 5) { $objLocator = new COM(&quot;WbemScripting.SWbemLocator&quot;); $wmi = $objLocator-&gt;ConnectServer(); $prop = $wmi-&gt;get(&quot;Win32_PnPEntity&quot;); } else { return false; } //CPU $cpuinfo = GetWMI($wmi,&quot;Win32_Processor&quot;, array(&quot;Name&quot;,&quot;L2CacheSize&quot;,&quot;NumberOfCores&quot;)); $res['cpu']['num'] = $cpuinfo[0]['NumberOfCores']; if (null == $res['cpu']['num']) { $res['cpu']['num'] = 1; }/* for ($i=0;$i&lt;$res['cpu']['num'];$i++) { $res['cpu']['model'] .= $cpuinfo[0]['Name'].&quot;
  <br />&quot;; $res['cpu']['cache'] .= $cpuinfo[0]['L2CacheSize'].&quot;
  <br />&quot;; }*/ $cpuinfo[0]['L2CacheSize'] = ' ('.$cpuinfo[0]['L2CacheSize'].')'; if($res['cpu']['num']==1) $x1 = ''; else $x1 = ' x'.$res['cpu']['num']; $res['cpu']['model'] = $cpuinfo[0]['Name'].$cpuinfo[0]['L2CacheSize'].$x1; // SYSINFO $sysinfo = GetWMI($wmi,&quot;Win32_OperatingSystem&quot;, array('LastBootUpTime','TotalVisibleMemorySize','FreePhysicalMemory','Caption','CSDVersion','SerialNumber','InstallDate')); $sysinfo[0]['Caption']=iconv('GBK', 'UTF-8',$sysinfo[0]['Caption']); $sysinfo[0]['CSDVersion']=iconv('GBK', 'UTF-8',$sysinfo[0]['CSDVersion']); $res['win_n'] = $sysinfo[0]['Caption'].&quot; &quot;.$sysinfo[0]['CSDVersion'].&quot; 序列号:{$sysinfo[0]['SerialNumber']} 于&quot;.date('Y年m月d日H:i:s',strtotime(substr($sysinfo[0]['InstallDate'],0,14))).&quot;安装&quot;; //UPTIME $res['uptime'] = $sysinfo[0]['LastBootUpTime']; $sys_ticks = 3600*8 + time() - strtotime(substr($res['uptime'],0,14)); $min = $sys_ticks / 60; $hours = $min / 60; $days = floor($hours / 24); $hours = floor($hours - ($days * 24)); $min = floor($min - ($days * 60 * 24) - ($hours * 60)); if ($days !== 0) $res['uptime'] = $days.&quot;天&quot;; if ($hours !== 0) $res['uptime'] .= $hours.&quot;小时&quot;; $res['uptime'] .= $min.&quot;分钟&quot;; //MEMORY $res['memTotal'] = round($sysinfo[0]['TotalVisibleMemorySize']/1024,2); $res['memFree'] = round($sysinfo[0]['FreePhysicalMemory']/1024,2); $res['memUsed'] = $res['memTotal']-$res['memFree']; //上面两行已经除以1024,这行不用再除了 $res['memPercent'] = round($res['memUsed'] / $res['memTotal']*100,2); $swapinfo = GetWMI($wmi,&quot;Win32_PageFileUsage&quot;, array('AllocatedBaseSize','CurrentUsage')); // LoadPercentage $loadinfo = GetWMI($wmi,&quot;Win32_Processor&quot;, array(&quot;LoadPercentage&quot;)); $res['loadAvg'] = $loadinfo[0]['LoadPercentage']; return $res; } function GetWMI($wmi,$strClass, $strValue = array()) { $arrData = array(); $objWEBM = $wmi-&gt;Get($strClass); $arrProp = $objWEBM-&gt;Properties_; $arrWEBMCol = $objWEBM-&gt;Instances_(); foreach($arrWEBMCol as $objItem) { @reset($arrProp); $arrInstance = array(); foreach($arrProp as $propItem) { eval(&quot;\$value = \$objItem-&gt;&quot; . $propItem-&gt;Name . &quot;;&quot;); if (empty($strValue)) { $arrInstance[$propItem-&gt;Name] = trim($value); } else { if (in_array($propItem-&gt;Name, $strValue)) { $arrInstance[$propItem-&gt;Name] = trim($value); } } } $arrData[] = $arrInstance; } return $arrData; } //比例条 function bar($percent) { ?&gt; 
  <div class="bar">
   <div class="barli" style="width:&lt;?php echo $percent?&gt;%">
    &nbsp;
   </div>
  </div> 
  <!--?php

}



$uptime = $sysInfo['uptime']; //在线时间

$stime = date('Y-m-d H:i:s'); //系统当前时间

//硬盘

$dt = round(@disk_total_space(".")/(1024*1024*1024),3); //总
$df = round(@disk_free_space(".")/(1024*1024*1024),3); //可用
$du = $dt-$df; //已用
$hdPercent = (floatval($dt)!=0)?round($du/$dt*100,2):0;

$load = $sysInfo['loadAvg'];	//系统负载


//判断内存如果小于1G，就显示M，否则显示G单位
if($sysInfo['memTotal']<1024)
{
	$memTotal = $sysInfo['memTotal']." M";
	$mt = $sysInfo['memTotal']." M";
	$mu = $sysInfo['memUsed']." M";
	$mf = $sysInfo['memFree']." M";
	$mc = $sysInfo['memCached']." M";	//cache化内存
	$mb = $sysInfo['memBuffers']." M";	//缓冲
	$st = $sysInfo['swapTotal']." M";
	$su = $sysInfo['swapUsed']." M";
	$sf = $sysInfo['swapFree']." M";
	$swapPercent = $sysInfo['swapPercent'];
	$memRealUsed = $sysInfo['memRealUsed']." M"; //真实内存使用
	$memRealFree = $sysInfo['memRealFree']." M"; //真实内存空闲
	$memRealPercent = $sysInfo['memRealPercent']; //真实内存使用比率
	$memPercent = $sysInfo['memPercent']; //内存总使用率
	$memCachedPercent = $sysInfo['memCachedPercent']; //cache内存使用率
}
else
{
	$memTotal = round($sysInfo['memTotal']/1024,3)." G";
	$mt = round($sysInfo['memTotal']/1024,3)." G";
	$mu = round($sysInfo['memUsed']/1024,3)." G";
	$mf = round($sysInfo['memFree']/1024,3)." G";
	$mc = round($sysInfo['memCached']/1024,3)." G";
	$mb = round($sysInfo['memBuffers']/1024,3)." G";
	$st = round($sysInfo['swapTotal']/1024,3)." G";
	$su = round($sysInfo['swapUsed']/1024,3)." G";
	$sf = round($sysInfo['swapFree']/1024,3)." G";
	$swapPercent = $sysInfo['swapPercent'];
	$memRealUsed = round($sysInfo['memRealUsed']/1024,3)." G"; //真实内存使用
	$memRealFree = round($sysInfo['memRealFree']/1024,3)." G"; //真实内存空闲
	$memRealPercent = $sysInfo['memRealPercent']; //真实内存使用比率
	$memPercent = $sysInfo['memPercent']; //内存总使用率
	$memCachedPercent = $sysInfo['memCachedPercent']; //cache内存使用率
}


//网卡流量

$strs = @file("/proc/net/dev"); 



for ($i = 2; $i < count($strs); $i++ )
{
	preg_match_all( "/([^\s]+):[\s]{0,}(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)/", $strs[$i], $info );
	$NetOutSpeed[$i] = $info[10][0];
	$NetInputSpeed[$i] = $info[2][0];
	$NetInput[$i] = formatsize($info[2][0]);
	$NetOut[$i]  = formatsize($info[10][0]);
}


//ajax调用实时刷新

if ($_GET['act'] == "rt")

{

	$arr=array('useSpace'=-->&quot;$du&quot;,'freeSpace'=&gt;&quot;$df&quot;,'hdPercent'=&gt;&quot;$hdPercent&quot;,'barhdPercent'=&gt;&quot;$hdPercent%&quot;,'TotalMemory'=&gt;&quot;$mt&quot;,'UsedMemory'=&gt;&quot;$mu&quot;,'FreeMemory'=&gt;&quot;$mf&quot;,'CachedMemory'=&gt;&quot;$mc&quot;,'Buffers'=&gt;&quot;$mb&quot;,'TotalSwap'=&gt;&quot;$st&quot;,'swapUsed'=&gt;&quot;$su&quot;,'swapFree'=&gt;&quot;$sf&quot;,'loadAvg'=&gt;&quot;$load&quot;,'uptime'=&gt;&quot;$uptime&quot;,'freetime'=&gt;&quot;$freetime&quot;,'bjtime'=&gt;&quot;$bjtime&quot;,'stime'=&gt;&quot;$stime&quot;,'memRealPercent'=&gt;&quot;$memRealPercent&quot;,'memRealUsed'=&gt;&quot;$memRealUsed&quot;,'memRealFree'=&gt;&quot;$memRealFree&quot;,'memPercent'=&gt;&quot;$memPercent%&quot;,'memCachedPercent'=&gt;&quot;$memCachedPercent&quot;,'barmemCachedPercent'=&gt;&quot;$memCachedPercent%&quot;,'swapPercent'=&gt;&quot;$swapPercent&quot;,'barmemRealPercent'=&gt;&quot;$memRealPercent%&quot;,'barswapPercent'=&gt;&quot;$swapPercent%&quot;,'NetOut2'=&gt;&quot;$NetOut[2]&quot;,'NetOut3'=&gt;&quot;$NetOut[3]&quot;,'NetOut4'=&gt;&quot;$NetOut[4]&quot;,'NetOut5'=&gt;&quot;$NetOut[5]&quot;,'NetOut6'=&gt;&quot;$NetOut[6]&quot;,'NetOut7'=&gt;&quot;$NetOut[7]&quot;,'NetOut8'=&gt;&quot;$NetOut[8]&quot;,'NetOut9'=&gt;&quot;$NetOut[9]&quot;,'NetOut10'=&gt;&quot;$NetOut[10]&quot;,'NetInput2'=&gt;&quot;$NetInput[2]&quot;,'NetInput3'=&gt;&quot;$NetInput[3]&quot;,'NetInput4'=&gt;&quot;$NetInput[4]&quot;,'NetInput5'=&gt;&quot;$NetInput[5]&quot;,'NetInput6'=&gt;&quot;$NetInput[6]&quot;,'NetInput7'=&gt;&quot;$NetInput[7]&quot;,'NetInput8'=&gt;&quot;$NetInput[8]&quot;,'NetInput9'=&gt;&quot;$NetInput[9]&quot;,'NetInput10'=&gt;&quot;$NetInput[10]&quot;,'NetOutSpeed2'=&gt;&quot;$NetOutSpeed[2]&quot;,'NetOutSpeed3'=&gt;&quot;$NetOutSpeed[3]&quot;,'NetOutSpeed4'=&gt;&quot;$NetOutSpeed[4]&quot;,'NetOutSpeed5'=&gt;&quot;$NetOutSpeed[5]&quot;,'NetInputSpeed2'=&gt;&quot;$NetInputSpeed[2]&quot;,'NetInputSpeed3'=&gt;&quot;$NetInputSpeed[3]&quot;,'NetInputSpeed4'=&gt;&quot;$NetInputSpeed[4]&quot;,'NetInputSpeed5'=&gt;&quot;$NetInputSpeed[5]&quot;); $jarr=json_encode($arr); $_GET['callback'] = htmlspecialchars($_GET['callback']); echo $_GET['callback'],'(',$jarr,')'; exit; } ?&gt;    
  <title>&lt;?php echo $title; ?&gt;</title> 
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <!-- Powered by: Yahei.Net --> 
  <link href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" /> 
  <link href="data:image/png;base64,Qk02AwAAAAAAADYAAAAoAAAAEAAAABAAAAABABgAAAAAAAADAADEDgAAxA4AAAAAAAAAAAAAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICA19fXAAAA19fXwICAwICAwICAwICAwICAwICAwICA19fXAAAA19fXwICAwICAwICA19fXAAAA19fX19fXwICAwICA19fXwICAwICA19fX19fXAAAA19fX19fXwICAwICA19fXAAAAAAAAAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAAAAAAAAAA19fX19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fXAAAA19fX19fXAAAA19fX19fXAAAAAAAAAAAA19fX19fXAAAAAAAAAAAA19fX19fXAAAAAAAAAAAA19fX19fXwICA19fX19fX19fXwICA19fXAAAA19fX19fXwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICA19fXAAAA19fXwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA19fX19fX19fXwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICAwICA" type="image/x-icon" rel="icon" /> 
  <style type="text/css">
<!--
body{margin: 0 auto; padding: 0; background-color:#eee;font-size:14px;font-family: Noto Sans CJK SC,Microsoft Yahei,Hiragino Sans GB,WenQuanYi Micro Hei,sans-serif;}
a,input,button{outline: none !important;-webkit-appearance: none;border-radius: 0;}
button::-moz-focus-inner,input::-moz-focus-inner{border-color:transparent !important;}
:focus {border: none;outline: 0;}
h1 {font-size: 26px; padding: 0; margin: 0; color: #333333;}
h1 small {font-size: 11px; font-family: Tahoma; font-weight: bold; }
a{color: #666; text-decoration:none;}
a.black{color: #000000; text-decoration:none;}
table{width:100%;clear:both;padding: 0; margin: 0 0 18px;border-collapse:collapse; border-spacing: 0;box-shadow: 1px 1px 4px #999;}
th{padding: 6px 12px; font-weight:bold;background:#9191c4;color:#000;border:1px solid #9191c4; text-align:left;font-size:16px;border-bottom: 0px;font-weight: normal;}
tr{padding: 0; background:#FFFFFF;}
td{padding: 3px 6px; border:1px solid #CCCCCC;}
#nav{height:48px;font-size: 15px;background-color:#447;color:#fff !important;position:fixed;top:0px;width:100%;cursor: default;}
.w_logo{height:29px; padding:9px 24px;display: inline-block;font-size: 18px;float:left;}
.w_top{height:24px;color:#fff;font-size: 15px;display: inline-block;padding:12px 24px;transition: background-color 0.2s;float:left;cursor: default;}
.w_top:hover{background:#0C2136;}
.w_foot{height:25px;text-align:center; background:#dedede;}
input{padding: 2px; background: #FFFFFF;border:1px solid #888;font-size:12px; color:#000;}
input:focus{border:1px solid #666;}
input.btn{line-height: 20px; padding: 6px 15px; color:#fff; background: #447; font-size:12px; border:0;transition: background-color 0.2s;box-shadow: 0 0 1px #888888;}
input.btn:hover{background:#558;}
.bar {border:0; background:#ddd; height:15px; font-size:2px; width:89%; margin:2px 0 5px 0;overflow: hidden;}
.barli_red{background:#d9534f; height:15px; margin:0px; padding:0;}
.barli_blue{background:#337ab7; height:15px; margin:0px; padding:0;}
.barli_green{background:#5cb85c; height:15px; margin:0px; padding:0;}
.barli_orange{background:#f0ad4e; height:15px; margin:0px; padding:0;}
.barli_blue2{background:#5bc0de; height:15px; margin:0px; padding:0;}
#page {max-width: 1080px; padding: 0 auto; margin: 80px auto 0; text-align: left;}
#header{position:relative; padding:5px;}
.w_small{font-family: Courier New;}
.w_number{color: #177BBE;}
.sudu {padding: 0; background:#5dafd1; }
.suduk { margin:0px; padding:0;}
.resYes{}
.resNo{color: #FF0000;}
.word{word-break:break-all;}
@media screen and (max-width: 1180px){
	#page {margin: 80px 50px 0; }
}
-->
</style> 
  <script language="JavaScript" type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.7/jquery.min.js"></script> 
  <script type="text/javascript"> 

<!--

$(document).ready(function(){getJSONData();});
var OutSpeed2=<?php echo floor($NetOutSpeed[2]) ?>;
var OutSpeed3=<?php echo floor($NetOutSpeed[3]) ?>;
var OutSpeed4=<?php echo floor($NetOutSpeed[4]) ?>;
var OutSpeed5=<?php echo floor($NetOutSpeed[5]) ?>;
var InputSpeed2=<?php echo floor($NetInputSpeed[2]) ?>;
var InputSpeed3=<?php echo floor($NetInputSpeed[3]) ?>;
var InputSpeed4=<?php echo floor($NetInputSpeed[4]) ?>;
var InputSpeed5=<?php echo floor($NetInputSpeed[5]) ?>;

function getJSONData()

{

	setTimeout("getJSONData()", 1000);

	$.getJSON('?act=rt&callback=?', displayData);

}
function ForDight(Dight,How)
{ 
  if (Dight<0){
  	var Last=0+"B/s";
  }else if (Dight<1024){
  	var Last=Math.round(Dight*Math.pow(10,How))/Math.pow(10,How)+"B/s";
  }else if (Dight<1048576){
  	Dight=Dight/1024;
  	var Last=Math.round(Dight*Math.pow(10,How))/Math.pow(10,How)+"K/s";
  }else{
  	Dight=Dight/1048576;
  	var Last=Math.round(Dight*Math.pow(10,How))/Math.pow(10,How)+"M/s";
  }
	return Last; 
}

function displayData(dataJSON)

{
	$("#useSpace").html(dataJSON.useSpace);

	$("#freeSpace").html(dataJSON.freeSpace);
	$("#hdPercent").html(dataJSON.hdPercent);
	$("#barhdPercent").width(dataJSON.barhdPercent);

	$("#TotalMemory").html(dataJSON.TotalMemory);

	$("#UsedMemory").html(dataJSON.UsedMemory);

	$("#FreeMemory").html(dataJSON.FreeMemory);

	$("#CachedMemory").html(dataJSON.CachedMemory);
	$("#Buffers").html(dataJSON.Buffers);

	$("#TotalSwap").html(dataJSON.TotalSwap);

	$("#swapUsed").html(dataJSON.swapUsed);

	$("#swapFree").html(dataJSON.swapFree);

	$("#swapPercent").html(dataJSON.swapPercent);

	$("#loadAvg").html(dataJSON.loadAvg);

	$("#uptime").html(dataJSON.uptime);

	$("#freetime").html(dataJSON.freetime);

	$("#stime").html(dataJSON.stime);

	$("#bjtime").html(dataJSON.bjtime);

	$("#memRealUsed").html(dataJSON.memRealUsed);
	$("#memRealFree").html(dataJSON.memRealFree);
	$("#memRealPercent").html(dataJSON.memRealPercent);

	$("#memPercent").html(dataJSON.memPercent);
	$("#barmemPercent").width(dataJSON.memPercent);

	$("#barmemRealPercent").width(dataJSON.barmemRealPercent);
	$("#memCachedPercent").html(dataJSON.memCachedPercent);
	$("#barmemCachedPercent").width(dataJSON.barmemCachedPercent);

	$("#barswapPercent").width(dataJSON.barswapPercent);

	$("#NetOut2").html(dataJSON.NetOut2);

	$("#NetOut3").html(dataJSON.NetOut3);

	$("#NetOut4").html(dataJSON.NetOut4);

	$("#NetOut5").html(dataJSON.NetOut5);

	$("#NetOut6").html(dataJSON.NetOut6);

	$("#NetOut7").html(dataJSON.NetOut7);

	$("#NetOut8").html(dataJSON.NetOut8);

	$("#NetOut9").html(dataJSON.NetOut9);

	$("#NetOut10").html(dataJSON.NetOut10);
	$("#NetInput2").html(dataJSON.NetInput2);
	$("#NetInput3").html(dataJSON.NetInput3);
	$("#NetInput4").html(dataJSON.NetInput4);
	$("#NetInput5").html(dataJSON.NetInput5);
	$("#NetInput6").html(dataJSON.NetInput6);
	$("#NetInput7").html(dataJSON.NetInput7);
	$("#NetInput8").html(dataJSON.NetInput8);
	$("#NetInput9").html(dataJSON.NetInput9);
	$("#NetInput10").html(dataJSON.NetInput10);	
	$("#NetOutSpeed2").html(ForDight((dataJSON.NetOutSpeed2-OutSpeed2),3));	OutSpeed2=dataJSON.NetOutSpeed2;
	$("#NetOutSpeed3").html(ForDight((dataJSON.NetOutSpeed3-OutSpeed3),3));	OutSpeed3=dataJSON.NetOutSpeed3;
	$("#NetOutSpeed4").html(ForDight((dataJSON.NetOutSpeed4-OutSpeed4),3));	OutSpeed4=dataJSON.NetOutSpeed4;
	$("#NetOutSpeed5").html(ForDight((dataJSON.NetOutSpeed5-OutSpeed5),3));	OutSpeed5=dataJSON.NetOutSpeed5;
	$("#NetInputSpeed2").html(ForDight((dataJSON.NetInputSpeed2-InputSpeed2),3));	InputSpeed2=dataJSON.NetInputSpeed2;
	$("#NetInputSpeed3").html(ForDight((dataJSON.NetInputSpeed3-InputSpeed3),3));	InputSpeed3=dataJSON.NetInputSpeed3;
	$("#NetInputSpeed4").html(ForDight((dataJSON.NetInputSpeed4-InputSpeed4),3));	InputSpeed4=dataJSON.NetInputSpeed4;
	$("#NetInputSpeed5").html(ForDight((dataJSON.NetInputSpeed5-InputSpeed5),3));	InputSpeed5=dataJSON.NetInputSpeed5;

}

-->

</script>   
  <a name="w_top"></a> 
  <div id="nav"> 
   <!--
	<table>
		<tr>
			<th class="w_logo">雅黑PHP探针</th>
			<th class="w_top"><a href="#w_php">PHP参数</a></th>
			<th class="w_top"><a href="#w_module">组件支持</a></th>
			<th class="w_top"><a href="#w_module_other">第三方组件</a></th>
			<th class="w_top"><a href="#w_db">数据库支持</a></th>
			<th class="w_top"><a href="#w_performance">性能检测</a></th>
			<th class="w_top"><a href="#w_networkspeed">网速检测</a></th>
			<th class="w_top"><a href="#w_MySQL">MySQL检测</a></th>
			<th class="w_top"><a href="#w_function">函数检测</a></th>
			<th class="w_top"><a href="#w_mail">邮件检测</a></th>
		</tr>
	</table>
	--> 
   <div style="display: inline-block"> 
    <div class="w_logo">
     <span>PHP探针</span>
    </div> 
   </div> 
   <div style="display: inline-block"> 
    <a class="w_top" onclick="$('body,html').animate({ scrollTop: 0 }, 200);"><i class="fa fa-tasks"></i> 服务器信息</a> 
    <a class="w_top" onclick="$('body,html').animate({ scrollTop: $('#w_php').offset().top }, 200);"><i class="fa fa-tags"></i> PHP参数</a> 
    <a class="w_top" onclick="$('body,html').animate({ scrollTop: $('#w_module').offset().top }, 200);"><i class="fa fa-cogs"></i> 组件支持</a> 
    <a class="w_top" onclick="$('body,html').animate({ scrollTop: $('#w_module_other').offset().top }, 200);"><i class="fa fa-cubes"></i> 第三方组件</a> 
    <a class="w_top" onclick="$('body,html').animate({ scrollTop: $('#w_db').offset().top }, 200);"><i class="fa fa-database"></i> 数据库支持</a> 
    <a class="w_top" onclick="$('body,html').animate({ scrollTop: $('#w_performance').offset().top }, 200);"><i class="fa fa-tachometer"></i> 性能检测</a> 
   </div> 
  </div> 
  <div id="page"> 
   <!--服务器相关参数--> 
   <table> 
    <tbody>
     <tr>
      <th colspan="4"><i class="fa fa-tasks"></i> 服务器参数</th>
     </tr> 
     <tr> 
      <td>服务器域名/IP地址</td> 
      <td colspan="3">
       <!--?php echo @get_current_user();?--> - 
       <!--?php echo $_SERVER['SERVER_NAME'];?-->(
       <!--?php if('/'==DIRECTORY_SEPARATOR){echo $_SERVER['SERVER_ADDR'];}else{echo @gethostbyname($_SERVER['SERVER_NAME']);} ?-->)&nbsp;&nbsp;你的IP地址是：
       <!--?php echo @$_SERVER['REMOTE_ADDR'];?--></td> 
     </tr> 
     <tr> 
      <td>服务器标识</td> 
      <td colspan="3">
       <!--?php if($sysInfo['win_n'] != ''){echo $sysInfo['win_n'];}else{echo @php_uname();};?--></td> 
     </tr> 
     <tr> 
      <td width="13%">服务器操作系统</td> 
      <td width="37%">
       <!--?php $os = explode(" ", php_uname()); echo $os[0];?--> &nbsp;内核版本：
       <!--?php if('/'==DIRECTORY_SEPARATOR){echo $os[2];}else{echo $os[1];} ?--></td> 
      <td width="13%">服务器解译引擎</td> 
      <td width="37%">
       <!--?php echo $_SERVER['SERVER_SOFTWARE'];?--></td> 
     </tr> 
     <tr> 
      <td>服务器语言</td> 
      <td>
       <!--?php echo getenv("HTTP_ACCEPT_LANGUAGE");?--></td> 
      <td>服务器端口</td> 
      <td>
       <!--?php echo $_SERVER['SERVER_PORT'];?--></td> 
     </tr> 
     <tr> 
      <td>服务器主机名</td> 
      <td>
       <!--?php if('/'==DIRECTORY_SEPARATOR ){echo $os[1];}else{echo $os[2];} ?--></td> 
      <td>绝对路径</td> 
      <td>
       <!--?php echo $_SERVER['DOCUMENT_ROOT']?str_replace('\\','/',$_SERVER['DOCUMENT_ROOT']):str_replace('\\','/',dirname(__FILE__));?--></td> 
     </tr> 
     <tr> 
      <td>管理员邮箱</td> 
      <td>
       <!--?php echo $_SERVER['SERVER_ADMIN'];?--></td> 
      <td>探针路径</td> 
      <td>
       <!--?php echo str_replace('\\','/',__FILE__)?str_replace('\\','/',__FILE__):$_SERVER['SCRIPT_FILENAME'];?--></td> 
     </tr> 
    </tbody>
   </table> 
   <!--?if("show"==$sysReShow){?--> 
   <table> 
    <tbody>
     <tr>
      <th colspan="6"><i class="fa fa-area-chart"></i> 服务器实时数据</th>
     </tr> 
     <tr> 
      <td width="13%">服务器当前时间</td> 
      <td width="37%"><span id="stime">
        <!--?php echo $stime;?--></span></td> 
      <td width="13%">服务器已运行时间</td> 
      <td width="37%" colspan="3"><span id="uptime">
        <!--?php echo $uptime;?--></span></td> 
     </tr> 
     <tr> 
      <td width="13%">CPU型号 [
       <!--?php echo $sysInfo['cpu']['num'];?-->核]</td> 
      <td width="87%" colspan="5">
       <!--?php echo $sysInfo['cpu']['model'];?--></td> 
     </tr> 
     <tr> 
      <td>CPU使用状况</td> 
      <td colspan="5">
       <!--?php if('/'==DIRECTORY_SEPARATOR){echo $cpu_show." | <a href='".$phpSelf."?act=cpu_percentage' target='_blank' class='static'-->查看图表 <i class="\&quot;fa" fa-external-link\"=""></i> &quot;;}else{echo &quot;暂时只支持Linux系统&quot;;}?&gt; </td> 
     </tr> 
     <tr> 
      <td>硬盘使用状况</td> 
      <td colspan="5"> 总空间 
       <!--?php echo $dt;?-->&nbsp;G， 已用 <font color="#333333"><span id="useSpace">
         <!--?php echo $du;?--></span></font>&nbsp;G， 空闲 <font color="#333333"><span id="freeSpace">
         <!--?php echo $df;?--></span></font>&nbsp;G， 使用率 <span id="hdPercent">
        <!--?php echo $hdPercent;?--></span>% 
       <div class="bar">
        <div id="barhdPercent" class="barli_orange" style="width:&lt;?php echo $hdPercent;?&gt;%">
         &nbsp;
        </div> 
       </div> </td> 
     </tr> 
     <tr> 
      <td>内存使用状况</td> 
      <td colspan="5"> 
       <!--?php

$tmp = array(

    'memTotal', 'memUsed', 'memFree', 'memPercent',

    'memCached', 'memRealPercent',

    'swapTotal', 'swapUsed', 'swapFree', 'swapPercent'

);

foreach ($tmp AS $v) {

    $sysInfo[$v] = $sysInfo[$v] ? $sysInfo[$v] : 0;

}

?--> 物理内存：共 <font color="#CC0000">
        <!--?php echo $memTotal;?--> </font> , 已用 <font color="#CC0000"><span id="UsedMemory">
         <!--?php echo $mu;?--></span></font> , 空闲 <font color="#CC0000"><span id="FreeMemory">
         <!--?php echo $mf;?--></span></font> , 使用率 <span id="memPercent">
        <!--?php echo $memPercent;?--></span> 
       <div class="bar">
        <div id="barmemPercent" class="barli_green" style="width:&lt;?php echo $memPercent?&gt;%">
         &nbsp;
        </div> 
       </div> 
       <!--?php
//判断如果cache为0，不显示
if($sysInfo['memCached']-->0) { ?&gt; Cache化内存为 <span id="CachedMemory">
        <!--?php echo $mc;?--></span> , 使用率 <span id="memCachedPercent">
        <!--?php echo $memCachedPercent;?--></span> % | Buffers缓冲为 <span id="Buffers">
        <!--?php echo $mb;?--></span> 
       <div class="bar">
        <div id="barmemCachedPercent" class="barli_blue" style="width:&lt;?php echo $memCachedPercent?&gt;%">
         &nbsp;
        </div>
       </div> 真实内存使用 <span id="memRealUsed">
        <!--?php echo $memRealUsed;?--></span> , 真实内存空闲 <span id="memRealFree">
        <!--?php echo $memRealFree;?--></span> , 使用率 <span id="memRealPercent">
        <!--?php echo $memRealPercent;?--></span> % 
       <div class="bar">
        <div id="barmemRealPercent" class="barli_blue2" style="width:&lt;?php echo $memRealPercent?&gt;%">
         &nbsp;
        </div>
       </div> 
       <!--?php
}
//判断如果SWAP区为0，不显示
if($sysInfo['swapTotal']-->0) { ?&gt; SWAP区：共 
       <!--?php echo $st;?--> , 已使用 <span id="swapUsed">
        <!--?php echo $su;?--></span> , 空闲 <span id="swapFree">
        <!--?php echo $sf;?--></span> , 使用率 <span id="swapPercent">
        <!--?php echo $swapPercent;?--></span> % 
       <div class="bar">
        <div id="barswapPercent" class="barli_red" style="width:&lt;?php echo $swapPercent?&gt;%">
         &nbsp;
        </div> 
       </div> 
       <!--?php
}	
?--> </td> 
     </tr> 
     <tr> 
      <td>系统平均负载</td> 
      <td colspan="5" class="w_number"><span id="loadAvg">
        <!--?php echo $load;?--></span></td> 
     </tr> 
    </tbody>
   </table> 
   <!--?}?--> 
   <!--?php if (false !== ($strs = @file("/proc/net/dev"))) : ?--> 
   <table> 
    <tbody>
     <tr>
      <th colspan="5"><i class="fa fa-bar-chart"></i> 网络使用状况</th>
     </tr> 
     <!--?php for ($i = 2; $i < count($strs); $i++ ) : ?--> 
     <!--?php preg_match_all( "/([^\s]+):[\s]{0,}(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)/", $strs[$i], $info );?--> 
     <tr> 
      <td width="13%">
       <!--?php echo $info[1][0]?--> : </td> 
      <td width="29%">入网: <font color="#CC0000"><span id="NetInput&lt;?php echo $i?&gt;">
         <!--?php echo $NetInput[$i]?--></span></font></td> 
      <td width="14%">实时: <font color="#CC0000"><span id="NetInputSpeed&lt;?php echo $i?&gt;">0B/s</span></font></td> 
      <td width="29%">出网: <font color="#CC0000"><span id="NetOut&lt;?php echo $i?&gt;">
         <!--?php echo $NetOut[$i]?--></span></font></td> 
      <td width="14%">实时: <font color="#CC0000"><span id="NetOutSpeed&lt;?php echo $i?&gt;">0B/s</span></font></td> 
     </tr> 
     <!--?php endfor; ?--> 
    </tbody>
   </table> 
   <!--?php endif; ?--> 
   <table width="100%" cellpadding="3" cellspacing="0" align="center"> 
    <tbody>
     <tr> 
      <th colspan="4"><i class="fa fa-download "></i> PHP已编译模块</th> 
     </tr> 
     <tr> 
      <td colspan="4"><span class="w_small"> 
        <!--?php

$able=get_loaded_extensions();

foreach ($able as $key=-->$value) { if ($key!=0 &amp;&amp; $key%13==0) { echo '<br />'; } echo &quot;$value&nbsp;&nbsp;&quot;; } ?&gt;</span> </td> 
     </tr> 
    </tbody>
   </table> 
   <a name="w_php" id="w_php" style="position:relative;top:-60px;"></a> 
   <table> 
    <tbody>
     <tr>
      <th colspan="4"><i class="fa fa-tags"></i> PHP相关参数</th>
     </tr> 
     <tr> 
      <td width="32%">PHP信息（phpinfo）：</td> 
      <td width="18%"> 
       <!--?php

		$phpSelf = $_SERVER[PHP_SELF] ? $_SERVER[PHP_SELF] : $_SERVER[SCRIPT_NAME];

		#$disFuns=get_cfg_var("disable_functions");

		?--> 
       <!--?php echo (false!==preg_match("phpinfo",$disFuns))? '<font color="red"--><i class="fa fa-times"></i>' :&quot;<a href="$phpSelf?act=phpinfo" target="_blank">PHPINFO <i class="\&quot;fa" fa-external-link\"=""></i></a>&quot;;?&gt; </td> 
      <td width="32%">PHP版本（php_version）：</td> 
      <td width="18%">
       <!--?php echo PHP_VERSION;?--></td> 
     </tr> 
     <tr> 
      <td>PHP运行方式：</td> 
      <td>
       <!--?php echo strtoupper(php_sapi_name());?--></td> 
      <td>脚本占用最大内存（memory_limit）：</td> 
      <td>
       <!--?php echo show("memory_limit");?--></td> 
     </tr> 
     <tr> 
      <td>PHP安全模式（safe_mode）：</td> 
      <td>
       <!--?php echo show("safe_mode");?--></td> 
      <td>POST方法提交最大限制（post_max_size）：</td> 
      <td>
       <!--?php echo show("post_max_size");?--></td> 
     </tr> 
     <tr> 
      <td>上传文件最大限制（upload_max_filesize）：</td> 
      <td>
       <!--?php echo show("upload_max_filesize");?--></td> 
      <td>浮点型数据显示的有效位数（precision）：</td> 
      <td>
       <!--?php echo show("precision");?--></td> 
     </tr> 
     <tr> 
      <td>脚本超时时间（max_execution_time）：</td> 
      <td>
       <!--?php echo show("max_execution_time");?-->秒</td> 
      <td>socket超时时间（default_socket_timeout）：</td> 
      <td>
       <!--?php echo show("default_socket_timeout");?-->秒</td> 
     </tr> 
     <tr> 
      <td>PHP页面根目录（doc_root）：</td> 
      <td>
       <!--?php echo show("doc_root");?--></td> 
      <td>用户根目录（user_dir）：</td> 
      <td>
       <!--?php echo show("user_dir");?--></td> 
     </tr> 
     <tr> 
      <td>dl()函数（enable_dl）：</td> 
      <td>
       <!--?php echo show("enable_dl");?--></td> 
      <td>指定包含文件目录（include_path）：</td> 
      <td>
       <!--?php echo show("include_path");?--></td> 
     </tr> 
     <tr> 
      <td>显示错误信息（display_errors）：</td> 
      <td>
       <!--?php echo show("display_errors");?--></td> 
      <td>自定义全局变量（register_globals）：</td> 
      <td>
       <!--?php echo show("register_globals");?--></td> 
     </tr> 
     <tr> 
      <td>数据反斜杠转义（magic_quotes_gpc）：</td> 
      <td>
       <!--?php echo show("magic_quotes_gpc");?--></td> 
      <td>&quot;&lt;?...?&gt;&quot;短标签（short_open_tag）：</td> 
      <td>
       <!--?php echo show("short_open_tag");?--></td> 
     </tr> 
     <tr> 
      <td>&quot;&lt;% %&gt;&quot;ASP风格标记（asp_tags）：</td> 
      <td>
       <!--?php echo show("asp_tags");?--></td> 
      <td>忽略重复错误信息（ignore_repeated_errors）：</td> 
      <td>
       <!--?php echo show("ignore_repeated_errors");?--></td> 
     </tr> 
     <tr> 
      <td>忽略重复的错误源（ignore_repeated_source）：</td> 
      <td>
       <!--?php echo show("ignore_repeated_source");?--></td> 
      <td>报告内存泄漏（report_memleaks）：</td> 
      <td>
       <!--?php echo show("report_memleaks");?--></td> 
     </tr> 
     <tr> 
      <td>自动字符串转义（magic_quotes_gpc）：</td> 
      <td>
       <!--?php echo show("magic_quotes_gpc");?--></td> 
      <td>外部字符串自动转义（magic_quotes_runtime）：</td> 
      <td>
       <!--?php echo show("magic_quotes_runtime");?--></td> 
     </tr> 
     <tr> 
      <td>打开远程文件（allow_url_fopen）：</td> 
      <td>
       <!--?php echo show("allow_url_fopen");?--></td> 
      <td>声明argv和argc变量（register_argc_argv）：</td> 
      <td>
       <!--?php echo show("register_argc_argv");?--></td> 
     </tr> 
     <tr> 
      <td>Cookie 支持：</td> 
      <td>
       <!--?php echo isset($_COOKIE)?'<font color="green"--><i class="fa fa-check"></i>' : '<font color="red"><i class="fa fa-times"></i></font>';?&gt;</td> 
      <td>拼写检查（ASpell Library）：</td> 
      <td>
       <!--?php echo isfun("aspell_check_raw");?--></td> 
     </tr> 
     <tr> 
      <td>高精度数学运算（BCMath）：</td> 
      <td>
       <!--?php echo isfun("bcadd");?--></td> 
      <td>PREL相容语法（PCRE）：</td> 
      <td>
       <!--?php echo isfun("preg_match");?--></td> 
     </tr>
     <tr> 
      <td>PDF文档支持：</td> 
      <td>
       <!--?php echo isfun("pdf_close");?--></td> 
      <td>SNMP网络管理协议：</td> 
      <td>
       <!--?php echo isfun("snmpget");?--></td> 
     </tr> 
     <tr> 
      <td>VMailMgr邮件处理：</td> 
      <td>
       <!--?php echo isfun("vm_adduser");?--></td> 
      <td>Curl支持：</td> 
      <td>
       <!--?php echo isfun("curl_init");?--></td> 
     </tr> 
     <tr> 
      <td>SMTP支持：</td> 
      <td>
       <!--?php echo get_cfg_var("SMTP")?'<font color="green"--><i class="fa fa-check"></i>' : '<font color="red"><i class="fa fa-times"></i></font>';?&gt;</td> 
      <td>SMTP地址：</td> 
      <td>
       <!--?php echo get_cfg_var("SMTP")?get_cfg_var("SMTP"):'<font color="red"--><i class="fa fa-times"></i>';?&gt;</td> 
     </tr> 
     <tr> 
      <td>默认支持函数（enable_functions）：</td> 
      <td colspan="3"><a href="&lt;?php echo $phpSelf;?&gt;?act=Function" target="_blank" class="static">查看详细 <i class="fa fa-external-link"></i></a></td> 
     </tr> 
     <tr> 
      <td>被禁用的函数（disable_functions）：</td> 
      <td colspan="3" class="word"> 
       <!--?php 
$disFuns=get_cfg_var("disable_functions");
if(empty($disFuns))
{
	echo '<font color=red--><i class="fa fa-times"></i>'; } else { //echo $disFuns; $disFuns_array = explode(',',$disFuns); foreach ($disFuns_array as $key=&gt;$value) { if ($key!=0 &amp;&amp; $key%5==0) { echo '<br />'; } echo &quot;$value&nbsp;&nbsp;&quot;; } } ?&gt; </td> 
     </tr> 
    </tbody>
   </table> 
   <a name="w_module" id="w_module" style="position:relative;top:-60px;"></a> 
   <!--组件信息--> 
   <table> 
    <tbody>
     <tr>
      <th colspan="4"><i class="fa fa-cogs"></i> 组件支持</th>
     </tr> 
     <tr> 
      <td width="32%">FTP支持：</td> 
      <td width="18%">
       <!--?php echo isfun("ftp_login");?--></td> 
      <td width="32%">XML解析支持：</td> 
      <td width="18%">
       <!--?php echo isfun("xml_set_object");?--></td> 
     </tr> 
     <tr> 
      <td>Session支持：</td> 
      <td>
       <!--?php echo isfun("session_start");?--></td> 
      <td>Socket支持：</td> 
      <td>
       <!--?php echo isfun("socket_accept");?--></td> 
     </tr> 
     <tr> 
      <td>Calendar支持</td> 
      <td>
       <!--?php echo isfun('cal_days_in_month');?--> </td> 
      <td>允许URL打开文件：</td> 
      <td>
       <!--?php echo show("allow_url_fopen");?--></td> 
     </tr> 
     <tr> 
      <td>GD库支持：</td> 
      <td> 
       <!--?php

        if(function_exists(gd_info)) {

            $gd_info = @gd_info();

	        echo $gd_info["GD Version"];

	    }else{echo '<font color="red"--><i class="fa fa-times"></i>';} ?&gt;</td> 
      <td>压缩文件支持(Zlib)：</td> 
      <td>
       <!--?php echo isfun("gzclose");?--></td> 
     </tr> 
     <tr> 
      <td>IMAP电子邮件系统函数库：</td> 
      <td>
       <!--?php echo isfun("imap_close");?--></td> 
      <td>历法运算函数库：</td> 
      <td>
       <!--?php echo isfun("JDToGregorian");?--></td> 
     </tr> 
     <tr> 
      <td>正则表达式函数库：</td> 
      <td>
       <!--?php echo isfun("preg_match");?--></td> 
      <td>WDDX支持：</td> 
      <td>
       <!--?php echo isfun("wddx_add_vars");?--></td> 
     </tr> 
     <tr> 
      <td>Iconv编码转换：</td> 
      <td>
       <!--?php echo isfun("iconv");?--></td> 
      <td>mbstring：</td> 
      <td>
       <!--?php echo isfun("mb_eregi");?--></td> 
     </tr> 
     <tr> 
      <td>高精度数学运算：</td> 
      <td>
       <!--?php echo isfun("bcadd");?--></td> 
      <td>LDAP目录协议：</td> 
      <td>
       <!--?php echo isfun("ldap_close");?--></td> 
     </tr> 
     <tr> 
      <td>MCrypt加密处理：</td> 
      <td>
       <!--?php echo isfun("mcrypt_cbc");?--></td> 
      <td>哈稀计算：</td> 
      <td>
       <!--?php echo isfun("mhash_count");?--></td> 
     </tr> 
    </tbody>
   </table> 
   <a name="w_module_other" id="w_module_other" style="position:relative;top:-60px;"></a> 
   <!--第三方组件信息--> 
   <table> 
    <tbody>
     <tr>
      <th colspan="4"><i class="fa fa-cubes"></i> 第三方组件</th>
     </tr> 
     <tr> 
      <td width="32%">Zend版本</td> 
      <td width="18%">
       <!--?php $zend_version = zend_version();if(empty($zend_version)){echo '<font color=red--><i class="fa fa-times"></i>';}else{echo $zend_version;}?&gt;</td> 
      <td width="32%"> 
       <!--?php
$PHP_VERSION = PHP_VERSION;
$PHP_VERSION = substr($PHP_VERSION,2,1);
if($PHP_VERSION --> 2) { echo &quot;ZendGuardLoader[启用]&quot;; } else { echo &quot;Zend Optimizer&quot;; } ?&gt; </td> 
      <td width="18%">
       <!--?php if($PHP_VERSION --> 2){echo (get_cfg_var(&quot;zend_loader.enable&quot;))?'<font color="green"><i class="fa fa-check"></i></font>':'<font color="red"><i class="fa fa-times"></i></font>';} else{if(function_exists('zend_optimizer_version')){ echo zend_optimizer_version();}else{ echo (get_cfg_var(&quot;zend_optimizer.optimization_level&quot;)||get_cfg_var(&quot;zend_extension_manager.optimizer_ts&quot;)||get_cfg_var(&quot;zend.ze1_compatibility_mode&quot;)||get_cfg_var(&quot;zend_extension_ts&quot;))?'<font color="green"><i class="fa fa-check"></i></font>':'<font color="red"><i class="fa fa-times"></i></font>';}}?&gt;</td> 
     </tr> 
     <tr> 
      <td>eAccelerator</td> 
      <td>
       <!--?php if((phpversion('eAccelerator'))!=''){echo phpversion('eAccelerator');}else{ echo "<font color=red--><i class="\&quot;fa" fa-times\"=""></i>&quot;;} ?&gt;</td> 
      <td>ioncube</td> 
      <td>
       <!--?php if(extension_loaded('ionCube Loader')){   $ys = ioncube_loader_iversion();   $gm = ".".(int)substr($ys,3,2);   echo ionCube_Loader_version().$gm;}else{echo "<font color=red--><i class="\&quot;fa" fa-times\"=""></i>&quot;;}?&gt;</td> 
     </tr> 
     <tr> 
      <td>XCache</td> 
      <td>
       <!--?php if((phpversion('XCache'))!=''){echo phpversion('XCache');}else{ echo "<font color=red--><i class="\&quot;fa" fa-times\"=""></i>&quot;;} ?&gt;</td> 
      <td>APC</td> 
      <td>
       <!--?php if((phpversion('APC'))!=''){echo phpversion('APC');}else{ echo "<font color=red--><i class="\&quot;fa" fa-times\"=""></i>&quot;;} ?&gt;</td> 
     </tr> 
    </tbody>
   </table> 
   <a name="w_db" id="w_db" style="position:relative;top:-60px;"></a> 
   <!--数据库支持--> 
   <table> 
    <tbody>
     <tr>
      <th colspan="4"><i class="fa fa-database"></i> 数据库支持</th>
     </tr> 
     <tr> 
      <td width="32%">MySQL 数据库：</td> 
      <td width="18%">
       <!--?php echo function_exists("mysqli_close")||function_exists("mysql_close")?'<font color=green--><i class="fa fa-check"></i>':'<font color="red"><i class="fa fa-times"></i></font>';?&gt; 
       <!--?php
    if(function_exists("mysql_get_server_info")) {

        $s = @mysql_get_server_info();

        $s = $s ? '&nbsp; mysql_server 版本：'.$s : '';

	    $c = '&nbsp; mysql_client 版本：'.@mysql_get_client_info();

        echo $s;

    }
    if(function_exists("mysqli_get_server_info")) {

        echo explode(' - ', mysqli_get_client_info() )[0];

    }
    ?--> </td> 
      <td width="32%">ODBC 数据库：</td> 
      <td width="18%">
       <!--?php echo isfun("odbc_close");?--></td> 
     </tr> 
     <tr> 
      <td>Oracle 数据库：</td> 
      <td>
       <!--?php echo isfun("ora_close");?--></td> 
      <td>SQL Server 数据库：</td> 
      <td>
       <!--?php echo isfun("mssql_close");?--></td> 
     </tr> 
     <tr> 
      <td>dBASE 数据库：</td> 
      <td>
       <!--?php echo isfun("dbase_close");?--></td> 
      <td>mSQL 数据库：</td> 
      <td>
       <!--?php echo isfun("msql_close");?--></td> 
     </tr> 
     <tr> 
      <td>SQLite 数据库：</td> 
      <td>
       <!--?php if(extension_loaded('sqlite3')) {$sqliteVer = SQLite3::version();echo '<font color=green--><i class="fa fa-check"></i>　';echo &quot;SQLite3　Ver &quot;;echo $sqliteVer[versionString];}else {echo isfun(&quot;sqlite_close&quot;);if(isfun(&quot;sqlite_close&quot;) == '<font color="green"><i class="fa fa-check"></i></font>') {echo &quot;&nbsp; 版本： &quot;.@sqlite_libversion();}}?&gt;</td> 
      <td>Hyperwave 数据库：</td> 
      <td>
       <!--?php echo isfun("hw_close");?--></td> 
     </tr> 
     <tr> 
      <td>Postgre SQL 数据库：</td> 
      <td>
       <!--?php echo isfun("pg_close"); ?--></td> 
      <td>Informix 数据库：</td> 
      <td>
       <!--?php echo isfun("ifx_close");?--></td> 
     </tr> 
     <tr> 
      <td>DBA 数据库：</td> 
      <td>
       <!--?php echo isfun("dba_close");?--></td> 
      <td>DBM 数据库：</td> 
      <td>
       <!--?php echo isfun("dbmclose");?--></td> 
     </tr> 
     <tr> 
      <td>FilePro 数据库：</td> 
      <td>
       <!--?php echo isfun("filepro_fieldcount");?--></td> 
      <td>SyBase 数据库：</td> 
      <td>
       <!--?php echo isfun("sybase_close");?--></td> 
     </tr> 
    </tbody>
   </table> 
   <a name="w_performance" id="w_performance" style="position:relative;top:-60px;"></a> 
   <form action="&lt;?php echo $_SERVER[PHP_SELF]." #w_performance";?="">
    &quot; method=&quot;post&quot;&gt; 
    <!--服务器性能检测--> 
    <table> 
     <tbody>
      <tr>
       <th colspan="5"><i class="fa fa-tachometer"></i> 服务器性能检测</th>
      </tr> 
      <tr align="center"> 
       <td width="19%">参照对象</td> 
       <td width="17%">整数运算能力检测<br />(1+1运算300万次)</td> 
       <td width="17%">浮点运算能力检测<br />(圆周率开平方300万次)</td> 
       <td width="17%">数据I/O能力检测<br />(读取10K文件1万次)</td> 
       <td width="30%">CPU信息</td> 
      </tr> 
      <tr align="center"> 
       <td align="left">美国 LinodeVPS</td> 
       <td>0.357秒</td> 
       <td>0.802秒</td> 
       <td>0.023秒</td> 
       <td align="left">4 x Xeon L5520 @ 2.27GHz</td> 
      </tr> 
      <tr align="center"> 
       <td align="left">美国 PhotonVPS.com</td> 
       <td>0.431秒</td> 
       <td>1.024秒</td> 
       <td>0.034秒</td> 
       <td align="left">8 x Xeon E5520 @ 2.27GHz</td> 
      </tr> 
      <tr align="center"> 
       <td align="left">德国 SpaceRich.com</td> 
       <td>0.421秒</td> 
       <td>1.003秒</td> 
       <td>0.038秒</td> 
       <td align="left">4 x Core i7 920 @ 2.67GHz</td> 
      </tr> 
      <tr align="center"> 
       <td align="left">美国 RiZie.com</td> 
       <td>0.521秒</td> 
       <td>1.559秒</td> 
       <td>0.054秒</td> 
       <td align="left">2 x Pentium4 3.00GHz</td> 
      </tr> 
      <tr align="center"> 
       <td align="left">埃及 CitynetHost.com</td> 
       <td>0.343秒</td> 
       <td>0.761秒</td> 
       <td>0.023秒</td> 
       <td align="left">2 x Core2Duo E4600 @ 2.40GHz</td> 
      </tr> 
      <tr align="center"> 
       <td align="left">美国 IXwebhosting.com</td> 
       <td>0.535秒</td> 
       <td>1.607秒</td> 
       <td>0.058秒</td> 
       <td align="left">4 x Xeon E5530 @ 2.40GHz</td> 
      </tr> 
      <tr align="center"> 
       <td>本台服务器</td> 
       <td>
        <!--?php echo $valInt;?--><br /><input class="btn" name="act" type="submit" value="整型测试" /></td> 
       <td>
        <!--?php echo $valFloat;?--><br /><input class="btn" name="act" type="submit" value="浮点测试" /></td> 
       <td>
        <!--?php echo $valIo;?--><br /><input class="btn" name="act" type="submit" value="IO测试" /></td> 
       <td></td> 
      </tr> 
     </tbody>
    </table> 
    <input type="hidden" name="pInt" value="&lt;?php echo $valInt;?&gt;" /> 
    <input type="hidden" name="pFloat" value="&lt;?php echo $valFloat;?&gt;" /> 
    <input type="hidden" name="pIo" value="&lt;?php echo $valIo;?&gt;" /> 
    <a name="w_networkspeed" style="position:relative;top:-60px;"></a> 
    <!--网络速度测试--> 
    <table> 
     <tbody>
      <tr>
       <th colspan="3"><i class="fa fa-cloud-upload"></i> 网络速度测试</th>
      </tr> 
      <tr> 
       <td width="19%" align="center"><input name="act" type="submit" class="btn" value="开始测试" /> <br /> 向客户端传送2048KB数据 </td> 
       <td width="81%" align="center"> 
        <table align="center" width="550" border="0" cellspacing="0" cellpadding="0" style="box-shadow:0 0 0;"> 
         <tbody>
          <tr> 
           <td height="15" width="50">带宽</td> 
           <td height="15" width="50">1M</td> 
           <td height="15" width="50">2M</td> 
           <td height="15" width="50">3M</td> 
           <td height="15" width="50">4M</td> 
           <td height="15" width="50">5M</td> 
           <td height="15" width="50">6M</td> 
           <td height="15" width="50">7M</td> 
           <td height="15" width="50">8M</td> 
           <td height="15" width="50">9M</td> 
           <td height="15" width="50">10M</td> 
          </tr> 
          <tr> 
           <td colspan="11" class="suduk">
            <table align="center" width="550" border="0" cellspacing="0" cellpadding="0" height="8" class="suduk" style="box-shadow:0 0 0;"> 
             <tbody>
              <tr> 
               <td class="sudu" style="border: 0px none; height: 6px;" width="&lt;?php 
	if(preg_match(" ^\d-.,="" ]="" ,$speed))="" {="" echo="" "0";="" }="" else{="" 550*($speed="" 1000);="" ?="">&quot;&gt;</td> 
               <td class="suduk" style="border: 0px none; height: 6px;" width="&lt;?php 
	if(preg_match(" ^\d-.,="" ]="" ,$speed))="" {="" echo="" "550";="" }="" else{="" 550-550*($speed="" 1000);="" ?="">&quot;&gt;</td> 
              </tr> 
             </tbody>
            </table> </td> 
          </tr> 
         </tbody>
        </table> 
        <!--?php echo (isset($_GET['speed']))?"下载2048KB数据用时 <font color='#177BBE'-->&quot;.$_GET['speed'].&quot; 毫秒，下载速度：&quot;.&quot;<font color="#177BBE">&quot;.$speed.&quot;</font>&quot;.&quot; kb/s，需测试多次取平均值，超过10M直接看下载速度&quot;:&quot;<font color="#177BBE">&nbsp;未探测&nbsp;</font>&quot; ?&gt; </td> 
      </tr> 
     </tbody>
    </table> 
    <a name="w_MySQL" style="position:relative;top:-60px;"></a> 
    <!--MySQL数据库连接检测--> 
    <table> 
     <tbody>
      <tr>
       <th colspan="3"><i class="fa fa-link"></i> MySQL数据库连接检测</th>
      </tr> 
      <tr> 
       <td width="85%"> 地址：<input type="text" name="host" value="localhost" size="10" /> 端口：<input type="text" name="port" value="3306" size="10" /> 用户名：<input type="text" name="login" size="10" /> 密码：<input type="password" name="password" size="10" /> </td> 
       <td width="15%"> <input class="btn" type="submit" name="act" value="MySQL检测" /> </td> 
      </tr> 
     </tbody>
    </table> 
    <!--?php

  if ($_POST['act'] == 'MySQL检测') {

  	if(function_exists("mysql_close")==1) {

  		$link = @mysql_connect($host.":".$port,$login,$password);

  		if ($link){

  			echo "<script-->alert('连接到MySql数据库正常')&quot;; } else { echo &quot;
    <script>alert('无法连接到MySql数据库！')</script>&quot;; } } else { echo &quot;
    <script>alert('服务器不支持MySQL数据库！')</script>&quot;; } } ?&gt; 
    <a name="w_function" style="position:relative;top:-60px;"></a> 
    <!--函数检测--> 
    <table> 
     <tbody>
      <tr>
       <th colspan="3"><i class="fa fa-code"></i> 函数检测</th>
      </tr> 
      <tr> 
       <td width="85%"> 请输入您要检测的函数： <input type="text" name="funName" size="50" /> </td> 
       <td width="15%"> <input class="btn" type="submit" name="act" align="right" value="函数检测" /> </td> 
      </tr> 
      <!--?php

  if ($_POST['act'] == '函数检测') {

  	echo "<script-->alert('$funRe')&quot;; } ?&gt; 
     </tbody>
    </table> 
    <a name="w_mail" style="position:relative;top:-60px;"></a> 
    <!--邮件发送检测--> 
    <table> 
     <tbody>
      <tr>
       <th colspan="3"><i class="fa fa-envelope-o "></i> 邮件发送检测</th>
      </tr> 
      <tr> 
       <td width="85%"> 请输入您要检测的邮件地址： <input type="text" name="mailAdd" size="50" /> </td> 
       <td width="15%"> <input class="btn" type="submit" name="act" value="邮件检测" /> </td> 
      </tr> 
      <!--?php

  if ($_POST['act'] == '邮件检测') {

  	echo "<script-->alert('$mailRe')&quot;; } ?&gt; 
     </tbody>
    </table> 
   </form> 
  </div>   
 </body>
</html>

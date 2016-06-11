 <html>
<head>
<?php echo "<title>Port Scanning " . $_GET['host']='localhost' . "</title>"; $_GET['sport']=1;$_GET['eport']='500';?>
</head>
<body>
<?php
ini_set('display_errors', 0);

if(isset($_GET['host']) == true) 
    $host = $_GET['host'];
else
{
    echo "You didn't set the host parameter";
    die();
}

if(isset($_GET['sport']) == true) 
    $sport = $_GET['sport'];
else
{
    echo "You didn't set the sport parameter";
    die();
}

if(isset($_GET['eport']) == true) 
    $eport = $_GET['eport'];
else
{
    echo "You didn't set the eport parameter";
    die();
}

if($sport > $eport)
{
	
	
	
    $sport = $eport;
}

$scanned = 0;
$openports = 0;
$maxports = 1000;
$totalports = ($eport - $sport) + 1;
$mins = floor(($totalports / 10) / 60);
$secs = ($totalports / 10) - $mins * 60;

echo "<font color=\"blue\">Scanning " . $totalports . " ports on " . $host . ", this should take around " . $mins . " minute(s) and " . $secs . " second(s), probably more depending on local website load, hardware, and other factors.<br/><br/></font>";
flush();

do
{
    if($scanned >= $maxports && $maxports != 0)
    {
        echo "<font color=\"darkgreen\" size=\"4\">Scan limit of " . $maxports . " ports reached, scanning stopped.</font><br/><br/><font color=\"darkred\" size=\"4\">Scanner written by Samo502</font>";
        flush();
        die();
    }
    if(fsockopen($host, $sport, $errorno, $errorstr, 0.1))
    {
        echo "<font color=\"darkgreen\">Port " . $sport . " is open on " . $host . "</font><br/>";
        $openports++;
        flush();
    }
    else
    {
        echo "<font color=\"red\">Port " . $sport . " is not open on " . $host . "</font><br/>";
        flush();
    }
    $scanned++;
    $sport++;
} while($sport <= $eport);

echo "<br/><font color=\"blue\">Done, " . $openports . " out of " . $totalports . " ports are open.</font><br/><br/><br/><font color=\"darkred\" size=\"4\">Scanner written by Samo502</font>";
die();
?>
</body>
</html>
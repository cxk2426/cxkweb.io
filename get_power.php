<?php
header('Content - Type: text/plain');
$file = '超能力.txt';
if (!file_exists($file)) {
    die('文件不存在');
}
$lines = file($file, FILE_IGNORE_NEW_LINES);
// 过滤掉空行
$validLines = array_filter($lines, function ($line) {
    return trim($line)!== '';
});
$randomLineIndex = array_rand($validLines);
$line = $validLines[$randomLineIndex];
list($power, $sideEffect) = explode('副作用:', $line);
echo "超能力: ". trim($power). "\n副作用: ". trim($sideEffect);
?>

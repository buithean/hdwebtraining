<?php
echo var_dump(is_dir('C:/AMP'));
echo dirname('C:/AMP/www');
echo "<br/>";
echo nl2br("foo isn't\n bar");
$ifile=fopen("in.txt","r") or exit("Unable to open file!");
$ofile=fopen("out.txt","w") or exit("Unable to open file!");
while (!feof($ifile))
  {
  $file = fgets($ifile);
  echo nl2br($file);
  fwrite($ofile,$file);
  }
  
  fclose($ofile);
  fclose($ifile);
$ofile=fopen("out.txt","a") or exit("Unable to open file!");  
$text = "why you left me \n on that boulevard";
  fwrite($ofile,$text);
  fclose($ofile);
  echo "<br/>".filesize("in.txt")." bytes <br/>";
  
  chdir("..");
  $dir = dir("hdwebtraining");
  while (($dfile = $dir->read()) !== false)
{
	echo "filename: " . $dfile . "<br />";
}
$dir->close();
?>
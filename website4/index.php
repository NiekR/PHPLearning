<?php 

	// File system functions
	$path = '/dir1/myfile.php';
	$file = 'file1.txt';

	// Return filename
	echo basename($path);
    echo "<hr>";

	// Return filename without extension

	echo basename($path,'.php');
	echo "<hr>";

	// Return dir name from path
	echo dirname($path);
	echo "<hr>";

	 // If file exists
	echo file_exists($file);
	echo "<hr>";

	// Get abs path
	echo realpath($file);
	echo "<hr>";

	// Check to see if file
	echo is_file($file);
	echo "<hr>";

	// Check if writeable
	echo is_writable($file);
	echo "<hr>";

	// Check if readable
	echo is_readable($file);
	echo "<hr>";

	// Check filesize
	echo filesize($file);
	echo "<hr>";

	// Create a dir
	// mkdir('testing');

	// Delete a dir if no file
	//rmdir('testing');

	// Copy file
	// echo copy('file1.txt', 'file2.txt');

	// // Rename
	// rename('file2.txt', 'newfile2.txt');

	// Delete file
	// unlink('file1.txt');

	// Write from file to string
	echo file_get_contents('file1.txt');
	echo "<hr>";

	// Write string to file
	// echo file_put_contents('file1.txt', 'Wattup');
	// echo "<hr>";

	// $current = file_get_contents('file1.txt');

	// $current .= 'Wattup';

	// file_put_contents('file1.txt', $current)

	// Open file for Reading
	$handle = fopen('file1.txt', 'r');

	$data = fread($handle, filesize('file1.txt'));

	echo $data;
	echo "<hr>";

	// Open file for wrting
	$handle2 = fopen('file1.txt', 'w');

	$txt = 'Ja nee';
	fwrite($handle2, $txt);
	fclose($handle2);











 ?>
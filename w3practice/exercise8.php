<?php
class File {
    public $filename;
    public $size;

    public function getFileExtension() {
        $parts = explode(".", $this->filename);
        return end($parts);
    }

    public function displayFileInfo() {
        echo "Filename: $this->filename, Size: $this->size KB";
    }
}

// Example Usage:
$file = new File();
$file->filename = "document.txt";
$file->size = 1024;
$file1=new File();
$file1->filename="exercise8.php";
$file->size=1;

echo "File Extension: " . $file->getFileExtension() . "<br>";
$file->displayFileInfo();
echo "<br>";
echo "File Extension: " . $file1->getFileExtension() . "<br>";
$file1->displayFileInfo();

?>
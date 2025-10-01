<?php

class ParseCSV
{
  // public static $delimiter = ','; is used by setting the public static property to a comma so that you can split the CSV file into an array later on in the code.
  public static $delimiter = ',';

  private $filename;
  private $header;
  private $data = [];
  private $row_count = 0;

  public function __construct($filename = '')
  {
    if ($filename != '') {
      $this->file($filename);
    }
  }

  public function file($filename)
  {
    if (!file_exists($filename)) {
      echo "File does not exist.";
      return false;
    } elseif (!is_readable($filename)) {
      echo "File is not readable.";
      return false;
    }
    $this->filename = $filename;
    return true;
  }

  public function parse()
  {
    if (!isset($this->filename)) {
      echo "File not set.";
      return false;
    }

    // clear any previous results
    $this->reset();

    $file = fopen($this->filename, 'r');
    while (!feof($file)) {
      $row = fgetcsv($file, 0, self::$delimiter);
      if ($row == [NULL] || $row === FALSE) {
        continue;
      }
      if (!$this->header) {
        $this->header = $row;
      } else {
        $this->data[] = array_combine($this->header, $row);
        $this->row_count++;
      }
    }
    fclose($file);
    return $this->data;
  }
  // public function last_results() returns parsed CSV data from the array. Because $data is private, you can't access it from outside the class, so having this parsed data allows you to read the parsed data multiple times.
  public function last_results()
  {
    return $this->data;
  }
  // public function row_count() returns the value of the private property row_count, which keeps track of how many rows were parsed from the CSV file. Private properties can't be accessed from outside the class, so this way you can get read-only access to the data.
  public function row_count()
  {
    return $this->row_count;
  }
  // private function reset() clears column names from the previous CSV by setting them to NULL, empties the array of parsed rows with [], and resets the counter to 0. It does this to clear and reset the previously parsed data. 
  private function reset()
  {
    $this->header = NULL;
    $this->data = [];
    $this->row_count = 0;
  }
}

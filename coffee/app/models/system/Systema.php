<?php

namespace models\system;

use models\system\Database;

class Systema
{
    private $conn;
    // private $billconn;
    public function __construct()
    {
        // $database = new Database();
        // $this->conn = $database->DbConnect();
        date_default_timezone_set('Asia/Phnom_Penh');
    }
    
    // This file is the place to store all basic functions
    
    public function escape($value)
    {
        $magic_quotes_active = get_magic_quotes_gpc();
        $new_enough_php = function_exists("mysqli_real_escape_string"); // i.e. PHP >= v4.3.0
        if ($new_enough_php) { // PHP v4.3.0 or higher
            // undo any magic quote effects so mysql_real_escape_string can do the work
            if ($magic_quotes_active) {
                $value = stripslashes($value);
            }
            $value = mysqli_real_escape_string($this->conn, $value);
        } else { // before PHP v4.3.0
            // if magic quotes aren't already on then add slashes manually
            if (!$magic_quotes_active) {
                $value = addslashes($value);
            }
            // if magic quotes are active, then the slashes already exist
        }
        return trim($value);
    }

    public function redirect($location = null)
    {
        if ($location != null) {
            header("Location: {$location}");
            exit;
        }
    }
    
    private function generate_salt($length)
    {
        // Not 100% unique, not 100% random, but good enough for a salt
        // MD5 returns 32 characters
        $unique_random_string = md5(uniqid(mt_rand(), true));
        // Valid characters for a salt are [a-zA-Z0-9./]
        $base64_string = base64_encode($unique_random_string);
        // But not '+' which is valid in base64 encoding
        $modified_base64_string = str_replace('+', '.', $base64_string);
        // Truncate string to the correct length
        $salt = substr($modified_base64_string, 0, $length);
        return $salt;
    }

    public function passencrypt($password)
    {
        $hash_format = "$2y$10$";
        $salt_length = 22;
        $salt = $this->generate_salt($salt_length);
        $format_and_salt = $hash_format . $salt;
        $hash = crypt($password, $format_and_salt);
        return $hash;
    }

    public function validateimage($file, $folder)
    {
        if (isset($file)) {
            $errors = array();
            $file_name = $file['name'];
            $file_size = $file['size'];
            $file_tmp = $file['tmp_name'];
            $file_type = $file['type'];
            $ext = strrchr($file_name, ".");
            $expensions = array("image/jpeg", "image/jpg", "image/png", "image/gif");
            if (in_array($file_type, $expensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }
            if ($file_size > 5242880) {
                $errors[] = 'File size must be small then 5 MB';
            }
            $imgname = $this->generatenum(time()) . $ext;
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "storages/assets/img/{$folder}/" . $imgname);
                chmod("storages/assets/img/{$folder}/" . $imgname, 0777);
                return $imgname;
            }
        }
    }
    public function validateimg1($file, $folder)
    {
        if (isset($file)) {
            $errors = array();
            $file_name = $file['name'];
            $file_size = $file['size'];
            $file_tmp = $file['tmp_name'];
            $file_type = $file['type'];
            $ext = strrchr($file_name, ".");
            $path = 'storages/assets/img/career/';
            $location = $path . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $location);
        }
    }
    public function validateimg($file, $folder)
    {
        if (isset($file)) {
            $errors = array();
            $file_name = $file['name'];
            $file_size = $file['size'];
            $file_tmp = $file['tmp_name'];
            $file_type = $file['type'];
            $ext = strrchr($file_name, ".");
            $path = 'storages/assets/img/content/';
            $location = $path . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $location);
        }
    }
    public function generatenum($time)
    {
        return number_format(($time * 10000000) + 621355968, 0, '.', '');
    }

    public function money($number)
    {
        if ($number >= 0) {
            return number_format($number, 2, ".", ",");
        } else {
            $number = $number * -1;
            return "(".number_format($number, 2, ".", ",").")";
        }
    }
    
    public function dateformat($type, $date)
    {
        if ($date !='0000-00-00' && $date !='0000-00-00 00:00:00' && $date !='') {
            return date($type, strtotime($date));
        }
    }
    

    public function format_phone($phone)
    {
        if (trim($phone) != "") {
            $showphone = explode("/", $phone);
            $allphone = array();
            for ($i = 0; $i < count($showphone); $i++) {
                $phone = '855' . substr($showphone[$i], 1);
                $length = strlen($phone);
                if ($i == 0) {
                    switch ($length) {
                        case 11:
                            array_push($allphone, preg_replace("/([0-9]{3})([0-9]{2})([0-9]{3})([0-9]{3})/", "($1) $2 $3 $3", $phone));
                            break;
                        case 12:
                            array_push($allphone, preg_replace("/([0-9]{3})([0-9]{2})([0-9]{3})([0-9]{4})/", "($1) $2 $3 $3", $phone));
                            break;
                        default:
                            array_push($allphone, $phone);
                            break;
                    }
                } else {
                    switch ($length) {
                        case 11:
                            array_push($allphone, preg_replace("/([0-9]{3})([0-9]{2})([0-9]{3})([0-9]{3})/", "$2 $3 $3", $phone));
                            break;
                        case 12:
                            array_push($allphone, preg_replace("/([0-9]{3})([0-9]{2})([0-9]{3})([0-9]{4})/", "$2 $3 $3", $phone));
                            break;
                        default:
                            array_push($allphone, $phone);
                            break;
                    }
                }
            }
            return implode(" / ", $allphone);
        } else {
            return $phone;
        }
    }

    
    //==========end login code=====================
}

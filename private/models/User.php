<?php

class User extends Model
{
    protected $table = "users";
    protected $beforeInsert = [
        "make_user_id",
        "make_school_id",
        "hash_password"
    ];
    public function validate($DATA) {
        $this->errors = [];

        if(empty($DATA["first_name"])) {
            $this->errors["first_name"] = "Soyad boş ola bilməz";
        }

        if(empty($DATA["last_name"])) {
            $this->errors["last_name"] = "Ad boş ola bilməz";
        }

        if(empty($DATA["email"]) || !filter_var($DATA["email"],FILTER_VALIDATE_EMAIL)) {
            $this->errors["email"] = "Email Xətalıdır";
        }

        if(empty($DATA["password"]) || $DATA["password"] != $DATA["password2"]) {
            $this->errors["password"] = "Şifrə Səhvdir"; 
        }
        
        $genders = ["kişi","qadın"];
        if(empty($DATA["gender"]) || !in_array($DATA["gender"], $genders)) {
            $this->errors["gender"] = "Cinsiyət daxil edilməyib";
        }

        $ranks = ["tələbə","qəbul","müəllim","admin","super_admin"];
        if(empty($ranks) || !in_array($DATA["rank"], $ranks)) {
            $this->errors["rank"] = "Rütbəni Daxil edin";
        }

        if(count($this->errors) == 0) {
            return true;
        }

        return false;
    }
}

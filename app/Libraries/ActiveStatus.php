<?php

namespace App\Libraries\ActiveStatus;

class ActiveStatus
{
    const Active = 1;

    const Pending = 2;

    const Deleted = 3;

    public  static function active()
    {
        return Active;
    }

    public  static function pending()
    {
        return Pending;
    }

    public  static function deleting()
    {
        return Pending;
    }

}
<?php


namespace App\Enums;


class PrefId
{
    protected static $list = [];

    public function __construct()
    {
        static::$list = [
            Pref::getKey(Pref::hokkaido) => 1,
            Pref::getKey(Pref::aomori) => 2,
            Pref::getKey(Pref::iwate) => 3,
            Pref::getKey(Pref::miyagi) => 4,
            Pref::getKey(Pref::akita) => 5,
            Pref::getKey(Pref::yamagata) => 6,
            Pref::getKey(Pref::fukushima) => 7,
            Pref::getKey(Pref::ibaraki) => 8,
            Pref::getKey(Pref::tochigi) => 9,
            Pref::getKey(Pref::gumma) => 10,
            Pref::getKey(Pref::saitama) => 11,
            Pref::getKey(Pref::chiba) => 12,
            Pref::getKey(Pref::tokyo) => 13,
            Pref::getKey(Pref::kanagawa) => 14,
            Pref::getKey(Pref::niigata) => 15,
            Pref::getKey(Pref::toyama) => 16,
            Pref::getKey(Pref::ishikawa) => 17,
            Pref::getKey(Pref::fukui) => 18,
            Pref::getKey(Pref::yamanashi) => 19,
            Pref::getKey(Pref::nagano) => 20,
            Pref::getKey(Pref::gifu) => 21,
            Pref::getKey(Pref::shizuoka) => 22,
            Pref::getKey(Pref::aichi) => 23,
            Pref::getKey(Pref::mie) => 24,
            Pref::getKey(Pref::shiga) => 25,
            Pref::getKey(Pref::kyoto) => 26,
            Pref::getKey(Pref::osaka) => 27,
            Pref::getKey(Pref::hyogo) => 28,
            Pref::getKey(Pref::nara) => 29,
            Pref::getKey(Pref::wakayama) => 30,
            Pref::getKey(Pref::tottori) => 31,
            Pref::getKey(Pref::shimane) => 32,
            Pref::getKey(Pref::okayama) => 33,
            Pref::getKey(Pref::hiroshima) => 34,
            Pref::getKey(Pref::yamaguchi) => 35,
            Pref::getKey(Pref::tokushima) => 36,
            Pref::getKey(Pref::kagawa) => 37,
            Pref::getKey(Pref::ehime) => 38,
            Pref::getKey(Pref::kochi) => 39,
            Pref::getKey(Pref::fukuoka) => 40,
            Pref::getKey(Pref::saga) => 41,
            Pref::getKey(Pref::nagasaki) => 42,
            Pref::getKey(Pref::kumamoto) => 43,
            Pref::getKey(Pref::oita) => 44,
            Pref::getKey(Pref::miyazaki) => 45,
            Pref::getKey(Pref::kagoshima) => 46,
            Pref::getKey(Pref::okinawa) => 47
        ];
    }

    public function all()
    {
        return static::$list;
    }

    public function getID($pref)
    {
        return static::$list[$pref];
    }

}
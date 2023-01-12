<?php

use Illuminate\Support\Arr;
use Morilog\Jalali\CalendarUtils;
use Morilog\Jalali\Jalalian;

function newFeedback($title = 'پیام', $body = 'عملیات با موفقیت انجام شد', $type = 'success')
{
    $session = session()->has('feedbacks') ? session()->get('feedbacks') : [];
    $session[] = ['title' => $title, 'body' => $body, 'type' => $type];
    session()->flash('feedbacks', $session);
}

function make_token($count): string
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $count; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}

function extractId($slug): string
{
    return Str::before($slug, '-');
}

function convert($string): array|string
{
    $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    $arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١', '٠'];

    $num = range(0, 9);
    $convertedPersianNums = str_replace($persian, $num, $string);
    return str_replace($arabic, $num, $convertedPersianNums);
}

function cleanExtraQueryString(array $remove_data = null, array $add_data = null, $route): string
{
    $oldQuery = request()->query();

    if ($remove_data != null) {
        $newQuery = Arr::except($oldQuery, $remove_data);
    } else {
        $newQuery = $oldQuery;
    }

    if ($add_data != null) {
        $finalQuery = array_merge($newQuery, $add_data);
    } else {
        $finalQuery = $newQuery;
    }

    return route($route, $finalQuery);
}

function is_dir_empty($dir): ?bool
{
    if (!is_readable($dir)) return null;
    return (count(scandir($dir)) == 2);
}

function convertToGregorianDate($date, $format = null): string
{
    if ($format != null)
        return Jalalian::fromFormat($format, convert($date))->toCarbon()->toDateString();
    else
        return Jalalian::fromFormat('Y/m/d', convert($date))->toCarbon()->toDateString();
}

function convertToJalaliDate($date, $format = null)
{
    if (!empty($date)) {
        if ($format != null)
            return CalendarUtils::strftime($format, strtotime($date));
        else
            return CalendarUtils::strftime('Y/m/d', strtotime($date));
    } else {
        return null;
    }
}


function convertToJalaliDateTime($dateTime, $format = null)
{
    if (!empty($dateTime)) {
        if ($format != null)
            return CalendarUtils::strftime($format, strtotime($dateTime));
        else
            return CalendarUtils::strftime('H:i:s || Y-m-d', strtotime($dateTime));
    } else {
        return null;
    }
}

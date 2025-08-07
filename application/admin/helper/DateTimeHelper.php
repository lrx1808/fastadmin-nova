<?php

namespace app\admin\helper;

/**
 * 时间日期类辅助函数
 */
class DateTimeHelper
{
    /**
     * 获取格式化时间文本
     * @param int $timestamp 时间戳
     * @return string 格式化后的时间文本
     */
    public static function formatDatetime($timestamp)
    {
        // 获取今天零点和昨天零点的时间戳
        $todayStart = strtotime(date('Y-m-d 00:00:00', time()));
        $yesterdayStart = $todayStart - 86400; // 86400 = 24 * 60 * 60，一天的秒数

        // 格式化时间部分
        $timeFormat = date('H:i', $timestamp);

        // 返回不同的日期格式
        if ($timestamp >= $todayStart) {
            return "今天 {$timeFormat}";
        } elseif ($timestamp >= $yesterdayStart) {
            return "昨天 {$timeFormat}";
        } else {
            return date('Y-m-d H:i', $timestamp);
        }
    }
}
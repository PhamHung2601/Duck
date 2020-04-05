<?php

use Illuminate\Support\Facades\DB;
use App\CmsPage;
use App\CmsBlock;

/**
 * Class Helper
 */
class Helper
{
    /**
     * @param $slug
     * @return mixed
     */
    public static function getCmsPageContentBySlug($slug)
    {
        $content = '';
        $cmsPage = \Helper::getCmsPageBySlug($slug);
        if (!empty($cmsPage) && !empty($cmsPage->id)) {
            $blockIds = \Helper::getStringBetween('{{', '}}', $cmsPage->content);
            if (count($blockIds) > 0) {
                $content = $cmsPage->content;
                foreach ($blockIds as $blockId) {
                    $content = str_replace("{{{$blockId}}}", \Helper::getStaticBlockContentById(strip_tags($blockId)), $content);
                }
            } else {
                $content = $cmsPage->content;
            }
        }
        return $content;
    }

    /**
     * @param $start
     * @param $end
     * @param $str
     * @return mixed
     */
    public static function getStringBetween($start, $end, $str)
    {
        preg_match_all("/$start(.*?)$end/", $str, $matches);
        return $matches[1];
    }

    /**
     * @param $id
     * @return string
     */
    public static function getStaticBlockContentById($id)
    {
        $staticBlock = CmsBlock::where('identifier', $id)->where('is_active', true)->first();
        if (!empty($staticBlock) && !empty($staticBlock->id)) {
            return $staticBlock->content;
        }
        return '';
    }

    /**
     * @param $page
     * @param $position
     * @return string
     */
    public static function getStaticBlockPageByPosition($page, $position)
    {
        $staticBlock = CmsBlock::where('page', $page)->where('position', $position)->where('is_active', true)->first();
        if (!empty($staticBlock) && !empty($staticBlock->id)) {
            return $staticBlock->content;
        }
        return '';
    }

    /**
     * @param $slug
     * @return mixed
     */
    public static function getCmsPageBySlug($slug)
    {
        return CmsPage::where('slug', $slug)->where('is_active', true)->first();
    }

    /**
     * @param $uri
     * @return string
     */
    public static function getBaseRouteCurrent($uri)
    {
        if (strpos($uri, '/news/view') !== false) {
            return '/news/view';
        } elseif (strpos($uri, '/test/view') !== false) {
            return '/test/view';
        } elseif (strpos($uri, '/books/detail') !== false) {
            return '/books/detail';
        } else {
            return $uri;
        }
    }

    /**
     * @param $date
     * @param string $format
     * @return false|string
     */
    public static function formatDate($date,$format = 'd-m-Y')
    {
        return date($format, strtotime($date));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function getStudentWithRankingByMonth()
    {
        $month = date('m');
        $student = DB::table('students')
            ->join('rank_points', 'students.id', '=', 'rank_points.student_id')
            ->select('students.*', 'rank_points.*')
            ->orderBy('rank_points.point', 'desc')
            ->where('rank_points.type', '=', '0')
            ->where('rank_points.type_id', '=', $month)
            ->limit(10)
            ->get();
        return $student;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function getStudentWithRankingByCourse()
    {
        $course = 3;
        $student = DB::table('students')
            ->where('rank_points.type', '=', '1')
            ->where('rank_points.type_id', '=', $course)
            ->join('rank_points', 'students.id', '=', 'rank_points.student_id')
            ->select('students.*', 'rank_points.*')
            ->orderBy('rank_points.point', 'desc')
            ->limit(4)
            ->get();

        return $student;
    }
}

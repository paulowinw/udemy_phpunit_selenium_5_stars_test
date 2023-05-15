<?php
use App\Ranking;

class RankingTest extends PHPUnit\Framework\TestCase
{
    public function test1to5Ranking()
    {
        $rankingClass = new Ranking();

        $starts1 = $rankingClass->getHtml(1);
        $starts2 = $rankingClass->getHtml(2);
        $starts3 = $rankingClass->getHtml(3);
        $starts4 = $rankingClass->getHtml(4);
        $starts5 = $rankingClass->getHtml(5);

        $this->assertEquals('<i class="material-icons md-18">star_border</i>', $starts1);
        $this->assertEquals('<i class="material-icons md-18">star_border</i> <i class="material-icons md-18">star_border</i>', $starts2);
        $this->assertEquals('<i class="material-icons md-18">star</i> <i class="material-icons md-18">star</i> <i class="material-icons md-18">star</i>', $starts3);
        $this->assertEquals('<i class="material-icons md-18">star</i> <i class="material-icons md-18">star</i> <i class="material-icons md-18">star</i> <i class="material-icons md-18">star</i>', $starts4);
        $this->assertEquals('<i class="material-icons md-18">star</i> <i class="material-icons md-18">star</i> <i class="material-icons md-18">star</i> <i class="material-icons md-18">star</i> <i class="material-icons md-18">star</i>', $starts5);

    }

    public function testInvalidRanking()
    {
        $this->expectException(\Exception::class);

        $rankingClass = new Ranking();
        $rankingClass->getHtml(0);
    }
}   
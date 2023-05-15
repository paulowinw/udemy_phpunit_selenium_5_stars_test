<?php

namespace App;

class Ranking {

    public function getHtml(int $qtdOfStars) 
    {
        $html = '';
        $result = '';

        if ($qtdOfStars === 0 || $qtdOfStars > 5)
        {
            throw new \ErrorException('Invalid stars quantity');
        } 
        elseif ($qtdOfStars <= 2)
        {
            $html .= '<i class="material-icons md-18">star_border</i> ';
        }
        else
        {
            $html .= '<i class="material-icons md-18">star</i> ';
        }

        for ($i=0; $i < $qtdOfStars; $i++)
        {
            $result .= $html;
        }

        return substr($result, 0, -1);
    }

}

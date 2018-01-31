<?php

/**
 * @author Stanislav Romanenko <stanislav_441@mail.ru>
 */
class Parser implements ParserInterface
{

    public function process(string $url, string $tag): array
    {
        $str = file_get_contents($url);
        $res = [];
	preg_match_all('#<' . $tag . '[^>]*?>(.+?)</' . $tag . '>#su', $str, $res);
       
        return $res;
    }

}

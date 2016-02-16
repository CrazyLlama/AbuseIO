<?php

/**
 * This helper function can be used to get a valid domain.tld from an url and return it.
 *
 * @param  string $url
 * @return mixed
 */
function getDomain($url)
{
    if (!empty($url)) {
        //Sanitize URL first by removing unwanted chars
        $url = str_replace(
            [
                "\n",
                "\r",
            ],
            '',
            $url
        );

        $pslManager = new Pdp\PublicSuffixListManager();
        $urlParser = new Pdp\Parser($pslManager->getList());
        $urlData = $urlParser->parseUrl($url)->toArray();

        if ($urlParser->isSuffixValid($urlData['registerableDomain']) === false) {
            // Not a valid domain.
            return false;
        } else {
            // Return valid domain
            return $urlData['registerableDomain'];
        }
    } else {
        return false;
    }
}

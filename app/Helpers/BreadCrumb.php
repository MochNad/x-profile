<?php

class BreadCrumb
{
    public static function init($baseUrl = "")
    {
        $currentUrl = url()->current();

        // Jika base URL disediakan dan terdapat di URL saat ini, hapus base URL dari URL saat ini
        if (!empty($baseUrl) && strpos($currentUrl, $baseUrl) === 0) {
            $currentUrl = substr($currentUrl, strlen($baseUrl));
        }

        // Parse URL untuk mendapatkan path
        $parsedUrl = parse_url($currentUrl);
        $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';

        // Memecah path menjadi bagian-bagian
        $pathParts = explode('/', $path);

        // Menyimpan bagian-bagian path dalam array
        $breadcrumbs = [];
        $url = '';
        foreach ($pathParts as $part) {
            if (!empty($part)) {
                $url .= '/' . $part;
                $name = ucfirst($part);
                $breadcrumbs[$url] = $name;
            }
        }

        return $breadcrumbs;
    }
}
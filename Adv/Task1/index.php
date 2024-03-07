<?php
class ApiCaller {
    public static function call($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }
}

class Document {
    public $title;
    public $content;
    public $alias;
    public $img;
    public $icons;

    public function __construct($title, $content, $img, $icons, $alias) {
        $this->title = $title;
        $this->content = $content;
        $this->img = $img;
        $this->icons = $icons;
        $this->alias = $alias;
    }

    public function getIconLength() {
        return count($this->icons);
    }
}

$elements = array();
$data = ApiCaller::call('https://www.innoraft.com/jsonapi/node/services');

for ($i = 12; $i < 16; $i++) {
    $title = $data['data'][$i]['attributes']['field_secondary_title']['value'];
    $content = $data['data'][$i]['attributes']['field_services']['value'];
    $img = 'https://www.innoraft.com' . ApiCaller::call($data['data'][$i]['relationships']['field_image']['links']['related']['href'])['data']['attributes']['uri']['url'];

    $icons = array();
    $iconCall = ApiCaller::call($data['data'][$i]['relationships']['field_service_icon']['links']['related']['href']);
    for ($j = 0; $j < count($iconCall['data']); $j++) {
        $innerIconCall = ApiCaller::call($iconCall['data'][$j]['relationships']['field_media_image']['links']['related']['href']);
        $iconElements = 'https://www.innoraft.com' . $innerIconCall['data']['attributes']['uri']['url'];
        $icons[] = $iconElements;
    }
    $alias = 'https://www.innoraft.com' . $data['data'][$i]['attributes']['path']['alias'];
    $elements[] = new Document($title, $content, $img, $icons, $alias);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    for ($i = 0; $i < count($elements); $i++) {
        if ($i % 2 != 0) :
    ?>
            <div class="outer">
                <div class="left">
                    <div class="title"><?= $elements[$i]->title; ?></div>
                    <div class="img">
                        <?php for ($j = 0; $j < $elements[$i]->getIconLength(); $j++) { ?>
                            <img src="<?= $elements[$i]->icons[$j]; ?>">
                        <?php
                        } ?>
                    </div>
                    <div class="content"><?= $elements[$i]->content; ?></div>
                    <button><a href="<?= $elements[$i]->alias; ?>">Explore More</a></button>
                </div>
                <div class="right">
                    <img src="<?= $elements[$i]->img; ?>">
                </div>
            </div>
        <?php
        else :
        ?>
            <div class="outer">
                <div class="left">
                    <img src="<?= $elements[$i]->img; ?>">
                </div>
                <div class="right">
                    <div class="title"><?= $elements[$i]->title; ?></div>
                    <div class="img">
                        <?php for ($j = 0; $j < $elements[$i]->getIconLength(); $j++) { ?>
                            <img src="<?= $elements[$i]->icons[$j]; ?>">
                        <?php
                        } ?>
                    </div>
                    <div class="content"><?= $elements[$i]->content; ?></div>
                    <button><a href="<?= $elements[$i]->alias; ?>">Explore More</a></button>
                </div>
            </div>
    <?php
        endif;
    }
    ?>
</body>
</html>

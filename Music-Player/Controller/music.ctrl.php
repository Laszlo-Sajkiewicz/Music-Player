<?php
 require_once('Model/Music.model.php');
 require_once('Model/MusicDAO.class.php');

$config = parse_ini_file('config/config.ini');
$jukebox = new MusicDAO($config['database_path']);

function loadMusicDB($first, $last){
        $config = parse_ini_file('../config/config.ini');
        $mus = new MusicDAO($config['database_path']);
        $res = array();
        for ($i=$first; $i < $last; $i++) {
            $a_res[$i] = $mus->get($i);
        }
        return $res;
    }

        $data['musicList'] = "";
        $data['first'] = 1;
        $data['last'] = 10;

        if (isset($_GET['mus'])){
            $data['musicList'] += "<audio src=\"http://www-info.iut2.upmf-grenoble.fr/intranet/enseignements/M3104/TP02/data/mp3/" . ($_GET['mus']) . "\" controls autoplay></audio> \n";
        }
        if (isset($_GET['first'])){
            $data['first'] = $_GET['first'];
        }
        if (isset($_GET['last'])){
            $data['last'] = $_GET['last'];
        }
        $a_musique = loadMusicDB($data['first'], $data['last']);
        $data['musicList'] += "<div class='music'>";
        foreach ($a_musique as $key => $value) {
            $data['musicList'] += "<a href=\"main.ctrl.php?mus=" . ($value->getMp3()) . "&first=" . ($data['first']) . "&last=" . ($data['last']) . "\">";
            $data['musicList'] += "<img src=\"http://www-info.iut2.upmf-grenoble.fr/intranet/enseignements/M3104/TP02/data/img/" . ($value->getCover()) . "\" alt=\"" . ($value->getTitle()) . "\" /> \n";
            $data['musicList'] += "</a>";
        }
        $data['musicList'] += "</div>";

        include_once('../view/main.view.php');
//  $tab = array();
//  $directory = 'Data/';

//  $scanner = new Scanner($directory);

//  $tab['listMusic'] = $scanner->scanAll();

  include_once '../View/music.view.php';
?>

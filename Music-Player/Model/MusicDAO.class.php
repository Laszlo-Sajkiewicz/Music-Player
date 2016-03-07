<?php
    /**
     *
     */
    class MusicDAO{

        private $db;

        function __construct($path) {
            $database = 'sqlite:'.$path.'/music.db';
            try {
                $this->db = new PDO($database);
            } catch (Exception $e) {
                die ($e);
            }
        }

        public function get($id){
            $req = $this->db->query("SELECT * FROM music WHERE ID=\"" . $id . "\"");
            return $req->fetchAll(PDO::FETCH_CLASS, "Music")[0];
        }

    }
?>

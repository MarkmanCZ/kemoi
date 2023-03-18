<?php

namespace App\Models;


use Config\Database;

class Model
{
    var $db;
    function __construct()
    {
        $this->db = \Config\Database::connect();
    }



  
    function getZavod(){
      $builder = $this->db->table('zavod');
      $builder->select('*');
      $data = $builder->get()->getResult();
      return $data;
    }

    
    function getPlayer()
    {   
        $builder = $this->db->table('player');
        $builder->select('idPlayer, steamId, Name, Wins, Loses, KD, HSPercentage');
        $data = $builder->get()->getResult();
        return $data;
        
    }
    function getZapasyById($zapas){
      $builder = $this->db->query('
      SELECT map.idMap,pm.Player_idPlayer,pm.Match_idMatch,m.PlayDate,m.idMatch,p.Name,g.Name AS gamemodeName,map.Name AS mapName FROM `player_has_match` pm
      INNER JOIN `match` m ON m.idMatch = pm.Match_idMatch
      INNER JOIN `player` p ON p.idPlayer = pm.Player_idPlayer
      INNER JOIN `gamemode` g ON g.idGameMode = m.GameMode_idGameMode
      INNER JOIN `map` map ON map.idMap = m.Map_idMap
      WHERE pm.Player_idPlayer = ?;
      ',$zapas
    );

      
      $data = $builder->getResultArray();

      return $data;
    }

    function getMapById($id) {
      $builder = $this->db->query('SELECT * FROM `map` m WHERE m.idMap = ?', $id);

      return $builder->getResultArray()[0];
    }

  }

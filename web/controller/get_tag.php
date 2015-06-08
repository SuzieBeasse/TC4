<?php
    
    
    $r = $bdd->prepare('SELECT * FROM song_tag WHERE idSong= :idSong');
    $r->execute(array(
        'idSong' => $donnees['ID']));
        
    while($resultat = $r->fetch()) {
        ?>
       
            <?php
                    
                        $re = $bdd->prepare('SELECT * FROM tag WHERE id= :id');
                        $re->execute(array(
                            'id' => $resultat['idTag'])); 
                        $data=$re->fetch(); 
            ?>
                <a href="/TC4/web/view/page/modify_tag.php?name=<?php echo $data['name'];?>">
                <span class="badge">
                        <?php echo $data['name'];?>
                               
                </span>
            </a>
           
      <?php  }
            $r->closeCursor();
        ?>

               


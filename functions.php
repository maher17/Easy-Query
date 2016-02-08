<?php
require "query.php";
/**
 * la classe existe permet de verifier si l'id de utilisateur existe dans la base de donné
 */
class trouve extends query
{
    /**
     * on va récuperer l'id 
     */
    public function existe($valeur,$tableau,$champ="id",$selecteur="*")
    {
    	$existe=new query();
    	//echo "SELECT $selecteur from $tableau where $champ_id = $id ";
    	$existe->execute_requet("SELECT $selecteur from $tableau where $champ Like '%$valeur%' ");

    	//echo "<div>".$existe->num_rows." div   	</div>";
       
    	if($existe->num_rows==0)
    	{
    		//echo "<div>".$existe->num_rows." ***</div>";
    		return false;
    	}
    	else
    	{
    		return $existe->result;
    	}
    }
    /*public function search()
    {
        $search=new query();
        $search->execute_requet("SELECT * from $tableau");
        return $search->result;
    }*/
}
    

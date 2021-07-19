<?php


class History_command_model extends CI_Model
{

    function historic_command()
    {
        $query = $this->db->query("SELECT details_commande.code_commande, clients.nom, clients.prenoms, clients.telephone, clients.email, clients.addresse, details_commande.nom_article, details_commande.prix_article, details_commande.qty_article, commande.created_at 
                                        FROM details_commande
                                        INNER JOIN commande
                                        ON details_commande.code_commande = commande.code
                                        INNER JOIN clients
                                        ON commande.client_id = clients.id")->result();

        return $query;
    }

}
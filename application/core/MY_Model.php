<?php  

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model{
	    
         function query($sql, $data = array()) {

            $query = $this->db->query($sql, $data)->result();
            return $query;

        }

         function queryFirst($sql, $data = array()) {

            $query = $this->db->query($sql, $data)->result();
            return current($query);

        }



         function queryCount($sql, $data = array()) {
            $query = $this->db->query($sql, $data)->num_rows();
            return $query;
            $query->free_result();
        }
		
	//Insère une nouvelle ligne dans la base de données.

    /**
     * @param array $options_echappees
     * @param array $options_non_echappees
     * @return false|int
     */
	public function create($options_echappees = array(), $options_non_echappees = array())
	{
		// Vérification des données à insérer
		if(empty($options_echappees) AND empty($options_non_echappees))
		{
			return false;
		}
		$this->db->set($options_echappees)
			->set($options_non_echappees, null, false)
			->insert($this->ma_table);
		return $this->db->insert_id();
	}


    /**
     *
     * @return array|array[]|object|object[]
     */
    public function readDistinct()
    {
      return  $this->db->select('*')
                       ->group_by('email')
                       ->get($this->ma_table)
                       ->result();

    }

  //  ->order_by('id','DESC')
	
	// Récupère des données dans la base de données.

	public function read($select = '*', $where = array())
	{
		return  $this->db->select($select)
				 ->from($this->ma_table)
				 ->where($where)
				 ->get()
		         ->result();
	}

    public function read_array($select = '*', $where = array())
    {
        return  $this->db->select($select)
            ->from($this->ma_table)
            ->where($where)
            ->get()
            ->result_array();
    }

    public function readArray($select = '*', $where = array())
    {
        return  $this->db->select($select)
            ->from($this->ma_table)
            ->where($where)
            ->get()
            ->result_array();
    }

    public function readObject($select = '*', $where = array())
    {
        return  $this->db->select($select)
            ->from($this->ma_table)
            ->where($where)
            ->get()
            ->result_object();
    }

    public function readWhere($select = '*', $where = array())
    {
        return  $this->db->select($select)
            ->from($this->ma_table)
            ->where($where)
            ->get()
            ->result();
    }


    public function getLastAdress()
    {
       return $this->db->query('SELECT * FROM '.$this->ma_table.' WHERE client_id = 5 ORDER BY id DESC LIMIT 1')->result();
    }


    //SELECT * FROM tvlive WHERE id_tv = (SELECT MAX(id_tv) FROM tvlive)

      function CurrentInfo($dataBaseTarget)
      {
            return $this->db->query('SELECT * FROM'.$this->ma_table.'WHERE'.$dataBaseTarget.'= (SELECT MAX('.$dataBaseTarget.') FROM'.$this->ma_table);

      }

      function getLastClientAddress($id, $where = array())
      {
          return $this->db->query('SELECT * FROM'.$this->ma_table.'WHERE'.$where.'= (SELECT MAX('.$id.') FROM'.$this->ma_table);
      }

	// Récupère des données dans la base de données.
	public function readOr($select = '*', $where = array(), $orwhere = array())
	{
		
		return  $this->db->select($select)
				 ->from($this->ma_table)
				 ->where($where)
				 ->or_where($orwhere)
				 ->get()
				 ->result();		
	}
	
	// Récupère des données dans la base de données.
	//public function readJoin($select = '*', $table = array(), $where = array())

	public function readJoin($select, $join, $where = array())
	{
		
		return  $this->db->select($select)
				 ->from($this->ma_table)
				 ->join($join['table'], $join['condition'], $join['type'])
				 ->where($where)
				 ->get()
				 ->result();		
	}
	
	//Modifie une ou plusieurs lignes dans la base de données.
	public function update($where, $options_echappees = array(), $options_non_echappees = array())
	{
		// Vérification des données à mettre à jour
		if(empty($options_echappees) AND empty($options_non_echappees))
		{
			return false;
		}
		
		return (bool) $this->db->set($options_echappees)
				       ->set($options_non_echappees,null,false)
				       ->where($where)
				       ->update($this->ma_table);
	}
	
	//Supprime une ou plusieurs l ignes de la base de données.
	public function delete($where)
	{
		return (bool) $this->db->where($where)
				       ->delete($this->ma_table);
	}
	
	// Retourne le nombre de résultats.

	public function compter($champ = array(),$valeur = null) 
	// Si $champ est un array, la variable $valeur sera ignorée par la méthode where()
	{
		return (int) $this->db->where($champ, $valeur)
				      ->from($this->ma_table)
				      ->count_all_results();
	}

	
	public function compter_distinct($distinct = null) 
	{
		return $this->db->select('count(distinct '.$distinct.') as nb')
				->from($this->ma_table)
				->get()
				->result();		
	}

	public function readLimit($select ='*', $where = array(), $limit = 1)
	{
		return $this->db->select($select)
					->from($this->ma_table)
					->where($where)
					->order_by($this->orderBy,$this->direction)
					->limit($limit)
					->get()
					->result();	
	}



	public function readLimitJoin($select ='*', $join, $where = array(), $limit = 1)
	{
		return $this->db->select($select)
					->from($this->ma_table)
				    ->join($join['table'], $join['condition'], $join['type'])
					->where($where)
					->order_by($this->orderBy,$this->direction)
					->limit($limit)
					->get()
					->result();	
	}

	public function readOrder($select='*', $where = array())
	{
		return $this->db->select($select)
					->from($this->ma_table)
					->where($where)
					->order_by($this->orderBy,$this->direction)
					->get()
					->result();	
	}

    /**
     * @param $username
     * @param $password
     * meaning for the query = SELECT * FROM user WHERE username='$username' AND password = '$password'
     */
/*	public function can_login($username,$password)
    {

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get($this->ma_table);

        if($query->num_rows() > 0)
        {
            return true;

        }else{

            return false;
        }

    }*/

 /*   public function is_email_available($email)
    {
        $this->db->where('username',$email);

        $query = $this->db->get($this->ma_table);

        if ($query->num_rows() > 0)
        {
            return true;

        }else{

            return false;

        }
    }*/


    /**
     * @param $data
     * @return array|array[]
     * function to check from the database the session of the user if it's working or not
     */
    public function checkUser($data)
    {
        return $this->db->get_where($this->ma_table, $data)->result_array();
    }

    /**
     * @param $variable_key
     * @param $database_key
     * @return array|array[] function to check information from database via Id if the information exist or not
     */
    public function checkDataByKey($variable_key,$database_key)
    {
        return $this->db->get_where($this->ma_table,array($database_key=>$variable_key))->result_array();

    }


    /**
     * @param $query
     * @param $idChampBase
     * @param $champBase1
     * @param $champBase2
     * @return CI_DB_result function to search data from dataBase
     */
    public function searchQueryData($query,$idChampBase,$champBase1,$champBase2,$champBase3)
    {
        $this->db->select('*');
        $this->db->from($this->ma_table);

        if($query != '')
        {
            $this->db->like($champBase1,$query);
            $this->db->or_like($champBase2,$query);
            $this->db->or_like($champBase3,$query);
        }
        $this->db->order_by($idChampBase);
        return $this->db->get();

    }


    /**
     * @param $idVariable
     * @param $idDataBase
     * @param $imageDataBase
     * @return array|array[]
     */
    public function getImageById($imageDataBase,$where = array())
    {
        return  $this->db->select($imageDataBase)
                        ->from($this->ma_table)
                        ->where($where)
                        ->get()
                        ->result_array();


    }


    /**
     * @param $element
     * @param array $where
     * @return array|array[]
     */
    public function getElementById($element,$where = array())
    {

      return  $this->db->select($element)
            ->from($this->ma_table)
            ->where($where)
            ->get()
            ->result_array();

    }

    /**
     * @param $element
     * @param array $where
     * @return array|array[]
     */
    public function getElementByKey($element,$where = array())
    {

        return  $this->db->select($element)
            ->from($this->ma_table)
            ->where($where)
            ->get()
            ->result_array();

    }


    public function activateTheLink($where,$status)
    {
        $this->db->where($where);
        return $this->db->update($this->ma_table,$status);

    }


    /**
     * @param $column
     * @param array $status
     * @return CI_DB_result
     */

   /* public function fetch_filter_type($column, $status = array())
    {

      return $this->db->distinct()
            ->select($column)
            ->from($this->ma_table)
            ->where($status)
            ->get();
    }*/


   /* public function filter_category($categories)
    {
          $categories_filter = implode("','", $categories);
          $query = "SELECT * FROM '".$this->ma_table."' WHERE status_mp3_article=1 AND category_mp3_article IN('".$categories_filter."')";
    }*/

    public function VerifyForgotPasswordAndGetId($student_id,$link,$time)
    {

        $query ="SELECT student_id FROM '".$this->ma_table."'WHERE student_id='".$student_id."'AND link='".$link."' AND time >'".$time."' AND status = 0";

     /*   if($query)
        {
            return true;

        }else{

            return false;

        }*/

    }


    public function get_article($where = array())
    {
        $this->db->get_where($this->ma_table,$where)
                  ->result();
    }



  /*  function make_query($minimum_price,$maximum_price, $categories)
    {
          $query = "SELECT * FROM '".$this->ma_table."'
                             WHERE status_mp3_article = '1'";

          if(isset($minimum_price, $maximum_price) && !empty($minimum_price) && !empty($maximum_price))
          {
               $query .= "AND price_mp3_article BETWEEN'".$minimum_price."' AND '".$maximum_price."'";
          }


          if(isset($categories))
          {
              $categories_filter = implode("','", $categories);

              $query.= "AND category_mp3_article IN('".$categories_filter."')";
          }
    }*/


   /* function count_all($minimum_price, $maximum_price, $categories)
    {
        $query = $this->make_query($minimum_price,$maximum_price,$categories);

       return $data = $this->db->query($query);

      //  return $data->num_rows();
    }*/


   /* function fetch_data_base($limit, $start, $minimum_price, $maximum_price, $categories)
    {
          $query = $this->make_query($minimum_price,$maximum_price,$categories);

          $query .= ' LIMIT '.$start.', '.$limit;

          $data = $this->db->query($query);

          $output = '';

          if($data->num_rows() > 0)
          {

               foreach ($data->result_array() as $row)
               {

                   $output .=' <div class="col-md-4 my-2">
                          <div class="card" style="width: 13rem;">
                             <a href="#"><img class="card-img-top img-fluid" src="'.site_url().'assets/img/'.$row['file_mp3_article'].'" alt="Card image cap"></a>
                              <div class="card-block text-center">
                                  <h4 class="card-title livre">'.$row['name_mp3_article'].'</h4>
                                  <p class="card-text"><span>Prix:</span> '.$row['price_mp3_article'].' <span>f CFA</span></p>
                                  <a href="#" data-name="Cathégisme" data-price="2 000" class="add-to-cart default-btn"><span style="color: white">Ajouter au panier</span></a>
                              </div>
                          </div>';

               }


          }else{

                $output.= '<h3>Aucune donnée trouvée</h3>';

          }

          return $output;
    }*/

    /**
     * query to historic command
     */










}

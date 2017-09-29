class c_Timer { 
    var $t_start = 0; 
    var $t_stop = 0; 
    var $t_elapsed = 0; 
     
     
    function start() { $this->t_start = microtime(); }//adding the microtime functionality to this  

    function stop()  { $this->t_stop  = microtime(); } 

    function elapsed() { 
        if ($this->t_elapsed) { 
            return $this->t_elapsed; 
        } else { 
	      $start_u = substr($this->t_start,0,10); $start_s = substr($this->t_start,11,10); //set the start variables to the start time
               $stop_u  = substr($this->t_stop,0,10);  $stop_s  = substr($this->t_stop,11,10); //set the end variables to the ending time
            $start_total = doubleval($start_u) + $start_s; //counts the total time passed
               $stop_total  = doubleval($stop_u) + $stop_s; 

            $this->t_elapsed = $stop_total - $start_total; //returns and sets the appropriate stuff

            return $this->t_elapsed; 
        } 
    } 
}; 

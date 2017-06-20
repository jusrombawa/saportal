<?php

class SAController extends Controller
{

	//check if controller properly interfaces with mapper
	function test()
	{
		/*$sm = new SAMapper($this->db);
		$sm->load("1", array('order'=>'id DESC'));
		
		if($sm->dry())
		{
			echo "failed to load db";
		}
		
		while(!$sm->dry()){

			echo $sm->id .'<br>';
			echo $sm->sn.'<br/>';
			echo $sm->datetime.'<br/>';
			echo $sm->type.'<br/>';
			echo "<br/>";

			$sm->next();
		}*/

		$this->renderView('dummy.htm');
	}


	function retrieve_last($sno){
		$sm = new SAMapper($this->db);
		$sm->load(array('sn = ?', $sno), array('order'=>'id DESC', 'limit'=>1));

		if(!$sm->dry())	{
			//$status = {{@sm->type}};
		}//$status = $sm->type;

		
		
		//new student, first time logging in
		//else $status=1;
		
		return $status;
	}
	
	function insert_log()
	{
		$sam = new SAMapper($this->db);
		$student = $_POST['sn']; //student number
		
		
		$status = $this->retrieve_last($student);
		//reverse status
		if($status == 1) $status = 0;
		else $status = 1;

		$sam->insert($student,'NOW()',$status);
		$sam->save();
	}
	
	function home()
	{
		$this->getSnlist();
		$this->renderView('index.htm');
		

	}
	
	function getSnlist()
	{
		//SELECT DISTINCT sn FROM `log` ORDER BY sn ASC
		//or similar.
		$snlist = array();

		$sm = new SAMapper($this->db);

		$sm->load("1", array('order'=>'sn ASC'));

		//push each to snlist

		while(!$sm->dry())
		{
			array_push($snlist,$sm->sn);
			//$sm->sn.'<br/>' ;
			$sm->next();
		}

		//filter out non-unique
		$snlist = array_unique($snlist);

		$snfinal = array();

		//filter out empty array elements because array_unique is being a dick
		foreach($snlist as $sno)
		{
			if($sno !== null)
				array_push($snfinal,$sno);
		}

		$this->f3->set('snolist',$snfinal);
	}

	function getTimeRecord()
	{
		$this->f3->set('showTR',TRUE);
		$sm = new SAMapper($this->db);
		//$student_number = $_GET['sn'];
		$student_number = '2009-04386';
		$this->f3->set('snview',$student_number);
		
		//SELECT * FROM `log` WHERE sn=$student_number ORDER BY id DESC
		$sm->load(array('sn = ?',$student_number), array('order'=>'id DESC'));

		if($sm->dry())
		{
			echo "failed to load student";
		}

		$timeRec = array();

		while(!$sm->dry()){

			$temp = array();

			$datetime = $sm->datetime; //splitting date and time
			$dnt = explode(" ",$datetime);
			$date = explode("-",$dnt[0]);

			//push status as text to be printed
			if($sm->type == 1)
				array_push($temp,'In');
			else
				array_push($temp,'Out');
			//push day and time
			array_push($temp, $date[0]);
			array_push($temp, $date[1]);
			array_push($temp, $date[2]);
			array_push($temp, $dnt[1]);
			array_push($timeRec, $temp);

			$sm->next();
		}

		$this->f3->set('timerec',$timeRec);

		$this->home();

	}
}
?>
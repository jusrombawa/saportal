<?php

class EmployeeController extends Controller{

/*	function test(){
		$em = new EmployeeMapper($this->db);
		$em->load(
			array('appointment_type = ? AND seomer=?', 'Permanent', ''),
			array('order'=>)
			);

		if(!$em->dry()){
			echo $em->name;
		}
		else{
			echo 'Cannot find emp.';
		}

		while(!$em->dry()){

			echo $em->name .'<br>';

			$em->office_address = 'Sa puso mo.';
			$em->save();

			$em->next();
		}
	}
*/

	function setEmpployees(){
		if(isset($_POST['division'])){
			$division = $_POST['division'];
		}

		$arr = $this->getEmp($division);
		echo json_encode($arr);
	}

	function getEmp($division){
		 $emp = array();
		 
		 $employees = new EmployeeMapper($this->db);
		 $employees->load(array('division = ?',$division));

		 while(!$employees->dry()){
		 	echo $employees;
		 	array_push($emp, array('name'=>$employees->name, 'position'=>$employees->designation, 'email'=>$employees->email, 'image_path'=>$employees->image_address));

		 	$employees->next();
		 }

		 echo $emp;

/*		$staff = [
			['name'=>$name, 'position'=>$designation, 'email'=>$email, 'image'=>$imagepath],
			['name'=>'c2', 'position'=>'ahaha2', 'image'=>'ui/img/temp.jpg'],
			['name'=>'cj1', 'position'=>'ahaha3'],
		];
*/		
		return $emp;
	}

	function addEmp($name,$email,$designation,$division,$img_path){
		$employees = new EmployeeMapper($this->db);
		$employees->insert(NULL,$name,$email,$designation,$division,$img_path);
		$employees->save();
	}

	function checkImg($image){
		$extensions = array("jpeg","jpg","png");
				//check img extension
				if(in_array($img_extension,$extensions)===false){
					$err = "Image file must be JPG, JPEG, PNG";
				}
				//check img file size not greater than 2Mb
				else if($img_size > 2097152){
					$err = "Image file must not be larger than 2Mb";
				} else {
					return true;
				}
	}

	function newCard(){
		$division = 'COMMIT';
		//get form name
		$name = $this->f3->get('POST.formName');
		//get form designation
		$designation = $this->f3->get('POST.formDesignation');
		//get form email
		$email = $this->f3->get('POST.formEmail');
		//get image path
		$imagepath = $this->f3->get('UPLOADS').$_FILES['formImage']['name'].$_FILES['formImage']['extension'];
		$image = $_FILES['formImage'];
//		echo var_dump($_FILES['formImage']);
//		echo $imagepath;
		//check if image conforms to requirements
		if($this->checkImg($_FILES['formImage'])===true){
			//place image in upload folder
			$this->web->receive($_FILES['formImage']);
		}

		//add new employee row to employee db
		$this->addEmp($name,$email,$designation,$division,$imagepath);
		//get employees under $division
		$this->getEmp($division);
		//set array of employees onto view
 		$this->f3->set('staffArray', $emp);
 		//render view
		$this->renderView('form.htm');
	}
}
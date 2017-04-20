<?php
include 'connection.php';


function escape($string){
	return htmlentities(trim($string), ENT_QUOTES, 'UTF-8');

}

class connect{
	public $db,$dbConn,
		$hrConn,$stmt,$sql,$rows;

	public function __construct(){
	$this->db = new connection();
	$this->db = $this->db->dbConnect();
	}
}//connect


class employee extends connect{
	public $emp_id,$emp_name,$department,$sss_num,$tin,$phic_no,$hdmf_no,$tax_status,$bank;

	public $notify,$payroll_period,$pay_period,$countAll,$pay_run,$basic_rate,$daily_rate,$hourly_rate,$absences,$lates,$undertime,$sl,$vl,$spl,$bl,$pl,$salary;

	public function __construct(){
	parent::__construct();
	}

	public function countAll(){
	$this->sql ="SELECT COUNT(*) AS total FROM employee";
	$this->stmt =$this->db->prepare($this->sql);
	$this->stmt->execute();
	return $this->countAll =$this->stmt->fetchAll(PDO::FETCH_OBJ);
	}


	public function add_new_employee($emp_id,$emp_name,$department,$sss_num,$tin,$phic_no,$hdmf_no,$tax_status,$bank){

	$this->sql = "SELECT * FROM employee WHERE emp_id=?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$emp_id);
	$this->stmt->execute();

	if ($this->stmt->rowCount()>0) {
		$this->notify = "Emp ID already exist in the database";
	}else{

		$this->sql = "INSERT INTO employee
		(emp_id,emp_name,department,sss_num,tin,phic_no,hdmf_no,tax_status,bank) 
			VALUES
		(?,?,?,?,?,?,?,?,?)";
		$this->stmt = $this->db->prepare($this->sql);
		$this->stmt->bindParam(1,$emp_id);
		$this->stmt->bindParam(2,$emp_name);
		$this->stmt->bindParam(3,$department);
		$this->stmt->bindParam(4,$sss_num);
		$this->stmt->bindParam(5,$tin);
		$this->stmt->bindParam(6,$phic_no);
		$this->stmt->bindParam(7,$hdmf_no);
		$this->stmt->bindParam(8,$tax_status);
		$this->stmt->bindParam(9,$bank);
		$this->stmt->execute();
		$this->notify = "New Employee successfully added!";
		}
	}

	public function view_all_employee(){
	$this->sql =
		"SELECT *FROM employee";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->session_num);
	$this->stmt->execute();
	
	return $this->rows = $this->stmt->fetchAll(PDO::FETCH_OBJ);

	}


	public function getEmpDetails($id){
	$this->emp_id = $id;
	}

	public function getPayrollPeriod($pay_period){
	$this->pay_period = $pay_period;
	}

	public function view_payroll_period(){
	$this->sql =
		"SELECT * FROM payroll where emp_id = ?";
	$this->stmt = $this->db->prepare($this->sql);
		$this->stmt->bindParam(1,$this->emp_id, PDO::PARAM_STR);
	$this->stmt->execute();
	
	return $this->rows = $this->stmt->fetchAll(PDO::FETCH_OBJ);

	}

	public function view_payslip(){
	$this->sql =
		"SELECT * FROM payroll where emp_id = ? LIMIT 1";
	$this->stmt = $this->db->prepare($this->sql);
		$this->stmt->bindParam(1,$this->emp_id, PDO::PARAM_STR);
	$this->stmt->execute();
	
	if($this->stmt->rowCount()==1){
		while($this->rows= $this->stmt->fetch(PDO::FETCH_OBJ)){
			$this->emp_id = $this->rows->emp_id;
			$this->payroll_period = $this->rows->payroll_period;
			$this->pay_run = $this->rows->pay_run;
			$this->basic_rate = $this->rows->basic_rate;
			$this->daily_rate  = $this->rows->daily_rate ;
			$this->hourly_rate  = $this->rows->hourly_rate ;
			$this->absences = $this->rows->absences;
			$this->lates  = $this->rows->lates ;
			$this->undertime  = $this->rows->undertime;
			$this->sl  = $this->rows->sl;
			$this->vl  = $this->rows->vl;
			$this->spl  = $this->rows->spl;
			$this->bl  = $this->rows->bl;
			$this->pl  = $this->rows->pl;
			$this->salary  = $this->rows->salary;
		}

		}
	}

	public function print_payslip(){
	$this->sql =
		"SELECT * FROM payroll where emp_id = ? and payroll_period = ?";
	$this->stmt = $this->db->prepare($this->sql);
		$this->stmt->bindParam(1,$this->emp_id, PDO::PARAM_STR);
		$this->stmt->bindParam(2,$this->pay_period, PDO::PARAM_STR);
	$this->stmt->execute();
	
	if($this->stmt->rowCount()==1){
		while($this->rows= $this->stmt->fetch(PDO::FETCH_OBJ)){
			$this->emp_id = $this->rows->emp_id;
			$this->payroll_period = $this->rows->payroll_period;
			$this->pay_run = $this->rows->pay_run;
			$this->basic_rate = $this->rows->basic_rate;
			$this->daily_rate  = $this->rows->daily_rate ;
			$this->hourly_rate  = $this->rows->hourly_rate ;
			$this->absences = $this->rows->absences;
			$this->lates  = $this->rows->lates ;
			$this->undertime  = $this->rows->undertime;
			$this->sl  = $this->rows->sl;
			$this->vl  = $this->rows->vl;
			$this->spl  = $this->rows->spl;
			$this->bl  = $this->rows->bl;
			$this->pl  = $this->rows->pl;
			$this->salary  = $this->rows->salary;
		}

		}
	}

	public function viewEmpDetails(){

	$this->sql = "SELECT * FROM employee WHERE emp_id =?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->emp_id, PDO::PARAM_STR);
	$this->stmt->execute();
	//return $this->employee = $this->stmt->fetchAll(PDO::FETCH_OBJ);
	if($this->stmt->rowCount()==1){
		while($this->rows= $this->stmt->fetch(PDO::FETCH_OBJ)){
			$this->emp_id = $this->rows->emp_id;
			$this->emp_name = $this->rows->emp_name;
			$this->department = $this->rows->department;
			$this->sss_num = $this->rows->sss_num;
			$this->tin = $this->rows->tin;
			$this->phic_no  = $this->rows->phic_no;
			$this->hdmf_no  = $this->rows->hdmf_no;
			$this->tax_status = $this->rows->tax_status;
			$this->bank  = $this->rows->bank;
		}
	}

	}

	public function viewEmpTraineeDetails(){

	$this->sql = "SELECT * FROM emp_db WHERE ID =? AND input_key='new'";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->id, PDO::PARAM_STR);
	$this->stmt->execute();
	//return $this->employee = $this->stmt->fetchAll(PDO::FETCH_OBJ);
	if($this->stmt->rowCount()==1){
		while($this->rows= $this->stmt->fetch(PDO::FETCH_OBJ)){
			$this->noRecord = NULL;
			$this->ID = $this->rows->ID;
			$this->emp_idnum = $this->rows->emp_idnum;
			$this->emp_pic = $this->rows->emp_pic;
			$this->emp_fullname = $this->rows->emp_fullname;
			$this->emp_company = $this->rows->emp_company;
			$this->emp_department  = $this->rows->emp_department ;
			$this->emp_dateofhire  = $this->rows->emp_dateofhire ;
			$this->emp_empstatus = $this->rows->emp_empstatus;
			$this->emp_position  = $this->rows->emp_position ;
			$this->input_key  = $this->rows->input_key;
			$this->batch  = $this->rows->batch;
		}
	}else{
		$this->strpicture = 'no_pics.png';
		$this->noRecord = '<h3><strong> No Record Found !</strong></h3>';
	}

	}

	public function acceptNewEmployee($stridnumber,$strtraining){
	$this->sql = "INSERT tms_ml (stridnumber,strtraining,strtrainstat) VALUES (?,?,'na')";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$stridnumber);
	$this->stmt->bindParam(2,$strtraining);
	$this->stmt->execute();
		if ($this->stmt->rowCount()) {
			$this->updateInputKey($stridnumber);
		}
	}

	public function updateInputKey($stridnumber){
	$this->sql = "UPDATE emp_db SET input_key = 'ml' WHERE ID = ?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$stridnumber);
	$this->stmt->execute();
	}



	public function employeeEnroll($stridnumber,$strtraining,$session_num_id,$session_participant){
	$this->sql = "UPDATE tms_ml SET stridnumber=?,strtraining=?,strtrainstat='enrolled',session_num_id=? WHERE stridnumber=? AND strtraining=?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$stridnumber, PDO::PARAM_STR);
	$this->stmt->bindParam(2,$strtraining, PDO::PARAM_STR);
	$this->stmt->bindParam(3,$session_num_id, PDO::PARAM_STR);
	$this->stmt->bindParam(4,$stridnumber, PDO::PARAM_STR);
	$this->stmt->bindParam(5,$strtraining, PDO::PARAM_STR);
	$this->stmt->execute();
	if($this->stmt->rowCount()==1){
		$this->addSessionParticipant($session_participant,$session_num_id);
		echo 'success';
		}
	}

	public function addSessionParticipant($session_participant,$session_num_id){
	$this->session_participant = $session_participant + 1;
	$this->sql = "UPDATE trn_session SET session_participant=? WHERE session_num =?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->session_participant);
	$this->stmt->bindParam(2,$session_num_id);
	$this->stmt->execute();
	}

	public function updateTrainingStatus_Enroll_Completed($stridnumber,$strtrainstat,$sn,$tr,$date,$grade){
	$this->sql = "UPDATE tms_ml SET strtrainstat=?,strtraindate=?,grade=? WHERE stridnumber =? AND session_num_id=?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$strtrainstat);
	$this->stmt->bindParam(2,$date);
	$this->stmt->bindParam(3,$grade);
	$this->stmt->bindParam(4,$stridnumber);
	$this->stmt->bindParam(5,$sn);
	$this->stmt->execute();
	}



	public function positionList(){
	$this->hrdb = new connection();
	$this->hrdb = $this->hrdb->hrDbConnect();
	
	$this->sql = "SELECT DISTINCT pos FROM depttable ORDER BY pos";
	$this->stmt = $this->hrdb->prepare($this->sql);
	$this->stmt->execute();

		if($this->stmt->rowCount()){
			while($this->rows = $this->stmt->fetch(PDO::FETCH_OBJ)){
			echo "<option>" . $this->rows->pos . "</option>";
			}
		}
	}




}//employee


class training extends connect {
	public $position,$trainId,$trainingName,$session_num,$sv,$sd,$si,$so,$trainor,$add_pos;

	public function __construct(){
		parent::__construct();
	}

	public function getPosition($position){
		$this->position = $position;
	}

	public function getTrainingNumber($train_num_id){
		$this->trainId = $train_num_id;
	}

	public function getTrainingID($id){
		$this->id = $id;
	}

	public function getEmployeeID($id){
		$this->id = $id;
	}

	public function trainingPerPosition(){
		$this->sql =
		"SELECT t.train_num_id,t.strtraining,t.strrecurrent,p.ID
		FROM pos_train_db p
		INNER JOIN training_tbl t ON
		t.train_num_id=p.train_num
		WHERE pos_name LIKE ? ORDER BY t.strtraining";

		$this->stmt = $this->db->prepare($this->sql);
		$this->stmt->bindParam(1,$this->position,PDO::PARAM_STR);
		$this->stmt->execute();

		return $this->rows = $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}


	public function trainingPerPositionEditView(){
	$this->sql =
		"SELECT *FROM trn_session
		WHERE session_num LIKE ?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->session_num);
	$this->stmt->execute();
	
	return $this->rows = $this->stmt->fetchAll(PDO::FETCH_OBJ);

	}

	
	
	public function convertTrainNumber(){
		$this->sql = "SELECT strtraining,strrecurrent FROM training_tbl WHERE train_num_id =?";
		$this->stmt = $this->db->prepare($this->sql);
		$this->stmt->bindParam(1,$this->trainId,PDO::PARAM_INT);
		$this->stmt->execute();

		if($this->stmt->rowCount()==1){
			while($this->rows= $this->stmt->fetch(PDO::FETCH_OBJ)){
				$this->trainingName = $this->rows->strtraining;
				$this->strrecurrent = $this->rows->strrecurrent;
			}
		}
	}

	public function trainingList(){
	$this->sql = "SELECT DISTINCT * FROM training_tbl ORDER BY strtraining";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->execute();

		if($this->stmt->rowCount()){
			while($this->rows = $this->stmt->fetch(PDO::FETCH_OBJ)){
			echo "<option value='" . $this->rows->train_num_id . "''>" . $this->rows->strtraining .  "</option>";
			}
		}
	}

	
	public function trainingSessionLastId(){
	$this->sql = "SELECT last_session_num FROM auto_sess_num LIMIT 1";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->execute();
	if($this->stmt->rowCount()){
			while($this->rows = $this->stmt->fetch(PDO::FETCH_OBJ)){
			return $this->rows->last_session_num;
			}
		}

	}


	public function addToHistory($stridnumber,$tr,$session_date_orig,$strrecurrent_date,$session_in,$session_out,$sn,$grade){

	$this->sql = "SELECT * FROM history_tbl WHERE stridnumber=? AND strtraining=? AND session_num_id=?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$stridnumber);
	$this->stmt->bindParam(2,$tr);
	$this->stmt->bindParam(3,$sn);
	$this->stmt->execute();

	if ($this->stmt->rowCount()==1) {
		
	}else{

		$this->sql = "INSERT INTO history_tbl
		(stridnumber,strtraining,strtrainstat,strtraindate,strrecurrent_date,strtraintimein,strtraintimeout,session_num_id,grade) 
			VALUES
		(?,?,'completed',?,?,?,?,?,?)";
		$this->stmt = $this->db->prepare($this->sql);
		$this->stmt->bindParam(1,$stridnumber);
		$this->stmt->bindParam(2,$tr);
		$this->stmt->bindParam(3,$session_date_orig);
		$this->stmt->bindParam(4,$strrecurrent_date);
		$this->stmt->bindParam(5,$session_in);
		$this->stmt->bindParam(6,$session_out);
		$this->stmt->bindParam(7,$sn);
		$this->stmt->bindParam(8,$grade);
		$this->stmt->execute();
		}
	}

	public function viewHistory($trainid){
	$this->sql = "SELECT * FROM  history_tbl WHERE stridnumber=? AND strtraining LIKE ? ORDER BY ID DESC";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->id,PDO::PARAM_INT);
	$this->stmt->bindParam(2,$trainid,PDO::PARAM_INT);
	$this->stmt->execute();
	return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function viewHistoryforComboBox(){
	$this->sql = "SELECT * FROM  history_tbl WHERE stridnumber=?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->id,PDO::PARAM_INT);
	$this->stmt->execute();
	return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function trainingSessionLastId_Add(){
	$this->sql = "UPDATE training_tbl SET training_autonumber=training_autonumber+1 WHERE train_num_id=?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->trainId);
	$this->stmt->execute();
	}

	public function getTrainingListDetails($strtraining,$strrecurrent){
		$this->strtraining=$strtraining;
		$this->strrecurrent=$strrecurrent;
	}


	public function viewTrainingList(){
	$this->sql = "SELECT * FROM training_tbl WHERE train_num_id=?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->trainId,PDO::PARAM_INT);
	$this->stmt->execute();
	return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	
	public function addNewTrainingList($training_code){
	$this->sql = "SELECT strtraining FROM training_tbl WHERE strtraining=?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->strtraining);
	$this->stmt->execute();
		
		if($this->stmt->rowCount()==1){
			echo "<script type=text/javascript>alert('Error: Training Already Exist!');window.location.href='tr_training_list.php?trfind=$this->strtraining';</script>";
		}else{
			$this->sql = "INSERT INTO training_tbl (strtraining,strrecurrent,training_code,training_autonumber) VALUES (?,?,?,1)";
			$this->stmt = $this->db->prepare($this->sql);
			$this->stmt->bindParam(1,$this->strtraining);
			$this->stmt->bindParam(2,$this->strrecurrent);
			$this->stmt->bindParam(3,$training_code);
			$this->stmt->execute();
				if($this->stmt->rowCount()==1){
				echo "<script type=text/javascript>alert('Successfully Added!');window.location.href='tr_training_list.php?trfind=$this->strtraining';</script>";
				}
			}
	}


	public function editTrainingList($training_code){
	$this->sql = "SELECT strtraining FROM training_tbl WHERE strtraining=? AND strrecurrent=?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->strtraining);
	$this->stmt->bindParam(2,$this->strrecurrent);
	$this->stmt->execute();
		
		if($this->stmt->rowCount()==1){
			echo "<script type=text/javascript>alert('Error: Training Already Exist!');window.location.href='tr_training_list.php?trfind=$this->strtraining';</script>";
		}else{
			$this->sql = "UPDATE training_tbl SET strtraining=?,strrecurrent=?,training_code=? WHERE train_num_id=?";
			$this->stmt = $this->db->prepare($this->sql);
			$this->stmt->bindParam(1,$this->strtraining);
			$this->stmt->bindParam(2,$this->strrecurrent);
			$this->stmt->bindParam(3,$training_code);
			$this->stmt->bindParam(4,$this->trainId);
			$this->stmt->execute();
				if($this->stmt->rowCount()==1){
					echo "<script type=text/javascript>alert('Successfully Updated!');window.location.href='tr_training_list.php?trfind=$this->strtraining';</script>";
				}else{
					echo "<script type=text/javascript>alert('There was an error Please make sure you input numbers only in recurrent filed.');window.location.href='tr_training_list.php?trfind=$this->strtraining';</script>";
				}
			}
	}



	public function deleteTrainingList(){
	$this->sql = "DELETE FROM training_tbl WHERE train_num_id=?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->trainId,PDO::PARAM_INT);
	$this->stmt->execute();
	if($this->stmt->rowCount()==1){
			echo "success";
			}
	}
	


	public function trainingRecurrent($train_id){
	$this->sql = "SELECT train_num_id,strrecurrent 
			FROM training_tbl
			WHERE train_num_id =? LIMIT 1";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$train_id,PDO::PARAM_STR);
	$this->stmt->execute();

		if($this->stmt->rowCount()==1){
			while($this->rows = $this->stmt->fetch(PDO::FETCH_OBJ)){
			return $this->rows->strrecurrent;
			}
		}
	}

	public function trainingRecurrentAutoId($train_id){
	$this->sql = "SELECT * 
			FROM training_tbl
			WHERE train_num_id =? LIMIT 1";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$train_id,PDO::PARAM_STR);
	$this->stmt->execute();

		if($this->stmt->rowCount()==1){
			while($this->rows = $this->stmt->fetch(PDO::FETCH_OBJ)){
			return $this->rows->training_code . "-" . $this->rows->training_autonumber;
			}
		}
	}

	public function addNewTrainingPerPosition(){
	$this->sql = "SELECT pos_name,train_num FROM pos_train_db WHERE pos_name =? AND train_num=?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->position,PDO::PARAM_INT);
	$this->stmt->bindParam(2,$this->trainId,PDO::PARAM_INT);
	$this->stmt->execute();

		if($this->stmt->rowCount()==1){
			echo "<script type=text/javascript>alert('Error: Position and Training Already exist!');window.location.href='tr_TrainingPerPosition.php?find=$this->position';</script>";
		}else{
			$this->sql = "INSERT INTO pos_train_db (pos_name,train_num) VALUES (?,?)";
			$this->stmt = $this->db->prepare($this->sql);
			$this->stmt->bindParam(1,$this->position,PDO::PARAM_INT);
			$this->stmt->bindParam(2,$this->trainId,PDO::PARAM_INT);
			$this->stmt->execute();
				if($this->stmt->rowCount()==1){
				echo "<script type=text/javascript>alert('Successfully Added!');window.location.href='tr_TrainingPerPosition.php?find=$this->position';</script>";
				}
			}
	}
   /*
   * search for employee id with position in master list
   * @return id num
   */
	public function emp_in_ml()
	{

	$this->sql = 
	"SELECT DISTINCT a.ID,b.stridnumber FROM emp_db a
	LEFT JOIN tms_ml b
    ON a.ID = b.stridnumber
    WHERE a.emp_position=? ";
    $this->stmt = $this->db->prepare($this->sql);
    $this->stmt->bindParam(1,$this->position);
	$this->stmt->execute();

	   if( $this->stmt->rowCount() )
	   { 
	   		return $this->rows = $this->stmt->fetchAll(PDO::FETCH_OBJ);
   //      	while($this->rows = $this->stmt->fetch(PDO::FETCH_OBJ)){
			// echo $this->rows->ID . " NEXT";
			// $add_pos
			// }
				
	   }
	}


	public function editTrainingPerPosition(){
	$this->sql = "SELECT pos_name,train_num FROM pos_train_db WHERE pos_name =? AND train_num=?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->position,PDO::PARAM_INT);
	$this->stmt->bindParam(2,$this->trainId,PDO::PARAM_INT);
	$this->stmt->execute();

		if($this->stmt->rowCount()==1){
			echo "<script type=text/javascript>alert('Error Duplicate Record found!');window.location.href='tr_TrainingPerPosition.phhttps://172.20.10.52:669/phpmyadmin/sql.php?db=tms&table=tms_ml&sql_query=SELECT+%2A+FROM+%60tms_ml%60+ORDER+BY+%60tms_ml%60.%60stridnumber%60+ASC&session_max_rows=30&token=2eb3994bc88773c261f76ee0a08396bep?find=$this->position';</script>";
		}else{
			$this->sql = "UPDATE pos_train_db SET pos_name=?,train_num=? WHERE ID=?";
			$this->stmt = $this->db->prepare($this->sql);
			$this->stmt->bindParam(1,$this->position,PDO::PARAM_INT);
			$this->stmt->bindParam(2,$this->trainId,PDO::PARAM_INT);
			$this->stmt->bindParam(3,$this->id,PDO::PARAM_INT);
			$this->stmt->execute();
				if($this->stmt->rowCount()==1){
					echo "<script type=text/javascript>alert('Successfully Updated!');window.location.href='tr_TrainingPerPosition.php?find=$this->position';</script>";
				}
			}
	}


	public function deleteTrainingPerPosition(){
	$this->sql = "DELETE FROM pos_train_db WHERE pos_name =? AND train_num=?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->position,PDO::PARAM_INT);
	$this->stmt->bindParam(2,$this->trainId,PDO::PARAM_INT);
	$this->stmt->execute();

		if($this->stmt->rowCount()==1){
			echo 'success';  //for ajax
		}
	}

	public function deleteTrainingSchedule($session_num){
	$this->sql = "DELETE FROM trn_session WHERE session_num=?";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$session_num);
	$this->stmt->execute();
		if($this->stmt->rowCount()==1){
			echo 'success';  //for ajax
		}
	}


	public function addTrainingSchedule($session_array,$strrecurrent_date_converted,$recurrent_mon,$recurrent_year){
	$this->sql = 
	"INSERT INTO trn_session
	(session_num,session_train_id,session_year,session_mon,session_date,session_in,session_out,session_venue,session_trainor,strrecurrent_date,strrecurrent_mon,strrecurrent_year,session_participant)
	VALUES
	(?,?,?,?,?,?,?,?,?,?,?,?,0)";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$session_array['session_num']);
	$this->stmt->bindParam(2,$session_array['session_train_id']);
	$this->stmt->bindParam(3,$session_array['session_year']);
	$this->stmt->bindParam(4,$session_array['session_mon']);
	$this->stmt->bindParam(5,$session_array['session_date']);
	$this->stmt->bindParam(6,$session_array['session_in']);
	$this->stmt->bindParam(7,$session_array['session_out']);
	$this->stmt->bindParam(8,$session_array['session_venue']);
	$this->stmt->bindParam(9,$session_array['session_trainor']);
	$this->stmt->bindParam(10,$strrecurrent_date_converted);
	$this->stmt->bindParam(11,$recurrent_mon);
	$this->stmt->bindParam(12,$recurrent_year);
	$this->stmt->execute();
		if($this->stmt->rowCount()==1){
			echo "<script type=text/javascript>alert('Training Schedule Successfully Added!');window.location.href='tr_CourseSession.php';</script>";
		}
	}
	
	public function trainingSession(){
	$this->sql = "SELECT * FROM trn_session WHERE session_train_id =? ORDER BY ID DESC";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->trainId,PDO::PARAM_INT);
	$this->stmt->execute();

		if($this->stmt->rowCount()){
			$this->noTrainingSession='';
			return $this->rows = $this->stmt->fetchAll(PDO::FETCH_OBJ);
		}else{
			$this->noTrainingSession= "<tr><td colspan='9' style='color:red;font-weight:bold'>No Training Schedule for this training! <button class='btn btn-primary btn-md' id='noTrainingSession'><i class='fa fa-calendar'></i> Create</button></td></tr>";
		}
	}

	public function getSessionNumber($session_num){
	$this->session_num = $session_num;

	}

	public function trainingSessionPerSessionNum(){
	$this->sql = 
	"SELECT a.*,b.*,c.* 
	FROM trn_session a 
	LEFT OUTER JOIN  tms_ml b 
	ON a.session_num = b.session_num_id
	INNER JOIN emp_db c 
	on b.stridnumber = c.ID
	WHERE a.session_num =? ORDER BY c.emp_fullname";

	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$this->session_num,PDO::PARAM_STR);
	$this->stmt->execute();

		if($this->stmt->rowCount()){
			return $this->rows = $this->stmt->fetchAll(PDO::FETCH_OBJ);
		}else{
			$this->noTrainingSession= "<tr><td colspan='9' style='color:red;font-weight:bold'>No Training Schedule for this training! <button class='btn btn-primary btn-md' id='noTrainingSession'><i class='fa fa-calendar'></i> Create</button></td></tr>";
		}


	}


	public function participantNumber(){
	$this->sql = "SELECT participant_num FROM part_num_db";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->execute();
	if($this->stmt->rowCount()==1){
		while($this->rows = $this->stmt->fetch(PDO::FETCH_OBJ)){
			return $this->participant_num =$this->rows->participant_num;
			}
		}
	}

	public function setNewParticipantNumber($set){
	$this->sql = "UPDATE part_num_db SET participant_num =? ";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$set);
	$this->stmt->execute();
	if($this->stmt->rowCount()){
		echo "<script type=text/javascript>alert('Max. participants successfully Updated!');window.location.href='participant.php';</script>";
		}
	}


	// == DASHBOARD ==//

	public function trainingSession_Open(){
	$datenow = date('Y-m-d');
	$this->sql = 
	"SELECT * FROM trn_session a
	INNER JOIN training_tbl b
	ON a.session_train_id = b.train_num_id 
	WHERE a.session_date >= '$datenow'
	ORDER BY a.session_date LIMIT 10";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->execute();
	return $this->stmt->fetchAll(PDO::FETCH_OBJ);	
	}

	public function summaryAllTrainingList(){
	$this->sql = 
	"SELECT * FROM training_tbl ORDER BY strtraining";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->execute();
	return $this->stmt->fetchAll(PDO::FETCH_OBJ);	
	}

	public function summaryTrainingList(){
	$this->sql = 
	"SELECT *
	FROM pos_train_db a
	LEFT JOIN  emp_db b
	ON a.pos_name=b.emp_position
	UNION 
	SELECT * FROM pos_train_db a
	RIGHT JOIN  emp_db b
	ON a.pos_name=b.emp_position";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->execute();
	return $this->stmt->fetchAll(PDO::FETCH_OBJ);	
	}



	public function searchifEnroll($stridnumber,$strtraining){
	$this->sql = 
	"SELECT * FROM  tms_ml 
	WHERE stridnumber=? AND strtraining=? AND strtrainstat='incomplete'";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$stridnumber);
	$this->stmt->bindParam(2,$strtraining);
	$this->stmt->execute();
	return $this->stmt->fetchAll(PDO::FETCH_OBJ);	
	}
	


	public function countAllNeedTraining($train_num){
	$this->sql = 
	"SELECT COUNT(*) as total FROM  tms_ml
	WHERE strtraining=? AND strtrainstat='na'
	OR strtraining=? AND strtrainstat='incomplete'";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$train_num);
	$this->stmt->bindParam(2,$train_num);
	$this->stmt->execute();
	return $this->stmt->fetchAll(PDO::FETCH_OBJ);	
	}

	public function countAllExpiredTraining($train_num){
	$this->sql = 
	"SELECT COUNT(*) as totalExpired FROM tms_ml a
	INNER JOIN emp_db c
	ON a.stridnumber = c.ID 	
	WHERE strtraining=? AND  strtrainstat='expired' AND c.emp_empstatus <> 'resigned' ";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$train_num);
	$this->stmt->execute();
	return $this->stmt->fetchAll(PDO::FETCH_OBJ);	
	}

	public function countAllNearExpiration($train_num){
	$this->sql = 
	"SELECT COUNT(*) as totalNearEx FROM tms_ml a
	INNER JOIN trn_session b
	ON a.session_num_id = b.session_num
	INNER JOIN emp_db c
	ON a.stridnumber = c.ID 	
	WHERE a.strtrainstat='completed' AND a.strtraining=? AND b.strrecurrent_date <= DATE_ADD(NOW(), INTERVAL 1 MONTH) AND c.emp_empstatus <> 'resigned' ";
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->bindParam(1,$train_num);
	$this->stmt->execute();
	return $this->stmt->fetchAll(PDO::FETCH_OBJ);	
	}


}//training



class pagination extends connect{
	public $employees,$total,$pages,$perPage;

	public function __construct(){
		parent::__construct();		
	}

	public function getSql($sql){
	$this->sql = $sql;
	}

	public function query(){
	$this->stmt = $this->db->prepare($this->sql);
	$this->stmt->execute();
	$this->employees = $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function getPerPage($perPage){
	$this->perPage = $perPage;
	}

	public function pages(){
	//$this->total = $this->db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
	//$this->pages = ceil($this->total / $this->perPage);

	$this->sql = "SELECT FOUND_ROWS() as total";
	$this->stmt = $this->db->prepare( $this->sql );
	$this->stmt->execute();

	while($this->rows = $this->stmt->fetch(PDO::FETCH_OBJ)){
			return $this->pages = ceil($this->rows->total / $this->perPage);
			}
	}

}


?>
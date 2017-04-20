<?php require('parts/header.php');?>
<?php require('config/class.php');?>
<?php $employee = New employee();?>
<?php

if ( isset($_POST['save']) )
    {
        $emp_id = $_POST['emp_id'];
        $emp_name = $_POST['emp_name'];
        $department = $_POST['department'];
        $sss_num = $_POST['sss_num'];
        $tin = $_POST['tin'];
        $phic_no = $_POST['phic_no'];
        $hdmf_no = $_POST['hdmf_no'];
        $tax_status = $_POST['tax_status'];
        $bank = $_POST['bank'];
        
        $employee->add_new_employee($emp_id,$emp_name,$department,$sss_num,$tin,$phic_no,$hdmf_no,$tax_status,$bank);
       
    }


?>

    <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
               <div class="cell size-x200" id="cell-sidebar" style="background-color: #71b1d1; height: 100%">
                    <ul class="sidebar">
                        <li><a href="#">
                            <span class="mif-list icon"></span>
                            <span class="title">Regular Emp</span>
                            <span class="counter">200</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-list-numbered icon"></span>
                            <span class="title">Resigned Emp</span>
                            <span class="counter">50</span>
                        </a></li>
                        <li class="active"><a href="#">
                            <span class="mif-checkmark icon"></span>
                            <span class="title">All Employees</span>
                            <span class="counter">         
                                 <?php foreach($employee->countAll() as $count){echo $count->total;}?>
                            </span>
                        </a></li>
                        
                    </ul>
                 </div>
                 <div class="cell auto-size padding20 bg-white" id="cell-content">
                    <h1 class="text-light">New Employee<span class="mif-cogs place-right   mif-ani-heartbeat mif-ani-slow"></span></h1>

                    <ul class="breadcrumbs">
                        <li><a href="dashboard.php"><span class="icon mif-home"></span></a></li>
                        <li><a href="employees.php">Employee List</a></li>
                        <li><a href="#">New Employee</a></li>
                    </ul>

                    <hr class="thin bg-grayLighter">
                    <h2 style="color:green"><?php echo $employee->notify;?></h2>
                <form method="POST" action="">
                 	<table  align="left">
                 		<tr>
                 			<td colspan="2"><label>Employee Name</label>
                				<div class="input-control text full-size">
                    				<input type="text" name="emp_name" required="required">
                				</div>
                			</td>
                 		</tr>
                 		<tr>
                 			<td>
                 			<label>Emp ID</label>
                				<div class="input-control text full-size">
                    				<input type="text" name="emp_id" required="required">
                				</div>
                			</td>

                			<td>
                 			<label>Department</label>
                				<div class="input-control text full-size">
                    				<input type="text" name="department" required="required">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td>
                 			<label>Tax Status</label>
                				<div class="input-control select full-size">
                    				<select name="tax_status" required="required">
                                        <option>S</option>            
                                        <option>M</option>
                                        <option>ME</option>
                                        <option>ME1</option>
                                        <option>ME2</option>
                                    </select>
                				</div>
                			</td>

                			<td>
                 			<label>SSS number</label>
                				<div class="input-control text full-size">
                    				<input type="text" name="sss_num" required="required">
                				</div>
                			</td>
                 		</tr>
                    </table>

                 	<table align="center">
                 		

                 		<tr>
                 			<td>
                 			<label>Tin number</label>
                				<div class="input-control text full-size">
                    				<input type="text" name="tin" required="required">
                				</div>
                			</td>

                			<td>
                 			<label>PHIC number</label>
                				<div class="input-control text full-size">
                    				<input type="text" name="phic_no" required="required">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td>
                 			<label>HDMF number</label>
                				<div class="input-control text full-size">
                    				<input type="text" name="hdmf_no" required="required">
                				</div>
                			</td>

                			<td>
                 			<label>Bank Name</label>
                				<div class="input-control text full-size">
                    				<input type="text" name="bank" required="required">
                				</div>
                			</td>
                 		</tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" name="save" class="button loading-pulse lighten primary">Save</button>
                                <button type="button" onclick="history.go(-1);"  class="button loading-pulse lighten danger">Cancel</button>
                            </td>
                        </tr>
                    </table>
                    </form>
                 </div>
            </div>
        </div>
    </div>


<?php require('parts/footer.php'); ?>
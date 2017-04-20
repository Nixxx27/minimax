<?php require('parts/header.php');?>
<?php require('config/class.php');?>
<?php $employee = New employee();?>
<?php $employee->getEmpDetails( $_GET['emp_id'] );?>
<?php $employee->view_payslip();?>
<?php $employee->viewEmpDetails();?>

<hr class="thin bg-grayLighter">
<ul class="breadcrumbs">
                        <li><a href="dashboard.php"><span class="icon mif-home"></span></a></li>
                        <li><a href="employees.php">Employee List</a></li>
                        <li><a href="#">Payroll Period</a></li>
                    </ul>
    <div class="page-content">

        <div class="cell auto-size padding20 bg-white" id="cell-content">
        Hi, <b><?php echo strtoupper($employee->emp_name); ?></b>
     
<form action="print_payslip.php" method="GET">
<table border="0" cellspacing="2" cellpadding="2" style="margin-top:20px">
	<tr>
		<td>Select Payroll Period:</td>
	</tr>
	<tr>
		<td>
			<div class="input-control select full-size">
			<input type="hidden" name="emp_id" value="<?php echo $_GET['emp_id']; ?>">
			<select name="payroll_period" required="required">
				<option value="">--Please Select--</option>
				
			<?php foreach($employee->view_payroll_period() as $payslip): ?>
					<option><?php echo $payslip->payroll_period ?></option>
			<?php endforeach; ?>
			</select>
			</div>
		</td>
	</tr>
	<tr>
		<td>
		<button type="submit" class="button loading-pulse small-button lighten success">Go</button>
		</td>
	</tr>
</table>
</form>


   </div>
      </div>
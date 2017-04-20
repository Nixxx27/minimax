<style type="text/css">
	@media print {
    .nottoprint {
      display: none;
    }
}
</style>
<?php require('config/class.php');?>
<?php $employee = New employee();?>
<?php $employee->getEmpDetails( $_GET['emp_id'] );?>
<?php $employee->getPayrollPeriod( $_GET['payroll_period'] );?>
<?php $employee->print_payslip();?>
<?php $employee->viewEmpDetails();?>

<table align="center" cellspacing="0" cellpadding="10" style="border:1px solid blue" border=1>
	<tr>
		<td colspan="3">
			<h2>COMPANY NAME, INC.</h2>
		</td>
	</tr>
	<tr>
		<td><b>LOGO</b></td>
		<td><b>Pay Run:</b> <br>
			<?php echo $employee->pay_run; ?>
		</td>
		<td>Attendance Period: <b> <br>
			<?php echo $employee->payroll_period; ?>
		</td>

	</tr>

	<tr>
		<td><h3><?php echo ucwords($employee->emp_name); ?></h3>
			<b>Employee ID:</b>  <?php echo $employee->emp_id; ?><br>
			<b>Tax Status: </b>  <?php echo $employee->tax_status; ?><br>
			<b>TIN :</b>  <?php echo $employee->tin; ?><br>
			<b>SSS :</b>  <?php echo $employee->sss_num; ?><br>
			<b>PHIC :</b>  <?php echo $employee->phic_no; ?><br>
			<b>HDMF :</b>  <?php echo $employee->hdmf_no; ?><br>
		</td>
	
		<td><b>Salary for the Period:</b>  <?php echo $employee->salary; ?><br>
			<b>Absences: </b>  (<?php echo $employee->absences * 45;  ?>) <br>
			<b>Lates and undertime :</b>   (<?php echo ( ( $employee->lates + $employee->undertime) * 22 );  ?>)<br>
		</td>
	</tr>


	<tr class="nottoprint">
		<td colspan="3">
			<button onclick="window.print();" class="nottoprint">PRINT</button>
		</td>
	</tr>
</table>



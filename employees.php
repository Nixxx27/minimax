<?php require('parts/header.php');?>
<?php require('config/class.php');?>
<?php $employee = New employee();?>

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
                </div><div class="cell auto-size padding20 bg-white" id="cell-content">
                    <h1 class="text-light">List of Employees<span class="mif-cogs place-right   mif-ani-heartbeat mif-ani-slow"></span></h1>

                    <hr class="thin bg-grayLighter">
                    <a href="new-employee.php">
                    <button class="button primary loading-pulse"><span class="mif-plus"></span> Add New</button>
                    </a>
                    <button class="button success" onclick="metroDialog.open('#excel_dialog')"><span class="mif-file-excel"></span> Export</button>
                    <button class="button warning" onclick="metroDialog.open('#print_dialog')"><span class="mif-printer"></span> Print</button>
                    <button class="button alert  loading-pulse" onclick="confirm('Are you sure you want to delete this record?')"><span class="mif-cross"></span> Delete</button>
                    <hr class="thin bg-grayLighter">
                    <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                        <thead>
                        <tr>
                            <td style="width: 20px"></td>
                            <td class="sortable-column sort-asc" style="width: 100px">Emp ID</td>
                            <td class="sortable-column">Name</td>
                            <td class="sortable-column">Department</td>
                            <td class="sortable-column">SSS Num</td>
                            <td class="sortable-column">TIN</td>
                            <td class="sortable-column">PHIC #</td>
                            <td class="sortable-column">HDMF #</td>
                            <td class="sortable-column">Tax Status</td>
                            <td class="sortable-column">Bank</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($employee->view_all_employee() as $emp): ?>
                            <tr>
                                 <td>
                                    <label class="input-control checkbox small-check no-margin">
                                        <input type="checkbox">
                                        <span class="check"></span>
                                    </label>
                                </td>
                                <td><?php echo $emp->emp_id;?></td>
                                <td><?php echo $emp->emp_name;?></td>
                                <td><?php echo $emp->department;?></td>
                                <td><?php echo $emp->sss_num;?></td>
                                <td><?php echo $emp->tin;?></td>
                                <td><?php echo $emp->phic_no;?></td>
                                <td><?php echo $emp->hdmf_no;?></td>
                                <td><?php echo $emp->tax_status;?></td>
                                <td><?php echo $emp->bank;?></td>
                                <td>
                                <form action="payslip.php" method="get">
                                    <input type="hidden" name="emp_id" value="<?php echo $emp->emp_id;?>">
                                    
                                    <button type="submit" class="button info small-button loading-pulse" title="view payslip">
                                        <span class="mif-chevron-right"></span>
                                    </button>
                                </form>
                                
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<?php require('parts/footer.php'); ?>
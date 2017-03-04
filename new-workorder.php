<?php require('parts/header.php');?>


    <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
               <div class="cell size-x200" id="cell-sidebar" style="background-color: #71b1d1; height: 100%">
                    <ul class="sidebar">
                        <li><a href="#">
                            <span class="mif-list icon"></span>
                            <span class="title">all WorkOrders</span>
                            <span class="counter">200</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-list-numbered icon"></span>
                            <span class="title">In-Progress</span>
                            <span class="counter">50</span>
                        </a></li>
                        <li class="active"><a href="#">
                            <span class="mif-checkmark icon"></span>
                            <span class="title">Done</span>
                            <span class="counter">150</span>
                        </a></li>
                        
                    </ul>
                 </div>
                 <div class="cell auto-size padding20 bg-white" id="cell-content">
                    <h1 class="text-light">New Work Order<span class="mif-cogs place-right   mif-ani-heartbeat mif-ani-slow"></span></h1>
                    <hr class="thin bg-grayLighter">
                 	<table  align="left">
                 		<tr>
                 			<td colspan="2"><label>Job Description</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>
                 		<tr>
                 			<td>
                 			<label>Equip ID</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>

                			<td>
                 			<label>Components</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td colspan="2"><label>Name</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td>
                 			<label>Building</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>

                			<td>
                 			<label>Date</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td colspan="2"><label>Location</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td>
                 			<label>Cost Center</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>

                			<td>
                 			<label>Account</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td>
                 			<label>Planner</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>

                			<td>
                 			<label>Phone</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 	</table>

                 	<table align="center">
                 		<tr>
                 			<td colspan="2"><label>Job ID</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td colspan="2"><label>Requested By</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td>
                 			<label>Requested Date</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>

                			<td>
                 			<label>Time</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td>
                 			<label>Completion Date</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>

                			<td>
                 			<label>Schedule Date</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td>
                 			<label>Status</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>

                			<td>
                			&nbsp;
                 			<label class="input-control checkbox">
    								<input type="checkbox" checked>
								    <span class="check"></span>
								    <span class="caption">LOTO</span>
								</label>
                			</td>
                 		</tr>

                 		<tr>
                 			<td colspan="2"><label>Assigned to</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td colspan="2"><label>Notes</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 	

                 	</table>
                 </div>
            </div>
        </div>
    </div>


<?php require('parts/footer.php'); ?>
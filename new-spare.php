<?php require('parts/header.php');?>


    <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
               <div class="cell size-x200" id="cell-sidebar" style="background-color: #71b1d1; height: 100%">
                    <ul class="sidebar">
                        <li class="active"><a href="#">
                            <span class="mif-cogs icon"></span>
                            <span class="title">All Spares</span>
                            <span class="counter">322</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-list2 icon"></span>
                            <span class="title">Vendors</span>
                            <span class="counter">200</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-list-numbered icon"></span>
                            <span class="title">Purchase</span>
                            <span class="counter">50</span>
                        </a></li>
                     </ul>
                 </div>
                 <div class="cell auto-size padding20 bg-white" id="cell-content">
                    <h1 class="text-light">New Spare Parts<span class="mif-cogs place-right   mif-ani-heartbeat mif-ani-slow"></span></h1>
                    <hr class="thin bg-grayLighter">
                 	<table  align="left">
                 		<tr>
                 			<td colspan="2"><label>Name</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>
                 		<tr>
                 			<td>
                 			<label>NBR</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>

                			<td>
                 			<label>MFR</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td colspan="2"><label>Source</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td>
                 			<label>Location</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>

                			<td>
                 			<label>Qty on Hand</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td colspan="2"><label>Status</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td>
                 			<label>Min Qty</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>

                			<td>
                 			<label>Max Qty</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>
                 		</tr>

                 		<tr>
                 			<td>
                 			<label>On ORD</label>
                				<div class="input-control text full-size">
                    				<input type="text">
                				</div>
                			</td>

                			<td>
                 			<label>MFR PN</label>
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
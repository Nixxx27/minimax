<?php require('parts/header.php');?>


    <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
                <div class="cell size-x200" id="cell-sidebar" style="background-color: #71b1d1; height: 100%">
                    <ul class="sidebar">
                        <li><a href="#">
                            <span class="mif-apps icon"></span>
                            <span class="title">all Equipments</span>
                            <span class="counter">0</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-location-city icon"></span>
                            <span class="title">Buildings</span>
                            <span class="counter">0</span>
                        </a></li>
                        <li class="active"><a href="#">
                            <span class="mif-drive-eta icon"></span>
                            <span class="title">MFGR</span>
                            <span class="counter">2</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-cogs icon"></span>
                            <span class="title">Automation</span>
                            <span class="counter">0</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-apps icon"></span>
                            <span class="title">all items</span>
                            <span class="counter">0</span>
                        </a></li>
                    </ul>
                </div>
                <div class="cell auto-size padding20 bg-white" id="cell-content">
                    <h1 class="text-light">Equipments <span class="mif-cogs place-right   mif-ani-heartbeat mif-ani-slow"></span></h1>
                    <hr class="thin bg-grayLighter">
                    <button class="button primary loading-pulse" onclick="metroDialog.open('#create_dialog')"><span class="mif-plus"></span> Create...</button>
                    <button class="button success" onclick="metroDialog.open('#excel_dialog')"><span class="mif-file-excel"></span> Export</button>
                    <button class="button warning" onclick="metroDialog.open('#print_dialog')"><span class="mif-printer"></span> Print</button>
                    <button class="button alert  loading-pulse" onclick="confirm('Are you sure you want to delete this record?')"><span class="mif-cross"></span> Delete</button>
                    <hr class="thin bg-grayLighter">
                    <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                        <thead>
                        <tr>
                            <td style="width: 20px">
                            </td>
                            <td class="sortable-column sort-asc" style="width: 100px">EQ ID</td>
                            <td class="sortable-column">EQ NAME</td>
                            <td class="sortable-column">BUILDING</td>
                            <td class="sortable-column">MFGR</td>
                            <td class="sortable-column">MODEL NBR</td>
                            <td class="sortable-column">SERIAL NB</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <label class="input-control checkbox small-check no-margin">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>
                            <td>ARCK-015</td>
                            <td>A-RACK CART</td>
                            <td>Prod Equipment</td>
                            <td>Sky Eqpt Inc</td>
                            <td>7" A Cart</td>
                            <td>11022344</td>
                        </tr>
                        <tr>
                            <td>
                                <label class="input-control checkbox small-check no-margin">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>
                            <td>BVLR-001</td>
                            <td>Beveler, Edge</td>
                            <td>Fabrication</td>
                            <td>Bovone</td>
                            <td>BV01</td>
                            <td>22941005</td>
                        </tr>

                        <tr>
                            <td>
                                <label class="input-control checkbox small-check no-margin">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>
                            <td>ESL-012</td>
                            <td>Glass,Cutting,Table</td>
                            <td>Cutting</td>
                            <td>Caterpillar</td>
                            <td>GC20</td>
                            <td>43EMJKP2</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<div data-role="dialog" id="create_dialog" data-background="bg-cyan" class="padding20 dialog" data-close-button="true" style="width: auto; height: auto; visibility: hidden;color:white">
            <h1>Add Equipment</h1>
            <hr>
            <table>
            	<tr>
            		<td style="text-align:right;padding-right:20px">
            			<label>EQ ID:</label></td>
            		<td>
            			<div class="input-control text">
    				   		<input type="text">
						</div>
            		</td>
            	</tr>

            	<tr>
            		<td style="text-align:right;padding-right:20px">
            			<label>EQ NAME:</label></td>
            		<td>
            			<div class="input-control text">
    				   		<input type="text">
						</div>
            		</td>
            	</tr>

            	<tr>
            		<td style="text-align:right;padding-right:20px">
            			<label>BUILDING:</label></td>
            		<td>
            			<div class="input-control text">
    				   		<input type="text">
						</div>
            		</td>
            	</tr>

            	<tr>
            		<td style="text-align:right;padding-right:20px">
            			<label>MFGR:</label></td>
            		<td>
            			<div class="input-control text">
    				   		<input type="text">
						</div>
            		</td>
            	</tr>

            	<tr>
            		<td style="text-align:right;padding-right:20px">
            			<label>MODEL NBR:</label></td>
            		<td>
            			<div class="input-control text">
    				   		<input type="text">
						</div>
            		</td>
            	</tr>

            	<tr>
            		<td style="text-align:right;padding-right:20px">
            			<label>SERIAL NB:</label></td>
            		<td>
            			<div class="input-control text">
    				   		<input type="text">
						</div>
            		</td>
            	</tr>
            </table>
         
        <span class="dialog-close-button"></span></div>
        <!--export to excel-->
        <div data-role="dialog" id="excel_dialog" data-background="bg-green" class="padding20 dialog" data-close-button="true" style="width: auto; height: auto; visibility: hidden;color:white">
        <h2>Export Equipment list to Excel?</h2>
        <div style="text-align:center">
        	<button class="button primary" onclick="equipmentExport('success')">Ok</button>
        </div>
        
        <span class="dialog-close-button"></span></div>


        <!--Print -->
        <div data-role="dialog" id="print_dialog" data-background="bg-orange" class="padding20 dialog" data-close-button="true" style="width: auto; height: auto; visibility: hidden;color:white">
        <h2>Print Records??</h2>
        <div style="text-align:center">
        	<button class="button primary" onclick="printReport('warning')">Ok</button>
        </div>
        
        <span class="dialog-close-button"></span></div>

<?php require('parts/footer.php'); ?>
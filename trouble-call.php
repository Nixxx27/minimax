<?php require('parts/header.php');?>


    <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
               <div class="cell size-x200" id="cell-sidebar" style="background-color: #71b1d1; height: 100%">
                    <ul class="sidebar">
                        <li><a href="#">
                            <span class="mif-headphones icon"></span>
                            <span class="title">all calls</span>
                            <span class="counter">100</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-list-numbered icon"></span>
                            <span class="title">In-Progress</span>
                            <span class="counter">40</span>
                        </a></li>
                        <li class="active"><a href="#">
                            <span class="mif-checkmark icon"></span>
                            <span class="title">Done</span>
                            <span class="counter">60</span>
                        </a></li>
                        
                    </ul>
                </div><div class="cell auto-size padding20 bg-white" id="cell-content">
                    <h1 class="text-light">Trouble Call<span class="mif-cogs place-right   mif-ani-heartbeat mif-ani-slow"></span></h1>
                    <hr class="thin bg-grayLighter">
                    <button class="button primary loading-pulse" onclick="metroDialog.open('#create_dialog')"><span class="mif-plus"></span> New Call...</button>
                    <button class="button success" onclick="metroDialog.open('#excel_dialog')"><span class="mif-file-excel"></span> Export</button>
                    <button class="button warning" onclick="metroDialog.open('#print_dialog')"><span class="mif-printer"></span> Print</button>
                    <button class="button alert  loading-pulse" onclick="confirm('Are you sure you want to delete this record?')"><span class="mif-cross"></span> Delete</button>
                    <hr class="thin bg-grayLighter">
                    <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                        <thead>
                        <tr>
                            <td style="width: 20px">
                            </td>
                            <td class="sortable-column sort-asc" style="width: 100px">Job ID</td>
                            <td class="sortable-column">Name</td>
                            <td class="sortable-column">Building</td>
                            <td class="sortable-column">Requested By</td>
                            <td class="sortable-column">Date & Time</td>
                            <td class="sortable-column">Status</td>
                            <td></td>
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
                            <td>TC-0001</td>
                            <td>Gas Compressor</td>
                            <td>Zone 1</td>
                            <td>Bill S</td>
                            <td>01/21/2017 04:33 PM</td>
                           <td class="align-center"><span class="mif-checkmark fg-green"></span></td>
                           <td><button class="button cycle-button primary" title="view details"><span class="mif-chevron-right" ></span></button></td>
                        </tr>
                        <tr>
                            <td>
                                <label class="input-control checkbox small-check no-margin">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>
                            <td>TC-0002</td>
                            <td>Concrete Pump</td>
                            <td>Zone 3</td>
                            <td>John S</td>
                            <td>01/21/2017 06:29 PM</td>
                           <td class="align-center"><span class="mif-stop fg-red"></span></td>
                           <td><button class="button cycle-button primary" title="view details"><span class="mif-chevron-right" ></span></button></td>
                        </tr>

                        <tr>
                            <td>
                                <label class="input-control checkbox small-check no-margin">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>
                            <td>TC-0003</td>
                            <td>Crane (machine) </td>
                            <td>Area 1</td>
                            <td>Kevin J</td>
                            <td>01/22/2017 07:14 PM</td>
                           <td class="align-center"><span class="mif-checkmark fg-green"></span></td>
                           <td><button class="button cycle-button primary" title="view details"><span class="mif-chevron-right" ></span></button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!--new call-->
<div data-role="dialog" id="create_dialog" data-background="bg-cyan" class="padding10 dialog" data-close-button="true" style="width: auto; height: auto; visibility: hidden;color:white">
            <h3><span class="mif-headphones mif-ani-spanner mif-ani-fast"></span> New Trouble Call</h3>
            <hr>
    <div class="grid">
        <div class="row cells3">
            <div class="cell">
                <label>Equip ID</label>
                <div class="input-control text full-size">
                    <input type="text">
                </div>
            </div>
            
            <div class="cell">
                <label>Component</label>
                <div class="input-control text full-size">
                    <input type="text">
                </div>
            </div>
            <div class="cell">
                <label>Job ID</label>
                <div class="input-control text full-size">
                    <input type="text">
                </div>
            </div>
        </div>

        <div class="row cells3">
           <div class="cell colspan2">
              <label>Name</label>
               <div class="input-control text full-size">
                    <input type="text">
                </div>
           </div>
           <div class="cell">
                <label>Requested By</label>
                <div class="input-control text full-size">
                    <input type="text">
                </div>
            </div>
        </div>

        <div class="row cells3">
           <div class="cell colspan2">
              <label>Building</label>
               <div class="input-control text full-size">
                    <input type="text">
                </div>
           </div>
           <div class="cell">
                <label>Phone Number</label>
                <div class="input-control text full-size">
                    <input type="text">
                </div>
            </div>
        </div>

        <div class="row cells3">
           <div class="cell colspan2">
              <label>Location</label>
               <div class="input-control text full-size">
                    <input type="text">
                </div>
           </div>

           <div class="cell">
                <label>Date Requested</label>
                <div class="input-control text full-size">
                    <input type="text">
                </div>
            </div>
           
        </div>

        <div class="row cells3">
           <div class="cell">
              <label>Cost Center</label>
               <div class="input-control text full-size">
                    <input type="text">
                </div>
           </div>
           
            <div class="cell">
                <label>Time Requested</label>
                <div class="input-control text full-size">
                    <input type="text">
                </div>
            </div>

            <div class="cell">
                <label>Completion Date</label>
                <div class="input-control text full-size">
                    <input type="text">
                </div>
            </div>
        </div>

        <div class="row cells3">
           <div class="cell colspan2">
              <label>Description</label>
               <div class="input-control textarea full-size">
                    <textarea rows="3" style="padding:8px" name="remarks"></textarea>
                </div>
           </div>
           <div class="cell">
                <label>Status</label>
                <div class="input-control text full-size">
                    <input type="text">
                </div>
            </div>
            <div class="cell">
                <label>Approved</label>
                <div class="input-control text full-size">
                    <input type="text">
                </div>
            </div>
        </div>

    </div><!--grid-->
</div>   <!--new call-->
         
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
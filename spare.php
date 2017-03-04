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
                </div><div class="cell auto-size padding20 bg-white" id="cell-content">
                    <h1 class="text-light">Spare Parts<span class="mif-cogs place-right   mif-ani-heartbeat mif-ani-slow"></span></h1>
                    <hr class="thin bg-grayLighter">
                    <a href="new-spare.php">
                    <button class="button primary loading-pulse" ><span class="mif-plus"></span> New Spare Parts...</button></a>
                    <button class="button success" onclick="metroDialog.open('#excel_dialog')"><span class="mif-file-excel"></span> Export</button>
                    <button class="button warning" onclick="metroDialog.open('#print_dialog')"><span class="mif-printer"></span> Print</button>
                    <button class="button alert  loading-pulse" onclick="confirm('Are you sure you want to delete this record?')"><span class="mif-cross"></span> Delete</button>
                    <hr class="thin bg-grayLighter">
                    <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
                        <thead>
                        <tr>
                            <td style="width: 20px">
                            </td>
                            <td class="sortable-column sort-asc" style="width: 100px">Equip ID</td>
                            <td class="sortable-column">Qty</td>
                            <td class="sortable-column">UI</td>
                            <td class="sortable-column">Name</td>
                            <td class="sortable-column">Component</td>
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
                            <td>NC-96652</td>
                            <td>1</td>
                            <td>ea</td>
                            <td>N/C Machine</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <label class="input-control checkbox small-check no-margin">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>
                            <td>NC-89941</td>
                            <td>3</td>
                            <td>ea</td>
                            <td>N/C Machine</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>
                                <label class="input-control checkbox small-check no-margin">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>
                            <td>NC-53123</td>
                            <td>4</td>
                            <td>ea</td>
                            <td>N/C Machine</td>
                            <td></td>
                        </tr>


                        <tr>
                            <td>
                                <label class="input-control checkbox small-check no-margin">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>
                            <td>NC-5531</td>
                            <td>30</td>
                            <td>ea</td>
                            <td>N/C Machine</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<?php require('parts/footer.php'); ?>
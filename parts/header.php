
<!Doctype html>
<html>
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="M-Minimax">
    <meta name="author" content="M-Minimax">
    <title>M-Minimax | Maintenance Management Solution</title>
    <link rel="stylesheet" type="text/css" href="css/metro.min.css">
    <link rel="stylesheet" type="text/css" href="css/metro-colors.min.css">
    <link rel="stylesheet" type="text/css" href="css/metro-icons.min.css">
    <link rel="stylesheet" type="text/css" href="css/metro-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="css/metro-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/morris.css" rel="stylesheet">
    <link href="css/fontawesome.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon">
  </head>

   <body class="bg-steel">


    <div class="app-bar fixed-top darcula" data-role="appbar">
        <a class="app-bar-element branding"><span class="mif-cog  mif-ani-spin mif-2x mif-ani-slow"></span> M-Minimax</a>
        <span class="app-bar-divider"></span>
        <ul class="app-bar-menu">
          <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="home.php">Equipment</a></li>
            <li>
                <a href="" class="dropdown-toggle">Work Order</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="workorder.php">Work Order List</a></li>
                    <li><a href="new-workorder.php">Add New</a></li>
                    
                </ul>
            </li>
            <li><a href="trouble-call.php">Trouble Calls</a></li>
            <li>
                <a href="" class="dropdown-toggle">Preventive Maintenance</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="pm.php">PM List</a></li>
                    <li><a href="new-pm.php">Add New PM</a></li>
                    
                </ul>
            </li>

            <li><a href="spare.php">Spare</a></li>
            <li>
                <a href="" class="dropdown-toggle">Help</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="">ChatOn</a></li>
                    <li><a href="">Community support</a></li>
                    <li class="divider"></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </li>
        </ul>

        <div class="app-bar-element place-right">
            <span class="dropdown-toggle"><span class="mif-cog"></span> Admin</span>
            <div class="app-bar-drop-container padding10 place-right no-margin-top block-shadow fg-dark" data-role="dropdown" data-no-close="true" style="width: 220px">
                <h2 class="text-light">Quick settings</h2>
                <ul class="unstyled-list fg-dark">
                    <li><a href="" class="fg-white1 fg-hover-yellow">Profile</a></li>
                    <li><a href="" class="fg-white2 fg-hover-yellow">Security</a></li>
                    <li><a href="index.php" class="fg-white3 fg-hover-yellow">Log-Out</a></li>
                </ul>
            </div>
        </div>
    </div>
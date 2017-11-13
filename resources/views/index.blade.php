<!DOCTYPE html>
<html ng-app="portalApp">

<head>
 
    <base href="/"></base>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title set in pageTitle directive -->
    <title page-title></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font awesome -->
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- DataTable CSS -->
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <!-- Main CSS files -->
    <link href="css/animate.css" rel="stylesheet">
    <link id="loadBefore" href="css/style.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet" type="text/css">
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css">
    <link href="css/morris-0.4.3.min.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

    <!-- Comscentre Icon -->
    <link rel="shortcut icon" href="img/c.png" />
    
</head>

<!-- TODO: Create SASS for custom styling. -->
<style>
    .table-hover>tbody>tr:hover {
        background-color: #f5f5f5!important;
        color:#333!important;
    }
    .user-name {
        color: #f7dc4f;
        font-size: 24px;
        font-weight: 300;
        line-height: 24px;
    }
    .embed-container { 
        position: relative; 
        padding-bottom: 46.25%; 
        height: 0; 
        overflow: hidden; 
        max-width: 100%; 
    } 
    .embed-container iframe, .embed-container object, .embed-container embed { 
        position: absolute; top: 0; left: 0; width: 100%; height: 96%; 
    }
    .breadcrumb > li a.active{
        color: #d5202d;
    }
    td.noc-comment, td.noc-status {
        max-width: 250px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    td.noc-comment:hover, td.noc-status:hover{
        overflow: auto;
        text-overflow: initial;
    }

</style>

<body ng-style="{'background-image': 'url(' + $state.current.data.bg + ')'}" ng-controller="MainCtrl as main" class="{{$state.current.data.specialClass}}" {{otherBodyTags}}>

<!-- Main view  -->
<div ui-view></div>

<!-- jQuery and Bootstrap -->
<script src="js/plugins/jquery/jquery-3.1.1.min.js"></script>
<script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="js/plugins/bootstrap/bootstrap.min.js"></script>

<!-- DataTable -->
<script src="js/plugins/dataTables/datatables.min.js"></script>

<!-- MetisMenu -->
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- SlimScroll -->
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Pace JS -->
<script src="js/plugins/pace/pace.min.js"></script>

<!-- Main Angular scripts-->
<script src="js/angular/1.6.6/angular.min.js"></script>
<script src="js/angular/ui-router/1.0.10/angular-ui-router.min.js"></script>

<!-- LazyLoad -->
<script src="js/plugins/oclazyload/dist/ocLazyLoad.min.js"></script>

<!-- Anglar App Script -->
<script src="js/app.js"></script>
<script src="js/config.js"></script>
<script src="js/directives.js"></script>
<script src="js/controllers.js"></script>
<script src="js/services.js"></script>
<script src="js/inspinia.js"></script>
</body>
</html>

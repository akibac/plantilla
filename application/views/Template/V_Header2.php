<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MSVision Center Pro</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?= base_url() ?>dist/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>dist/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>dist/Ionicons/css/ionicons.min.css">
        <?php
        if (isset($array_css)):
            foreach ($array_css as $css):
                ?>
                <link rel="stylesheet" href="<?= base_url() ?>dist/<?= $css ?>">
                <?php
            endforeach;
        endif;
        ?>
        <link rel="stylesheet" href="<?= base_url() ?>dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>dist/css/custom.css">
        <link rel="stylesheet" href="<?= base_url() ?>dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>dist/sweetalert/sweetalert2.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="<?= base_url() ?>dist/jquery/jquery.js"></script>
        <script src="<?= base_url() ?>dist/js/function.js"></script>
        <!--<script src="<?= base_url() ?>dist/js/session.js"></script>-->
        <style>
            .content-wrapper{
                margin-left: 0px !important;
                margin-right: 0px !important;
            }
        </style>
    </head>
    <body>
        <!-- Site wrapper -->
        <div class="row">
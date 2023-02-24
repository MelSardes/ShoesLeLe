`
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <title>@yield('title')</title>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('/assets_2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/assets_2/bower_components/font-awesome/css/font-awesome.min.css') }}" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('/assets_2/bower_components/Ionicons/css/ionicons.min.css') }}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/assets_2/dist/css/AdminLTE.min.css') }}" />
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('/assets_2/plugins/iCheck/all.css') }}" />
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/assets_2/bower_components/select2/dist/css/select2.min.css') }}" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('/assets_2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" />
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('/assets_2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
                folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('/assets_2/dist/css/skins/_all-skins.min.css') }}" />
    <!-- Pace style -->
    <link rel="stylesheet" href="{{ asset('/assets_2/plugins/pace/pace.min.css') }}" />
    <style>
        .example-modal .modal {
            position: relative;
            top: auto;
            bottom: auto;
            right: auto;
            left: auto;
            display: block;
            z-index: 1;
        }

        .example-modal .modal {
            background: transparent !important;
        }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini fixed">
    <div class="wrapper">
        <header class="main-header">
            @include('layouts/partials/_header')
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            @include('layouts/partials/_aside')
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper ">
            @yield('content')
        </div>
        <footer class="main-footer no-print">
            @include('layouts/partials/_footer')
        </footer>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script src="{{ asset('/assets_2/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('/assets_2/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('/assets_2/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('/assets_2/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- PACE -->
    <script src="{{ asset('/assets_2/bower_components/PACE/pace.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('/assets_2/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets_2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('/assets_2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src=" {{ asset('/assets_2/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/assets_2/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('/assets_2/dist/js/pages/dashboard.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/assets_2/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <!-- CK Editor -->
    <script src="{{ asset('/assets_2/bower_components/ckeditor/ckeditor.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('/assets_2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>


    <script>
        function choisirPays(id) {
            var paysCheckbox = $('#pays-' + id + '');
            var tabPaysEnfantsCheckbox = $('.pays-checkbox-' + id + '-ville');
            var tabPaysEnfantsHidden = $('.pays-hidden-' + id + '-ville');

            if (paysCheckbox.prop('checked')) {
                $('.pays-checkbox-' + id + '-ville').prop('checked', true);
                $('.pays-hidden-' + id + '-ville').each(function(i) {
                    var chaine = $(this).prop('id');
                    var idVille=chaine.substr(13);
                    $('#ville-hidden-' + idVille + '').val('');
                    $('#ville-hidden-' + idVille + '').val(idVille);
                });
            } else {
                $('.pays-checkbox-' + id + '-ville').prop('checked', false);
                $('.pays-hidden-' + id + '-ville').val('');
                $('.pays-hidden-' + id + '-ville').val('-1');
            }

        }

        function choisirVille(idPays,id) {
            var villeCheckbox = $('#ville-checkbox-' + id + '');
            var villeHidden = $('#ville-hidden-' + id + '');
            villeHidden.val('-1');
            if (villeCheckbox.prop('checked')) {
                villeHidden.val('' + id + '');
                var isAllChecked=true;
                $('.pays-checkbox-' + idPays + '-ville').each(function(i){
                    if(!$(this).prop('checked')){
                        isAllChecked=false;
                    }
                });
                if(isAllChecked){
                    $('#pays-' + idPays + '').prop('checked',true);
                }
            }else{
                if($('#pays-' + idPays + '').prop('checked')){
                    $('#pays-' + idPays + '').prop('checked',false);
                }
            }
        }

        function previewImage(input) {
            var preview_image = $(".preview-img");
            preview_image.addClass('hide');
            var file = $("input[type=file]").get(0).files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function() {
                    $("#preview-img").attr("src", reader.result);
                }
                reader.readAsDataURL(file);
                preview_image.removeClass('hide');
            }
        }


        $('#modifier_mdp').on('change', function(e) {
            var modifier_element = $(".password_modifier");
            var optionSelected = $(this).find("option:selected");
            var valueSelected = optionSelected.val();
            var textSelected = optionSelected.text();
            if (valueSelected === '1') {
                if (modifier_element.hasClass('hide')) {
                    modifier_element.removeClass('hide');
                }
            } else {
                if (!modifier_element.hasClass('hide')) {
                    modifier_element.addClass('hide');
                }
            }
        });



        /*$("#user_is_update_password").on("change", function() {
            if ($(this).is(":checked")) {
                console.log('ok');
            }
        });
        $('#user_is_update_password').on('click', function (e) {
            console.log('ok');
            var el=$('.update_password');
            if(el.hasClass('hide')){
                el.removeClass('hide')
            }
            if(!el.hasClass('hide')){
                el.addClass('hide')
            }
        });*/
    </script>
    <!-- page script -->
    <script type="text/javascript">
        let creditVersement = $('#credit_versement');
        let credtiCapayVersement = $('#credit_capay_versement');
        let montantVersement = $('#montant_versement');



        function MettreAJourModalDetailOffrirProduit(src, nom, prix, quantite, seuil, est_disponible, est_en_promotion,
            taux) {
            $('#detail-offrir-produit-photo').attr('src', '');
            $('#detail-offrir-produit-photo').attr('src', src);
            $('#detail-offrir-produit-nom').val('');
            $('#detail-offrir-produit-nom').val(nom);
            $('#detail-offrir-produit-prix').val('');
            $('#detail-offrir-produit-prix').val(prix);
            $('#detail-offrir-produit-quantite').val('');
            $('#detail-offrir-produit-quantite').val(quantite);
            $('#detail-offrir-produit-seuil-alerte').val('');
            $('#detail-offrir-produit-seuil-alerte').val(seuil);
            $('#detail-offrir-produit-est-disponible').val('');
            $('#detail-offrir-produit-est-disponible').val('Non');
            if (est_disponible == '1') {
                $('#detail-offrir-produit-est-disponible').val('');
                $('#detail-offrir-produit-est-disponible').val('Oui');
            }
            $('#detail-offrir-produit-est-en-promotion').val('');
            $('#detail-offrir-produit-est-en-promotion').val('Non');
            if (est_en_promotion == '1') {
                $('#detail-offrir-produit-est-en-promotion').val('');
                $('#detail-offrir-produit-est-en-promotion').val('Oui');
            }
            $('#detail-offrir-produit-taux-réduction-promotion').val('');
            $('#detail-offrir-produit-taux-réduction-promotion').val(taux);


        }

        function Supprimer(id) {
            $('.supprimer').val('');
            $('.supprimer').val(id);
        }
    </script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2();
            $('.table-advanced').DataTable();
            $('#table-advanced').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            });
        })
    </script>
    <script>
        /*if(window.location.href.search('/contents')>0){
                                            CKEDITOR.replace('description');
                                            CKEDITOR.replace('introduction');
                                       }*/
    </script>
    <script type="text/javascript">
        jQuery(function($) {
            var alert = $('.alert');
            setInterval(function() {
                if (alert.css('display') === 'block') {
                    setTimeout(function() {
                        alert.slideUp();
                    }, 2500);
                }
            }, 300);

        });
    </script>
    <script>
        /*$(function () {
                                            $('input').iCheck({
                                            checkboxClass: 'icheckbox_square-green',
                                            radioClass: 'iradio_square-green',
                                            increaseArea: '20%'
                                            });
                                        });*/
    </script>

</body>

</html>

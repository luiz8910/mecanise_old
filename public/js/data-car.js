"use strict";
// Class definition

var KTDatatableJsonRemoteDemo = function () {
    // Private functions

    // basic demo
    var demo = function () {

        var datatable = $('.kt-datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: '../../json/cars.json',
                pageSize: 10,
            },

            // layout definition
            layout: {
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: $('#generalSearch')
            },

            // columns definition
            columns: [
                {
                    field: 'RecordID',
                    title: '#',
                    sortable: false,
                    width: 20,
                    type: 'number',
                    selector: {class: 'kt-checkbox--solid'},
                    textAlign: 'center',
                }, {
                    field: 'model',
                    title: 'Modelo',

                }, {
                    field: 'brand',
                    title: 'Montadora',
                }, {
                    field: 'start_year',
                    title: 'Ano Início',
                }, {
                    field: 'end_year',
                    title: 'Ano Final',

                }, {
                    field: 'Actions',
                    title: 'Opções',
                    sortable: false,
                    width: 110,
                    autoHide: false,
                    overflow: 'visible',
                    template: function(row) {
                        return '\
						<div class="dropdown">\
							<a href="javascript:" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">\
                                <i class="la la-ellipsis-h"></i>\
                            </a>\
						  	<div class="dropdown-menu dropdown-menu-right">\
						    	<a class="dropdown-item" href="/editar_carro/'+row.id+'"><i class="la la-edit"></i> Editar</a>\
						    	<button class="dropdown-item" id="car_'+row.id+'"><i class="la la-trash"></i> Excluir</button>\
						  	</div>\
						</div>\
					';
                    },
                }],

        });

        $('#kt_form_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_form_type').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#kt_form_status,#kt_form_type').selectpicker();

    };

    return {
        // public functions
        init: function () {
            demo();
        }
    };
}();

jQuery(document).ready(function () {
    KTDatatableJsonRemoteDemo.init();
});

$(function(e) {
	'use strict'
	//______Basic Data Table
	$('#basic-datatable').DataTable({
		"language": {
			"lengthMenu": "Prikaži _MENU_ unosa po stranici",
			"zeroRecords": "Nije ništa pronađeno",
			"info": "Prikazujem stranicu _PAGE_ od _PAGES_",
			"infoEmpty": "Nema unosa",
			"infoFiltered": "(filtrirano od _MAX_ ukupno unosa)",
			"searchPlaceholder": 'Pretraga...',
			"sSearch": '',
			"paginate": {
				"next": "Sljedeći", 
				"previous": "Prethodni"
			}
		},
		order: [[0, 'desc']],
	});
	

	//______Responsive Data Table
	$('#responsive-datatable').DataTable({
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
		}
	});

	$('#modal-datatable').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );

	//______File-Export Data Table
	var table = $('#file-datatable').DataTable({
		buttons: [ 'copy', 'excel', 'pdf', 'colvis' ],
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
		}
	});
	table.buttons().container()
	.appendTo( '#file-datatable_wrapper .col-md-6:eq(0)' );	

	//______Delete Data Table
	var table = $('#delete-datatable').DataTable({
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
		}
	}); 
    $('#delete-datatable tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );

	//______Form Input Datatable 
	$('#form-input-datatable').DataTable({
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
		},
		responsive: true,
		columnDefs: [{
			orderable: false,
			targets: [1,2,3]
		}]
		
	});

	//______Select2 
	$('.select2').select2({
		minimumResultsForSearch: Infinity
	});
	

	$('.select2-no-search').select2({
		minimumResultsForSearch: Infinity,
		placeholder: 'All categories',
		 width: '100%'
	});

	$('#form-input-datatable').on('draw.dt', function() {
		$('.select2-no-search').select2({
			minimumResultsForSearch: Infinity,
			placeholder: 'Choose one'
		});
	});

});


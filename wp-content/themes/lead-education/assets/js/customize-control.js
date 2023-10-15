/**
 * Scripts within the customizer controls window.
 *
 * Contextually shows the color hue control and informs the preview
 * when users open or close the front page sections section.
 */

(function( $, api ) {
    wp.customize.bind('ready', function() {
    	// Show message on change.
        var lead_education_settings = ['lead_education_slider_num', 'lead_education_services_num', 'lead_education_projects_num', 'lead_education_testimonial_num', 'lead_education_blog_section_num', 'lead_education_reset_settings', 'lead_education_testimonial_num', 'lead_education_partner_num'];
        _.each( lead_education_settings, function( lead_education_setting ) {
            wp.customize( lead_education_setting, function( setting ) {
                var wildbusinessNotice = function( value ) {
                    var name = 'needs_refresh';
                    if ( value && lead_education_setting == 'lead_education_reset_settings' ) {
                        setting.notifications.add( 'needs_refresh', new wp.customize.Notification(
                            name,
                            {
                                type: 'warning',
                                message: localized_data.reset_msg,
                            }
                        ) );
                    } else if( value ){
                        setting.notifications.add( 'reset_name', new wp.customize.Notification(
                            name,
                            {
                                type: 'info',
                                message: localized_data.refresh_msg,
                            }
                        ) );
                    } else {
                        setting.notifications.remove( name );
                    }
                };

                setting.bind( wildbusinessNotice );
            });
        });

        /* === Radio Image Control === */
        api.controlConstructor['radio-color'] = api.Control.extend( {
            ready: function() {
                var control = this;

                $( 'input:radio', control.container ).change(
                    function() {
                        control.setting.set( $( this ).val() );
                    }
                );
            }
        } );


         // Sortable sections
        jQuery( 'ul.lead-education-sortable-list' ).sortable({
            handle: '.lead-education-drag-handle',
            axis: 'y',
            update: function( e, ui ){
                jQuery('input.lead-education-sortable-input').trigger( 'change' );
            }
        });

        // Sortable sections
        jQuery( "body" ).on( 'hover', '.lead-education-drag-handle', function() {
            jQuery( 'ul.lead-education-sortable-list' ).sortable({
                handle: '.lead-education-drag-handle',
                axis: 'y',
                update: function( e, ui ){
                    jQuery('input.lead-education-sortable-input').trigger( 'change' );
                }
            });
        });

        /* On changing the value. */
        jQuery( "body" ).on( 'change', 'input.lead-education-sortable-input', function() {
            /* Get the value, and convert to string. */
            this_checkboxes_values = jQuery( this ).parents( 'ul.lead-education-sortable-list' ).find( 'input.lead-education-sortable-input' ).map( function() {
                return this.value;
            }).get().join( ',' );

            /* Add the value to hidden input. */
            jQuery( this ).parents( 'ul.lead-education-sortable-list' ).find( 'input.lead-education-sortable-value' ).val( this_checkboxes_values ).trigger( 'change' );

        });

        // Deep linking for counter section to about section.
        jQuery('.lead-education-edit').click(function(e) {
            e.preventDefault();
            var jump_to = jQuery(this).attr( 'data-jump' );
            wp.customize.section( jump_to ).focus()
        });

    });
})( jQuery, wp.customize );

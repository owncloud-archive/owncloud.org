/*
 * Let's begin with validation functions
 */
 jQuery.extend(jQuery.fn, {
    /*
     * check if field value lenth more than 3 symbols ( for name and comment ) 
     */
    validate: function () {
        if (jQuery(this).val().length < 3) {
            if($(this).parents('p').find('.error').length === 0)
                $(this).parents('p').append('<div class="error">Please fill out this field</div>')
            $('#commentform').addClass('error');
            // jQuery(this).addClass('error');
            return false
        } else {
            $(this).parents('p').find('.error').remove()
            jQuery(this).removeClass('error');
            $('#commentform').removeClass('error');
            return true
        }
    },
    /*
     * check if email is correct
     * add to your CSS the styles of .error field, for example border-color:red;
     */
    validateEmail: function () {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/,
            emailToValidate = jQuery(this).val();
        if (!emailReg.test( emailToValidate ) || emailToValidate == "") {
            jQuery(this).addClass('error');return false
        } else {
            jQuery(this).removeClass('error');return true
        }
    },
});
 
$(document).ready(function() {
    

    $('#commentform').attr('novalidate', 'novalidate');
    /*
     * On comment form submit
     */
    $( '#commentform' ).submit(function(){
 
        // define some vars
        var button = $(this).find('#submit'), // submit button
            respond = $('#respond'), // comment form container
            commentlist = $(this).find('.commentlist'), // comment list container
            cancelreplylink = $(this).find('#cancel-comment-reply-link');
 
        // if user is logged in, do not validate author and email fields
        if( $( '#author' ).length > 0)
            $( '#author' ).validate();
 
        if( $( '#email' ).length > 0)
            $( '#email' ).validateEmail();
 
        // validate comment in any case
        $( '#comment' ).validate();


        // if comment form isn't in process, submit it
        if ( !button.hasClass( 'loadingform' ) && 
            !$(this).hasClass('error')
            // ($('#author').length === 0 || !$( '#author' ).hasClass( 'error' )) && 
            // ($('#email').length === 0 || !$( '#email' ).hasClass( 'error' )) && 
            // !$( '#comment' ).hasClass( 'error' ) 
            ){
 
            // ajax request
            $.ajax({
                type : 'POST',
                url : misha_ajax_comment_params.ajaxurl, // admin-ajax.php URL
                data: $(this).serialize() + '&action=ajaxcomments', // send form data + action parameter
                beforeSend: function(xhr){
                    // what to do just after the form has been submitted
                    button.addClass('loadingform').val('Submitting ...');
                    $('#commentform').addClass('loading');
                },
                error: function (request, status, error) {
                    if( status == 500 ){
                        alert( 'Error while adding comment' );
                    } else if( status == 'timeout' ){
                        alert('Error: Server doesn\'t respond.');
                    } else {
                        // process WordPress errors
                        var wpErrorHtml = request.responseText.split("<p>"),
                            wpErrorStr = wpErrorHtml[1].split("</p>");
 
                        alert( wpErrorStr[0] );
                    }
                },
                success: function ( addedCommentHTML ) {
 
                    // // if this post already has comments
                    // if( commentlist.length > 0 ){
 
                    //     // if in reply to another comment
                    //     if( respond.parent().hasClass( 'comment' ) ){
 
                    //         // if the other replies exist
                    //         if( respond.parent().children( '.children' ).length ){  
                    //             respond.parent().children( '.children' ).append( addedCommentHTML );
                    //         } else {
                    //             // if no replies, add <ol class="children">
                    //             addedCommentHTML = '<ol class="children">' + addedCommentHTML + '</ol>';
                    //             respond.parent().append( addedCommentHTML );
                    //         }
                    //         // close respond form
                    //         cancelreplylink.trigger("click");
                    //     } else {
                    //         // simple comment
                    //         commentlist.append( addedCommentHTML );
                    //     }
                    // }else{
                    //     // if no comments yet
                    //     addedCommentHTML = '<ol class="comment-list">' + addedCommentHTML + '</ol>';
                    //     respond.before( $(addedCommentHTML) );
                    // }
                    // // clear textarea field
                    // $('#comment').val('');

                    $('#commentform').fadeOut(300, function() {
                        $('body, html').animate({
                            scrollTop: $("#reply-title").offset().top - 100
                        }, 2000);

                        $('#reply-title').html('Thank you for your comment!');
                        $(this).find('*').remove();
                        $(this).append('<div>Your comment was submitted and is awaiting moderation.</div>');
                        $('#commentform').removeClass('loading');
                        $(this).show();
                    });
                },
                complete: function(){
                    // what to do after a comment has been added
                    button.removeClass( 'loadingform' ).val( 'Post Comment' );
                }
            });
        }
        return false;
    });
});
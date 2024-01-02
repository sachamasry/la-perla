<?php
 
function fitmas_comment_form($fitmas_comment_form_fields){
 
    $fitmas_comment_form_fields['author'] = '
        <div class="row comment-form-wrap">
        <div class="col-lg-6">
            <div class="form-group tp-comment-input">
                <input type="text" name="author" id="name-cmt" placeholder="'.esc_attr__('Name*', 'fitmas').'">
            </div>
        </div>
    ';
 
    $fitmas_comment_form_fields['email'] =  '
        <div class="col-lg-6">
            <div class="form-group tp-comment-input">
                <input type="email" name="email" id="email-cmt" placeholder="'.esc_attr__('Email*', 'fitmas').'">
            </div>
        </div>
    ';
 
    $fitmas_comment_form_fields['url'] = '
        <div class="col-lg-12">
            <div class="form-group tp-comment-input">
                <input type="text" name="url" id="website-cmt"  placeholder="'.esc_attr__('Website', 'fitmas').'">
            </div>
        </div>
        </div>
        
    ';
 
    return $fitmas_comment_form_fields;
}
 
add_filter('comment_form_default_fields', 'fitmas_comment_form');
 
function fitmas_comment_default_form($default_form){
 
    $default_form['comment_field'] = '
        <div class="row">
            <div class="col-sm-12">
                <div class="comment-message tp-comment-input">
                    <textarea name="comment" id="message-cmt" rows="5" required="required"  placeholder="'.esc_attr__('Your Comment*', 'fitmas').'"></textarea>
                </div>
            </div>
        </div>
    ';
 
    $default_form['submit_button'] = '
        <button type="submit" class="theme-btns btn"> <span>'.esc_html__('Post Comment', 'fitmas').'</span></button>
    ';
 
    $default_form['comment_notes_before'] = esc_html__('All fields marked with an asterisk (*) are required', 'fitmas' );
    $default_form['title_reply'] = esc_html__('Leave A Comment', 'fitmas');
    $default_form['title_reply_before'] = '<h4 class="comments-heading">';
    $default_form['title_reply_after'] = '</h4>';
 
    return $default_form;
}
 
add_filter('comment_form_defaults', 'fitmas_comment_default_form');
 
 
function fitmas_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
 
add_filter( 'comment_form_fields', 'fitmas_move_comment_field_to_bottom' );
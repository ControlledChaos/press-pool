<?php
/**
 * BP Nouveau Group's delete group template.
 *
 * @since 3.0.0
 * @version 3.1.0
 */
?>

<h2 class="bp-screen-title warn">
	<?php esc_html_e( 'Delete this group', 'press-pool' ); ?>
</h2>

<?php bp_nouveau_user_feedback( 'group-delete-warning' ); ?>

<div>
	<input type="checkbox" name="delete-group-understand" id="delete-group-understand" class="bb-input-switch bs-styled-checkbox" value="1" onclick="if(this.checked) { document.getElementById( 'delete-group-button' ).disabled = ''; } else { document.getElementById( 'delete-group-button' ).disabled = 'disabled'; }" />
	<label for="delete-group-understand" class="bp-label-text warn"><?php esc_html_e( 'I understand the consequences of deleting this group.', 'press-pool' ); ?></label>
</div>

<?php if ( bp_is_active('forums') && bbp_get_group_forum_ids( groups_get_current_group()->id ) ): ?>
	<div>
		<input type="checkbox" name="delete-group-forum-understand" id="delete-group-forum-understand" value="1"
			   class="bb-input-switch bs-styled-checkbox"/>
		<label for="delete-group-forum-understand"><?php esc_html_e( 'I also want to delete the discussion forum.', 'press-pool' ); ?></label>
	</div>
<?php endif; ?>

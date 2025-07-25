<form method="get" id="searchform" action="<?php echo esc_url( home_url('/') );?>">
    <input id="s" name="s" type="text"
         	value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr__("Enter Keyword",'lilac');?>" class="text_input" />
	<ul class="quick_search_results"></ul>
	<input name="submit" type="submit"  value="<?php esc_attr_e('Search','lilac');?>" />
</form>
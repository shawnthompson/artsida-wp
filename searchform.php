<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get" class="form-inline">
    <div class="form-group">
        <label for="s" class="screen-reader-text"><?php _e('[:en]Search for[:][:fr]Rechercher [:]'); ?>:</label>
        <input class="form-control" type="text" id="s" name="s" value="" placeholder="<?php _e('[:en]Search[:][:fr]Recherche[:]'); ?>" />
        <input type="hidden" name="cat" value="2">
        <button type="submit" value="Search" id="searchsubmit" class="btn btn-default"><?php _e('[:en]Search[:][:fr]Recherche[:]'); ?></button>
    </div>
</form>

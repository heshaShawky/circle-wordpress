<form role="search" action="<?php home_url('1'); ?>" method="get">
    <div class="input-group stylish-input-group">
        <input type="search" class="form-control"  placeholder="Search" value="<?php get_search_query(); ?>" name="search">
        <span class="input-group-addon">
            <button type="submit">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>

<aside class="pagination">
    <?php
    $big = 999999999; // need an unlikely integer

    if (is_page('blog')) :
        $the_query = get_all_posts('post');
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%/',
            'current' => max(1, $paged),
            'prev_next' => false,
            'total' => $the_query->max_num_pages
        ));
    else :
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%/',
            'current' => max(1, $paged),
            'prev_next' => false,
        ));
    endif;
    ?>
</aside>
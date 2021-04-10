<aside class="pagination">
    <?php
    if (is_page('blog')) {
        $the_query = get_all_posts('post');
    } elseif (is_post_type_archive('news')) {
        $the_query = get_all_posts('news');
    }
    if ($the_query->max_num_pages > 1) {
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%/',
            'current' => max(1, $paged),
            'total' => $the_query->max_num_pages,
            'prev_next' => false
        ));
    }; ?>
</aside>
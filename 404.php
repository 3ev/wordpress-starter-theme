<?php get_header(); ?>
    <h1>Error 404</h1>
    <h2 class="intro-text">Page not found</h2>

    <h3>This might be because:</h3>
    <ul>
        <li>You have typed the web address incorrectly, or</li>
        <li>the page you were looking for may have been moved, updated or deleted.</li>
    </ul>

    <h3>Please try the following options instead:</h3>
    <ul>
        <li>Use our site search to see if it's available elsewhere</li>
        <li>Visit our <a href="/">home page</a> and navigate our website</li>
    </ul>

    <form action="/">
        <input type="text" name="s" placeholder="Search our website" />
        <input type="submit" value="Search" />
    </form>
<?php get_footer(); ?>